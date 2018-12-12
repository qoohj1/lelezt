<?php
namespace Home\Controller;
use Think\Controller;
class Haokoubei2Controller extends Controller {
    public function index(){
      $page = I('page');
      if($page>0){
        $data = M('votelist')->select();
        $this->assign('data',$data);
        $this->assign('page',$page);
        $this->display('detail2');

      }else{
        $data = M('votelist')->select();
        $this->assign('data',$data);
        $this->display('index2');
      }
    }
    // 投票
    public function vote(){
      // 获取投票选项
      $map['id'] = I('item');
      // 判断ip是否已投票
      // 获取客户端ip
      $condition['ip'] = $this->getIP();
      $data['ip'] = $condition['ip'];
      $server_ip = M('server_ip');
      $votelist = M('votelist');
      // var_dump($condition);
      $res = $server_ip->where($condition)->find();
      // var_dump($res);
      // jsonReturn(0,success,'投票成功');
      if($res){
        jsonReturn(1,error,'每个ip只能投票一次');
      }else{
        $res2 = $votelist->where($map)->setInc('count');
        // var_dump($res2);
        if($res2){
          $res3 = $server_ip->add($condition);
          if($res3){
            jsonReturn(0,success,'投票成功');
          }
        }
      }
    }

    function getIP(){
        static $realip;
        if (isset($_SERVER)){
            if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
                $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
                $realip = $_SERVER["HTTP_CLIENT_IP"];
            } else {
                $realip = $_SERVER["REMOTE_ADDR"];
            }
        } else {
            if (getenv("HTTP_X_FORWARDED_FOR")){
                $realip = getenv("HTTP_X_FORWARDED_FOR");
            } else if (getenv("HTTP_CLIENT_IP")) {
                $realip = getenv("HTTP_CLIENT_IP");
            } else {
                $realip = getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }

    // 抽奖
    public function lottery(){
      // $prize_arr = array(
      //     '0' => array('id'=>1,'prize'=>'20元话费','v'=>1),
      //     '1' => array('id'=>2,'prize'=>'20元话费','v'=>1),
      //     '2' => array('id'=>3,'prize'=>'10元话费','v'=>1),
      //     '3' => array('id'=>4,'prize'=>'10元话费','v'=>1),
      //     '4' => array('id'=>5,'prize'=>'10元话费','v'=>1),
      //     '5' => array('id'=>6,'prize'=>'10元话费','v'=>1),
      //     '6' => array('id'=>7,'prize'=>'谢谢参与','v'=>72)
      // );
      $map['id'] = I('item');
      $map1['type'] = 10;
      $map2['type'] = 5;
      $map3['type'] = 2;
      $count = M('nicecount')->where($map)->getField('count');
      // var_dump($count);
      $count1 = M('huafeicount')->where($map1)->getField('count');
      $count2 = M('huafeicount')->where($map2)->getField('count');
      $count3 = M('huafeicount')->where($map3)->getField('count');
      // var_dump($count1);
      // var_dump($count2);
      // var_dump($count3);
      $nice = $count/150;
      $ten = $count1/150;
      $five = $count2/150;
      $two = $count3/150;
      // var_dump($nice);
      // var_dump($ten);
      // var_dump($five);
      // var_dump($two);
      // $thx = 0.3-($nice+$ten+$five+$two);
      $thx = 20/150;
      // var_dump($thx);
      $prize_arr = array('精美礼品'=>$nice, '10元话费'=>$ten, '5元话费'=>$five, '2元话费'=>$two, '谢谢参与'=>$thx);
      // $prize_arr = array('精美礼品'=>0, '10元话费'=>0, '5元话费'=>0, '2元话费'=>0, '谢谢参与'=>0.01);
      $res = $this->random($prize_arr);
      // var_dump($res);
      jsonReturn(0,success,$res);

    }

    // 精美礼品中奖接口
    public function nice(){
      $data['vote'] = I('vote');
      $data['tel'] = I('tel');
      $map1['vote'] = $data['vote'];
      $count = M('nicecount')->where($map1)->getField('count');
      if($count>=0){
        $res = M('nicelist')->add($data);
        $map['id'] = $data['vote'];
        $res2 = M('nicecount')->where($map)->setDec('count');
        if($res&&$res2){
          jsonReturn(0,success,'提交成功');
        }else{
          jsonReturn(1,error,'提交失败');
        }
      }else{
          jsonReturn(1,error,'提交失败');
      }
    }
    // 10元话费中奖接口
    public function ten(){
      $data['item'] = I('item');
      $data['tel'] = I('tel');
      $map1['type'] = $data['item'];
      $count = M('huafeicount')->where($map1)->getField('count');
      if($count>=0){
        $res = M('huafeilist')->add($data);
        $map['type'] = $data['item'];
        $res2 = M('huafeicount')->where($map)->setDec('count');
        if($res&&$res2){
          jsonReturn(0,success,'提交成功');
        }else{
          jsonReturn(1,error,'提交失败');
        }
      }else{
        jsonReturn(1,error,'提交失败');
      }
    }
    // 5元话费中奖接口
    public function five(){
      $data['item'] = I('item');
      $data['tel'] = I('tel');
      $map1['type'] = $data['item'];
      $count = M('huafeicount')->where($map1)->getField('count');
      if($count>=0){
        $res = M('huafeilist')->add($data);
        $map['type'] = $data['item'];
        $res2 = M('huafeicount')->where($map)->setDec('count');
        if($res&&$res2){
          jsonReturn(0,success,'提交成功');
        }else{
          jsonReturn(1,error,'提交失败');
        }
      }else{
        jsonReturn(1,error,'提交失败');
      }

    }
    // 2元话费中奖接口
    public function two(){
      $data['item'] = I('item');
      $data['tel'] = I('tel');
      $map1['type'] = $data['item'];
      $count = M('huafeicount')->where($map1)->getField('count');
      if($count>=0){
        $res = M('huafeilist')->add($data);
        $map['type'] = $data['item'];
        $res2 = M('huafeicount')->where($map)->setDec('count');
        if($res&&$res2){
          jsonReturn(0,success,'提交成功');
        }else{
          jsonReturn(1,error,'提交失败');
        }
      }else{
        jsonReturn(1,error,'提交失败');
      }
    }
    // 提交中奖信息
    public function winnerlist(){
      $data['item'] = I('item');
      $data['tel'] = I('tel');
      $map1['item'] = 20;
      $map2['item'] = 10;
      // $count1 = M('winnerlist')->where($map1)->count();
      $count2 = M('winnerlist')->where($map2)->count();
      // if($count1==2){
      //   jsonReturn(1,error,'奖池已空');
      //   return;
      // }
      if($count2==26){
        jsonReturn(1,error,'奖池已空');
        return;
      }
      $res = M('winnerlist')->add($data);
      if($res){
        jsonReturn(0,success,'提交成功');
      }
    }

    public function get_rand($proArr) {
      $result = '';

      //概率数组的总概率精度
      $proSum = array_sum($proArr);

      //概率数组循环
      foreach ($proArr as $key => $proCur) {
          $randNum = mt_rand(1, $proSum);
          if ($randNum <= $proCur) {
              $result = $key;
              break;
          } else {
              $proSum -= $proCur;
          }
      }
      unset ($proArr);

      return $result;
    }

    public function random($ps) {
        $arr = array();
        $key = md5(serialize($ps));

        if(!isset($arr[$key])) {
            $max = array_sum($ps);
            foreach($ps as $k => $v) {
                $v = $v / $max * 10000;
                for($i=0; $i<$v; $i++) {
                    $arr[$key][] = $k;
                }
            }
        }

        return $arr[$key][mt_rand(0, count($arr[$key])-1)];
    }
}
