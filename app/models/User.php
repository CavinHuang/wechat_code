<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17 0017
 * Time: 下午 8:51
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class User extends Model {
  protected $table = 'user';
  public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable = [
    'username',
    'password',
    'user_img',
    'status',
    'createtime'
  ];
}
