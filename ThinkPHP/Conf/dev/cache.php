<?php
defined('THINK_PATH') or exit();
return  array(
	/* 数据缓存设置 */
    'DATA_CACHE_TIME'       =>  0,      // 数据缓存有效期 0表示永久缓存
    'DATA_CACHE_COMPRESS'   =>  false,   // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK'      =>  false,   // 数据缓存是否校验缓存
    'DATA_CACHE_PREFIX'     =>  '',     // 缓存前缀
    'DATA_CACHE_TYPE'       =>  'Redis',  // 数据缓存类型,支持:File|Redis|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'DATA_CACHE_PATH'       =>  TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
    'DATA_CACHE_KEY'        =>  '', // 缓存文件KEY (仅对File方式缓存有效)    
    'DATA_CACHE_SUBDIR'     =>  false,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
    'DATA_PATH_LEVEL'       =>  1,        // 子目录缓存级别
    'DATA_REDIS_HOST'       =>  'localhost', //分布式Redis,默认第一个为主服务器
    'DATA_REDIS_PORT'       =>  '6379',           //端口,如果相同只填一个,用英文逗号分隔
    'DATA_REDIS_AUTH'       =>  '12345',
    'DATA_REDIS_DB'         =>  1,
);