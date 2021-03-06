<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=750,user-scalable=0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
  <!--禁止自动识别电话号码-->
  <meta name="format-detection" content="telephone=no">
  <!--禁止自动识别邮箱-->
  <meta content="email=no" name="format-detection">
  <!--iphone中safari私有meta标签,允许全屏模式浏览,隐藏浏览器导航栏-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!--iphone中safari顶端的状态条的样式black(黑色)-->
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- uc强制竖屏 -->
  <meta name="screen-orientation" content="portrait">
  <!-- UC强制全屏 -->
  <meta name="full-screen" content="yes">
  <!-- UC应用模式 -->
  <meta name="browsermode" content="application">
  <!-- QQ强制竖屏 -->
  <meta name="x5-orientation" content="portrait">
  <!-- QQ强制全屏 -->
  <meta name="x5-fullscreen" content="true">
  <!-- QQ应用模式 -->
  <meta name="x5-page-mode" content="app">
  <title>阿弥陀佛，我浪与你有缘</title>
  <!-- <script src="http://guangdong.sinaimg.cn/subject/2017/lib/js/fixViewport750.js"></script> -->
  <!-- <link rel="stylesheet" href="http://guangdong.sinaimg.cn/subject/2016/0629/animate.css"> -->
</head>
<link rel="stylesheet" href="/Public/css/haokoubei/animation.css">
<style>
* {
  word-wrap: break-word
}

body,html,p,select {
  margin: 0;
  padding: 0
}

body,html {
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none
}

img,select {
  border: 0
}

img {
  vertical-align: top
}

a {
  text-decoration: none
}

a,div,img {
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent
}

a,img {
  -webkit-touch-callout: none
}

.container,body,html {
  width: 100%;
  height: 100%;
  position: relative;
  max-height: 1310px
}

.page,.pop {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  overflow: hidden;
  display: none
}

.page.active,.pop.active,.p4.active {
  display: block
}

.page.active .p-content,.pop.active .p-content {
	-webkit-animation: fadeIn .5s linear 0s both;
	animation: fadeIn .5s linear 0s both
}

.page.fadeOut,.pop.fadeOut {
	-webkit-animation: fadeOut .5s linear 0s both;
	animation: fadeOut .5s linear 0s both
}

.loading-icon,.page .p-content{
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
  /* z-index: 99 */
}

.p1 {
  z-index: 4
}

