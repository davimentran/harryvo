// ==============================================================
// 
// COPYRIGHT(C) CYBRiDGE CORPORATION.
// URL:http://www.cybridge.jp/
// 
// CB-STANDARD for XHTML
// --script.js--
// 
// デザイナー向け UI用スクリプト
// 
// デザイナーが扱うJavaScriptは、プラグイン本体を除き、原則全てここに記述し管理する
// script.jsはデフォルトで読み込み、必要な記述以外を削除・整理して使用する
// ※システム案件の場合、JSの管理はエンジニアの指示に従うこと
// 
// ==============================================================

$(document).ready(function(){
	var menu_offset = $('.sec-sidebar').offset();
	var menuleft = menu_offset.left;
	
	//Hover
		$('.sec-sidebar').mouseover(function(){
		  $(this).find('.sec-nav').stop().animate({marginRight: '0px'}, 500);
			}).mouseout(function(){
			if(!$('.sec-sidebar').hasClass('sidebar-locked')){
			  $(this).find('.sec-nav').stop().animate({marginRight: '-295px'}, 500);
			}
		});
		
		$('#menu a').click(function(){
			var x = $('.sec-sidebar').offset();
		   var left = x.left;
			if(left == menuleft)
			{
			  $('.sec-sidebar').find('.sec-nav').stop().animate({marginRight: '0px'}, 500);      
			}
			else
			{
				$('.sec-sidebar').find('.sec-nav').stop().animate({marginRight: '-295px'}, 500);
			}
			
			
			}).mouseout(function(){
			if(!$('.sec-sidebar').hasClass('sidebar-locked')){
			  $('.sec-sidebar').find('.sec-nav').stop().animate({marginRight: '-295px'}, 500);
			}
		});

});


$(document).ready(function(){			
	//Add Class	
	$("#navi li:last-child").addClass("last");
	$(".fNav li:first-child").addClass("first");
	
	// Hover fade
	$("a.hover, input.hover, img.hover").hover(function() {
			$(this).fadeTo("fast", 0.6);
		},function(){
			$(this).fadeTo("fast", 1.0);
	});
	
	//Hover image transition
    $('.img-zoom').hover(function() {
        $(this).addClass('transition');
 
    }, function() {
        $(this).removeClass('transition');
    });

		
			
});
