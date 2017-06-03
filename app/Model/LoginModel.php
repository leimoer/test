<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    /**
     * 定义表明
     *
     * @var string
     */
    protected $table = 'data_login';
    /**
     * 禁用时间
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * 定义可填充字段
     *
     * @var array
     */
    protected  $fillable = ['username','password','status']; //'token,' 用model插入数据库要用create

}
