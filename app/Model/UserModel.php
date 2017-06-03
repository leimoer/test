<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    /**
     * 定义表明
     *
     * @var string
     */
    protected $table = 'data_user';
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
    protected  $fillable = ['username','password','age','pic','phone']; //'token,' 用model插入数据库要用create

}
