<?php
namespace app\index\model;
use think\Model;
class Person extends Model
{
	protected $table = 'personTable';

    // 设置当前模型的数据库连接
    protected $connection = [
    	// 数据库类型
    	'type'     => 'mysql',
    	// 服务器地址
    	'hostname' => 'localhost',
    	// 数据库名
    	'database' => 'PersonAndUnitInfo',
    	// 数据库用户名
    	'username' => 'register',
   	 	// 数据库密码
    	'password' => 'D*&%&**()%123yh',
    	// 数据库连接端口
    	'hostport' => '',
    	// 数据库连接参数
   	 	'params'   => [],
    	// 数据库编码默认采用utf8
    	'charset'  => 'gbk',
    	// 数据库表前缀
    	'prefix'   => '',
	];
}