<?php
namespace Home\Controller;
use Think\Controller;
class QuizController extends Controller {
    public function index(){
        $this->display();
    }
    public function staticstic(){
      M('staticstic')->where('id = 1')->setInc('first',I('first'));
      M('staticstic')->where('id = 1')->setInc('second',I('second'));
      M('staticstic')->where('id = 1')->setInc('third',I('third'));
      M('staticstic')->where('id = 1')->setInc('fourth',I('fourth'));
      M('staticstic')->where('id = 1')->setInc('fifth',I('fifth'));
      M('staticstic')->where('id = 1')->setInc('sixth',I('sixth'));
      M('staticstic')->where('id = 1')->setInc('seventh',I('seventh'));
      M('staticstic')->where('id = 1')->setInc('eighth',I('eighth'));
      M('staticstic')->where('id = 1')->setInc('ninth',I('ninth'));
      M('staticstic')->where('id = 1')->setInc('tenth',I('tenth'));
      M('staticstic')->where('id = 1')->setInc('count',1);
    }
}
