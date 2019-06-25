<?php

/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/22
 * Time: 12:30 PM
 */
namespace App\Tasks;

use EasySwoole\EasySwoole\Swoole\Task\QuickTaskInterface;
class QuickTasks implements QuickTaskInterface
{
    static function run(\swoole_server $server,int $taskId,int $fromWorkerId,$flags = null){
        echo "快速任务模板 1";
        echo "\n server  ".json_encode($server);
        echo "\n taskId - fromWorkerId ".$taskId." - ".$fromWorkerId;
    }
}