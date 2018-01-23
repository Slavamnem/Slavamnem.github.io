


var speed;
var worked=0;
var direction=1;
function reverse(){
	if(direction==-1){ direction=1; }
	else direction=-1;
	document.getElementById("notes").value+="\nРазворот";
}
function set_speed(p){
	if(speed == p){	return; }
	speed=p;
	if(p==0){
		document.getElementById("notes").value+="\nОстановка";
	}
	else document.getElementById("notes").value+="\nИзменение скорости: "+p;
}
function smile_move(sp){
	if(speed==1){ return; }
	//if(par=='circle'){
		speed=sp;
		if(worked==1){ 
			document.getElementById("notes").value+="\nИзменение скорости: 1";
			return; 
		}
		worked=1;
		document.getElementById("notes").value+="\nЗапуск";
		var x=150;
		var y=150;

		var x_0=135;
		var y_0=130;
		var Radius=100;
		//document.getElementById("smile_img").style.left=""+x+"px";
		//document.getElementById("smile_img").style.top=""+y+"px";
		var a=0;
		setInterval(function(){
			a+=0.01*speed*direction;
			if(a>180){ a=0; }
			if(a<0){ a=180; }
			x=x_0+Radius*Math.cos(a);
			y=y_0+Radius*Math.sin(a);
			document.getElementById("smile_img").style.left=""+x+"px";
			document.getElementById("smile_img").style.top=""+y+"px";
		}, 5);
	//}
}

function redactor(){
	document.getElementById("redactor").style.position="fixed";
	document.getElementById("redactor").style.top="200px";
	document.getElementById("redactor").style.left="300px";

}
function close_redactor(arg1){
	document.getElementById("redactor").style.position="absolute";
	document.getElementById("redactor").style.top="-1000px";
	if(arg1==1){ return; }

	document.getElementById("word_textarea").style.color = document.getElementById("font_color").value;
	document.getElementById("word_textarea").style.fontSize = document.getElementById("font_size").value+"px";
	document.getElementById("word_textarea").style.fontFamily = document.getElementById("font_family").value;

}
function setFontFamily(){
	document.getElementById("word_textarea").style.fontFamily = document.getElementById("font_family_panel").value;
}
function setFontSize(){
	document.getElementById("word_textarea").style.fontSize = document.getElementById("font_size_panel").value+"px";
}
function setFontColor(){
	document.getElementById("word_textarea").style.color = document.getElementById("font_color_panel").value+"px";
}

//////////////
function setfontWeight(){
	if(document.getElementById("word_textarea").style.fontWeight=="bold"){
		document.getElementById("word_textarea").style.fontWeight="normal";
	}
	else{
		document.getElementById("word_textarea").style.fontWeight = "bold";//document.getElementById("font_weight_panel").value;
	}
}
function setfontStyle(){
	if(document.getElementById("word_textarea").style.fontStyle=="italic"){
		document.getElementById("word_textarea").style.fontStyle="normal";
	}
	else{
		document.getElementById("word_textarea").style.fontStyle = "italic";//document.getElementById("font_style_panel").value;
	}
}
function setTextUnderline(){
	if(document.getElementById("word_textarea").style.textDecoration=="underline"){
		document.getElementById("word_textarea").style.textDecoration="none";
	}
	else{
		document.getElementById("word_textarea").style.textDecoration = "underline";//document.getElementById("font_style_panel").value;
	}
}
///////////////
function align(par){
	document.getElementById("word_textarea").style.textAlign=par;
}

function copy_textarea(){
	document.getElementById("input_buffer").value=document.getElementById("word_textarea").value;
}
function save_file(){
	alert();
	return;
	document.getElementById("closer").style.position="fixed";
	document.getElementById("closer").style.top="200px";
	document.getElementById("closer").style.left="400px";
	document.getElementById("input_buffer").value=document.getElementById("word_textarea").value;
}
function close_saver(){
	document.getElementById("closer").style.position="absolute";
	document.getElementById("closer").style.top="-1000px";
}



function set_Interval(side){
	var interval = document.getElementById("Interval_"+side).value;
	if(side=="left") document.getElementById("word_textarea").style.paddingLeft = interval+"px";
	else document.getElementById("word_textarea").style.paddingRight = interval+"px";
}
function add_symbol(s){
	document.getElementById("word_textarea").value+=s;
}
//////////////////////////////////////////////
//////////////////////////////////////////////
function close_typing(){
	document.getElementById("user_typing").style.position="absolute";
	document.getElementById("user_typing").style.top="-10000px";
}


