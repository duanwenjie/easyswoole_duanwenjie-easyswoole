<?php
/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/22
 * Time: 11:46 AM
 */

namespace App\HttpController;

use App\Tasks\QuickTasks;
use EasySwoole\EasySwoole\Swoole\Task\TaskManager;
use EasySwoole\Http\AbstractInterface\Controller;
class Tasks extends Controller
{
   public function index()
   {

       TaskManager::async(function (){
           echo "执行异步任务1 \r\n";
//           $this->response()->write("执行异步任务1 \r\n");
           return true;
       },function (){
           echo  "执行任务完毕1 \r\n";
//           $this->response()->write("执行任务完毕1 \r\n");
       });

   }

   public function task2()
   {
      $result = TaskManager::async(QuickTasks::class);

   }


}