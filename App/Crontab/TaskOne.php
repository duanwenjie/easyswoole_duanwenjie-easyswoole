<?php
/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/22
 * Time: 2:36 PM
 */

namespace App\Crontab;

use EasySwoole\EasySwoole\Crontab\AbstractCronTask;
class TaskOne extends AbstractCronTask
{
     public static function getRule():string {
         return '*/1 * * * *';
     }
     public static function getTaskName():string {
         return "TaskOne";
     }

     static function run(\swoole_server $server, int $taskId, int $fromWorkerId, $flags = null)
     {
         // TODO: Implement run() method.
         var_dump("我是定时任务，每分钟执行一次==》 \r\n".$taskId." - ".$fromWorkerId);
     }

}