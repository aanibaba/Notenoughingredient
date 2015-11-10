<?php 
function loggedIn(){ 
    //Session logged is set if the user is logged in 
    //set it on 1 if the user has successfully logged in 
    //if it wasn't set create a login form 
    if(!$_SESSION['loggd']){ 
        echo'<form action="login.php" method="post"> </form>'; 
        //if session is equal to 1, display  
        //Welcome, and whaterver their user name is 
    }else{ 
        echo 'Welcome, '.$_SESSION['username']; 
    } 
} 
?>