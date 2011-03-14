 $(document).ready(function(){
	$('#editor').hide("fast");
	$('#tryit .title').click( function () { 
		$('#windowContainer').animate( { left:"-780px" }, { queue: false, duration:350 } );
		$('#seeit .title a').animate( { left:"780px" }, { queue: false, duration:350 } );	
		$(this).animate( { backgroundColor:"#FBC926"}, { queue: false, duration:250} );
		$('#seeit .title').animate( { backgroundColor:"#E7E6E8"}, { queue: false, duration:250} );	
		$('#editor').show("fast");	
	} );
	$('#seeit .title').click( function () { 
		$('#windowContainer').animate( { left:"0" }, { queue: false, duration:350  } );
		$('#seeit .title a').animate( { left:"0" }, { queue: false, duration:350 } );	
		$(this).animate( { backgroundColor:"#FBC926"}, { queue: false, duration:250} );	
		$('#tryit .title').animate( { backgroundColor:"#E7E6E8"}, { queue: false, duration:250} );	
		$('#editor').hide("fast");		
	} );


function getFile(file) {
	try {
		var objXml = new XMLHttpRequest();
		objXml.open("GET",file,false);
		objXml.send(null);
		return objXml.responseText;
	} catch (e) {
		return null;
	}
}	
	
	var lines = new eclipse.LineNumberRuler("left", {styleClass: "ruler_lines"}, {styleClass: "ruler_lines_odd"}, {styleClass: "ruler_lines_even"});

	
	var styler = null;
	var file =  getFile("js/test.js");

	var options = {
		parent: "editor",
		model: new eclipse.TextModel(),
		stylesheet: "editor.css" 
	};
	if (styler) {
		styler.destroy();
		styler = null;
	}
	styler = new eclipse.TextStyler(editor, "js");	

	editor = new eclipse.Editor(options);
	editor.addRuler(lines);
	editor.setText(file);

	$('#execute').click( function () { 
	var jstoeval = editor.getText();
	eval(jstoeval);
	} );

 });