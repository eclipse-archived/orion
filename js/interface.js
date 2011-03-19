$("#watchit div.videowindow img[title]").tooltip({
	effect:'slide'
});

$("#examples a[title]").tooltip({ effect:'slide'});

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

$('#altcss').click(function() {
	
	
	var options = {
			parent: "editorDiv",
			model: new eclipse.TextModel(),
			stylesheet: "css/ide-alt.css" 
		};

	editor = new eclipse.Editor(options);
	$('#plaincss').toggle();
	$(this).toggle();
	var file = getFile('js/example.js');
	styler = new eclipse.TextStyler(editor, "js");	
	editor.addRuler(lines);
	editor.setText(file);
	
});

$('#plaincss').click(function() {
	
	
	var options = {
			parent: "editorDiv",
			model: new eclipse.TextModel(),
			stylesheet: "css/ide.css" 
		};

	editor = new eclipse.Editor(options);
	$('#altcss').toggle();
	$(this).toggle();
	var file = getFile('js/example.js');
	styler = new eclipse.TextStyler(editor, "js");	
	editor.addRuler(lines);
	editor.setText(file);
	
});

$('#largefile').click(function() {
	var options = {
			parent: "editorDiv",
			model: new eclipse.TextModel(),
			stylesheet: "css/ide.css" 
		};

	editor = new eclipse.Editor(options);
	
	var file = getFile('js/large.js');
	styler = new eclipse.TextStyler(editor, "js");	
	editor.addRuler(lines);
	editor.setText(file);
});

//$('#jsbeautify').click(function() {
//	var options = {
//			parent: "editorDiv",
//			model: new eclipse.TextModel(),
//			stylesheet: "css/ide.css" 
//		};
//
//	serviceRegistry = new eclipse.ServiceRegistry();
//	pluginRegistry = new eclipse.PluginRegistry(serviceRegistry);
//	pluginRegistry.installPlugin("http://mamacdon.github.com/m6/beautify/jsbeautify.html");
//	
//	editor = new eclipse.Editor(options);
//
//	var file = getFile('js/example.js');
//	styler = new eclipse.TextStyler(editor, "js");	
//	editor.addRuler(lines);
//	editor.setText(file);
//});

