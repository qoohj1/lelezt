<?php
namespace Home\Controller;
use Think\Controller;
class Haokoubei4Controller extends Controller {
    public function index(){
        $code = I('code');
        $res = $this->getCode($code);
        $res = json_decode($res);
        $res2 = $this->getUserInfo($res['access_token'],$res['openid']);
        var_dump($res2);
    }
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
