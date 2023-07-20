
let isFilterDivExpanded = false;

function showOrHideFilterDiv(){	
	let filterDiv = document.getElementById("filter_div");
	let classListArray = filterDiv.classList;
	filterDiv.className = "filter_div";
	
	let i;
	if(isFilterDivExpanded){
		
		filterDiv.className += " retracting";
		isFilterDivExpanded = false;
	setTimeout(inOrOut,1000);
		
	}else{
		filterDiv.className += " expanding";
		isFilterDivExpanded = true;
		inOrOut();
	}
	
	
}
function inOrOut(){
	let filterDiv = document.getElementById("filter_div");
	if(isFilterDivExpanded)
		filterDiv.style.display = "flex";
	else
		filterDiv.style.display = "none";
		
}