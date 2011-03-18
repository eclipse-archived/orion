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

var options = {
		parent: "editorDiv",
		model: new eclipse.TextModel(),
		stylesheet: "css/ide.css" 
	};

editor = new eclipse.Editor(options);
var isMac = navigator.platform.indexOf("Mac") !== -1;
/* Undo stack */
var undoStack = new eclipse.UndoStack(editor, 200);
editor.setKeyBinding(new eclipse.KeyBinding('z', true), "undo");
editor.setAction("undo", function() {
	undoStack.undo();
	return true;
});
editor.setKeyBinding(isMac ? new eclipse.KeyBinding('z', true, true) : new eclipse.KeyBinding('y', true), "redo");
editor.setAction("redo", function() {
	undoStack.redo();
	return true;
});

editor.setKeyBinding(new eclipse.KeyBinding('f', true), "find");
editor.setAction("find", function() {
	log("*****************FIND");
	return true;
});
var lines = new eclipse.LineNumberRuler("left", {styleClass: "ruler_lines"}, {styleClass: "ruler_lines_odd"}, {styleClass: "ruler_lines_even"});

var styler = null;
if (styler) {
	styler.destroy();
	styler = null;
}

var file = getFile('js/example.js');
styler = new eclipse.TextStyler(editor, "js");	
editor.addRuler(lines);
editor.setText(file);

//pluginRegistry.installPlugin("http://mamacdon.github.com/m6/beautify/jsbeautify.html")
//



