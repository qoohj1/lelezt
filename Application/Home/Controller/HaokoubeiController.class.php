<?php
namespace Home\Controller;
use Think\Controller;
class HaokoubeiController extends Controller {
    public function index(){
      $data = M('test_haokoubei')->select();
      // var_dump($data);
      $this->display();
    }
}
