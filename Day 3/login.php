<?php
/**
 *  ... login page to prompt user to enter credentials ... 
 */
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if( ($_SESSION['mail']) == "asim@gmail.com" and ($_SESSION['pass']) == "1234" ) {
    include('dashboardpage.php');
} else {
    include('loginpage.php');
}