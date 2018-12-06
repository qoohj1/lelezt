<?php
namespace Home\Controller;
use Think\Controller;
class Haokoubei3Controller extends Controller {
    public function index(){
      $appid='wx7f1344c32363bbf3';
      $redirect_uri = 'http://zt2.shegurz.com/haokoubei4?page=2';
      $scope = 'snsapi_userinfo';//弹出授权页面 snsapi_base静默授权
      $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=$scope&state=123#wechat_redirect";
      redirect($url);
    }
}
