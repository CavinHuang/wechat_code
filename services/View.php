<?php
/**
* \View
*/
/*use duncan3dc\Laravel\Blade;
class View
{
  const VIEW_BASE_PATH = '/app/views/';

  public $view;
  public $data;

  public function __construct($view)
  {
    $this->view = $view;
  }

  public static function make($viewName = null)
  {
    if ( ! $viewName ) {
      throw new InvalidArgumentException("视图名称不能为空！");
    } else {
      
      $viewFilePath = self::getFilePath($viewName);
      if ( is_file($viewFilePath) ) {
        return new View($viewFilePath);
      } else {
        throw new UnexpectedValueException("视图文件不存在！");
      }
    }
  }

  public function with($key, $value = null)
  {
    $this->data[$key] = $value;
    return $this;
  }

  private static function getFilePath($viewName)
  {
    $filePath = str_replace('.', '/', $viewName);
    return BASE_PATH.self::VIEW_BASE_PATH.$filePath.'.php';
  }

  public function __call($method, $parameters)
  {
    if (starts_with($method, 'with'))
    {
      return $this->with(snake_case(substr($method, 4)), $parameters[0]);
    }

    throw new BadMethodCallException("方法 [$method] 不存在！.");
  }
}*/
namespace Frame;

use Xiaoler\Blade\FileViewFinder;
use Xiaoler\Blade\Factory;
use Xiaoler\Blade\Compilers\BladeCompiler;
use Xiaoler\Blade\Engines\CompilerEngine;
use Xiaoler\Blade\Filesystem;
use Xiaoler\Blade\Engines\EngineResolver;

class View
{
  public $data = [];
  protected static $tplString = '';
  public $factory;
  public $view;
  public static function show($view, $data = [], $mergeData = [])
  {
    echo self::make($view, $data, $mergeData)->render();
  }
  public function toMake($view, $data = [], $mergeData = [])
  {
    
    $config = require BASE_DIR."/config/view.php";
    $view_path = [$config['view_path']];
    $cache_path = $config['cache_path'];
  
    $path = $view_path;         // your view file path, it's an array
    $cachePath = $cache_path;     // compiled file path
  
    $file = new Filesystem;
    $compiler = new BladeCompiler($file, $cachePath);
  
    // you can add a custom directive if you want
    $compiler->directive('datetime', function($timestamp) {
      return preg_replace('/(\(\d+\))/', '<?php echo date("Y-m-d H:i:s", $1); ?>', $timestamp);
    });
  
    $resolver = new EngineResolver;
    $resolver->register('blade', function () use ($compiler) {
      return new CompilerEngine($compiler);
    });
  
    // get an instance of factory
    $factory = new Factory($resolver, new FileViewFinder($file, $path));
  
    // if your view file extension is not php or blade.php, use this to add it
    $factory->addExtension('tpl', 'blade');
    // render the template file and echo it
    $this->factory = $factory;
    foreach ($data as $k => $v){
      $this->data[$k] = $v;
    }
    $this->view = $view;
    return $this;
  }
  
  public function render() {
    self::$tplString = $this->factory->make($this->view, $this->data)->render();
    echo self::$tplString;
  }
  
  public static function make ($view, $data = []) {
    return (new View())->toMake($view, $data);
  }
  
  public function with($key, $value = null)
  {
    $this->data[$key] = $value;
    
    return $this;
  }
  // function reload
  public static function json()
  {
    @header('Content-type: application/json; charset=utf-8');
    $args = func_get_args();
    if (count($args) == 1) {
      self::jsonCustom($args[0]);
    } elseif(count($args) == 2) {
      self::jsonException($args[0], $args[1]);
    }
  }
  private static function jsonCustom($array)
  {
    if (is_array($array))
      exit(json_encode($array));
    else
      throw new \Exception('The given arugument should be array.');
  }
  private static function jsonException($msg, $errno)
  {
    exit(json_encode([
      'errno' => $errno,
      'msg' => $msg
    ]));
  }
  
  public function __call($method, $parameters)
  {
    if (starts_with($method, 'with'))
    {
      return $this->with(snake_case(substr($method, 4)), $parameters[0]);
    }
    
    throw new \BadMethodCallException("Function [$method] does not exist!");
  }
  
}
