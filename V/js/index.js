$(document).ready(function(){
	// cNavLiColorChange(".nav li:eq(0)");
	// cNavLiColorChange(".nav li:eq(1)");
	// cNavLiColorChange(".nav li:eq(2)");
	// cNavLiColorChange(".nav li:eq(3)");
	// cNavLiColorChange(".nav li:eq(4)");
	// cNavLiColorChange(".nav li:eq(5)");
	// cNavLiColorChange(".nav li:eq(6)");
});

function cNavLiColorChange(node){
	var li = $(node);
	li.mouseover(function(){
		li.find("a").css("color","#fff");
	});
	li.mouseout(function(){
		li.find("a").css("color","#aaa");
	});
}	