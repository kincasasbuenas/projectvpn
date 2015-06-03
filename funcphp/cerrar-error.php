<?php
	session_start();
	if(isset($_SESSION['error']))
	{
		$_SESSION['error']="";
		return 1;
	}
?>