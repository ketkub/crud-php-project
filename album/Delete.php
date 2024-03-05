<?php
        include("checklogin.php");
  
	
	if(isset($_GET['pid'])){
		 include("connectdb.php");	
		$sql = "DELETE FROM `products`  WHERE `products`.`p_id` = '{$_GET['pid']}' ";
		mysqli_query($conn, $sql) or die ("ลบไม่ได้");
		
	   unlink("img/".$_GAT['pid'].".".$_GET['ext']);
	   echo "<script>";
	   echo "window.location='index3.php';";
	   echo "</script>";
  
}
?>



<meta charset="utf-8">
