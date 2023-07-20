<?php
function setLogin(){
    if(isset($_SESSION['userID'])){
        echo "
        <div id='login_signup_links' class='user_links'>
        <p>
            ".$_SESSION['userID']."           
        </p>
        </div>
        ";
    }else{
        echo "
        <div id='login_signup_links' class='user_links'>
        <p>
            <a href='../html/login.html'>login</a>
            |
            <a href=''>sign in</a>
        </p>
        </div>
        ";
    }
}
?>