<?php
/**
 *  ... dashboard where ...
 */

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if ( isset($_POST['submit']) ) {
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['pass'] = $_POST['pass'];
    if ( $_SESSION['mail'] == "asim@gmail.com" and $_SESSION['pass'] == "1234" ) {
        include('dashboardpage.php');
    } else {
        include('loginpage.php');
    }
}