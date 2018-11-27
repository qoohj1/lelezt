<?php
namespace Home\Controller;
use Think\Controller;
class HaokoubeiController extends Controller {
    public function index(){
      $this->display();
    }
    // 投票
    public function vote(){
      // 判断ip是否已投票
      // 获取客户端ip
      $condition['ip'] = $_SERVER['REMOTE_ADDR'];
      // 获取投票选项
      $condition['id'] = I('item');
      $server_ip = M('server_ip');
      $res = $server_ip->where($condition)->find();
      var_dump($res);
      if($res){
        jsonReturn(1,error,'每个ip只能投票一次');
      }else{
        // $server_ip->add
        // jsonReturn(0,success,)
      }
    }
}
