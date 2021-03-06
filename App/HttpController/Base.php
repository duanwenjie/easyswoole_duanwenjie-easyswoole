<?php
/**
 * Description
 * User: duanwenjie
 * Date: 2019/6/25
 * Time: 11:23 AM
 */

namespace App\HttpController;
use EasySwoole\Http\AbstractInterface\Controller;
class Base extends Controller
{
    public $param;
    function index()
    {
        // TODO: Implement index() method.
        $this->actionNotFound('index');
        $this->param = $this->request()->getRequestParam();
       $this->returnJsonData($this->request()->getRequestParam());
    }


    protected function onRequest(?string $action): ?bool
    {

        return parent::onRequest($action); // TODO: Change the autogenerated stub
    }

    protected function onException(\Throwable $throwable): void
    {
        parent::onException($throwable); // TODO: Change the autogenerated stub
    }


    /* == 自定义的工具类 == */
    public function returnJson($code = '1', $msg = '', $data = [])
    {

        $this->writeJson($code,$data,$msg);
    }

    public function returnJsonData($result = [])
    {
        if (!$this->response()->isEndResponse()) {
            $data = Array("data" => $result);
            $this->response()->write(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            $this->response()->withHeader('Content-type', 'application/json;charset=utf-8');
            return true;
        } else {
            return false;
        }
    }

    public function getParam()
    {
        return parent::getParam(); // TODO: Change the autogenerated stub
    }
}