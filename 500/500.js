 $(document).ready(function(){ 
 		$('#overlay').animate({ 
 			backgroundColor:"#000"
 		}, 1000, function(){});
 		$('#editor').animate({
 			opacity: 0.2
 		}, 1000, function () {});
 		$('#orionImg').show().animate({
 			opacity: 1
 		}, 1000, function () {});
 	
 } );