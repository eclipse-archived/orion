$("#watchit div.videowindow img[title]").tooltip({
	effect:'slide'
});

$("#watchit div.videowindow img[rel]").overlay({ top:'30%', mask:{ color:'#000', loadSpeed: 200, opacity:0.7} });
$("#getstartedcontent .roundedbox .content a[rel]").overlay({ top:'30%', mask:{ color:'#000', loadSpeed: 200, opacity:0.7}, closeOnClick:false });

$("#signupemail").focus( function() {
	if ($(this).val() == "email address") {
		$(this).val("");
	}
	$(this).removeClass('empty');
});

$('#signupemail').blur( function() {
	if ( $(this).val() == ""){
		$(this).val("email address").addClass('empty');
	}
}); 

$('#signupsubmit').click(function() {  
	 
    $("#error").hide();
    var hasError = false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    var emailaddressVal = $("#signupemail").val();
    if(emailaddressVal == '') {
        hasError = true;
    }

    else if(!emailReg.test(emailaddressVal)) {
        hasError = true;
    }

    if(hasError == true) { $('#error').fadeIn(); return false; }

});