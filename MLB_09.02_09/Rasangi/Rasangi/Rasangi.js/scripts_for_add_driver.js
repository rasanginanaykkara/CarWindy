function getTimeDifference(){    
    var start = new Date(document.getElementById("start").innerHTML);
    var end = new Date(document.getElementById("end").innerHTML);
    var timeDif = Math.abs(end - start);
    var days =  (timeDif/ (1000 * 60 * 60 * 24));
    document.getElementById("no_of_days").innerHTML = days;

}
function addADriver(driver_id){
    
    document.getElementById("driver").innerHTML = driver_id;
    var days = document.getElementById("no_of_days").innerHTML;
    document.getElementById("total").innerHTML -= (-1000*days);
    document.getElementById("driver_cost").innerHTML = (1000*days);

}
function removeDriver(){
    Document.getElementById("driver").innerHTML = "NONE";
    Document.getElementById(total).innerHTML -= "driver_cost";
    document.getElementById("driver_cost").innerHTML = "";
}
function calculateTotal(){
    document.getElementById("total").innerHTML = document.getElementById("no_of_days").innerHTML * document.getElementById("per_day").innerHTML;
}