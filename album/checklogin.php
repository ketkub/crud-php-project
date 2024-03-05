<?php
session_start();
if(empty($_SESSION["aid"])){
	echo "Access denied";
	exit;
     	
}

?>
