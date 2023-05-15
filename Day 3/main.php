<?php
/**
 *   ... main file when site opens
 */
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if ( isset($_SESSION['mail']) and isset($_SESSION['password']) ) {
    include('dashboard.php');
} else {
    include('loginpage.php');
}