document.onkeydown = function moveSquare(event) 
{ 

	event = (event) ? event : window.event; 
	if(event) 
	{	
		if (event.ctrlKey || event.altKey || event.metaKey){ return; }
		var char_code = event.keyCode || event.which;     

		switch(char_code) 
		{ 
			case 32: 
				start_secundomer();
			break; 
			case 8:
			case 9:
			case 13:
			case 16:
			case 17:
			case 18:
			case 19: 
			case 20:
			case 27:
			case 112:
			case 113:
			case 114:
			case 115:
			case 116:
			case 117:
			case 118:
			case 119:
			case 120:
			case 121:
			case 122:
			case 123: 
				return;
			break; 
			default:
				var s = String.fromCharCode(char_code);
   				document.getElementById("user_typing_textarea").value+=s;
				document.getElementById("user_typing").style.position="fixed";
				document.getElementById("user_typing").style.top="200px";
				document.getElementById("user_typing").style.left="300px"; 
		} 
	} 
} 

function block_typing_panel(){
	document.onkeydown = null;
	document.getElementById("user_typing").style.position="absolute";
	document.getElementById("user_typing").style.top="-10000px";
}


var step = 1;
var timerId;
var is_working = 0;
function start_secundomer(){
	if(document.getElementById("button_start_secundomer").innerHTML == "Stop"){
		step = 0;
		document.getElementById("button_start_secundomer").innerHTML = "Start";
		return;
	}
	step = 1;
	document.getElementById("button_start_secundomer").innerHTML = "Stop";
	if(is_working==1){ return; }
	is_working=1;

	var hours=0, minutes=0, seconds=0;
	timerId = setInterval(function(){
		hours = +hours;
		minutes = +minutes;
		seconds = +seconds;
		if(seconds < 60){ seconds+=step; }
		else if(seconds==60){
			seconds = 0;
			if(minutes < 60){ minutes+=step; }
			else if(minutes==60){
				minutes = 0;
				hours+=step;
			}
		}
		if(String(hours).length==1){ hours = "0"+hours; }
		if(String(minutes).length==1){ minutes = String("0"+minutes); }
		if(String(seconds).length==1){ seconds = String("0"+seconds); }
		minutes = String(minutes); seconds = String(seconds);
		//var full_time = hours+":"+minutes+":"+seconds;
		document.getElementById("minutes_1").innerHTML = minutes[0];//full_time;
		document.getElementById("minutes_2").innerHTML = minutes[1];
		document.getElementById("seconds_1").innerHTML = seconds[0];
		document.getElementById("seconds_2").innerHTML = seconds[1];


	}, 1000);
}
function cancel_secundomer(){
	is_working = 0;
	clearInterval(timerId);
	document.getElementById("button_start_secundomer").innerHTML = "Start";
	document.getElementById("minutes_1").innerHTML = 0;
	document.getElementById("minutes_2").innerHTML = 0;
	document.getElementById("seconds_1").innerHTML = 0;
	document.getElementById("seconds_2").innerHTML = 0;

}




+function realTime(){
	setInterval(function(){
		var now = new Date();
		var opt = {year:'numeric', 
		  month:'long', 
		  day: 'numeric',
		  weekday: 'long',
		  timezone: 'UTC',
		  hour: 'numeric',
		  minute: 'numeric',
		  second: 'numeric'};
		document.getElementById("real_time").innerHTML = now.toLocaleString("ru", opt);
		/*var now = new Date();
		var full_time = now.getHours()+":"+now.getMinutes()+":"+now.getSeconds();
		document.getElementById("real_time").innerHTML = full_time;*/
	}, 1000);
}();








/////////////////////////////////////////////
/////////////////////////////////////////////
var message="Правая кнопка мыши отключена!";
function click(e) {
    if (document.all) {    // IE
        if (event.button == 2) {    // Чтобы отключить левую кнопку поставьте цифру 1
            alert(message);    // чтобы отключить среднюю кнопку поставьте цифру 1
            return false;
        }
    }
    if (document.layers) { // NC
        if (e.which == 3) {
            alert(message);
            return false;
        }
    }
}
if (document.layers)
   {document.captureEvents(Event.MOUSEDOWN);}
document.onmousedown=click;
document.oncontextmenu=function(e){return false};










/*
button1.ondragstart = function() {
	  return false;
	};
	button1.onmousedown = function(e) { // 1. отследить нажатие
	  button1.style.position = 'relative';
	  var const_top = button1.style.top;
	  moveAt(e);
	  //document.body.appendChild(button1);
	  button1.style.zIndex = 1000;

	  function moveAt(e) {
	    button1.style.left = e.pageX - button1.offsetWidth / 2 + 'px';
	    button1.style.top = const_top; //e.pageY - button1.offsetHeight / 2 + 'px';
	  }

	  button1.onmousemove = function(e) {
	    moveAt(e);
	    //alert("5");
	  }
	  button1.onmouseup = function() {
	    button1.onmousemove = null;
	    button1.onmouseup = null;
	  }
	  
	}
	*/