$(document).ready(function(){

	var minusIcon = 'fa fa-minus';
	var plusIcon = 'fa fa-plus';

	$('.project_description article').hide();
	$('i').addClass(plusIcon);

	$('i').click(function(){
		if($(this).hasClass(plusIcon)){
			$(this).removeClass(plusIcon);
			$(this).addClass(minusIcon);
			$(this).parent().next('article').show();
		} else {
			$(this).removeClass(minusIcon);
			$(this).addClass(plusIcon);
			$(this).parent().next('article').hide();
		}
	});
});