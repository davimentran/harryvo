<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Language" content="vi" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>{[#SITE_TITLE#]}</title>
<link rel="stylesheet" type="text/css" href="css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="font/stylesheet.css" media="screen,print" />
<link href="css/slider/supersized.shutter.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/slider/supersized.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="index contents" href="/..html" title="ホーム" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lte IE 10]><script src="js/PIE.js" type="text/javascript"></script><![endif]-->

<!--Slider-image-->
<script src="js/slider/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/slider/supersized.3.2.7.js" type="text/javascript"></script>
<script src="js/slider/supersized.shutter.js" type="text/javascript"></script>
<script type="text/javascript">
    
jQuery(function($){

$.supersized({

	// Functionality
	slide_interval          :   8000,		// Length between transitions
	transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
	transition_speed		:	700,		// Speed of transition
											   
	// Components							
	slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
	slides 					:  	[			// Slideshow Images
	{image : 'img/home/img_main01.jpg', title : ''},
	{image : 'img/home/img_main02.jpg', title : ''},
	{image : 'img/home/img_main03.jpg', title : ''},
	{image : 'img/home/img_main04.jpg', title : ''}
								]
	
});
});
</script>

</head>

<body id="pageHome">
<div id="wrapper">
<div id="header" class="clearfix">
<div id="headerInner" class="clearfix">
<h1 id="logo"><a href="/"><img src="img/common/logo.png" alt="" /></a></h1>
<ul class="hNav">
<li><a href="#"><img src="img/icon/icon_search.png" alt="" class="hover" /></a></li>
<li><a href="#"><img src="img/icon/icon_question.png" alt="" class="hover" /></a></li>
<li><a href="#"><img src="img/icon/icon_cart.png" alt="" class="hover" /></a></li>
</ul>
<ul class="language">
<li><a href="#"><img src="img/icon/icon_vi.png" alt="Viet nam" class="hover" /></a></li>
<li><a href="#"><img src="img/icon/icon_en.png" alt="English" class="hover" /></a></li>
</ul>
</div>
<!-- /#headerInner -->
</div>
<!-- /#header -->

<div id="contents" class="clearfix">
<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
</div>
<!-- /#contents -->

<div id="footer">
<div id="footerInner">
<div class="fSection clearfix">
<ul class="fNav">
<li><a href="#" class="hover piecss3"><img src="img/icon/icon_support.png" alt="" /><br />
hổ trợ</a></li>
<li><a href="#" class="hover piecss3">tin mới</a></li>
<li><a href="#" class="hover piecss3">sản phẩm mới</a></li>
</ul>

<div class="fRight clearfix">
<ul class="social clearfix">
<li><a href="#"><img src="img/icon/icon_youtube.png" alt="" class="hover" /></a></li>
<li><a href="#"><img src="img/icon/icon_google.png" alt="" class="hover" /></a></li>
<li><a href="#"><img src="img/icon/icon_facebook.png" alt="" class="hover" /></a></li>
<li><a href="#"><img src="img/icon/icon_twitter.png" alt="" class="hover" /></a></li>
</ul>

<p id="menu"><a href="#"><img src="img/icon/icon_menu.png" alt="" class="hover" /></a></p>
</div>
<!-- /.fRight -->

<div class="secondary-container" id="navi">
  <div class="sec-sidebar">
    <div class="sec-nav">
      <div class="sec-nav-inside">
        <ul class="clearfix">
            <li><a href="#">trang chủ</a></li>
            <li><a href="#">giới thiệu</a></li>
            <li><a href="#">sản phẩm</a></li>
            <li><a href="#">dịch vụ</a></li>
            <li><a href="#">liên kết</a></li>
            <li><a href="#">thông tin thị trường</a></li>
            <li><a href="#">thư viện hình ảnh</a></li>
           </ul>
      </div>
    </div>
  </div>
 </div>


</div>
<!-- /.fSection -->
</div>
<!-- /#footerInner -->

<p id="copyright">&copy;2015 Bản quyền của công ty ABC</p>

</div>
<!-- /#footer -->
</div>
<!-- /#wrapper -->
</body>
</html>