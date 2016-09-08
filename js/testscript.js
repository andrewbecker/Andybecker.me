// var logoVars = {
// 	containerWidth : 0,
// 	logoWidth : 0,
// 	padding : 0
// };

// $(document).ready(function(){

// var interval = setInterval(function(){

// if ($(window).width() <= 700){
// 	positionThumbnails();

// 	logoVars.padding = parseInt($('.logo').css('margin-left'));
// 	var len = $('.logo').length;
// 	console.log(len);
// 	/*** calculate num of items  ***/
// 	var totalWidth = 0;
// 	var count = 0;
// 	for(count; count<len; count++){
// 		totalWidth += logoVars.padding + logoVars.logoWidth;
// 		if(count===1){ totalWidth -= logoVars.padding; }
// 		console.log(totalWidth);
// 		console.log("Modulo= " + totalWidth / logoVars.containerWidth);
// 		console.log(" ");
// 		if( (logoVars.containerWidth / totalWidth) < 1 ){ break; }
// 	}
// 	console.log("count: "+count);
// 	console.log(totalWidth);

// 	//var width = (((logoVars.logoWidth * count) + (logoVars.padding * (count-1))/2));
// 	var width = (logoVars.logoWidth * count);
// 	console.log("width: " + width);
// 	 width += (logoVars.padding * (count - 1));
// 	console.log("width: " + width);
// 	 width = ((logoVars.containerWidth - width)/2);
// 	console.log("width: " + width);
// 	console.log("count: " + count);

// 	switch (count-1) {
// 		case 1:
// 			$('.logo').css('margin-left',width+'px');
// 			console.log("in 1");
// 			break;
// 		case 2:
// 			$('.logo:nth-child(3n+1)').css('margin-left',width+'px');
// 			console.log("in 2");
// 			break;
// 		case 3:
// 			$('.logo:nth-child(4n+1)').css('margin-left',width+'px');
// 			console.log("in 3");
// 			break;
// 		case 4:
// 			$('.logo:nth-child(5n+1)').css('margin-left',width+'px');
// 			console.log("in 4");
// 			break;
// 		case 5:
// 			$('.logo:nth-child(6n+1)').css('margin-left',width+'px');
// 			console.log("in 5");
// 			break;
// 		case 6:
// 			$('.logo:nth-child(5n+1)').css('margin-left',width+'px');
// 			console.log("in 6");
// 			break;
// 		default:
// 			break;
// 	}

// 	var windowWidth = $(window).width();
// 	$('.var1').html('containerWidth = ' + logoVars.containerWidth);
// 	$('.var2').html('logoWidth = ' + logoVars.logoWidth);
// 	$('.var3').html('WindowsWidth = ' + windowWidth);


// }



// }, 100);

// });


// function positionThumbnails() {
// 	logoVars.containerWidth = $('.project_specs').width();
// 	logoVars.logoWidth = $('.logo').width();

// }