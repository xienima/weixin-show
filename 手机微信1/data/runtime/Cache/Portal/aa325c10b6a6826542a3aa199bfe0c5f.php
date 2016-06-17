<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>

<html lang="zh-CN">

<head>

<meta charset="utf-8">

<meta name="keywords" content="" />

<meta name="description" content="" />

<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'/>

<meta name="author" content=""/>

<meta name="copyright" content=""/>

<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">

<link href="favicon.ico" rel="icon" type="image/x-icon">

<link href="/thinkcmf/themes/weixin/Public/css/m.css" rel="stylesheet" type="text/css" />

<title>HOME</title>

<script src="/thinkcmf/themes/weixin/Public/js/jquery-1.9.1.min.js" type="text/javascript"></script>

<script src="/thinkcmf/themes/weixin/Public/js/manhuatoTop.1.0.js" type="text/javascript"></script>

<script src="/thinkcmf/themes/weixin/Public/js/common.js" type="text/javascript"></script>

<link rel="stylesheet" href="/thinkcmf/themes/weixin/Public/css/idangerous.swiper.css">

<link rel="stylesheet" href="/thinkcmf/themes/weixin/Public/css/style.css">

<script src="/thinkcmf/themes/weixin/Public/js/idangerous.swiper-1.9.1.min.js"></script>

<script src="/thinkcmf/themes/weixin/Public/js/idangerous.swiper.scrollbar-1.2.js"></script>

<script src="/thinkcmf/themes/weixin/Public/js/swiper.js"></script>

</head>



<body>

<div id="frame">

	<div id="top">


		<a id="title">微官网</a>

<!-- 		<span id="list">

		

		   <a href="login.html"><img src="/thinkcmf/themes/weixin/Public/images/userlogin.png" align="top"></a>

		

		</span> -->

	</div>
	<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>

	<div id="con">

		<div style="margin:0 auto;/*position:relative;*/width:100%;max-width:500px;height:100%;margin-top:10px;">

			<img src="/thinkcmf/themes/weixin/Public/images/bg.png" width=100% style="vertical-align:top">

			<div class="home-device">

				<a class="arrow-left" href="#"></a>

				<a class="arrow-right" href="#"></a>

				<div class="swiper-main">

					<div class="swiper-container swiper1">

						<div class="swiper-wrapper">

						<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><div class="swiper-slide"><a href="<?php echo ($vo["slide_url"]); ?>"><img  src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" style="width: 100%;height:100%;" /></a></div><?php endforeach; endif; ?>

						</div>

					</div>

				</div>

				<div class="pagination pagination1"></div>

			</div>

		</div>

		<div id="menudiv" style="margin:0 auto;position:relative;width:100%;max-width:500px;height:auto;margin-top:0px;">

			

				<div class="tm_div" style="float:left;width:30.67%;height:105px;margin-left:2%;overflow:hidden;margin-top:10px;">

					<a href="<?php echo ($site_host); ?>"><img src="/thinkcmf/themes/weixin/Public/images/1.jpg" style="position:relative;width:100%;top:0px;left:0px;"></a>

					<a href="onsale_2.html" style="position:absolute;width:100%;height:12px;line-height:12px;text-align:left;top:8px;left:8px;text-decoration:none;color:#ffffff;">	首页</a>

				</div>

			

				<div class="tm_div" style="float:left;width:30.67%;height:105px;margin-left:2%;overflow:hidden;margin-top:10px;">

					<a href="<?php echo leuu('list/index',array('id'=>3));?>"><img src="/thinkcmf/themes/weixin/Public/images/2.jpg" style="position:relative;width:100%;top:0px;left:0px;"></a>

					<a href="<?php echo leuu('list/index',array('id'=>3));?>" style="position:absolute;width:100%;height:12px;line-height:12px;text-align:left;top:8px;left:8px;text-decoration:none;color:#ffffff;">产品中心</a>

				</div>

			

				<div class="tm_div" style="float:left;width:30.67%;height:105px;margin-left:2%;overflow:hidden;margin-top:10px;">

					<a href="<?php echo leuu('list/index',array('id'=>4));?>"><img src="/thinkcmf/themes/weixin/Public/images/5.jpg" style="position:relative;width:100%;top:0px;left:0px;"></a>

					<a href="<?php echo leuu('list/index',array('id'=>4));?>" style="position:absolute;width:100%;height:12px;line-height:12px;text-align:left;top:8px;left:8px;text-decoration:none;color:#ffffff;">公司新闻</a>

				</div>

			

				<div class="tm_div" style="float:left;width:30.67%;height:105px;margin-left:2%;overflow:hidden;margin-top:10px;">

					<a href="<?php echo leuu('page/index',array('id'=>2));?>"><img src="/thinkcmf/themes/weixin/Public/images/4.jpg" style="position:relative;width:100%;top:0px;left:0px;"></a>

					<a href="<?php echo leuu('page/index',array('id'=>2));?>" style="position:absolute;width:100%;height:12px;line-height:12px;text-align:left;top:8px;left:8px;text-decoration:none;color:#ffffff;">公司介绍</a>

				</div>

			

				<div class="tm_div" style="float:left;width:30.67%;height:105px;margin-left:2%;overflow:hidden;margin-top:10px;">

					<a href="<?php echo leuu('page/index',array('id'=>3));?>"><img src="/thinkcmf/themes/weixin/Public/images/7.jpg" style="position:relative;width:100%;top:0px;left:0px;"></a>

					<a href="<?php echo leuu('page/index',array('id'=>3));?>" style="position:absolute;width:100%;height:12px;line-height:12px;text-align:left;top:8px;left:8px;text-decoration:none;color:#ffffff;">品牌文化</a>

				</div>

			

				<div class="tm_div" style="float:left;width:30.67%;height:105px;margin-left:2%;overflow:hidden;margin-top:10px;">

					<a href="<?php echo leuu('page/index',array('id'=>4));?>"><img src="/thinkcmf/themes/weixin/Public/images/8.jpg" style="position:relative;width:100%;top:0px;left:0px;"></a>

					<a href="<?php echo leuu('page/index',array('id'=>4));?>" style="position:absolute;width:100%;height:12px;line-height:12px;text-align:left;top:8px;left:8px;text-decoration:none;color:#ffffff;">联系我们</a>

				</div>
				</div>
			

		</div>

	</div>

	