.p1 .p-content {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/p1.jpg) no-repeat;
}
.p1 .p-content .plane{
  animation: plane 11s linear 0s forwards;
  -webkit-animation: plane 11s linear 0s forwards;
  width: 151px;
  height: 100%;
  position: absolute;
  left: 66px;
  top:86px;
  background: url(/Public/img/haokoubei/plane.png) no-repeat;
}
.p1 .p-content .balloon{
  animation: balloon 11s linear 0s forwards;
  -webkit-animation: balloon 11s linear 0s forwards;
  width: 69px;
  height: 100%;
  position: absolute;
  left: 246px;
  top:251px;
  background: url(/Public/img/haokoubei/balloon.png) no-repeat;
}
.p1 .p-content .sun{
  animation: sun 11s linear 0s forwards;
  -webkit-animation: sun 11s linear 0s forwards;
  width: 87px;
  height: 100%;
  position: absolute;
  left: 633px;
  top:209px;
  background: url(/Public/img/haokoubei/sun.png) no-repeat;
}
.p1 .p-content .cloud1{
  animation: cloud1 11s linear 0s forwards;
  -webkit-animation: cloud1 11s linear 0s forwards;
  width: 83px;
  height: 100%;
  position: absolute;
  left: 276px;
  top:359px;
  background: url(/Public/img/haokoubei/cloud1.png) no-repeat;
}
.p1 .p-content .cloud2{
  width: 167px;
  height: 100%;
  position: absolute;
  left: 573px;
  top:350px;
  background: url(/Public/img/haokoubei/cloud2.png) no-repeat;
}
.p1 .p-content .car{
  animation: car 11s linear 0s forwards;
  -webkit-animation: car 11s linear 0s forwards;
  width: 92px;
  height: 100%;
  position: absolute;
  left: 237px;
  top:997px;
  background: url(/Public/img/haokoubei/car.png) no-repeat;
}
.p1 .p-content .ship1{
  animation: ship1 11s linear 0s forwards;
  -webkit-animation: ship1 11s linear 0s forwards;
  width: 92px;
  height: 100%;
  position: absolute;
  left: 204px;
  top:1039px;
  background: url(/Public/img/haokoubei/ship1.png) no-repeat;
}
.p1 .p-content .ship2{
  animation: ship2 11s linear 0s forwards;
  -webkit-animation: ship2 11s linear 0s forwards;
  width: 65px;
  height: 100%;
  position: absolute;
  left: 477px;
  top:1111px;
  background: url(/Public/img/haokoubei/ship2.png) no-repeat;
}
.p1 .p-content .ship3{
  animation: ship3 11s linear 0s forwards;
  -webkit-animation: ship3 11s linear 0s forwards;
  width: 56px;
  height: 100%;
  position: absolute;
  left: 678px;
  top:994px;
  background: url(/Public/img/haokoubei/ship3.png) no-repeat;
}
.p1 .p-content .doctor1{
  width: 176px;
  height: 100%;
  position: absolute;
  left: 502px;
  top:285px;
  background: url(/Public/img/haokoubei/doctor1.png) no-repeat;
}
.p1 .p-content .dialog1{
  width: 294px;
  height: 100%;
  position: absolute;
  left: 255px;
  top:252px;
  background: url(/Public/img/haokoubei/dialog1.png) no-repeat;
}
.p1 .p-content .text1{
  width: 195px;
  height: 100%;
  position: absolute;
  left: 298px;
  top:280px;
  background: url(/Public/img/haokoubei/text1.png) no-repeat;
}
.p1 .p-content .doctor2{
  width: 211px;
  height: 100%;
  position: absolute;
  left: 456px;
  top:285px;
  background: url(/Public/img/haokoubei/doctor2.png) no-repeat;
}
.p1 .p-content .dialog2{
  width: 229px;
  height: 100%;
  position: absolute;
  left: 325px;
  top:224px;
  background: url(/Public/img/haokoubei/dialog2.png) no-repeat;
}
.p1 .p-content .text2{
  width: 167px;
  height: 100%;
  position: absolute;
  left: 350px;
  top:260px;
  background: url(/Public/img/haokoubei/text2.png) no-repeat;
}
.p1 .p-content .pop1-1{
  width: 254px;
  height: 99px;
  position: absolute;
  left: 290px;
  top:370px;
  background: url(/Public/img/haokoubei/pop1-1.png) no-repeat;
}
.p1 .p-content .pop1-2{
  width: 282px;
  height: 125px;
  position: absolute;
  left: 71px;
  top:677px;
  background: url(/Public/img/haokoubei/pop1-2.png) no-repeat;
}
.p1 .p-content .pop1-3{
  width: 169px;
  height: 146px;
  position: absolute;
  left: 452px;
  top:765px;
  z-index: 10;
  background: url(/Public/img/haokoubei/pop1-3.png) no-repeat;
}
.p1 .p-content .doctor3{
  width: 149px;
  height: 100%;
  position: absolute;
  left: 521px;
  top:283px;
  background: url(/Public/img/haokoubei/doctor3.png) no-repeat;
}
.p1 .p-content .step2{
  display: none;
}
.p1 .p-content .step3{
  display: none;
}

