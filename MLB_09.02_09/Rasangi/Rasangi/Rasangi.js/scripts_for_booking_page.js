function setResult(rows,pick,drop){
    

    
    if(rows==0){
        document.getElementById('formid').action = "add_driver.php?pickup_date="+pick+"&dropoff_date="+drop;
        document.getElementById('status').innerHTML = "Available";
        document.getElementById('sub').value = "proceed to check out";

    }else{
        document.getElementById('formid').action = "car.php";
        document.getElementById('status').innerHTML = "unvailable";
        document.getElementById('sub').value = "search again";
    }
    document.getElementById('pickup_date').type = "hidden";
    document.getElementById('dropoff_date').type ="hidden";
    document.getElementById('pickup_date').value = pick;
    document.getElementById('dropoff_date').value = drop;
}
function getTimeDifference(){    
    var start = new Date(document.getElementById("pickup_date").value);
    var end = new Date(document.getElementById("dropoff_date").value);
    var timeDif = Math.abs(end - start);
    return (timeDif/ (1000 * 60 * 60 * 24));

}
function setDriverInformation(){
    document.getElementById("driver_list").innerHTML = "<?php echo $testvalue; ?>";
}



//SELECT * FROM driver EXCEPT SELECT d.driver_id, d.driver_name, d.contact_number, d.driver_bio FROM reserve r 
//JOIN driver d ON r.driver_id = d.driver_id WHERE (r.pickup_date BETWEEN "2022-04-01" AND "2022-04-15") OR 
//(r.pickup_date<="2022-04-01" AND r.dropoff_date>="2022-04-01");