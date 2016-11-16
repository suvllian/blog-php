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

	var WindowWidth = window.innerWidth;
	var WindowHeight = window.innerHeight;

	if (typeof WindowWidth != "number") {
		//确定页面是否处于标准状态
		if (document.compatMode == "CSS1Compat") {
			WindowWidth = document.documentElement.clientWidth;
			WindowHeight = document.documentElement.clientHeight;
		}else{
			WindowWidth = document.body.clientWidth;
			WindowHeight = document.body.clientHeight;
		}
	}

	var guide = document.getElementById("guide");
	var content  = document.getElementById("content");
	guide.style.height = WindowHeight+"px";
	content.style.width = WindowWidth+"px";

	//添加点击上浮效果
	var btn = document.getElementById("toMain");
	btn.onclick = function(){
		guide.style.height = 0+"px";
		guide.style.top = -WindowHeight+"px";
		guide.style.transform = "translateY(-100%)";	
		document.removeChild(guide);
	}

	setTimeout(animateDelay(h1),0);

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
		},100);
		i++;
	},300);

	setTimeout(function(){
		clearInterval(handle);
	},2400);

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
	},1600);
}