.p2 .p-content {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/info.jpg) no-repeat;
}
.p3 .p-content {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/service.jpg) no-repeat;
}
.p2 .p-content .return-btn,.p3 .p-content .return-btn{
  width: 238px;
  height: 100%;
  position: absolute;
  left: 22px;
  top:1072px;
  background: url(/Public/img/haokoubei/return-btn.png) no-repeat;
}
.p2 .p-content .service-btn{
  width: 238px;
  height: 100%;
  position: absolute;
  left: 263px;
  top:1072px;
  background: url(/Public/img/haokoubei/info-btn.png) no-repeat;
}
.p3 .p-content .info-btn{
  width: 238px;
  height: 100%;
  position: absolute;
  left: 263px;
  top:1072px;
  background: url(/Public/img/haokoubei/service-btn.png) no-repeat;
}
.p2 .p-content .vote-btn,.p3 .p-content .vote-btn{
  width: 238px;
  height: 100%;
  position: absolute;
  left: 505px;
  top:1072px;
  background: url(/Public/img/haokoubei/vote-btn.png) no-repeat;
}
.p4{
  display: none;
  z-index: 9;
  width: 100%;
  /* height: 4017px; */
  position: absolute;
  top: 0;
  /* overflow: hidden; */

}
.p4 .p-content {
	width: 100%;
  height: 4017px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/p4.jpg) no-repeat;
}
.p4 .item{
  display: inline-block;
  width: 340px;
  height: 49px;
  position: absolute;
}
.p4 .item1{
  top: 1308px;
  left: 38px;
}
.p4 .item2{
  top: 1308px;
  left: 396px;
}
.p4 .item3{
  top: 1491px;
  left: 38px;
}
.p4 .item4{
  top: 1491px;
  left: 396px;
}
.p4 .item5{
  top: 1674px;
  left: 38px;
}
.p4 .item6{
  top: 1674px;
  left: 396px;
}
.p4 .item7{
  top: 1857px;
  left: 38px;
}
.p4 .item8{
  top: 1857px;
  left: 396px;
}
.p4 .item9{
  top: 2040px;
  left: 38px;
}
.p4 .item10{
  top: 2040px;
  left: 396px;
}
.p4 .item11{
  top: 2223px;
  left: 38px;
}
.p4 .item12{
  top: 2223px;
  left: 396px;
}
.p4 .item13{
  top: 2406px;
  left: 38px;
}
.p4 .item14{
  top: 2406px;
  left: 396px;
}
.p4 .item15{
  top: 2589px;
  left: 38px;
}
.p4 .item16{
  top: 2589px;
  left: 396px;
}
.p4 .item17{
  top: 2775px;
  left: 38px;
}
.p4 .item18{
  top: 2775px;
  left: 396px;
}
.p4 .item19{
  top: 2958px;
  left: 38px;
}
.p4 .item20{
  top: 2958px;
  left: 396px;
}
.p4 .item21{
  top: 3141px;
  left: 38px;
}
.p4 .item22{
  top: 3141px;
  left: 396px;
}
.p4 .item23{
  top: 3324px;
  left: 38px;
}
.p4 .item24{
  top: 3324px;
  left: 396px;
}
.p4 .item25{
  top: 3507px;
  left: 38px;
}
.p4 .item26{
  top: 3507px;
  left: 396px;
}
.p4 .item27{
  top: 3690px;
  left: 38px;
}
.p4 .item28{
  top: 3690px;
  left: 396px;
}
.p4 .item29{
  top: 3873px;
  left: 38px;
}
.p4 .item30{
  top: 3873px;
  left: 396px;
}
.p4 .detail-btn{
  display: inline-block;
  width: 154px;
  height: 49px;
  margin-right: 5px;
  background: url(/Public/img/haokoubei/detail-btn.png) no-repeat;
}
.p4 .vote-btn2{
  display: inline-block;
  width: 152px;
  height: 49px;
  background: url(/Public/img/haokoubei/vote-btn2.png) no-repeat;
}
.vote{
  display: none;
  z-index: 10;
  width: 100%;
  position: absolute;
  top: 0;
}
.vote.active{
  display: block
}
.vote1 .p-content {
	width: 100%;
  height: 2557px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote1_1.jpg) no-repeat;
}
.vote2 .p-content {
	width: 100%;
  height: 2469px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote2_1.jpg) no-repeat;
}
.vote3 .p-content {
	width: 100%;
  height: 2619px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote3_1.jpg) no-repeat;
}
.vote4 .p-content {
	width: 100%;
  height: 2515px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote4_1.jpg) no-repeat;
}
.vote5 .p-content {
	width: 100%;
  height: 2356px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote5_1.jpg) no-repeat;
}
.vote6 .p-content {
	width: 100%;
  height: 2285px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote6_1.jpg) no-repeat;
}
.vote7 .p-content {
	width: 100%;
  height: 2590px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote7_1.jpg) no-repeat;
}
.vote8 .p-content {
	width: 100%;
  height: 2348px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote8_1.jpg) no-repeat;
}
.vote9 .p-content {
	width: 100%;
  height: 2348px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote9_1.jpg) no-repeat;
}
.vote10 .p-content {
	width: 100%;
  height: 2235px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote10_1.jpg) no-repeat;
}
.vote11 .p-content {
	width: 100%;
  height: 2385px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote11_1.jpg) no-repeat;
}
.vote12 .p-content {
	width: 100%;
  height: 2385px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote12_1.jpg) no-repeat;
}
.vote13 .p-content {
	width: 100%;
  height: 2385px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote13_1.jpg) no-repeat;
}
.vote14 .p-content {
	width: 100%;
  height: 2254px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote14_1.jpg) no-repeat;
}
.vote15 .p-content {
	width: 100%;
  height: 2254px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote15_1.jpg) no-repeat;
}
.vote16 .p-content {
	width: 100%;
  height: 2557px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote16_1.jpg) no-repeat;
}
.vote17 .p-content {
	width: 100%;
  height: 2338px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote17_1.jpg) no-repeat;
}
.vote18 .p-content {
	width: 100%;
  height: 2282px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote18_1.jpg) no-repeat;
}
.vote19 .p-content {
	width: 100%;
  height: 2546px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote19_1.jpg) no-repeat;
}
.vote20 .p-content {
	width: 100%;
  height: 2215px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote20_1.jpg) no-repeat;
}
.vote21 .p-content {
	width: 100%;
  height: 2323px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote21_1.jpg) no-repeat;
}
.vote22 .p-content {
	width: 100%;
  height: 2382px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote22_1.jpg) no-repeat;
}
.vote23 .p-content {
	width: 100%;
  height: 2335px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote23_1.jpg) no-repeat;
}
.vote24 .p-content {
	width: 100%;
  height: 2403px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote24_1.jpg) no-repeat;
}
.vote25 .p-content {
	width: 100%;
  height: 2403px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote25_1.jpg) no-repeat;
}
.vote26 .p-content {
	width: 100%;
  height: 2214px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote26_1.jpg) no-repeat;
}
.vote27 .p-content {
	width: 100%;
  height: 2066px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote27_1.jpg) no-repeat;
}
.vote28 .p-content {
	width: 100%;
  height: 2183px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote28_1.jpg) no-repeat;
}
.vote29 .p-content {
	width: 100%;
  height: 2429px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote29_1.jpg) no-repeat;
}
.vote30 .p-content {
	width: 100%;
  height: 2191px;
	position: absolute;
	left: 0;
	top: 0;
	background: url(/Public/img/haokoubei/vote30_1.jpg) no-repeat;
}
.vote .p-content .vote-btn3{
  width: 152px;
  height: 49px;
  position: absolute;
  left: 514px;
  top:357px;
  background: url(/Public/img/haokoubei/vote-btn3.png) no-repeat;
}
.vote .p-content .return-btn2{
  width: 291px;
  height: 77px;
  position: absolute;
  left: 234px;
  /* top:2441px; */
  background: url(/Public/img/haokoubei/return-btn2.png) no-repeat;
}
.vote1 .return-btn2{
  top: 2441px;
}
.vote2 .return-btn2{
  top: 2354px;
}
.vote3 .return-btn2{
  top: 2496px;
}
.vote4 .return-btn2{
  top: 2392px;
}
.vote5 .return-btn2{
  top: 2233px;
}
.vote6 .return-btn2{
  top: 2165px;
}
.vote7 .return-btn2{
  top: 2485px;
}
.vote8 .return-btn2{
  top: 2228px;
}
.vote9 .return-btn2{
  top: 2252px;
}
.vote10 .return-btn2{
  top: 2127px;
}
.vote11 .return-btn2{
  top: 2271px;
}
.vote12 .return-btn2{
  top: 2253px;
}
.vote13 .return-btn2{
  top: 2259px;
}
.vote14 .return-btn2{
  top: 2135px;
}
.vote15 .return-btn2{
  top: 2140px;
}
.vote16 .return-btn2{
  top: 2443px;
}
.vote17 .return-btn2{
  top: 2224px;
}
.vote18 .return-btn2{
  top: 2174px;
}
.vote19 .return-btn2{
  top: 2444px;
}
.vote20 .return-btn2{
  top: 2101px;
}
.vote21 .return-btn2{
  top: 2196px;
}
.vote22 .return-btn2{
  top: 2280px;
}
.vote23 .return-btn2{
  top: 2221px;
}
.vote24 .return-btn2{
  top: 2307px;
}
.vote25 .return-btn2{
  top: 2283px;
}
.vote26 .return-btn2{
  top: 2094px;
}
.vote27 .return-btn2{
  top: 1958px;
}
.vote28 .return-btn2{
  top: 2081px;
}
.vote29 .return-btn2{
  top: 2297px;
}
.vote30 .return-btn2{
  top: 2076px;
}
/* .page-video video {
  position: absolute;
  left: 0;
  top: 50%;
  height: 1490px;
  margin-top: -745px
}

@media (max-height:1180px) {
  .page-video video {
    object-fit: fill;
    height: 100%;
    margin-top: 0;
    top: 0
  }
} */
</style>
<body>
  <div class="container">
      <div class="loading page active">
          <div class="loading-icon">
              <div class="loading-icon-img"></div>
          </div>
          <div class="loading-text">loading...</div>
      </div>
      <div class="page page-video page-video-1 active">
       <video id="video-1" width="750" height="1333" x5-video-player-type="h5" x-webkit-airplay="allow" x5-video-player-fullscreen="true" webkit-playsinline="" playsinline="" x5-video-orientation="portraint" preload="preload" autoplay>
        <source src="/Public/video/h5.mp4" type="video/mp4"></source>
       </video>
      </div>
      <div class="p1 page">
          <div class="p-content">
              <div class="plane"></div>
              <div class="balloon"></div>
              <div class="sun"></div>
              <div class="cloud1"></div>
              <div class="car"></div>
              <div class="ship1"></div>
              <div class="ship2"></div>
              <div class="ship3"></div>
              <div class="doctor1 step1"></div>
              <div class="dialog1 step1"></div>
              <div class="text1 step1"></div>
              <div class="doctor2 step2"></div>
              <div class="dialog2 step2"></div>
              <div class="text2 step2"></div>
              <div class="pop1-1 step3"></div>
              <div class="pop1-2 step3"></div>
              <div class="pop1-3 step3"></div>
              <div class="doctor3 step3"></div>
          </div>
      </div>
      <div class="p2 page">
          <div class="p-content">
              <div class="return-btn"></div>
              <div class="service-btn"></div>
              <div class="vote-btn"></div>
          </div>
      </div>
      <div class="p3 page">
          <div class="p-content">
              <div class="return-btn"></div>
              <div class="info-btn"></div>
              <div class="vote-btn"></div>
          </div>
      </div>
      <div class="p4">
          <div class="p-content">
            <div class="item item1">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item2">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item3">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item4">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item5">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item6">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item7">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item8">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item9">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item10">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item11">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item12">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item13">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item14">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item15">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item16">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item17">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item18">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item19">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item20">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item21">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item22">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item23">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item24">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item25">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item26">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item27">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item28">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item29">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>
            <div class="item item30">
              <div class="detail-btn"></div>
              <div class="vote-btn2"></div>
            </div>

          </div>
      </div>
      <div class="vote vote1">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote2">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote3">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote4">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote5">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote6">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote7">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote8">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote9">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote10">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote11">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote12">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote13">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote14">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote15">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote16">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote17">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote18">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote19">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote20">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote21">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote22">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote23">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote24">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote25">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote26">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote27">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote28">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote29">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>
      <div class="vote vote30">
          <div class="p-content">
              <div class="return-btn2"></div>
              <div class="vote-btn3"></div>
          </div>
      </div>


  </div>
