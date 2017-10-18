<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17 0017
 * Time: 下午 8:51
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class Site extends Model {
  protected $table = 'site';
  public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable = [
    'title',
    'keywords',
    'description',
    'email',
    'tj',
    'footer_note',
    'index_content'
  ];
}
