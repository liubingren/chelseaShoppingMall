$(function(){
	$(".category>div.category_1").click(function(){
		$(this).toggleClass("active");
	    $(".category-1").toggleClass("active");
	})
	$(".category>div.category_2").click(function(){
		$(this).toggleClass("active");
	    $(".brand").toggleClass("active");
	})
	$(".category>div.category_3").click(function(){
		$(".category-content").toggleClass("hide");
		$(this).toggleClass("active");
	    $("#wrapper.wrapper").toggleClass("active");
	})
	
	$(".category-1>ul>li").click(function(){
		$(".category-1>ul>li").removeClass("active");
		$(this).addClass("active");
	    
	})
	$(".category-1>.leval2>li").css("display","none");
	$(".category-1>.leval3>li").css("display","none");
	$(".category-1 #2").click(function(){
		$(".category-1>.leval2>li").css("display","none");
	    $(".category-1>.leval3>li").css("display","none");
		$(".category-1>.leval2>.2-9").css("display","block");
		$(".category-1>.leval2>.2-9").click(function(){
			$(".category-1>.leval3>.3-9").css("display","block");
		})
	})
	$(".category-1 #3").click(function(){
		$(".category-1>.leval2>li").css("display","none");
	    $(".category-1>.leval3>li").css("display","none");
		$(".category-1>.leval2>.2-8").css("display","block");
		$(".category-1>.leval2>.2-8").click(function(){
			$(".category-1>.leval3>.3-7").css("display","block");
		})
	})
	$(".list").click(function(){
		$("#navmorelist").toggleClass("active");
	});
	var swiper = new Swiper('.swiper-container', {
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
	    autoplay:2000,
	    loop:true
	});
})
