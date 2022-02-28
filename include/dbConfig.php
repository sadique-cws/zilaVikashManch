<?php 

//database connection (ddp = district development portal)
$connect=  mysqli_connect('localhost','root','',"ddp");

// session start function for session enablility for login and auth
session_start();



function redirect($page="index"){
    echo "<script>window.open('$page.php','_self')</script>";
}
function alert($msg){
    echo "<script>alert('$msg')</script>";
}

function authCheck($session,$page="index"){
    if(!isset($_SESSION[$session])){
        redirect($page);
    }
}

?>