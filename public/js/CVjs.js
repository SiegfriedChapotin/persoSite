
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$('a[data-toggle="collapse"]').click(function(){
	
if( $(this).closest('div.item').next('div.collapse').hasClass('in')){
	$(this).next('span').removeClass('fa-angle-up').addClass('fa-angle-down');
	
}else{
	$('a[data-toggle="collapse"]').next('span').removeClass('fa-angle-up').addClass('fa-angle-down');
  
	$(this).next('span').addClass('fa-angle-up').removeClass('fa-angle-down');
}
	
});

