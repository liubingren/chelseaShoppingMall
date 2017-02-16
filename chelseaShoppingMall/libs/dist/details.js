$(function(){
	$(".details").click(function(){
		$(this).addClass("active");
		$(".comment").removeClass("active");
		$(".ul_wrapper_details").addClass("active");
		$(".comment_wrapper").removeClass("active");
		loaded();
	});
	$(".comment").click(function(){
		$(this).addClass("active");
		$(".details").removeClass("active");
		$(".ul_wrapper_details").removeClass("active");
		$(".comment_wrapper").addClass("active");
		loaded();
	});
	
})
