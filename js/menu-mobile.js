$(document).ready(function(){

	// alert('ioujr');
	// $('#nav-list-mobile').hide();



	var bodyAll = $('.bodyAll');

	// if (bodyAll.width() <= 800) {
	// 	setTimeout(function(){
	// 		$('#nav-list-mobile').hide();
	// 	},2000);

	// };





	var val = false;
	$('#btn-menu-mobile').click(function(){

		// $('#nav-list-mobile').toggleClass('active-menu');
		$('#nav-list-mobile').show();

		// if (val == false) {
		// 	$('#nav-list-mobile').show();
		// 	val=true;
		// } else{
		// 	$('#nav-list-mobile').hide();
		// 	val=false
		// }

	});


	$('.nav-mobile li a.line').click(function(){

		

		if (bodyAll.width() <= 800) {
			setTimeout(function(){
				$('#nav-list-mobile').hide();
			},2000);

		};



	});


});
