<?php
/*
Author: Keenan Irusan 16012269
*/
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>