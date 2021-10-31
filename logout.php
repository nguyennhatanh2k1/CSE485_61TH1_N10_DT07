<?php 

session_start();

if(isset($_SESSION['myblog_userid']))
{
	$_SESSION['myblog_userid'] = NULL;
	unset($_SESSION['myblog_userid']);

}

header("Location: home.php");
die;
