function animateDelay(node){
	var top = -10;
	var opacity = 0;
	var handleOpacity = setInterval(function(){
		if(opacity<1){
			opacity = opacity + 0.5;
		}	
		node.style.opacity = opacity;
	},200);

	var handleTop = setInterval(function(){
		if(top<0){
			top = top + 1;
		}	
		node.style.top = top+"px";
	},50);
}

window.onload = function(){
	var h1 = document.getElementsByTagName("h1")[0];
	var animate = document.getElementsByClassName("animate-init");
	var location = document.getElementsByClassName("location-icon");
	var length = animate.length;
	var node = null;
	var top = null;
	var opacity = null;
	var time = null;
	var i = 0;
	console.log(length);

	var handle = setInterval(function(){
		node = animate[i];
		top = -10;
		opacity = 0;
		var handleOpacity = setInterval(function(){
			if(opacity<1){
				opacity = opacity + 0.5;
			}	
			node.style.opacity = opacity;
		},200);

		var handleTop = setInterval(function(){
			if(top<0){
				top = top + 1;
			}	
			node.style.top = top+"px";
		},150);
		i++;
	},500);

	setTimeout(function(){
		clearInterval(handle);
	},4000);

	setTimeout(function(){
		var top = 10;
		var opacity = 0;
		var handleOpacity = setInterval(function(){
			if(opacity<1){
				opacity = opacity + 0.5;
			}	
			(location[0]).style.opacity = opacity;
		},200);

		var handleTop = setInterval(function(){
			if(top>0){
				top = top - 1;
			}	
			(location[0]).style.top = top+"px";
		},50);
	},4000);
}

