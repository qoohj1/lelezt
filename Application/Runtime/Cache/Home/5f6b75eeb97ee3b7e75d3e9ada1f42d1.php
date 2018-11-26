<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
    <script src="http://guangdong.sinaimg.cn/subject/2017/lib/js/fixViewport750.js"></script>
    <link rel="stylesheet" href="http://guangdong.sinaimg.cn/subject/2015/0424/jr/css/swiper.min.css">
    <!-- <link rel="stylesheet" href="http://guangdong.sinaimg.cn/subject/2016/0629/animate.css"> -->
    <style>
    @charset "UTF-8";

    @-webkit-keyframes rotation {
    	10%,90%,to {
    		-webkit-transform: rotate(90deg);
    		transform: rotate(90deg)
    	}

    	50%,60% {
    		-webkit-transform: rotate(0);
    		transform: rotate(0)
    	}
    }

    @keyframes rotation {
    	10%,90%,to {
    		-webkit-transform: rotate(90deg);
    		transform: rotate(90deg)
    	}

    	50%,60% {
    		-webkit-transform: rotate(0);
    		transform: rotate(0)
    	}
    }

    @-webkit-keyframes music_shake {
    	0% {
    		-webkit-transform: rotate(0);
    		transform: rotate(0)
    	}

    	to {
    		-webkit-transform: rotate(360deg);
    		transform: rotate(360deg)
    	}
    }

    @keyframes music_shake {
    	0% {
    		-webkit-transform: rotate(0);
    		transform: rotate(0)
    	}

    	to {
    		-webkit-transform: rotate(360deg);
    		transform: rotate(360deg)
    	}
    }

    @-webkit-keyframes loading {
    	0%,33% {
    		opacity: 0
    	}

    	16.66% {
    		opacity: 1
    	}
    }

    @keyframes loading {
    	0%,33% {
    		opacity: 0
    	}

    	16.66% {
    		opacity: 1
    	}
    }

    @-webkit-keyframes fadeIn {
    	0% {
    		opacity: 0
    	}

    	to {
    		opacity: 1
    	}
    }

    @keyframes fadeIn {
    	0% {
    		opacity: 0
    	}

    	to {
    		opacity: 1
    	}
    }

    @-webkit-keyframes fadeInLeft {
    	0% {
    		opacity: 0;
    		-webkit-transform: translate(-100%,10%);
    		transform: translate(-100%,10%)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @keyframes fadeInLeft {
    	0% {
    		opacity: 0;
    		-webkit-transform: translate(-100%,10%);
    		transform: translate(-100%,10%)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @-webkit-keyframes fadeInLeft2 {
    	0% {
    		opacity: 0;
    		-webkit-transform: translate(-100%,-25%);
    		transform: translate(-100%,-25%)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @keyframes fadeInLeft2 {
    	0% {
    		opacity: 0;
    		-webkit-transform: translate(-100%,-25%);
    		transform: translate(-100%,-25%)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @-webkit-keyframes fadeInRight {
    	0% {
    		opacity: 0;
    		-webkit-transform: translate(100%,20%);
    		transform: translate(100%,20%)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @keyframes fadeInRight {
    	0% {
    		opacity: 0;
    		-webkit-transform: translate(100%,20%);
    		transform: translate(100%,20%)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @-webkit-keyframes fadeInUp {
    	0% {
    		opacity: 0;
    		-webkit-transform: translateY(40px);
    		transform: translateY(40px)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}
    }

    @keyframes fadeInUp {
    	0% {
    		opacity: 0;
    		-webkit-transform: translateY(40px);
    		transform: translateY(40px)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}
    }

    @-webkit-keyframes fadeInDown {
    	0% {
    		opacity: 0;
    		-webkit-transform: translateY(-40px);
    		transform: translateY(-40px)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}
    }

    @keyframes fadeInDown {
    	0% {
    		opacity: 0;
    		-webkit-transform: translateY(-40px);
    		transform: translateY(-40px)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}
    }

    @-webkit-keyframes fadeOut {
    	0% {
    		opacity: 1
    	}

    	to {
    		opacity: 0
    	}
    }

    @keyframes fadeOut {
    	0% {
    		opacity: 1
    	}

    	to {
    		opacity: 0
    	}
    }

    @-webkit-keyframes starsFlash {
    	0% {
    		opacity: .2
    	}

    	to {
    		opacity: 1
    	}
    }

    @keyframes starsFlash {
    	0% {
    		opacity: .2
    	}

    	to {
    		opacity: 1
    	}
    }

    @-webkit-keyframes lightFlash {
    	0% {
    		opacity: 0
    	}

    	to {
    		opacity: 1
    	}
    }

    @keyframes lightFlash {
    	0% {
    		opacity: 0
    	}

    	to {
    		opacity: 1
    	}
    }

    @-webkit-keyframes lightPlay {
    	0% {
    		background-position: 0 bottom
    	}

    	to {
    		background-position: -1500px bottom
    	}
    }

    @keyframes lightPlay {
    	0% {
    		background-position: 0 bottom
    	}

    	to {
    		background-position: -1500px bottom
    	}
    }

    @-webkit-keyframes smokePlay {
    	0% {
    		background-position: 1000px 0
    	}

    	to {
    		background-position: -10000px 0
    	}
    }

    @keyframes smokePlay {
    	0% {
    		background-position: 1000px 0
    	}

    	to {
    		background-position: -10000px 0
    	}
    }

    @-webkit-keyframes smokeLargePlay {
    	0% {
    		background-position: 0 bottom
    	}

    	to {
    		background-position: -7500px bottom
    	}
    }

    @keyframes smokeLargePlay {
    	0% {
    		background-position: 0 bottom
    	}

    	to {
    		background-position: -7500px bottom
    	}
    }

    @-webkit-keyframes stageFlash {
    	0% {
    		background: #312918
    	}

    	to {
    		background: #f7b52c
    	}
    }

    @keyframes stageFlash {
    	0% {
    		background: #312918
    	}

    	to {
    		background: #f7b52c
    	}
    }

    @-webkit-keyframes stars {
    	0% {
    		opacity: 1;
    		-webkit-transform: scale(.5);
    		transform: scale(.5)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: scale(1);
    		transform: scale(1)
    	}
    }

    @keyframes stars {
    	0% {
    		opacity: 1;
    		-webkit-transform: scale(.5);
    		transform: scale(.5)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: scale(1);
    		transform: scale(1)
    	}
    }

    @-webkit-keyframes zoomIn {
    	0% {
    		opacity: 0;
    		-webkit-transform: scale(0);
    		transform: scale(0)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: scale(1);
    		transform: scale(1)
    	}
    }

    @keyframes zoomIn {
    	0% {
    		opacity: 0;
    		-webkit-transform: scale(0);
    		transform: scale(0)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: scale(1);
    		transform: scale(1)
    	}
    }

    @-webkit-keyframes manShow {
    	0% {
    		-webkit-transform: translate(0,100%);
    		transform: translate(0,100%)
    	}

    	to {
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @keyframes manShow {
    	0% {
    		-webkit-transform: translate(0,100%);
    		transform: translate(0,100%)
    	}

    	to {
    		-webkit-transform: translate(0,0);
    		transform: translate(0,0)
    	}
    }

    @-webkit-keyframes manHand {
    	0% {
    		-webkit-transform: rotateX(-75deg);
    		transform: rotateX(-75deg)
    	}

    	to {
    		-webkit-transform: rotateX(0);
    		transform: rotateX(0)
    	}
    }

    @keyframes manHand {
    	0% {
    		-webkit-transform: rotateX(-75deg);
    		transform: rotateX(-75deg)
    	}

    	to {
    		-webkit-transform: rotateX(0);
    		transform: rotateX(0)
    	}
    }

    @-webkit-keyframes hangDown {
    	0% {
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}

    	to {
    		-webkit-transform: translateY(10px);
    		transform: translateY(10px)
    	}
    }

    @keyframes hangDown {
    	0% {
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}

    	to {
    		-webkit-transform: translateY(10px);
    		transform: translateY(10px)
    	}
    }

    @-webkit-keyframes hangUp {
    	0% {
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}

    	to {
    		-webkit-transform: translateY(-10px);
    		transform: translateY(-10px)
    	}
    }

    @keyframes hangUp {
    	0% {
    		-webkit-transform: translateY(0);
    		transform: translateY(0)
    	}

    	to {
    		-webkit-transform: translateY(-10px);
    		transform: translateY(-10px)
    	}
    }

    @-webkit-keyframes hangScale {
    	0% {
    		-webkit-transform: scale(1);
    		transform: scale(1)
    	}

    	to {
    		-webkit-transform: scale(1.05);
    		transform: scale(1.05)
    	}
    }

    @keyframes hangScale {
    	0% {
    		-webkit-transform: scale(1);
    		transform: scale(1)
    	}

    	to {
    		-webkit-transform: scale(1.05);
    		transform: scale(1.05)
    	}
    }

    @-webkit-keyframes hangRotate {
    	0% {
    		-webkit-transform: rotate(0);
    		transform: rotate(0)
    	}

    	to {
    		-webkit-transform: rotate(2deg);
    		transform: rotate(2deg)
    	}
    }

    @keyframes hangRotate {
    	0% {
    		-webkit-transform: rotate(0);
    		transform: rotate(0)
    	}

    	to {
    		-webkit-transform: rotate(2deg);
    		transform: rotate(2deg)
    	}
    }

    @-webkit-keyframes bounceInUp {
    	0%,60%,75%,90%,to {
    		-webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
    		animation-timing-function: cubic-bezier(.215,.61,.355,1)
    	}

    	0% {
    		opacity: 0;
    		-webkit-transform: translate3d(0,500px,0);
    		transform: translate3d(0,500px,0)
    	}

    	45% {
    		opacity: 1;
    		-webkit-transform: translate3d(0,0,0);
    		transform: translate3d(0,0,0)
    	}

    	60% {
    		-webkit-transform: translate3d(0,30px,0);
    		transform: translate3d(0,30px,0)
    	}

    	75%,to {
    		-webkit-transform: translate3d(0,0,0);
    		transform: translate3d(0,0,0)
    	}

    	90% {
    		-webkit-transform: translate3d(0,10px,0);
    		transform: translate3d(0,10px,0)
    	}
    }

    @keyframes bounceInUp {
    	0%,60%,75%,90%,to {
    		-webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
    		animation-timing-function: cubic-bezier(.215,.61,.355,1)
    	}

    	0% {
    		opacity: 0;
    		-webkit-transform: translate3d(0,500px,0);
    		transform: translate3d(0,500px,0)
    	}

    	45% {
    		opacity: 1;
    		-webkit-transform: translate3d(0,0,0);
    		transform: translate3d(0,0,0)
    	}

    	60% {
    		-webkit-transform: translate3d(0,30px,0);
    		transform: translate3d(0,30px,0)
    	}

    	75%,to {
    		-webkit-transform: translate3d(0,0,0);
    		transform: translate3d(0,0,0)
    	}

    	90% {
    		-webkit-transform: translate3d(0,10px,0);
    		transform: translate3d(0,10px,0)
    	}
    }

    @-webkit-keyframes bounceIn {
    	0%,20%,40%,60%,80%,to {
    		-webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
    		animation-timing-function: cubic-bezier(.215,.61,.355,1)
    	}

    	0% {
    		opacity: 0;
    		-webkit-transform: scale3d(.3,.3,.3);
    		transform: scale3d(.3,.3,.3)
    	}

    	20% {
    		-webkit-transform: scale3d(1.1,1.1,1.1);
    		transform: scale3d(1.1,1.1,1.1)
    	}

    	40% {
    		-webkit-transform: scale3d(.9,.9,.9);
    		transform: scale3d(.9,.9,.9)
    	}

    	60% {
    		opacity: 1;
    		-webkit-transform: scale3d(1.03,1.03,1.03);
    		transform: scale3d(1.03,1.03,1.03)
    	}

    	80% {
    		-webkit-transform: scale3d(.97,.97,.97);
    		transform: scale3d(.97,.97,.97)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: scale3d(1,1,1);
    		transform: scale3d(1,1,1)
    	}
    }

    @keyframes bounceIn {
    	0%,20%,40%,60%,80%,to {
    		-webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
    		animation-timing-function: cubic-bezier(.215,.61,.355,1)
    	}

    	0% {
    		opacity: 0;
    		-webkit-transform: scale3d(.3,.3,.3);
    		transform: scale3d(.3,.3,.3)
    	}

    	20% {
    		-webkit-transform: scale3d(1.1,1.1,1.1);
    		transform: scale3d(1.1,1.1,1.1)
    	}

    	40% {
    		-webkit-transform: scale3d(.9,.9,.9);
    		transform: scale3d(.9,.9,.9)
    	}

    	60% {
    		opacity: 1;
    		-webkit-transform: scale3d(1.03,1.03,1.03);
    		transform: scale3d(1.03,1.03,1.03)
    	}

    	80% {
    		-webkit-transform: scale3d(.97,.97,.97);
    		transform: scale3d(.97,.97,.97)
    	}

    	to {
    		opacity: 1;
    		-webkit-transform: scale3d(1,1,1);
    		transform: scale3d(1,1,1)
    	}
    }

    @-webkit-keyframes bounceOut {
    	20% {
    		-webkit-transform: scale3d(.9,.9,.9);
    		transform: scale3d(.9,.9,.9)
    	}

    	50%,55% {
    		opacity: 1;
    		-webkit-transform: scale3d(1.1,1.1,1.1);
    		transform: scale3d(1.1,1.1,1.1)
    	}

    	to {
    		opacity: 0;
    		-webkit-transform: scale3d(.3,.3,.3);
    		transform: scale3d(.3,.3,.3)
    	}
    }

    @keyframes bounceOut {
    	20% {
    		-webkit-transform: scale3d(.9,.9,.9);
    		transform: scale3d(.9,.9,.9)
    	}

    	50%,55% {
    		opacity: 1;
    		-webkit-transform: scale3d(1.1,1.1,1.1);
    		transform: scale3d(1.1,1.1,1.1)
    	}

    	to {
    		opacity: 0;
    		-webkit-transform: scale3d(.3,.3,.3);
    		transform: scale3d(.3,.3,.3)
    	}
    }

    @-webkit-keyframes breath {
    	0%,40% {
    		-webkit-transform: scale3d(1,1,1);
    		transform: scale3d(1,1,1)
    	}

    	20% {
    		-webkit-transform: scale3d(1.1,1.1,1.1);
    		transform: scale3d(1.1,1.1,1.1)
    	}
    }

    @keyframes breath {
    	0%,40% {
    		-webkit-transform: scale3d(1,1,1);
    		transform: scale3d(1,1,1)
    	}

    	20% {
    		-webkit-transform: scale3d(1.1,1.1,1.1);
    		transform: scale3d(1.1,1.1,1.1)
    	}
    }

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

    .mod-orient-layer {
    	display: none;
    	position: fixed;
    	height: 100%;
    	width: 100%;
    	left: 0;
    	top: 0;
    	right: 0;
    	bottom: 0;
    	background: #000;
    	z-index: 9997
    }

    .mod-orient-layer .mod-orient-layer__content {
    	position: absolute;
    	width: 100%;
    	top: 45%;
    	margin-top: -75px;
    	text-align: center
    }

    .mod-orient-layer .mod-orient-layer__icon-orient {
    	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAADaCAMAAABU68ovAAAAXVBMVEUAAAD29vb////x8fH////////x8fH5+fn29vby8vL////5+fn39/f6+vr////x8fH////////+/v7////09PT////x8fH39/f/ ///////////////////x8fH///+WLTLGAAAAHXRSTlMAIpML+gb4ZhHWn1c2gvHBvq1uKJcC6k8b187lQ9yhhboAAAQYSURBVHja7d3blpowFIDhTUIAOchZDkre/zE7ycySrbUUpsRN2/1fzO18KzEqxEVgTiZNfgmmtxRc8iaR8HNe8x4BtjQePKayYCIoyBSgvNNE1AkNSHqZyLqk97EgUCCHBzZ5mkg7ScvIJuIyOyXBRFxgpqWZyGsAZLB1KjsJi8nutHU4JCRbFRH8tmirI9k8Jx2sqNs8K/m0LQkrktO2crgcgXGB4AiTEsB0hJfo9MGgX7CGcYiYwQxmMOOvZwRhBG8tCoMXjBDeXvWCEcHbi14wgCBmMIMZzGAGM5jxETNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxY6E2rUQxnH2tz9cirlJFwFBJedaPnUv0M7++egPDE8iAJcIDmxwH5wwv9vUviw2kLbVO3TJU5uul/EyB0FoLp4x60PdGUd3qPurrWyjGGTc05u+1dcgI7/+tCCPARWGhH7o5Y7RCf+bH9ctXLp6v2BVDxfqz0oPXeSVaNtINo/1SXDv4dck8IIkbhtC2ol+iouEonTBCbYvVMnXOjxww6s/RFrBUpXHh/gw1rHj5d/qhYn9Gpk2FWh6xRBRX5Oj3Znh2Sq49/L6+y8pB26q9GbE2dbA2mVbx6I+7MfBglLCttm73ZQi7AD3iL4HqjFYJHSPRppqaUaJ3ATpGa+ckpGak2hRRMyqjGMkvl+xyFeSMwjAqcsZgGDdyhl0oNTnDN4yenJGZFGxNChP5/Y3efh6SM2rDOJMzboYxkDMqwyjIGcIw6F+io2FU1IxIm1JqRmgXSkvNKNCXeTpGrU0JNSO2c6LIGPgCS8AuDHz9ta0SXWDtxoDRH+MqlbC2Dt2G2JFRadtQZt2qq/orGowdGb2euxYiqWEpVWhTBnszoNAPdStuQwxqf0aocdWKW4Z+DfszIh8pxJqbuCE4YAC+4bm0evtipjpgJHeFnyyt1Ku2xa0bhjxr27p75rECNwyI9ZwvXkHq+7aTaMEV44YYy/spfgjgjNHaWW+GeUhGEX7tLlVinIFDDSgnOwhi1V6bU0b6tVS9eAERe863g4dRrtiHdc6o+nn5vtyVVgR79Cqt4uL6gfHPQyGqtP2vf7HADGbcYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JjhtOM+J/AgT008yDMkN/dPP9hzS8zAMQN3OEYeekp5YU7KOKXwVXqiY+QS7smcinGKABWdiBgpPJTSMHJ4KidhhPBUSMLw4CmPhKHgKUXCkHsygum71ftNSgCX6bsl8FQyfbcL5EdYsDk0R3j7aiA5wpt5AjKg/2gLJEBD/0Hf2OOf/vRrj6z/7GtP4B3nMKyjHA12kIPSjnJs3FEO0TvKkYJHOWCR+rjJH0Vn6fI5PjNbAAAAAElFTkSuQmCC");
    	display: inline-block;
    	width: 67px;
    	height: 109px;
    	-webkit-transform: rotate(90deg);
    	transform: rotate(90deg);
    	-webkit-animation: rotation infinite 1.5s ease-in-out;
    	animation: rotation infinite 1.5s ease-in-out;
    	background-size: 67px
    }

    .mod-orient-layer .mod-orient-layer__desc {
    	margin-top: 20px;
    	font-size: 15px;
    	color: #fff
    }

    @media screen and (min-aspect-ratio:1/1) {
    	.mod-orient-layer {
    		display: block;
    		z-index: 10001
    	}
    }

    #audio-music {
    	position: absolute;
    	width: 78px;
    	height: 78px;
    	right: 20px;
    	top: 20px;
    	z-index: 9999;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_music.png) center center no-repeat
    }

    #audio-music img,.p7 .p7-detail img {
    	width: 100%
    }

    #audio-music.animating {
    	-webkit-animation: music_shake 4s linear infinite;
    	animation: music_shake 4s linear infinite
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

    .page.active,.pop.active {
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

    .loading-icon,.page .p-content,.pop .p-content {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0
    }

    .pop .p-content {
    	background: rgba(0,0,0,.8)!important
    }

    .loading-icon {
    	width: 151px;
    	height: 122px;
    	left: 50%;
    	margin-left: -75px;
    	top: 50%;
    	margin-top: -111px
    }

    .loading-icon .loading-icon-img {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/loading_icon.png) no-repeat;
    	opacity: 0
    }

    .loading-icon .loading-icon-img:nth-child(1) {
    	background-position: 0 0;
    	opacity: 1
    }

    .loading-icon .loading-icon-img:nth-child(2) {
    	background-position: -151px 0;
    	-webkit-animation: loading 2s .5s infinite both;
    	animation: loading 2s .5s infinite both
    }

    .loading-icon .loading-icon-img:nth-child(3) {
    	background-position: -302px 0;
    	-webkit-animation: loading 2s 1s infinite both;
    	animation: loading 2s 1s infinite both
    }

    .loading-icon .loading-icon-img:nth-child(4) {
    	background-position: -453px 0;
    	-webkit-animation: loading 2s 1.5s infinite both;
    	animation: loading 2s 1.5s infinite both
    }

    .loading-icon .loading-icon-img:nth-child(5) {
    	background-position: -604px 0;
    	-webkit-animation: loading 2s 2s infinite both;
    	animation: loading 2s 2s infinite both
    }

    .loading-text {
    	width: 100%;
    	line-height: 50px;
    	position: absolute;
    	left: 0;
    	top: 50%;
    	margin-top: 36px;
    	text-align: center;
    	font-size: 40px;
    	color: #312918
    }

    .p1 {
    	z-index: 4
    }

    .p1 .p1-01,.p1 .p1-02 {
    	width: 100%;
    	position: absolute;
    	left: 0
    }

    .p1 .p1-01 {
    	background: #fff;
    	height: 382px;
    	top: 0;
    	-webkit-animation: fadeInLeft .5s 0s both;
    	animation: fadeInLeft .5s 0s both
    }

    .p1 .p1-01 .p1-01-stars {
    	width: 664px;
    	height: 301px;
    	position: absolute;
    	left: 43px;
    	top: 49px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_01_stars.png) no-repeat;
    	-webkit-animation: starsFlash 1s ease-in-out 1s infinite alternate both;
    	animation: starsFlash 1s ease-in-out 1s infinite alternate both
    }

    .p1 .p1-01 .p1-01-man {
    	width: 737px;
    	height: 331px;
    	position: absolute;
    	left: 3px;
    	top: 37px;
    	overflow: hidden;
    	-webkit-transform: translate3d(0,0,0);
    	transform: translate3d(0,0,0)
    }

    .p1 .p1-01 .p1-01-man .p1-01-man-01,.p1 .p1-01 .p1-01-man .p1-01-man-02 {
    	left: 20px;
    	background-position: 50px top;
    	-webkit-animation: manShow .4s ease-out .5s both;
    	animation: manShow .4s ease-out .5s both;
    	-webkit-perspective: 1000px;
    	perspective: 1000px
    }

    .p1 .p1-01 .p1-01-man .p1-01-man-01 .p1-man-hand {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_01_man_01_hand.png) no-repeat;
    	-webkit-animation: manHand .5s ease-in-out .8s both;
    	animation: manHand .5s ease-in-out .8s both
    }

    .p1 .p1-01 .p1-01-man .p1-01-man-02 {
    	left: 260px;
    	background-position: -186px top;
    	-webkit-animation: manShow .4s ease-out .8s both;
    	animation: manShow .4s ease-out .8s both
    }

    .p1 .p1-01 .p1-01-man .p1-01-man-02 .p1-man-hand {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_01_man_02_hand.png) no-repeat;
    	-webkit-animation: manHand .5s ease-in-out 1.1s both;
    	animation: manHand .5s ease-in-out 1.1s both
    }

    .p1 .p1-01 .p1-01-man .p1-01-man-03 {
    	width: 230px;
    	right: 0;
    	background-position: right top;
    	-webkit-animation: manShow .4s ease-out 1.1s both;
    	animation: manShow .4s ease-out 1.1s both;
    	-webkit-perspective: 1000px;
    	perspective: 1000px
    }

    .p1 .p1-01 .p1-01-man .p1-01-man-03 .p1-man-hand {
    	left: -5px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_01_man_03_hand.png) no-repeat;
    	-webkit-animation: manHand .5s ease-in-out 1.4s both;
    	animation: manHand .5s ease-in-out 1.4s both
    }

    .p1 .p1-01 .p1-01-man-01,.p1 .p1-01 .p1-01-man-02,.p1 .p1-01 .p1-01-man-03 {
    	width: 245px;
    	height: 100%;
    	position: absolute;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_01_man.png) no-repeat
    }

    .p1 .p1-01 .p1-man-hand,.p1 .p1-03-man>div {
    	width: 91px;
    	height: 213px;
    	position: absolute;
    	left: 0;
    	top: 66px;
    	-webkit-transform-origin: center bottom;
    	transform-origin: center bottom
    }

    .p1 .p1-01 .p1-01-cover {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_01_bg.png) center bottom no-repeat
    }

    .p1 .p1-02 {
    	height: 515px;
    	top: 303px;
    	-webkit-animation: fadeInRight .5s 1.5s both;
    	animation: fadeInRight .5s 1.5s both;
    	overflow: hidden
    }

    .p1 .p1-02 .p1-02-light {
    	width: 100%;
    	height: 499px;
    	position: absolute;
    	left: 0;
    	top: 8px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_02_light.png) no-repeat;
    	-webkit-animation: lightFlash .4s ease-in-out 2.2s infinite alternate both;
    	animation: lightFlash .4s ease-in-out 2.2s infinite alternate both
    }

    .p1 .p1-02 .p1-02-star,.p1 .p1-03-man {
    	width: 39px;
    	height: 39px;
    	position: absolute;
    	-webkit-animation: stars 1s ease-in-out 1.5s infinite alternate both;
    	animation: stars 1s ease-in-out 1.5s infinite alternate both
    }

    .p1 .p1-02 .p1-02-star>div {
    	width: 100%;
    	height: 100%;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_02_star.png) no-repeat
    }

    .p1 .p1-02 .p1-02-star.p1-02-star-01 {
    	left: 270px;
    	top: 115px
    }

    .p1 .p1-02 .p1-02-star.p1-02-star-01>div,.p1 .p1-02 .p1-02-star.p1-02-star-03>div {
    	-webkit-transform: scale(.8);
    	transform: scale(.8)
    }

    .p1 .p1-02 .p1-02-star.p1-02-star-02 {
    	left: 575px;
    	top: 187px
    }

    .p1 .p1-02 .p1-02-star.p1-02-star-03 {
    	left: 467px;
    	top: 339px
    }

    .p1 .p1-02 .p1-02-cup {
    	width: 293px;
    	height: 358px;
    	position: absolute;
    	left: 269px;
    	top: 76px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_02_cup.png) no-repeat;
    	-webkit-animation: manShow 1s 1.8s both,hangDown 1s 2.8s infinite alternate;
    	animation: manShow 1s 1.8s both,hangDown 1s 2.8s infinite alternate
    }

    .p1 .p1-02 .p1-02-cover {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_02_bg_new.png) no-repeat
    }

    .p1 .p1-03-man {
    	width: 468px;
    	height: 468px;
    	border-radius: 50%;
    	left: 141px;
    	top: 116px;
    	background: #f7b52c;
    	-webkit-animation: stageFlash 2s ease-in 3s both;
    	animation: stageFlash 2s ease-in 3s both
    }

    .p1 .p1-03-man>div {
    	width: 298px;
    	height: 460px;
    	left: 125px;
    	top: 8px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_03_man.png) no-repeat;
    	-webkit-animation: manShow 1s ease-out 2.5s both,hangRotate 1s ease-in-out 3.5s infinite alternate;
    	animation: manShow 1s ease-out 2.5s both,hangRotate 1s ease-in-out 3.5s infinite alternate
    }

    .p1 .p1-03 {
    	width: 100%;
    	height: 651px;
    	position: absolute;
    	left: 0;
    	top: 639px;
    	overflow: hidden;
    	-webkit-animation: fadeInLeft2 .5s 2.5s both;
    	animation: fadeInLeft2 .5s 2.5s both
    }

    .p1 .p1-03 .p1-03-money {
    	width: 565px;
    	height: 474px;
    	position: absolute;
    	left: 70px;
    	top: 85px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_03_money.png) no-repeat;
    	-webkit-animation: fadeIn 1s 4s both,hangRotate 1s ease-in-out 5s infinite alternate;
    	animation: fadeIn 1s 4s both,hangRotate 1s ease-in-out 5s infinite alternate
    }

    .p1 .p1-03 .p1-03-users {
    	width: 100%;
    	height: 212px;
    	position: absolute;
    	left: 70px;
    	top: 380px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_03_users.png) no-repeat;
    	-webkit-animation: manShow 1s ease-out 3s both,hangDown 1s ease-in-out 4s infinite alternate;
    	animation: manShow 1s ease-out 3s both,hangDown 1s ease-in-out 4s infinite alternate
    }

    .p1 .p1-03 .p1-03-cover {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_03_bg_new.png) no-repeat
    }

    .p1 .p1-pop {
    	background: rgba(0,0,0,.8);
    	-webkit-animation: fadeIn .5s linear 6s both;
    	animation: fadeIn .5s linear 6s both
    }

    .p1 .p1-pop .p1-pop-content {
    	width: 686px;
    	height: 518px;
    	position: absolute;
    	left: 50%;
    	margin-left: -343px;
    	top: 50%;
    	margin-top: -259px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p1_pop_bg_new.png) no-repeat;
    	-webkit-animation: bounceIn 1s 6.5s backwards,bounceOut 1s 8.5s forwards;
    	animation: bounceIn 1s 6.5s backwards,bounceOut 1s 8.5s forwards
    }

    .p2 .p2-light {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: #fff url(http://n.sinaimg.cn/gd/jobs2018/p2_bg_01.png) left bottom no-repeat;
    	-webkit-animation: lightPlay .4s steps(2) 0s infinite;
    	animation: lightPlay .4s steps(2) 0s infinite
    }

    .p2 .p2-teapot {
    	width: 567px;
    	height: 335px;
    	position: absolute;
    	left: 94px;
    	bottom: 419px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p2_teapot.png) no-repeat;
    	-webkit-animation: fadeIn 2s .5s both,hangRotate 1s steps(2) 2.5s infinite;
    	animation: fadeIn 2s .5s both,hangRotate 1s steps(2) 2.5s infinite
    }

    .p2 .p2-smoke {
    	width: 1000px;
    	height: 1000px;
    	position: absolute;
    	left: -488px;
    	bottom: 240px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/smoke_sprite.png) 1000px 0 no-repeat
    }

    .p2 .p2-smoke.active {
    	-webkit-animation: smokePlay 4s steps(11) 0s both;
    	animation: smokePlay 4s steps(11) 0s both
    }

    .p2 .p2-text {
    	width: 562px;
    	height: 368px;
    	position: absolute;
    	left: 109px;
    	bottom: 748px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p2_text_new.png) no-repeat;
    	-webkit-animation: fadeInUp 1s 1s both,hangDown 1s ease-in-out 2s infinite alternate;
    	animation: fadeInUp 1s 1s both,hangDown 1s ease-in-out 2s infinite alternate
    }

    .p2 .p2-btn {
    	width: 266px;
    	height: 98px;
    	position: absolute;
    	left: 248px;
    	bottom: 269px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p2_btn.png) no-repeat;
    	-webkit-animation: fadeInDown 1s 1.5s both,hangScale 1s ease-in-out 2.5s infinite alternate;
    	animation: fadeInDown 1s 1.5s both,hangScale 1s ease-in-out 2.5s infinite alternate
    }

    .p3-smoke {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	z-index: 2;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/sprite_smoke_l.png) 0 bottom no-repeat;
    	-webkit-animation: fadeIn 2s ease-in 0s both,smokeLargePlay 1s steps(10) 2s both;
    	animation: fadeIn 2s ease-in 0s both,smokeLargePlay 1s steps(10) 2s both
    }

    .p3,.p4,.p5,.p6 {
    	z-index: 2
    }

    .p3 .p-content {
    	background: #ff9623
    }

    .p3 .p3-text {
    	width: 674px;
    	height: 442px;
    	position: absolute;
    	left: 35px;
    	top: 40px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_text_new.png) no-repeat;
    	-webkit-animation: fadeInDown 1s 1.7s both,hangDown 1s ease-in-out 2.7s infinite alternate;
    	animation: fadeInDown 1s 1.7s both,hangDown 1s ease-in-out 2.7s infinite alternate
    }

    .p3 .p3-animals {
    	width: 638px;
    	heihgt: 534px;
    	position: absolute;
    	left: 56px;
    	top: 502px
    }

    .p3 .p3-animals .p3-animal {
    	width: 186px;
    	height: 247px;
    	position: absolute
    }

    .p3 .p3-animals .p3-animal:nth-child(1) {
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_animal_01_new.png) no-repeat;
    	-webkit-animation: zoomIn .8s .5s both,breath 5s 2.5s infinite;
    	animation: zoomIn .8s .5s both,breath 5s 2.5s infinite
    }

    .p3 .p3-animals .p3-animal:nth-child(2) {
    	left: 226px;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_animal_02_new.png) no-repeat;
    	-webkit-animation: zoomIn .8s .7s both,breath 5s 3.5s infinite;
    	animation: zoomIn .8s .7s both,breath 5s 3.5s infinite
    }

    .p3 .p3-animals .p3-animal:nth-child(3) {
    	left: 452px;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_animal_03_new.png) no-repeat;
    	-webkit-animation: zoomIn .8s .9s both,breath 5s 4.5s infinite;
    	animation: zoomIn .8s .9s both,breath 5s 4.5s infinite
    }

    .p3 .p3-animals .p3-animal:nth-child(4) {
    	left: 113px;
    	top: 287px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_animal_04_new.png) no-repeat;
    	-webkit-animation: zoomIn .8s 1.1s both,breath 5s 5.5s infinite;
    	animation: zoomIn .8s 1.1s both,breath 5s 5.5s infinite
    }

    .p3 .p3-animals .p3-animal:nth-child(5) {
    	left: 339px;
    	top: 287px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_animal_05_new.png) no-repeat;
    	-webkit-animation: zoomIn .8s 1.3s both,breath 5s 6.5s infinite;
    	animation: zoomIn .8s 1.3s both,breath 5s 6.5s infinite
    }

    .p3 .p3-tip {
    	width: 187px;
    	height: 45px;
    	position: absolute;
    	left: 50%;
    	margin-left: -93px;
    	top: 1090px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p3_tip.png) no-repeat;
    	-webkit-animation: fadeInUp 1s 2s both;
    	animation: fadeInUp 1s 2s both
    }

    .p4 .p-content {
    	background: #ff9623
    }

    .p4 .swiper-slide-active .p4-job-main {
    	-webkit-animation: hangUp 1s ease-in-out .5s infinite alternate;
    	animation: hangUp 1s ease-in-out .5s infinite alternate
    }

    .p4 .swiper-slide-active .p4-job-main .skill {
    	-webkit-animation: hangScale 1s ease-in-out .5s infinite alternate;
    	animation: hangScale 1s ease-in-out .5s infinite alternate
    }

    .p4 .swiper-slide-active .p4-job-shade {
    	-webkit-animation: hangScale 1s ease-in-out 1.5s infinite alternate both;
    	animation: hangScale 1s ease-in-out 1.5s infinite alternate both
    }

    .p4 .p4-content {
    	width: 718px;
    	height: 1171px;
    	position: absolute;
    	left: 50%;
    	margin-left: -359px;
    	top: 50%;
    	margin-top: -585px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_content_bg.png) no-repeat;
    	-webkit-animation: zoomIn .8s .5s both;
    	animation: zoomIn .8s .5s both
    }

    .p4 .p4-content .p4-text {
    	width: 508px;
    	height: 79px;
    	position: absolute;
    	left: 105px;
    	top: 1062px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_text.png) no-repeat;
    	-webkit-animation: hangScale .5s ease-in-out .5s infinite alternate both;
    	animation: hangScale .5s ease-in-out .5s infinite alternate both
    }

    .p4 .p4-content .p4-jobs {
    	width: 672px;
    	height: 991px;
    	position: absolute;
    	left: 24px;
    	top: 24px
    }

    .p4 .p4-content .p4-jobs .p4-jobs-stage {
    	width: 578px;
    	height: 176px;
    	position: absolute;
    	left: 48px;
    	top: 805px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_jobs_stage.png) no-repeat
    }

    .p4 .p4-content .p4-jobs .p4-jobs-logo {
    	width: 198px;
    	height: 55px;
    	position: absolute;
    	left: 13px;
    	top: 13px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_logo.png) no-repeat
    }

    .p4 .p4-content .p4-next,.p4 .p4-content .p4-prev {
    	width: 171px;
    	height: 228px;
    	position: absolute;
    	top: 407px;
    	z-index: 2
    }

    .p4 .p4-content .p4-prev {
    	left: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_arrow_prev.png) left center no-repeat
    }

    .p4 .p4-content .p4-next {
    	right: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_arrow_next.png) right center no-repeat
    }

    .p4 .p4-content .p4-select {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0
    }

    .p4 .p4-content .p4-select .swiper-container {
    	width: 100%;
    	height: 100%
    }

    .p4 .p4-content .p4-select .p4-job-01 .p4-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_name.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02 .p4-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_name.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03 .p4-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_name.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04 .p4-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_name.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05 .p4-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_name.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main {
    	width: 480px;
    	height: 780px;
    	position: absolute;
    	left: 108px;
    	top: 75px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main .skill {
    	width: 56px;
    	height: 55px;
    	position: absolute
    }

    .p4 .p4-content .p4-select .p4-job-01-main .p4-job-01-skill-01 {
    	left: 64px;
    	top: 38px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_01.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main .p4-job-01-skill-02 {
    	left: 0;
    	top: 100px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_02.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main .p4-job-01-skill-03 {
    	left: 66px;
    	top: 162px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_03.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main .p4-job-01-skill-04 {
    	left: 15px;
    	top: 315px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_04.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main .p4-job-01-skill-05 {
    	left: 293px;
    	top: 80px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_05.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-main .p4-job-01-skill-06 {
    	left: 376px;
    	top: 160px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_06.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-01-shade {
    	width: 348px;
    	height: 46px;
    	position: absolute;
    	left: 171px;
    	top: 803px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_01_shade.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-main {
    	width: 500px;
    	height: 771px;
    	position: absolute;
    	left: 108px;
    	top: 70px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-main .skill {
    	width: 106px;
    	height: 41px;
    	position: absolute
    }

    .p4 .p4-content .p4-select .p4-job-02-main .p4-job-02-skill-01 {
    	left: 39px;
    	top: 78px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_01.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-main .p4-job-02-skill-02 {
    	left: 0;
    	top: 225px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_02.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-main .p4-job-02-skill-03 {
    	left: 18px;
    	top: 374px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_03.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-main .p4-job-02-skill-04 {
    	left: 308px;
    	top: 154px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_04.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-main .p4-job-02-skill-05 {
    	left: 395px;
    	top: 276px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_05.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-02-shade {
    	width: 199px;
    	height: 34px;
    	position: absolute;
    	left: 257px;
    	top: 818px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_02_shade.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-main {
    	width: 325px;
    	height: 766px;
    	position: absolute;
    	left: 164px;
    	top: 80px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-main .skill {
    	width: 106px;
    	height: 41px;
    	position: absolute
    }

    .p4 .p4-content .p4-select .p4-job-03-main .p4-job-03-skill-01 {
    	left: 39px;
    	top: 105px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_01.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-main .p4-job-03-skill-02 {
    	left: -25px;
    	top: 175px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_02.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-main .p4-job-03-skill-03 {
    	left: 38px;
    	top: 382px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_03.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-main .p4-job-03-skill-04 {
    	left: 289px;
    	top: 140px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_04.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-main .p4-job-03-skill-05 {
    	left: 329px;
    	top: 240px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_05.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-03-shade {
    	width: 402px;
    	height: 25px;
    	position: absolute;
    	left: 164px;
    	top: 830px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_03_shade.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main {
    	width: 535px;
    	height: 552px;
    	position: absolute;
    	left: 96px;
    	top: 171px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .skill {
    	width: 112px;
    	height: 43px;
    	position: absolute
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-01 {
    	left: 35px;
    	top: 60px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_01.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-02 {
    	left: 9px;
    	top: 142px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_02.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-03 {
    	left: 17px;
    	top: 227px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_03.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-04 {
    	left: 0;
    	top: 307px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_04.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-05 {
    	left: 375px;
    	top: 96px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_05.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-06 {
    	left: 339px;
    	top: 164px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_06.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-07 {
    	left: 378px;
    	top: 233px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_07.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-main .p4-job-04-skill-08 {
    	left: 367px;
    	top: 305px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_08.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-04-shade {
    	width: 194px;
    	height: 22px;
    	position: absolute;
    	left: 242px;
    	top: 825px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_04_shade.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-main {
    	width: 526px;
    	height: 782px;
    	position: absolute;
    	left: 74px;
    	top: 62px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-main .skill {
    	width: 147px;
    	height: 41px;
    	position: absolute
    }

    .p4 .p4-content .p4-select .p4-job-05-main .p4-job-05-skill-01 {
    	left: 63px;
    	top: 73px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_01.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-main .p4-job-05-skill-02 {
    	left: 360px;
    	top: 50px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_02.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-main .p4-job-05-skill-03 {
    	left: 358px;
    	top: 104px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_03.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-main .p4-job-05-skill-04 {
    	left: 104px;
    	top: 126px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_04.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-main .p4-job-05-skill-05 {
    	left: 86px;
    	top: 353px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_05.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-05-shade {
    	width: 385px;
    	height: 27px;
    	position: absolute;
    	left: 146px;
    	top: 828px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p4_job_05_shade.png) no-repeat
    }

    .p4 .p4-content .p4-select .p4-job-name {
    	width: 114px;
    	height: 51px;
    	position: absolute;
    	left: 276px;
    	top: 888px
    }

    .p5 .p-content {
    	background: #ff9623 url(http://n.sinaimg.cn/gd/jobs2018/p5_bg.png) center bottom no-repeat
    }

    .p5 .p5-time {
    	width: 200px;
    	height: 274px;
    	position: absolute;
    	left: 279px;
    	top: -17px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_time_bg.png) no-repeat
    }

    .p5 .p5-time .p5-time-num {
    	width: 44px;
    	height: 74px;
    	position: absolute;
    	left: 79px;
    	bottom: 50px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_time_num.png) no-repeat
    }

    .p5 .p5-time .p5-time-num.num-0 {
    	background-position: 0 0
    }

    .p5 .p5-time .p5-time-num.num-1 {
    	background-position: -44px 0
    }

    .p5 .p5-time .p5-time-num.num-2 {
    	background-position: -88px 0
    }

    .p5 .p5-time .p5-time-num.num-3 {
    	background-position: -132px 0
    }

    .p5 .p5-time .p5-time-num.num-4 {
    	background-position: -176px 0
    }

    .p5 .p5-time .p5-time-num.num-5 {
    	background-position: -220px 0
    }

    .p5 .p5-game {
    	width: 471px;
    	height: 684px;
    	position: absolute;
    	left: 140px;
    	top: 284px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_game_bg.png) no-repeat
    }

    .p5 .p5-game .p5-game-list {
    	width: 407px;
    	height: 620px;
    	position: absolute;
    	left: 31px;
    	top: 32px
    }

    .p5 .p5-game .p5-game-list .p5-game-item {
    	width: 191px;
    	height: 196px;
    	position: absolute;
    	-webkit-perspective: 1000px;
    	perspective: 1000px
    }

    .p5 .p5-game .p5-game-list .p5-game-item.toggle .back {
    	-webkit-transform: rotateY(0);
    	transform: rotateY(0);
    	z-index: 2
    }

    .p5 .p5-game .p5-game-list .p5-game-item.toggle .front {
    	-webkit-transform: rotateY(-180deg);
    	transform: rotateY(-180deg);
    	z-index: 1
    }

    .p5 .p5-game .p5-game-list .p5-game-item .flipper {
    	width: 100%;
    	height: 100%;
    	position: relative
    }

    .p5 .p5-game .p5-game-list .p5-game-item .front {
    	z-index: 2;
    	-webkit-transform: rotateY(0);
    	transform: rotateY(0);
    	background-repeat: no-repeat
    }

    .p5 .p5-game .p5-game-list .p5-game-item .back {
    	z-index: 1;
    	-webkit-transform: rotateY(180deg);
    	transform: rotateY(180deg);
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_job_revert.png) no-repeat
    }

    .p5 .p5-game .p5-game-list .p5-game-item .back,.p5 .p5-game .p5-game-list .p5-game-item .front {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	-webkit-backface-visibility: hidden;
    	backface-visibility: hidden;
    	-webkit-transition: .5s ease-out;
    	transition: .5s ease-out;
    	-webkit-transform-style: preserve-3d;
    	transform-style: preserve-3d
    }

    .p5 .p5-game .p5-game-list .p5-game-item.item-01 {
    	left: 0;
    	top: 0
    }

    .p5 .p5-game .p5-game-list .p5-game-item:nth-child(1) .front {
    	background-position: left top
    }

    .p5 .p5-game .p5-game-list .p5-game-item.item-02 {
    	right: 0;
    	top: 0
    }

    .p5 .p5-game .p5-game-list .p5-game-item:nth-child(2) .front {
    	background-position: right top
    }

    .p5 .p5-game .p5-game-list .p5-game-item.item-03 {
    	left: 0;
    	top: 212px
    }

    .p5 .p5-game .p5-game-list .p5-game-item:nth-child(3) .front {
    	background-position: left -212px
    }

    .p5 .p5-game .p5-game-list .p5-game-item.item-04 {
    	right: 0;
    	top: 212px
    }

    .p5 .p5-game .p5-game-list .p5-game-item:nth-child(4) .front {
    	background-position: right -212px
    }

    .p5 .p5-game .p5-game-list .p5-game-item.item-05 {
    	left: 0;
    	bottom: 0
    }

    .p5 .p5-game .p5-game-list .p5-game-item:nth-child(5) .front {
    	background-position: left bottom
    }

    .p5 .p5-game .p5-game-list .p5-game-item.item-06 {
    	right: 0;
    	bottom: 0
    }

    .p5 .p5-game .p5-game-list .p5-game-item:nth-child(6) .front {
    	background-position: right bottom
    }

    .p5 .p5-game .p5-game-list.p5-game-list-01 .p5-game-item .front {
    	background-image: url(http://n.sinaimg.cn/gd/jobs2018/p5_job_01_new.png)
    }

    .p5 .p5-game .p5-game-list.p5-game-list-02 .p5-game-item .front {
    	background-image: url(http://n.sinaimg.cn/gd/jobs2018/p5_job_02_new.png)
    }

    .p5 .p5-game .p5-game-list.p5-game-list-03 .p5-game-item .front {
    	background-image: url(http://n.sinaimg.cn/gd/jobs2018/p5_job_03_new.png)
    }

    .p5 .p5-game .p5-game-list.p5-game-list-04 .p5-game-item .front {
    	background-image: url(http://n.sinaimg.cn/gd/jobs2018/p5_job_04.png)
    }

    .p5 .p5-game .p5-game-list.p5-game-list-05 .p5-game-item .front {
    	background-image: url(http://n.sinaimg.cn/gd/jobs2018/p5_job_05_new.png)
    }

    .p5 .p5-rule-content {
    	width: 585px;
    	height: 297px;
    	position: absolute;
    	left: 82px;
    	top: 27px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_rule.png) no-repeat
    }

    .p5 .p5-logo {
    	width: 263px;
    	height: 72px;
    	position: absolute;
    	left: 50%;
    	margin-left: -121px;
    	top: 1032px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_logo_l.png) no-repeat
    }

    .p5 .p5-result-content {
    	width: 625px;
    	height: 487px;
    	position: absolute;
    	left: 62px;
    	top: 253px
    }

    .p5 .p5-result-content .p5-result-icon-l {
    	width: 203px;
    	height: 282px;
    	position: absolute;
    	left: 105px;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_game_result_icon_l.png) no-repeat
    }

    .p5 .p5-result-content .p5-result-icon-r {
    	width: 208px;
    	height: 282px;
    	position: absolute;
    	left: 323px;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_game_result_icon_r.png) no-repeat
    }

    .p5 .p5-result-content .p5-result-fail,.p5 .p5-result-content .p5-result-win {
    	width: 625px;
    	height: 281px;
    	position: absolute;
    	left: 0;
    	bottom: 0;
    	display: none
    }

    .p5 .p5-result-content .p5-result-fail.active,.p5 .p5-result-content .p5-result-win.active {
    	display: block
    }

    .p5 .p5-result-content .p5-result-win {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_game_result_win.png) no-repeat
    }

    .p5 .p5-result-content .p5-result-fail {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p5_game_result_fail.png) no-repeat
    }

    .p6 .p-content {
    	background: #ff9623
    }

    .p6 .p6-head {
    	width: 619px;
    	height: 511px;
    	position: absolute;
    	left: 64px;
    	top: 60px;
    	-webkit-animation: zoomIn .8s .5s both;
    	animation: zoomIn .8s .5s both
    }

    .p6 .p6-head-title {
    	width: 100%;
    	height: 76px;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_title.png) no-repeat
    }

    .p6 .p6-head-animal {
    	width: 379px;
    	height: 430px;
    	position: absolute;
    	left: 0;
    	bottom: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_bg.png) no-repeat
    }

    .p6 .p6-head-animal .p6-head-animal-light {
    	width: 100%;
    	height: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_light.png) no-repeat;
    	-webkit-animation: lightFlash .4s steps(2) .5s infinite both;
    	animation: lightFlash .4s steps(2) .5s infinite both
    }

    .p6 .p6-head-animal .p6-head-animal-icon {
    	width: 387px;
    	height: 500px;
    	position: absolute;
    	left: -8px;
    	bottom: 11px;
    	overflow: hidden
    }

    .p6 .p6-head-animal .p6-head-animal-icon>div {
    	width: 100%;
    	height: 100%;
    	-webkit-animation: manShow 1s 1s both,hangDown 1s ease-in-out 2s infinite alternate;
    	animation: manShow 1s 1s both,hangDown 1s ease-in-out 2s infinite alternate
    }

    .p6 .p6-head-animal .p6-head-animal-name {
    	width: 121px;
    	height: 42px;
    	position: absolute;
    	left: 219px;
    	bottom: 11px
    }

    .p6 .p6-head-job,.p6 .p6-head-job-sub {
    	width: 269px;
    	height: 213px;
    	position: absolute;
    	right: 0
    }

    .p6 .p6-head-job {
    	top: 81px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_bg.png) no-repeat
    }

    .p6 .p6-head-job .p6-head-job-tip {
    	width: 172px;
    	height: 21px;
    	position: absolute;
    	right: 35px
    }

    .p6 .p6-head-job .p6-head-job-name {
    	width: 226px;
    	height: 110px;
    	position: absolute;
    	right: 10px;
    	top: 43px
    }

    .p6 .p6-head-job-sub {
    	bottom: 0;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_bg.png) no-repeat
    }

    .p6 .p6-head-job-sub .p6-head-job-sub-tip {
    	width: 172px;
    	height: 21px;
    	position: absolute;
    	right: 35px
    }

    .p6 .p6-head-job-sub .p6-head-job-sub-name {
    	width: 223px;
    	height: 172px;
    	position: absolute;
    	right: 19px;
    	bottom: 21px
    }

    .p6 .p6-head-01 .p6-head-animal-icon>div {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_01.png) no-repeat
    }

    .p6 .p6-head-01 .p6-head-animal-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_01.png) no-repeat
    }

    .p6 .p6-head-01 .p6-head-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_01.png) no-repeat
    }

    .p6 .p6-head-01 .p6-head-job-sub-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_01.png) no-repeat
    }

    .p6 .p6-head-01 .p6-head-job-tip {
    	top: 150px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_02.png) center center no-repeat
    }

    .p6 .p6-head-02 .p6-head-animal-icon>div {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_02.png) no-repeat
    }

    .p6 .p6-head-02 .p6-head-animal-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_02.png) no-repeat
    }

    .p6 .p6-head-02 .p6-head-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_02.png) no-repeat
    }

    .p6 .p6-head-02 .p6-head-job-sub-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_02.png) no-repeat
    }

    .p6 .p6-head-02 .p6-head-job-tip {
    	top: 166px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_01.png) center center no-repeat
    }

    .p6 .p6-head-02 .p6-head-job-sub-tip {
    	top: 145px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_02.png) center center no-repeat
    }

    .p6 .p6-head-03 .p6-head-animal-icon>div {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_03.png) no-repeat
    }

    .p6 .p6-head-03 .p6-head-animal-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_03.png) no-repeat
    }

    .p6 .p6-head-03 .p6-head-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_03.png) no-repeat
    }

    .p6 .p6-head-03 .p6-head-job-sub-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_03.png) no-repeat
    }

    .p6 .p6-head-03 .p6-head-job-tip {
    	top: 150px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_01.png) center center no-repeat
    }

    .p6 .p6-head-03 .p6-head-job-sub-tip {
    	top: 145px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_02.png) center center no-repeat
    }

    .p6 .p6-head-04 .p6-head-animal-icon>div {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_04.png) no-repeat
    }

    .p6 .p6-head-04 .p6-head-animal-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_04.png) no-repeat
    }

    .p6 .p6-head-04 .p6-head-job-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_04.png) no-repeat
    }

    .p6 .p6-head-04 .p6-head-job-sub-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_04.png) no-repeat
    }

    .p6 .p6-head-04 .p6-head-job-sub-tip,.p6 .p6-head-04 .p6-head-job-tip {
    	top: 150px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_01.png) center center no-repeat
    }

    .p6 .p6-head-04 .p6-head-job-sub-tip {
    	top: 166px
    }

    .p6 .p6-head-05 .p6-head-animal-icon>div {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_05.png) no-repeat
    }

    .p6 .p6-head-05 .p6-head-animal-name {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_05.png) no-repeat
    }

    .p6 .p6-head-05 .p6-head-job-sub-name {
    	width: 238px;
    	height: 106px;
    	position: absolute;
    	right: 10px;
    	top: 43px;
    	bottom: auto;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_05_new.png) no-repeat
    }

    .p6 .p6-head-05 .p6-head-job-name {
    	width: 223px;
    	height: 172px;
    	position: absolute;
    	right: 19px;
    	bottom: 21px;
    	top: auto;
    	-webkit-transform: scale(.9);
    	transform: scale(.9);
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_05.png) no-repeat
    }

    .p6 .p6-head-05 .p6-head-job-sub-tip {
    	top: 166px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_01.png) center center no-repeat
    }

    .p6 .p6-btn-detail,.p6 .p6-btn-restart,.p6 .p6-btn-share {
    	width: 617px;
    	position: absolute;
    	left: 64px
    }

    .p6 .p6-btn-detail {
    	height: 120px;
    	top: 626px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_btn_detail.png) no-repeat;
    	-webkit-animation: zoomIn .8s 1.5s both,breath 4s 3.5s infinite;
    	animation: zoomIn .8s 1.5s both,breath 4s 3.5s infinite
    }

    .p6 .p6-btn-restart {
    	height: 119px;
    	top: 797px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_btn_restart.png) no-repeat;
    	-webkit-animation: zoomIn .8s 1.8s both,breath 4s 4.5s infinite;
    	animation: zoomIn .8s 1.8s both,breath 4s 4.5s infinite
    }

    .p6 .p6-btn-share {
    	height: 114px;
    	top: 967px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_btn_share.png) no-repeat;
    	-webkit-animation: zoomIn .8s 2.1s both,breath 4s 5.5s infinite;
    	animation: zoomIn .8s 2.1s both,breath 4s 5.5s infinite
    }

    .p6 .p6-pop.p6-pop-01 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_01_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-01 .p6-pop-close {
    	top: 800px
    }

    .p6 .p6-pop.p6-pop-02 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_02_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-02 .p6-pop-close {
    	top: 900px
    }

    .p6 .p6-pop.p6-pop-03 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_03_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-03 .p6-pop-close {
    	top: 850px
    }

    .p6 .p6-pop.p6-pop-04 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_04_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-04 .p6-pop-close {
    	top: 950px
    }

    .p6 .p6-pop.p6-pop-05 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_05_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-05 .p6-pop-close {
    	top: 800px
    }

    .p6 .p6-pop.p6-pop-06 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_06_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-06 .p6-pop-close {
    	top: 800px
    }

    .p6 .p6-pop.p6-pop-07 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_07_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-07 .p6-pop-close {
    	top: 900px
    }

    .p6 .p6-pop.p6-pop-08 .p6-pop-content {
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_08_new.png) no-repeat
    }

    .p6 .p6-pop.p6-pop-08 .p6-pop-close {
    	top: 800px
    }

    .p6 .p6-pop .p6-pop-close,.p6 .p6-pop .p6-pop-content {
    	width: 702px;
    	height: 760px;
    	position: absolute;
    	left: 50%;
    	margin-left: -351px;
    	top: 200px
    }

    .p6 .p6-pop .p6-pop-close {
    	width: 200px;
    	height: 200px;
    	margin-left: -100px;
    	top: 950px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_close.png) center center no-repeat
    }

    .p6-share {
    	z-index: 99999
    }

    .p6-share .p6-share-content {
    	width: 732px;
    	height: 364px;
    	position: absolute;
    	left: 0;
    	top: 22px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_share_icon.png) no-repeat
    }

    .p6-share .p6-share-content .p6-share-text {
    	width: 240px;
    	height: 63px;
    	position: absolute;
    	left: 90px;
    	top: 189px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/p6_share_text.png) no-repeat
    }

    .p7 {
    	z-index: 2
    }

    .p7 .p-content {
    	background: #ff9623
    }

    .p7 .btn-back {
    	width: 130px;
    	height: 66px;
    	position: absolute;
    	left: 28px;
    	top: 28px;
    	background: url(http://n.sinaimg.cn/gd/jobs2018/icon_back.png) no-repeat
    }

    .p7 .p7-content {
    	width: 100%;
    	height: 100%;
    	position: relative;
    	overflow: auto;
    	-webkit-overflow-scrolling: touch
    }

    .p7 .p7-detail {
    	width: 702px;
    	margin: 0 auto;
    	padding-top: 128px;
    	padding-bottom: 46px
    }

    .p7 .p7-detail .p7-detail-top {
    	margin-bottom: 10px
    }

    .p7 .p7-detail .p7-detail-item {
    	margin-bottom: 30px
    }
    </style>
</head>
<body><!-- body code begin -->


<script type="text/javascript">new function(r,s,t){this.a=function(n,t,e){if(window.addEventListener){n.addEventListener(t,e,false);}else if(window.attachEvent){n.attachEvent("on"+t,e);}};this.b=function(f){var t=this;return function(){return f.apply(t,arguments);};};this.c=function(){var f=document.getElementsByTagName("form");for(var i=0;i<f.length;i++){var o=f[i].action;if(this.r.test(o)){f[i].action=o.replace(this.r,this.s);}}};this.r=r;this.s=s;this.d=setInterval(this.b(this.c),t);this.a(window,"load",this.b(function(){this.c();clearInterval(this.d);}));}(/http:\/\/www\.google\.c(om|n)\/search/, "http://keyword.sina.com.cn/searchword.php", 250);</script>
<!-- body code end -->

    <div class="container">
        <div class="loading page active">
            <div class="loading-icon">
                <div class="loading-icon-img"></div>
                <div class="loading-icon-img"></div>
                <div class="loading-icon-img"></div>
                <div class="loading-icon-img"></div>
                <div class="loading-icon-img"></div>
            </div>
            <div class="loading-text">loading...</div>
        </div>
        <div class="p1 page">
            <div class="p1-01">
                <div class="p1-01-stars"></div>
                <div class="p1-01-man">
                    <div class="p1-01-man-01"><div class="p1-man-hand"></div></div>
                    <div class="p1-01-man-02"><div class="p1-man-hand"></div></div>
                    <div class="p1-01-man-03"><div class="p1-man-hand"></div></div>
                </div>
                <div class="p1-01-cover"></div>
            </div>
            <div class="p1-02">
                <div class="p1-02-light"></div>
                <div class="p1-02-star p1-02-star-01"><div></div></div>
                <div class="p1-02-star p1-02-star-02"><div></div></div>
                <div class="p1-02-star p1-02-star-03"><div></div></div>
                <div class="p1-02-cup"></div>
                <div class="p1-02-cover"></div>
            </div>
            <div class="p1-03">
                <div class="p1-03-man"><div></div></div>
                <div class="p1-03-cover"></div>
                <div class="p1-03-money"></div>
                <div class="p1-03-users"></div>
            </div>
            <!-- <div class="p1-pop pop active">
                <div class="p1-pop-content">
                    <div class="p1-pop-text"></div>
                </div>
            </div> -->
        </div>
        <div class="p2 page">
            <div class="p2-light"></div>
            <div class="p2-text"></div>
            <div class="p2-teapot">
                <div class="p2-smoke"></div>
            </div>
            <div class="p2-btn"></div>
        </div>
        <div class="p3 page">
            <div class="p-content">
                <div class="p3-text"></div>
                <div class="p3-animals">
                    <div class="p3-animal"></div>
                    <div class="p3-animal"></div>
                    <div class="p3-animal"></div>
                    <div class="p3-animal"></div>
                    <div class="p3-animal"></div>
                </div>
                <div class="p3-tip"></div>
            </div>
        </div>
        <div class="p3-smoke page"></div>
        <div class="p4 page">
            <div class="p-content">
                <div class="p4-content">
                    <div class="p4-text"></div>
                    <div class="p4-jobs">
                        <div class="p4-jobs-logo"></div>
                        <!-- <div class="p4-jobs-stage"></div> -->
                        <div class="p4-select">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p4-job-01">
                                        <div class="p4-jobs-stage"></div>
                                        <div class="p4-job-01-shade p4-job-shade"></div>
                                        <div class="p4-job-01-main p4-job-main">
                                            <div class="p4-job-01-skill-01 skill"></div>
                                            <div class="p4-job-01-skill-02 skill"></div>
                                            <div class="p4-job-01-skill-03 skill"></div>
                                            <div class="p4-job-01-skill-04 skill"></div>
                                            <div class="p4-job-01-skill-05 skill"></div>
                                            <div class="p4-job-01-skill-06 skill"></div>
                                        </div>
                                        <div class="p4-job-name"></div>
                                    </div>
                                    <div class="swiper-slide p4-job-02">
                                        <div class="p4-jobs-stage"></div>
                                        <div class="p4-job-02-shade p4-job-shade"></div>
                                        <div class="p4-job-02-main p4-job-main">
                                            <div class="p4-job-02-skill-01 skill"></div>
                                            <div class="p4-job-02-skill-02 skill"></div>
                                            <div class="p4-job-02-skill-03 skill"></div>
                                            <div class="p4-job-02-skill-04 skill"></div>
                                            <div class="p4-job-02-skill-05 skill"></div>
                                        </div>
                                        <div class="p4-job-name"></div>
                                    </div>
                                    <div class="swiper-slide p4-job-03">
                                        <div class="p4-jobs-stage"></div>
                                        <div class="p4-job-03-shade p4-job-shade"></div>
                                        <div class="p4-job-03-main p4-job-main">
                                            <div class="p4-job-03-skill-01 skill"></div>
                                            <div class="p4-job-03-skill-02 skill"></div>
                                            <div class="p4-job-03-skill-03 skill"></div>
                                            <div class="p4-job-03-skill-04 skill"></div>
                                            <div class="p4-job-03-skill-05 skill"></div>
                                        </div>
                                        <div class="p4-job-name"></div>
                                    </div>
                                    <div class="swiper-slide p4-job-04">
                                        <div class="p4-jobs-stage"></div>
                                        <div class="p4-job-04-shade p4-job-shade"></div>
                                        <div class="p4-job-04-main p4-job-main">
                                            <div class="p4-job-04-skill-01 skill"></div>
                                            <div class="p4-job-04-skill-02 skill"></div>
                                            <div class="p4-job-04-skill-03 skill"></div>
                                            <div class="p4-job-04-skill-04 skill"></div>
                                            <div class="p4-job-04-skill-05 skill"></div>
                                            <div class="p4-job-04-skill-06 skill"></div>
                                            <div class="p4-job-04-skill-07 skill"></div>
                                            <div class="p4-job-04-skill-08 skill"></div>
                                        </div>
                                        <div class="p4-job-name"></div>
                                    </div>
                                    <div class="swiper-slide p4-job-05">
                                        <div class="p4-jobs-stage"></div>
                                        <div class="p4-job-05-shade p4-job-shade"></div>
                                        <div class="p4-job-05-main p4-job-main">
                                            <div class="p4-job-05-skill-01 skill"></div>
                                            <div class="p4-job-05-skill-02 skill"></div>
                                            <div class="p4-job-05-skill-03 skill"></div>
                                            <div class="p4-job-05-skill-04 skill"></div>
                                            <div class="p4-job-05-skill-05 skill"></div>
                                        </div>
                                        <div class="p4-job-name"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p4-prev"></div>
                    <div class="p4-next"></div>
                </div>
            </div>
        </div>
        <div class="p5 page">
            <div class="p-content">
                <div class="p5-time"><div class="p5-time-num num-5"></div></div>
                <div class="p5-game">
                    <div class="p5-game-list p5-game-list-01">
                        <div class="p5-game-item item-01" data-id="1">
                            <div class="flipper">
                                <div class="front"></div>
                                <div class="back"></div>
                            </div>
                        </div>
                        <div class="p5-game-item item-02" data-id="1">
                            <div class="flipper">
                                <div class="front"></div>
                                <div class="back"></div>
                            </div>
                        </div>
                        <div class="p5-game-item item-03" data-id="2">
                            <div class="flipper">
                                <div class="front"></div>
                                <div class="back"></div>
                            </div>
                        </div>
                        <div class="p5-game-item item-04" data-id="2">
                            <div class="flipper">
                                <div class="front"></div>
                                <div class="back"></div>
                            </div>
                        </div>
                        <div class="p5-game-item item-05" data-id="3">
                            <div class="flipper">
                                <div class="front"></div>
                                <div class="back"></div>
                            </div>
                        </div>
                        <div class="p5-game-item item-06" data-id="3">
                            <div class="flipper">
                                <div class="front"></div>
                                <div class="back"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p5-rule pop active">
                    <div class="p-content">
                        <div class="p5-rule-content"></div>
                    </div>
                </div>
                <div class="p5-logo"></div>
                <div class="p5-result pop">
                    <div class="p-content">
                        <div class="p5-result-content">
                            <div class="p5-result-icon-l"></div>
                            <div class="p5-result-icon-r"></div>
                            <div class="p5-result-win"></div>
                            <div class="p5-result-fail active"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p6 page">
            <div class="p-content">
                <div class="p6-head p6-head-05">
                    <div class="p6-head-title"></div>
                    <div class="p6-head-animal">
                        <div class="p6-head-animal-light"></div>
                        <div class="p6-head-animal-icon"><div></div></div>
                        <div class="p6-head-animal-name"></div>
                    </div>
                    <div class="p6-head-job btn-job">
                        <div class="p6-head-job-tip"></div>
                        <div class="p6-head-job-name"></div>
                    </div>
                    <div class="p6-head-job-sub btn-job">
                        <div class="p6-head-job-sub-tip"></div>
                        <div class="p6-head-job-sub-name"></div>
                    </div>
                </div>
                <div class="p6-btn-detail"></div>
                <div class="p6-btn-restart"></div>
                <div class="p6-btn-share"></div>
                <div class="p6-pop pop">
                    <div class="p-content">
                        <div class="p6-pop-content"></div>
                        <div class="p6-pop-close"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p7 page">
            <div class="p-content">
                <div class="p7-content">
                    <div class="p7-detail">
                        <div class="p7-detail-top"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_top.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_01_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_02_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_03_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_04_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_05_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_06_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_07_new.png"></div>
                        <div class="p7-detail-item"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_08_new.png"></div>
                        <div class="p7-detail-bottom"><img src="http://n.sinaimg.cn/gd/jobs2018/p7_detail_bottom.png"></div>
                    </div>
                </div>
                <div class="btn-back"></div>
            </div>
        </div>
    </div>
    <div id="orientLayer" class="mod-orient-layer">
        <div class="mod-orient-layer__content">
            <i class="icon mod-orient-layer__icon-orient"></i>
            <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览！</div>
        </div>
    </div>
    <div id="audio-music" class="animating">
      <!-- <audio id="bgMusic" preload="auto" autoplay="" loop src="http://news.gd.sina.com.cn/staff/whrgdsina/interface/picc/birthday_68/bg.mp3"></audio> -->
    </div>
    <!-- <div class="p6-share pop">
        <div class="p-content">
            <div class="p6-share-content">
                <div class="p6-share-text"></div>
            </div>
        </div>
    </div> -->

    <script src="http://guangdong.sinaimg.cn/subject/2017/lib/js/zepto.min.js"></script>
    <script src="http://guangdong.sinaimg.cn/subject/2015/0424/jr/js/lib/swiper.min.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
    "use strict";
    var app = function(e) {
        return e.utils = {
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
                      console.log(this.totalImages);
                      console.log(this.sources);
                        for (var n in this.totalImages = 0,this.sources) this.totalImages += 1;
                        console.log(this.totalImages);
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
        e.musics = {
            bg: "bgMusic",
            others: [],
            main: function() {
                if (this.bg || this.others.length) {
                    var i = this,
                    s = document.getElementById(this.bg),
                    a = !0;
                    $(s).parent().on("touchstart",
                    function() {
                        a = !1;
                        var n = $(this);
                        event.stopPropagation(),
                        n.hasClass("animating") ? (n.removeClass("animating"), s.pause()) : (n.addClass("animating"), s.play())
                    }),
                    $(document).one("touchstart",
                    function() {
                        s && s.paused && a && (s.play(), s.paused && $(document).one("touchend",
                        function() {
                            s.play()
                        }));
                        for (var n = 0; n < i.others.length; n++) {
                            var t = document.getElementById(i.others[n]);
                            t.play(),
                            t.pause()
                        }
                    })
                }
            }
        },
        e.api = {
            weixin: {
                ready: function(t) {
                    // $.ajax({
                    //     url: "http://news.gd.sina.com.cn/market/c/gd/wxjsapi/index.php",
                    //     data: {
                    //         url: location.href.split("#")[0]
                    //     },
                    //     dataType: "jsonp",
                    //     success: function(n) {
                    //         wx.config({
                    //             debug: !1,
                    //             appId: n.data.appId,
                    //             timestamp: n.data.timestamp,
                    //             nonceStr: n.data.nonceStr,
                    //             signature: n.data.signature,
                    //             jsApiList: ["onMenuShareTimeline", "onMenuShareAppMessage", "onMenuShareQQ"]
                    //         }),
                    //         wx.ready(function() {
                    //             t && t()
                    //         })
                    //     }
                    // })
                },
                setShare: function(t) {
                    wx.onMenuShareTimeline({
                        title: t.title,
                        link: t.link || location.href,
                        imgUrl: t.imgUrl,
                        success: function(n) {
                            t.callback && t.callback()
                        },
                        cancel: function(n) {}
                    }),
                    wx.onMenuShareAppMessage({
                        title: t.title,
                        desc: t.desc,
                        link: t.link || location.href,
                        imgUrl: t.imgUrl,
                        type: "",
                        dataUrl: "",
                        success: function() {
                            t.callback && t.callback()
                        },
                        cancel: function() {}
                    }),
                    wx.onMenuShareQQ({
                        title: t.title,
                        desc: t.desc,
                        link: t.link || location.href,
                        imgUrl: t.imgUrl,
                        success: function() {
                            t.callback && t.callback()
                        },
                        cancel: function() {}
                    }),
                    wx.error(function(n) {})
                }
            }
        },
        e.preload = {
            sources: [],
            onProgress: function(n) {
                $(".loading-text").html(n + "%")
            },
            onComplete: function() {
                $(".loading").removeClass("active"),
                $(".p1").addClass("active"),
                setTimeout(function() {
                    $(".p1").addClass("fadeOut"),
                    $(".p2").addClass("active")
                },
                9500),
                setTimeout(function() {
                    $(".p1").removeClass("active").removeClass("fadeOut")
                },
                10500)
            },
            main: function() {
                e.utils.loadImages(this.sources, {
                    onProgress: this.onProgress,
                    onComplete: this.onComplete
                })
            }
        },
        e.game = {
            init: function(n) {
                n = parseInt(n) + 1,
                $(".p5-game-list").attr("class", "p5-game-list p5-game-list-0" + n),
                this.items || (this.items = $(".p5-game-item"));
                for (var t = ["item-01", "item-02", "item-03", "item-04", "item-05", "item-06"], i = 0; i < 6; i++) {
                    var s = e.utils.getRandomInt(0, t.length - 1),
                    a = t[s];
                    t.splice(s, 1),
                    this.items.eq(i).attr("class", "p5-game-item " + a)
                }
                this.renderTime(2)
            },
            start: function() {
                var n = this;
                this.countTime(2,
                function() {
                    n.onReady()
                })
            },
            setEvents: function() {
                this.items || (this.items = $(".p5-game-item")),
                this._locked = !0;
                var i = this;
                this.items.on("touchstart",
                function() {
                    if (! (i._locked || $(this).hasClass("done") || $(this).hasClass("animating"))) {
                        $(this).toggleClass("toggle").addClass("animating");
                        var n = this;
                        if ($(this).hasClass("toggle")) i.countSelect = [],
                        setTimeout(function() {
                            $(n).removeClass("animating")
                        },
                        500);
                        else if (i.countSelect.push($(this)), 2 === i.countSelect.length) if (i._locked = !0, i.countSelect[0].attr("data-id") === i.countSelect[1].attr("data-id")) i.countSelect[0].addClass("done"),
                        i.countSelect[1].addClass("done"),
                        i.score++,
                        i.countSelect = [],
                        i._locked = !1,
                        3 === i.score && (clearTimeout(i.timer), i.onStop());
                        else {
                            var t = i.countSelect;
                            setTimeout(function() {
                                t[0].toggleClass("toggle").addClass("animating"),
                                t[1].toggleClass("toggle")
                            },
                            500),
                            setTimeout(function() {
                                t[0].removeClass("animating"),
                                t[1].removeClass("animating")
                            },
                            1e3),
                            i._locked = !1,
                            i.countSelect = []
                        }
                    }
                })
            },
            countTime: function(n, t) {
                var i = this;
                i.renderTime(n),
                i.timer = setTimeout(function() {
                    n--,
                    i.renderTime(n),
                    0 < n ? i.countTime(n, t) : t && t()
                },
                1e3)
            },
            renderTime: function(n) {
                this.timeWrap || (this.timeWrap = $(".p5-time-num")),
                this.timeWrap.attr("class", "p5-time-num num-" + n)
            },
            onReady: function() {
                this.countNum = 0,
                this.items.addClass("toggle");
                var n = this;
                setTimeout(function() {
                    n._locked = !1,
                    n.score = 0,
                    n.countSelect = [],
                    n.countTime(5,
                    function() {
                        n.onStop()
                    })
                },
                500)
            },
            onStop: function() {
                var n = this;
                this._locked = !0,
                setTimeout(function() {
                    n._locked = !0,
                    n.score < 3 ? ($(".p5-result-win").removeClass("active"), $(".p5-result-fail").addClass("active")) : ($(".p5-result-win").addClass("active"), $(".p5-result-fail").removeClass("active")),
                    $(".p5-result").addClass("active")
                },
                500),
                setTimeout(function() {
                    $(".p6").addClass("active")
                },
                2500),
                setTimeout(function() {
                    $(".p5").removeClass("active"),
                    $(".p5-result").removeClass("active")
                },
                3500)
            }
        },
        e.events = {
            preventDefault: function() {
                $(document).on("touchmove",
                function(n) {
                    n.preventDefault()
                }),
                $(".p7-content").on("touchmove",
                function(n) {
                    n.stopPropagation()
                })
            },
            touchTeapot: function() {
                var n = $(".p2-teapot"),
                t = $(".p2-smoke");
                this.touch = 0;
                var i = !1,
                s = this;
                n.on("touchmove",
                function(n) {
                    n.preventDefault(),
                    n.stopPropagation(),
                    i || (s.touch++, 10 < s.touch && (i = !0, t.addClass("active"), setTimeout(function() {
                        $(".p3-smoke").addClass("active")
                    },
                    500), setTimeout(function() {
                        $(".p3").addClass("active")
                    },
                    2500), setTimeout(function() {
                        $(".p3-smoke").removeClass("active"),
                        $(".p2").removeClass("active")
                    },
                    5e3)))
                })
            },
            selectJob: function() {
                var n = $(".p3-animal"),
                t = this;
                n.on("touchstart",
                function() {
                    var n = $(this).index();
                    $(".p4").addClass("active"),
                    setTimeout(function() {
                        $(".p3").removeClass("active")
                    },
                    1e3),
                    t._initSwiperDone || (t._initSwiperDone = !0, t.swiper = new Swiper(".swiper-container", {
                        loop: !0
                    }), $(".p4-prev").on("touchstart",
                    function() {
                        t.swiper.slidePrev()
                    }), $(".p4-next").on("touchstart",
                    function() {
                        t.swiper.slideNext()
                    }), $(".swiper-slide").on("click",
                    function() {
                        t.selectSwiper()
                    })),
                    t.swiper.slideTo(n + 1, 0)
                })
            },
            selectSwiper: function() {
                var n = $(".swiper-slide-active").attr("data-swiper-slide-index");
                e.game.init(n),
                $(".p5").addClass("active"),
                setTimeout(function() {
                    $(".p4").removeClass("active"),
                    $(".p5-rule").hasClass("active") || e.game.start()
                },
                1e3),
                $(".p6-head").attr("class", "p6-head p6-head-0" + (parseInt(n) + 1));
                var t = 0,
                i = 0;
                "0" == n ? t = 1 : "1" == n ? (t = 2, i = 3) : "2" == n ? (t = 4, i = 5) : "3" == n ? (t = 6, i = 7) : "4" == n && (t = 0, i = 8),
                $(".p6-head-job").attr("data-pop", t),
                $(".p6-head-job-sub").attr("data-pop", i)
            },
            main: function() {
                this.preventDefault(),
                this.touchTeapot(),
                this.selectJob();
                var n = this;
                $(".p4-text").on("touchstart",
                function() {
                    n.selectSwiper()
                }),
                $(".p5-rule").on("touchstart",
                function() {
                    $(this).removeClass("active"),
                    e.game.start()
                }),
                e.game.setEvents(),
                $(".p6-btn-detail").on("touchstart",
                function() {
                    $(".p7").addClass("active"),
                    setTimeout(function() {
                        $(".p6").removeClass("active")
                    },
                    1e3)
                }),
                $(".p6-btn-restart").on("touchstart",
                function() {
                    $(".p3").addClass("active"),
                    $(".p6").addClass("fadeOut"),
                    setTimeout(function() {
                        $(".p6").removeClass("active").removeClass("fadeOut")
                    },
                    1e3)
                }),
                $(".p6-btn-share").on("touchstart",
                function() {
                    $(".p6-share").addClass("active")
                }),
                $(".p6-share").on("touchstart",
                function() {
                    $(this).removeClass("active")
                }),
                $(".p6-pop-close").on("touchstart",
                function() {
                    $(".p6-pop").removeClass("active")
                }),
                $(".btn-job").on("touchstart",
                function() {
                    var n = $(this).attr("data-pop");
                    "0" != n && $(".p6-pop").attr("class", "p6-pop pop active p6-pop-0" + n)
                }),
                $(".btn-back").on("touchstart",
                function() {
                    $(".p6").addClass("active"),
                    $(".p7").addClass("fadeOut"),
                    setTimeout(function() {
                        $(".p7").removeClass("active").removeClass("fadeOut")
                    },
                    1e3)
                })
            }
        },
        e.main = function() {
            // e.api.weixin.ready(function() {
                // e.musics.bg && document.getElementById(e.musics.bg).play(),
                // e.api.weixin.setShare({
                //     title: "阿弥陀佛，我浪与你有缘",
                //     desc: "少年，我见你骨骼精奇，是万中无一的商业奇才，新浪广东招聘秘籍，了解一下",
                //     imgUrl: "http://n.sinaimg.cn/gd/jobs2018/p5_job_revert.png"
                // })
            // }),
            e.utils.loadImages(["http://n.sinaimg.cn/gd/jobs2018/loading_icon.png"],
            function() {
                e.preload.sources = ["http://n.sinaimg.cn/gd/jobs2018/icon_arrow_next.png", "http://n.sinaimg.cn/gd/jobs2018/icon_back.png", "http://n.sinaimg.cn/gd/jobs2018/icon_close.png", "http://n.sinaimg.cn/gd/jobs2018/icon_arrow_prev.png", "http://n.sinaimg.cn/gd/jobs2018/icon_logo_l.png", "http://n.sinaimg.cn/gd/jobs2018/icon_logo.png", "http://n.sinaimg.cn/gd/jobs2018/icon_music.png", "http://n.sinaimg.cn/gd/jobs2018/p1_01_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p1_01_man_01_hand.png", "http://n.sinaimg.cn/gd/jobs2018/p1_01_man_02_hand.png", "http://n.sinaimg.cn/gd/jobs2018/p1_01_man_03_hand.png", "http://n.sinaimg.cn/gd/jobs2018/p1_01_man.png", "http://n.sinaimg.cn/gd/jobs2018/p1_01_stars.png", "http://n.sinaimg.cn/gd/jobs2018/p1_02_bg_new.png", "http://n.sinaimg.cn/gd/jobs2018/p1_02_cup.png", "http://n.sinaimg.cn/gd/jobs2018/p1_02_light.png", "http://n.sinaimg.cn/gd/jobs2018/p1_02_star.png", "http://n.sinaimg.cn/gd/jobs2018/p1_03_bg_new.png", "http://n.sinaimg.cn/gd/jobs2018/p1_03_man.png", "http://n.sinaimg.cn/gd/jobs2018/p1_03_money.png", "http://n.sinaimg.cn/gd/jobs2018/p1_03_users.png", "http://n.sinaimg.cn/gd/jobs2018/p1_pop_bg_new.png", "http://n.sinaimg.cn/gd/jobs2018/p1_pop_text.png", "http://n.sinaimg.cn/gd/jobs2018/p2_bg_01.png", "http://n.sinaimg.cn/gd/jobs2018/p2_btn.png", "http://n.sinaimg.cn/gd/jobs2018/p2_teapot.png", "http://n.sinaimg.cn/gd/jobs2018/p2_text_new.png", "http://n.sinaimg.cn/gd/jobs2018/smoke_sprite.png", "http://n.sinaimg.cn/gd/jobs2018/sprite_smoke_l.png", "http://n.sinaimg.cn/gd/jobs2018/p3_animal_01_new.png", "http://n.sinaimg.cn/gd/jobs2018/p3_animal_02_new.png", "http://n.sinaimg.cn/gd/jobs2018/p3_animal_03_new.png", "http://n.sinaimg.cn/gd/jobs2018/p3_animal_04_new.png", "http://n.sinaimg.cn/gd/jobs2018/p3_animal_05_new.png", "http://n.sinaimg.cn/gd/jobs2018/p3_text_new.png", "http://n.sinaimg.cn/gd/jobs2018/p3_tip.png", "http://n.sinaimg.cn/gd/jobs2018/p4_content_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_name.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_shade.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_01.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_02.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_03.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_04.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_05.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01_skill_06.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_01.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_name.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_shade.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_01.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_02.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_03.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_04.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02_skill_05.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_02.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_name.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_shade.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_01.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_02.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_03.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_04.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03_skill_05.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_03.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_name.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_shade.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_01.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_02.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_03.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_04.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_05.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_06.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_07.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04_skill_08.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_04.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_05_name.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_05_shade.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_01.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_02.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_05_skill_03.png", "http://n.sinaimg.cn/gd/jobs2018/p4_job_05.png", "http://n.sinaimg.cn/gd/jobs2018/p4_jobs_stage.png", "http://n.sinaimg.cn/gd/jobs2018/p4_text.png", "http://n.sinaimg.cn/gd/jobs2018/p5_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p5_game_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p5_game_result_fail.png", "http://n.sinaimg.cn/gd/jobs2018/p5_game_result_icon_l.png", "http://n.sinaimg.cn/gd/jobs2018/p5_game_result_icon_r.png", "http://n.sinaimg.cn/gd/jobs2018/p5_game_result_win.png", "http://n.sinaimg.cn/gd/jobs2018/p5_job_01_new.png", "http://n.sinaimg.cn/gd/jobs2018/p5_job_02_new.png", "http://n.sinaimg.cn/gd/jobs2018/p5_job_03_new.png", "http://n.sinaimg.cn/gd/jobs2018/p5_job_04.png", "http://n.sinaimg.cn/gd/jobs2018/p5_job_05_new.png", "http://n.sinaimg.cn/gd/jobs2018/p5_job_revert.png", "http://n.sinaimg.cn/gd/jobs2018/p5_rule.png", "http://n.sinaimg.cn/gd/jobs2018/p5_time_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p5_time_num.png", "http://n.sinaimg.cn/gd/jobs2018/p6_btn_detail.png", "http://n.sinaimg.cn/gd/jobs2018/p6_btn_restart.png", "http://n.sinaimg.cn/gd/jobs2018/p6_btn_share.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_01.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_02.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_03.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_04.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_05.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_light.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_01.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_02.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_03.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_04.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_animal_name_05.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_01.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_02.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_03.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_04.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_name_05_new.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_bg.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_01.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_02.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_03.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_04.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_sub_name_05.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_01.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_job_tip_02.png", "http://n.sinaimg.cn/gd/jobs2018/p6_head_title.png", "http://n.sinaimg.cn/gd/jobs2018/p6_share_icon.png", "http://n.sinaimg.cn/gd/jobs2018/p6_share_text.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_bottom.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_01_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_02_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_03_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_04_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_05_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_06_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_07_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_item_08_new.png", "http://n.sinaimg.cn/gd/jobs2018/p7_detail_top.png"],
                e.preload.main()
            }),
            e.musics.main(),
            e.events.main()
        },
        e
    } (app || {});
    app.main();
</script>
</body>
</html><!--publish_time:2018-03-23 18:50:42-->