<div id="footer"><a href="index.html">博意策划</a></div>

<div id="menu" style="position:fixed;bottom:0px;width:100%;height:44px;line-height:44px;z-index:999;background-color: gray">

	<ul style="margin:0 auto;list-style-type:none;width:100%;max-width:500px;height:100%;">

		

		<li><img class="img_front" src="/thinkcmf/themes/weixin/Public/images/front.png"><div class="menu_li"><img src="/thinkcmf/themes/weixin/Public/images/coin.png" width=10>&nbsp;关于我们</div><img class="line" src="/thinkcmf/themes/weixin/Public/images/line.png" width=1>

		

		<span style="background-size:100%;">

			<img src="/thinkcmf/themes/weixin/Public/images/navbg4.png" width=100%>

			<div style="position:absolute;top:0px;left:0px;">

		

			<a href="<?php echo leuu('page/index',array('id'=>2));?>">公司简介</a>

		

			<a href="<?php echo leuu('page/index',array('id'=>3));?>">品牌文化</a>

		

			<a href="">官网链接</a>

		

			</div>

		</span>

		

		</li>

		

		<li><img class="img_front" src="/thinkcmf/themes/weixin/Public/images/front.png"><div class="menu_li"><img src="/thinkcmf/themes/weixin/Public/images/coin.png" width=10>&nbsp;产品橱窗</div><img class="line" src="/thinkcmf/themes/weixin/Public/images/line.png" width=1>

		

		<span style="background-size:100%;">

			<img src="/thinkcmf/themes/weixin/Public/images/navbg4.png" width=100%>

			<div style="position:absolute;top:0px;left:0px;">

		

			<a href="<?php echo leuu('list/index',array('id'=>3));?>">产品中心</a>

		

			</div>

		</span>

		

		</li>

		

		<li><img class="img_front" src="/thinkcmf/themes/weixin/Public/images/front.png"><div class="menu_li"><img src="/thinkcmf/themes/weixin/Public/images/coin.png" width=10>&nbsp;微服务</div>

		

		<span style="background-size:100%;">

			<img src="/thinkcmf/themes/weixin/Public/images/navbg5.png" width=100%>

			<div style="position:absolute;top:0px;left:0px;">

		

			<a href="<?php echo leuu('page/index',array('id'=>4));?>">联系我们</a>
			<a href="<?php echo leuu('list/index',array('id'=>4));?>">公司新闻</a>
		

		<!-- 	<a href="#">会员资料</a> -->

		

			</div>

		</span>

		

		</li>

		

	</ul>

</div>

<div class="footer_front" style="position:fixed;width:100%;height:100%;top:0px;left:0px;z-index:888;display:none;"><img src="/thinkcmf/themes/weixin/Public/images/front.png" width="100%" height="100%"></div>

<style>

#menu ul li{float:left;width:33.3%;height:100%;text-align:center;position:relative;font-size:14px;}

#menu ul li .line{position:absolute;top:0px;right:0px;z-index:30;}

#menu ul li .menu_li{position:absolute;top:0px;left:0px;z-index:20;width:100%;height:100%;color:#ebebeb;}

#menu ul li .img_front{position:absolute;top:0px;left:0px;z-index:30;width:100%;height:100%;}

#menu ul li .img_front img{width:100%;height:100%;}

#menu ul li span{position:absolute;bottom:-300px;left:50%;width:104px;margin-left:-52px;height:auto;text-align:center;z-index:10;}

#menu ul li span a{float:left;width:100%;height:43px;line-height:43px;color:#454545;text-decoration:none;}

</style>

<script>

function beginTalk() {

	var t = window.location.toString();

	var newT = t.replace(new RegExp("&", "gm"), "<and>"); 

	window.open("italk/index_m.jsp@fs_AccessAddress=" + newT, "talk");

}

window.onload = function(){

	$('#menu ul li').each(function(j){

		$('#menu ul li').eq(j).removeClass("on");

		$('#menu ul li span').eq(j).animate({bottom:-$('#menu ul li span').eq(j).height()},100);

	});

}

$('#menu ul li').each(function(i){

	$(this).click(function(){

		if($(this).attr("class")!="on"){

			$('#menu ul .on span').animate({bottom:-$('#menu ul .on span').height()},200);

			$('#menu ul .on').removeClass("on");

			$(this).addClass("on");

			$('#menu ul li span').eq(i).animate({bottom:35},200);

			$('.footer_front').show();

		}else{

			$('#menu ul li span').eq(i).animate({bottom:-$('#menu ul li span').eq(i).height()},200);

			$(this).removeClass("on");

			$('.footer_front').hide();

		}

	});

});

$('.footer_front').click(function(){

	$('#menu ul .on span').animate({bottom:-$('#menu ul .on span').height()},200);

	$('#menu ul .on').removeClass("on");

	$(this).hide();

});

</script>

</div>

<script>

$('.tm_div').each(function(i){

	$('.tm_div').eq(i).css({'height': $('.tm_div').eq(0).width()});

});

</script>

</body>

</html>