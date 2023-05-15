<?php
/**
 *  ... for deleting session ... 
 */
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
session_unset();
session_destroy();
include('loginpage.php');