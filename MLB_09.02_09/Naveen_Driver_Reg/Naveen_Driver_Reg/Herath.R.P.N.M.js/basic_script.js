var tabs_array;
var tabButton_array;

function initializeContent(){	
	tabs_array = document.getElementsByClassName("content");
	tabButton_array = document.getElementsByClassName("tab_button")
	
	show('home_content','home_button');
	
	
}
function hideContent(){
	let i;
	for(i = 0;i<tabs_array.length;i++){
		tabs_array[i].style.display = "none";
	}
	for(i=0;i<tabButton_array.length;i++){
		tabButton_array[i].className = "tab_button";
	}
	
}
function show(contentId,buttonId){
	hideContent();
	
	
	document.getElementById(contentId).style.display = "block";
	
	document.getElementById(buttonId).className += " active";
	
	
}