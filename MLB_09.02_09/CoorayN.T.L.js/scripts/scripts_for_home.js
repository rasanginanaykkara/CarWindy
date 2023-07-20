
var images_array;

initialize_images_array();
var current_index = 0;
var isImageLoaded = false;
setInterval(play,8000);
function initialize_images_array(){
	images_array = document.getElementsByClassName("presentation_images");
	
}
function hideSlides(){
	let i;
	for(i = 0;i<images_array.length;i++){		
		images_array[i].style.display = "none";
		images_array[i].id = "";
	}
}

function play(){
	hideSlides();
	images_array[current_index].id = "incoming_img";
	document.getElementById("incoming_img").style.display = "block"	;
	setDots();
	setTimeout(out,7000);
	setDots();

	
	
}
function out(){		
	hideSlides();
	images_array[current_index].id = "outgoing_img";		
	document.getElementById("outgoing_img").style.display = "block"	;				
	isImageLoaded = false;
	current_index++;
	if(current_index === images_array.length)
		current_index=0;
}
function setDots(){
	let i;	
	document.getElementById("position_div").innerHTML = "";
	for(i=0;i<images_array.length;i++){
		if(i == current_index)
			document.getElementById("position_div").innerHTML += "<p id=\"active\">.</p>";
		else
			document.getElementById("position_div").innerHTML += "<p>.</p>"
	}
}