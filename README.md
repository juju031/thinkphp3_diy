基于thinkphp 3.2.3 核心版 二开

 # 去除控制器M方法
 + 控制器仅能实例化model、logic、service，通过他们来进行数据操作
 + 干掉了外部配置文件，保障配置文件的集中性
 + 干掉where条件敲错时，框架把整个where清空的bug

 # 增加入口处常量运行模式
 + 通过运行模式加载不同的配置目录，以达到无痛布置的目的 入口处添加 define('RUN_MODE','dev');
 + 配置文件修改为/ThinkPHP/Conf/运行模式目录下cache.php cookie.php database.php debug.php session.php
 + 取消加载原debug.php

 # Model中添加M方法
 + 使用：$this->M('表名')
 + 增加Mongodb和mysql并存，使用M方法加载 M($table_name, 'mongo'); 第二参数为空即是mysql
 + 支持模型自定义数据连接 $Dao = $this->M('tz_user','mysql',C('USER_DB_CONFIG'));

 # 增加composer文件，入口自动加载

 # 增加对session和cache的控制
 + 增加S方法对Redis密码连接的支持 配置添加 
 	'DATA_REDIS_HOST' =>'localhost',
 	'DATA_REDIS_PORT'=>'6379',
 	'DATA_REDIS_AUTH'=>'12345',
 	'DATA_REDIS_DB'=>3,
 + 添加对session的redis的支持 配置中添加 
 	'SESSION_REDIS_HOST'=>'localhost',
 	'SESSION_REDIS_PORT'=> '6379',
 	'SESSION_REDIS_AUTH'=>'12345',
 	'SESSION_REDIS_DB' => 15,
 + 增加Redis的入队操作 Q('test',111); 出队操作 echo Q('test');
 
 # 其它修改
 + dispatch_jump修改至每个模块view目录下的message.html
 + make_token()生成表单令牌 chk_token()验证表单令牌 
 + 增加验证码显示 $Verify = new \Think\Verify(); $Verify->entry(); $Verify->check('12345');
 + 添加原图片处理插件和文件上传插件