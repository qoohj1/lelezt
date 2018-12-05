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
      $data['id'] = I('item');
      // 判断ip是否已投票
      // 获取客户端ip
      $condition['ip'] = $_SERVER['REMOTE_ADDR'];
      $data['ip'] = $condition['ip'];
      $server_ip = M('server_ip');
      $votelist = M('votelist');
      $res = $server_ip->where($condition)->find();
      var_dump($res);
      if($res){
        jsonReturn(0,error,'每个ip只能投票一次');
      }else{
        $server_ip->add($condition);
        $votelist->where($data)->setInc('count');
        jsonReturn(0,success,'投票成功');
      }
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
      $prize_arr = array('20元话费'=>0.02, '10元话费'=>0.26, '谢谢参与'=>0.72);
      $res = $this->random($prize_arr);
      // var_dump($res);
      jsonReturn(0,success,$res);

    }

    // 提交中奖信息
    public function winnerlist(){
      $data['item'] = I('item');
      $data['tel'] = I('tel');
      $map1['item'] = 20;
      $map2['item'] = 10;
      $count1 = M('winnerlist')->where($map1)->count();
      $count2 = M('winnerlist')->where($map2)->count();
      if($count1==2){
        jsonReturn(1,error,'奖池已空');
        return;
      }
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
