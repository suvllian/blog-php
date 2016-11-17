function animateTopPosition(nodeName,originalTop,targetTop,originalOpacity,targetOpacity){
	var top = originalTop;
	var opacity = originalOpacity;

	var handleTopTime = (Math.abs(targetTop - top)+2)*50;
	var handleOpacityTime = Math.ceil((targetOpacity - opacity)/0.5) * 150;
	
	var handleTop = setInterval(function(){
		if(top <= targetTop){
			top++;
		}else if(top > targetTop){
			top--;
		}	
		nodeName.style.top = top + "px";
	},50);

	var handleOpacity = setInterval(function(){
		if(opacity < targetOpacity){
			opacity = opacity + 0.5;
		}else if(opacity>=1){
			opacity = 1;
		}	
		nodeName.style.opacity = opacity;
	},150);

	setTimeout(function(){
		clearInterval(handleTop);
	},handleTopTime);
	setTimeout(function(){
		clearInterval(handleOpacity);
	},handleOpacityTime);
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

	animateTopPosition(h1,-16,0,0,1);

	var handle = setInterval(function(){
		node = animate[i];
		animateTopPosition(node,-10,0,0,1);
		i++;
	},300);

	setTimeout(function(){
		clearInterval(handle);
	},2700);

	setTimeout(function(){
		animateTopPosition(location[0],10,0,0,1);
	},2700);
}

