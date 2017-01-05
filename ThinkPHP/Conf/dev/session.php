<?php
defined('THINK_PATH') or exit();
return  array(
	/* SESSION设置 */
    'SESSION_AUTO_START'    =>  true,    		// 是否自动开启Session
    'SESSION_OPTIONS'       =>  array(), 		// session 配置数组 支持type name id path expire domain 等参数
    'SESSION_TYPE'          =>  'Redis', 		// session hander类型 默认无需设置 除非扩展了session hander驱动
    'SESSION_PREFIX'        =>  '', 			// session 前缀
    'SESSION_REDIS_HOST'	=>  'localhost', 	//分布式Redis,默认第一个为主服务器
	'SESSION_REDIS_PORT'	=>  '6379',       	//端口,如果相同只填一个,用英文逗号分隔
	'SESSION_REDIS_AUTH'    =>  '12345',    	//Redis auth认证(密钥中不能有逗号),如果相同只填一个,用英文逗号分隔
	'SESSION_REDIS_DB'		=>  15,				//指定连接DB数
    //'VAR_SESSION_ID'      =>  'session_id',     //sessionID的提交变量
);