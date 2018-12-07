<?php
namespace Home\Controller;
use Think\Controller;
class Haokoubei4Controller extends Controller {
    public function index(){
        $code = I('code');
        $res = $this->getCode($code);
        $res2 = $this->getUserInfo($res->access_token,$res->openid);
        $openid = $res2->openid;
        $page = I('page');
        $this->assign('openid',$openid);
        if($page>0){
          $data = M('votelist2')->select();
          $this->assign('data',$data);
          $this->assign('page',$page);
          $this->display('detail2');

        }else{
          $data = M('votelist2')->select();
          $this->assign('data',$data);
          $this->display('index2');
        }

    }

    // 投票
    public function vote(){

      // 获取投票选项
      $map['id'] = I('item');


      // 获取用户openid
      $condition['openid'] = I('openid');
      if(!$condition['openid']){
        jsonReturn(1,error,'系统出错');
      }
      // $data['ip'] = $condition['ip'];
      $openidlist = M('openidlist');
      $votelist = M('votelist2');
      // var_dump($condition);
      $res = $openidlist->where($condition)->find();
      // var_dump($res);
      if($res){
        jsonReturn(1,error,'每个微信id只能投票一次');
      }else{
        $res2 = $votelist->where($map)->setInc('count');
        // var_dump($res2);
        if($res2){
          $res3 = $openidlist->add($condition);
          if($res3){
            jsonReturn(0,success,'投票成功');
          }
        }
      }
    }


    // 重定向及获取重定向code
    public function getCode($code){
      $appid = 'wx7f1344c32363bbf3';
      $secret = '088f49ee830cdf71079b438133288d47';
      $code = $code;
      $url= "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
      $curl=curl_init();//初始化一个 cURL 对象
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);// 获取数据返回
      curl_setopt($curl, CURLOPT_TIMEOUT,500);//设置一个长整形数，作为最大延续多少秒
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,false);
      curl_setopt($curl, CURLOPT_URL,$url);
      curl_setopt($curl, CURLOPT_BINARYTRANSFER,true) ;// 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
      $res=curl_exec($curl);
      curl_close($curl);
      $result = json_decode($res);
      return $result;
    }
    // 获取用户信息
    public function getUserInfo($accesstoken,$openid){
      $appid = 'wx7f1344c32363bbf3';
      $secret = '088f49ee830cdf71079b438133288d47';
      $url= "https://api.weixin.qq.com/sns/userinfo?access_token=$accesstoken&openid=$openid&lang=zh_CN";
      $curl=curl_init();//初始化一个 cURL 对象
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);// 获取数据返回
      curl_setopt($curl, CURLOPT_TIMEOUT,500);//设置一个长整形数，作为最大延续多少秒
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,false);
      curl_setopt($curl, CURLOPT_URL,$url);
      curl_setopt($curl, CURLOPT_BINARYTRANSFER,true) ;// 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
      $res=curl_exec($curl);
      curl_close($curl);
      $result = json_decode($res);
      return $result;
    }

}
