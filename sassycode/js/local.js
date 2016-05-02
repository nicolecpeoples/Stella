$(document).ready(function(){
	
	$(window).on("scroll touchmove", function () {
    $('#masthead').toggleClass('small', $(document).scrollTop() > 200);
	
	});
});