</body>
</html>
<script src="http://guangdong.sinaimg.cn/subject/2017/lib/js/zepto.min.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
"use strict";
var app = function(e) {
    return e.utils = {
        topFunction: function(){
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        },
        getQueryString: function(n) {
            var t = new RegExp("(^|&)" + n + "=([^&]*)(&|$)", "i"),
            i = window.location.search.replace(/&amp;(amp;)?/g, "&").substr(1).match(t);
            return null !== i ? unescape(i[2]) : null
        },
        isWeixin: function() {
            return "micromessenger" == navigator.userAgent.toLowerCase().match(/MicroMessenger/i)
        },
        getRandomInt: function(n, t) {
            return Math.floor(Math.random() * (t - n + 1) + n)
        },
        loadImages: function(n, t) {
            var i = {
                sources: n,
                images: n instanceof Array ? [] : {},
                config: t || {},
                loadedImages: 0,
                totalImages: 0,
                countTotalImages: function() {
                    for (var n in this.totalImages = 0,
                    this.sources) this.totalImages += 1;
                    return this.totalImages
                },
                load: function(n, t) {
                    this.images[n] = new Image;
                    var i = this;
                    this.images[n].onload = function() {
                        i.loadedImages += 1;
                        var n = Math.floor(i.loadedImages / i.totalImages * 100);
                        i.config.onProgress && i.config.onProgress(n),
                        i.loadedImages >= i.totalImages && (i.config.onComplete && i.config.onComplete(i.images), i.config instanceof Function && i.config(i.images))
                    },
                    this.images[n].onerror = function(n) {
                        console.log(n)
                    },
                    t && (this.images[n].crossOrigin = "*"),
                    this.images[n].src = this.sources[n]
                }
            };
            if (i.countTotalImages(), i.totalImages) for (var s in i.sources) i.config.crossOrigin ? i.load(s, !0) : i.load(s);
            else i.config.onComplete && i.config.onComplete(i.images),
            i.config instanceof Function && i.config(i.images)
        }
    },
    e.preload = {
        sources: [],
        onProgress: function(n) {
            $(".loading-text").html(n + "%")
        },
        onComplete: function() {
            $(".loading").removeClass("active")
            var video=document.getElementById("video-1");
            video.play();
            // $(".p1").addClass("active")
            // setTimeout(function() {
            //     $(".p1").addClass("fadeOut"),
            //     $(".p2").addClass("active")
            // },
            // 9500),
            // setTimeout(function() {
            //     $(".p1").removeClass("active").removeClass("fadeOut")
            // },
            // 10500)
        },
        main: function() {
            e.utils.loadImages(this.sources, {
                onProgress: this.onProgress,
                onComplete: this.onComplete
            })
        }
    },
    e.events = {
        preventDefault: function() {
            $(document).on("touchmove",
            function(n) {
                n.preventDefault()
            })
        },
        main: function() {
            this.preventDefault(),
            $('.pop1-1').on("touchstart",
            function(){
              $('.p1').removeClass('active');
              $('.p2').addClass('active');
            }),
            $('.pop1-2').on("touchstart",
            function(){
              $('.p1').removeClass('active');
              $('.p3').addClass('active');
            }),
            $('.pop1-3').on("touchstart",
            function(){
              $('.p1').removeClass('active');
              $('.p4').addClass('active');
            }),
            $('.return-btn').on("touchstart",
            function(){
              $('.p3').removeClass('active');
              $('.p2').removeClass('active');
              $('.p1').addClass('active');
            }),
            $('.info-btn').on("touchstart",
            function(){
              $('.p3').removeClass('active');
              $('.p2').addClass('active');
            }),
            $('.service-btn').on("touchstart",
            function(){
              $('.p2').removeClass('active');
              $('.p3').addClass('active');
            }),
            $('.vote-btn').on("touchstart",
            function(){
              $('.p2').removeClass('active');
              $('.p3').removeClass('active');
              $('.p4').addClass('active');
            }),
            $('.item1>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote1').addClass('active');
            }),
            $('.item2>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote2').addClass('active');
            }),
            $('.item3>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote3').addClass('active');
            }),
            $('.item4>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote4').addClass('active');
            }),
            $('.item5>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote5').addClass('active');
            }),
            $('.item6>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote6').addClass('active');
            }),
            $('.item7>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote7').addClass('active');
            }),
            $('.item8>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote8').addClass('active');
            }),
            $('.item9>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote9').addClass('active');
            }),
            $('.item10>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote10').addClass('active');
            }),
            $('.item11>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote11').addClass('active');
            }),
            $('.item12>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote12').addClass('active');
            }),
            $('.item13>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote13').addClass('active');
            }),
            $('.item14>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote14').addClass('active');
            }),
            $('.item15>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote15').addClass('active');
            }),
            $('.item16>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote16').addClass('active');
            }),
            $('.item17>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote17').addClass('active');
            }),
            $('.item18>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote18').addClass('active');
            }),
            $('.item19>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote19').addClass('active');
            }),
            $('.item20>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote20').addClass('active');
            }),
            $('.item21>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote21').addClass('active');
            }),
            $('.item22>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote22').addClass('active');
            }),
            $('.item23>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote23').addClass('active');
            }),
            $('.item24>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote24').addClass('active');
            }),
            $('.item25>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote25').addClass('active');
            }),
            $('.item26>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote26').addClass('active');
            }),
            $('.item27>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote27').addClass('active');
            }),
            $('.item28>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote28').addClass('active');
            }),
            $('.item29>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote29').addClass('active');
            }),
            $('.item30>.detail-btn').on("touchstart",
            function(){
              e.utils.topFunction();
              $('.p4').removeClass('active');
              $('.vote30').addClass('active');
            }),
            $('.return-btn2').on("touchstart",
            function(){
              $('.vote').removeClass('active');
              $('.p4').addClass('active');

            })
            // setTimeout(function() {
            //     $('.step1').css('display','none');
            //     $('.step2').css('display','block');
            // },
            // 3e3),
            // setTimeout(function() {
            //     $('.step2').css('display','none');
            //     $('.step3').css('display','block');
            // },
            // 7e3)
        }
    },
    e.main = function() {
        e.utils.loadImages(["http://n.sinaimg.cn/gd/jobs2018/loading_icon.png"],
        function() {
            e.preload.sources = [],
            e.preload.main()
        }),
        // e.musics.main(),
        e.events.main()
    },
    e
} (app || {});
app.main();
</script>