<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2019-01-01
 * Time: 20:06
 */

return [
    'SERVER_NAME' => "EasySwoole",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 9501,
        'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,
        'SETTING' => [
            'worker_num' => 8,
            'task_worker_num' => 8,
            'reload_async' => true,
            'task_enable_coroutine' => true,
            'max_wait_time'=>3
        ],
    ],
    'TEMP_DIR' => null,
    'LOG_DIR' => null,


//    /* == 数据库配置 == */
//    'mysql' => [
//
//        // 数据库类型
//        'type'            => 'mysql',
//        // 服务器地址
//        'host'        => 'dev.yujisopmsdbm.kokoerp.com',
//        // 数据库名
//        'database'        => 'yujisopms',
//        // 用户名
//        'username'        => 'yujisopms',
//
//        'password'        => 'fB2W8PlXOwFDq5Qc', // 开发： fB2W8PlXOwFDq5Qc  测试： cECH7qJyiSn2s9rK
//        // 端口
//        'hostport'        => '',
//        // 连接dsn
//        'dsn'             => '',
//        // 数据库连接参数
//        'params'          => [],
//        // 数据库编码默认采用utf8
//        'charset'         => 'utf8',
//        // 数据库表前缀
//        'prefix'          => '',
//        // 数据库调试模式
//        'debug'           => false,
//        // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
//        'deploy'          => 0,
//        // 数据库读写是否分离 主从式有效
//        'rw_separate'     => false,
//        // 读写分离后 主服务器数量
//        'master_num'      => 1,
//        // 指定从服务器序号
//        'slave_no'        => '',
//        // 自动读取主库数据
//        'read_master'     => false,
//        // 是否严格检查字段是否存在
//        'fields_strict'   => true,
//        // 数据集返回类型
//        'resultset_type'  => 'array',
//        // 自动写入时间戳字段
//        'auto_timestamp'  => false,
//        // 时间字段取出后的默认时间格式
//        'datetime_format' => 'Y-m-d H:i:s',
//        // 是否需要进行SQL性能分析
//        'sql_explain'     => false,
//    ],
    /*################ MYSQL CONFIG ##################*/
    'MYSQL' => [
        //数据库配置
        'host'                 => 'dev.yujisopmsdbm.kokoerp.com',//数据库连接ip
        'user'                 => 'yujisopms',//数据库用户名
        'password'             => 'fB2W8PlXOwFDq5Qc',//数据库密码
        'database'             => 'yujisopms',//数据库
        'port'                 => '3306',//端口
        'timeout'              => '30',//超时时间
        'connect_timeout'      => '5',//连接超时时间
        'charset'              => 'utf8',//字符编码
        'strict_type'          => false, //开启严格模式，返回的字段将自动转为数字类型
        'fetch_mode'           => false,//开启fetch模式, 可与pdo一样使用fetch/fetchAll逐行或获取全部结果集(4.0版本以上)
        'alias'                => '',//子查询别名
        'isSubQuery'           => false,//是否为子查询
        'max_reconnect_times ' => '3',//最大重连次数
    ],
];
