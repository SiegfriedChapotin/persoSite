
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});


$('#accordion').on('shown.bs.collapse hidden.bs.collapse', function (e) {
         $(e.target).prev('.panel-heading').find("span.glyphicon").toggleClass('glyphicons-601-chevron-up.png glyphicons-602-chevron-down.png',200, "easeOutSine" );
});

$("button").click(function () {
	$("ul").toggle(); $(this).children('.fa')
	.toggleClass('fa-chevron-up fa-chevron-down'); 
	}); 
	
