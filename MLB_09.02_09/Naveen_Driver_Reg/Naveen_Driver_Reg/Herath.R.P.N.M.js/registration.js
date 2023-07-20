//document.getElementById('myform').submit();
var isForm1Completed = false;
var isForm2Completed = false;
var isTermsAndC = false;
function validateForm1(currentPage){
    
    

    var elementName = document.getElementsByClassName("required_form1");
    var place = document.getElementsByClassName("pp1");
    var i;

    var count = 0;  
    
    for(i = 0; i < elementName.length; i++ ){
  
        
        if (elementName[i].value == '' || elementName[i].value == "Country Code" || elementName[i].value == "Choose Bank"){
            place[i].style.display = "inline";
            place[i].innerHTML = "This feild must be filled";
            place[i].style.background="red"; 
            place[i].style.border="1px solid red";
          
            elementName[i].style.border="2px solid red";         
                            
        }else{ 
            place[i].style.display = "none";
            elementName[i].style.border="1px solid black";
            count = count + 1;           
        }
        
    }
    if(count == elementName.length){
        isForm1Completed = true;        
    }						
    if(isForm1Completed){
        location.href = "#reg"+(currentPage+1) 
        alert('Done');							
    }else{
        location.href = "#reg"+currentPage;
        alert('Some feilds must be filled');
    }
    isGenderEmpty();
    
}
function validateForm2(currentPage){

    

    var elementName = document.getElementsByClassName("required_form2");
    var place = document.getElementsByClassName("pp2");
    var i;

    var count = 0;

    for(i= 0;i < elementName.length;i++){
        if (elementName[i].value == '' || elementName[i].value == "Select Country"){
            place[i].style.display = "block";
            place[i].innerHTML = "This feild must be filled";
            place[i].style.background="red"; 
            place[i].style.border="1px solid red";
            
            elementName[i].style.border="2px solid red";    
                        
        }else{ 
            place[i].style.display = "none";
            elementName[i].style.border="1px solid black";
            count = count + 1;           
        }
        
    }
    if(count == elementName.length){
        isForm2Completed = true;        
    }						
    if(isForm2Completed){
        location.href = "#reg"+(currentPage+1) 
        alert('Done');							
    }else{
        location.href = "#reg"+currentPage;
        alert('Some feilds must be filled');
    }

}
function getFileName(){
    console.log(event.target.files[0].name)
    var fileName = event.target.files[0].name;
    document.getElementById("file_name").innerText=fileName;
}

function checkForm(){
    return false;
}

document.forms['MyForm'].onsubmit = CheckingStatus;
function CheckingStatus() {
    //.....
    
      return false;
    
  }
function isGenderEmpty(){
    
    var genderArray = document.getElementsByClassName("radio");
    var place = document.getElementsByClassName("Gender_span");
    var i;
    for(i=0; i<genderArray.length; i++){
        if(genderArray[i].checked){
            place[0].style.display = "none";
            return true;           
        }     
               
    }    
        place[0].style.display = "block";
        place[0].innerHTML = "This feild must be filled";
        place[0].style.background="red";
        place[0].style.border="1px solid red";
        elementName[i].style.border="2px solid red";
}
function submitForm(){
    TermsAndC();
    if (isForm1Completed && isForm2Completed && isTermsAndC){
        alert("Bye Babe");
        document.getElementById('myform').submit();
    }else{
        alert("Can't Submit some feild must be filled");
        
    }
}
function TermsAndC(){
    var checkbtn = document.getElementById("check1")
        if(checkbtn.checked){
            alert("Done");
            isTermsAndC = true;
        }else{
            alert("Please accept license and agreements");
        }
    
}