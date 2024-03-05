<?php
         session_start();
		 include("connectdb.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ศศิธร พิสัยพันธ์</title>
</head>

<body>

<h1>Login</h1>

<form method="post" action="">
      username <input type="teat" name="user" autofocus required> <br>
      password <input type="password" name="pwd" required><br>
      <input type="submit" name="Submit" value="LOGIN">
</form>

<?php

if(isset($_POST['Submit'])){
	$sql = "SELECT * FROM `admin` where `a_usr` ='{$_POST['user']}' and `a_pwd`='".md5($_POST['pwd'])."' limit 1";
	$rs = mysqli_query($conn, $sql) or die("select ไม่ได้");
	$num = mysqli_num_rows($rs);
	
	if($num > 0){
		$data = mysqli_fetch_array($rs);
		$_SESSION["aid"] = $data['a_id'];
		$_SESSION["aname"] = $data['a_name'];
		echo "<script>";
		echo "window.location='index3.php';";
		echo "</script>";
		} else {	
		echo "<script>";
		echo "alert('Username หรือ password ไม่ถูกต้อง');";
		echo "</script>";
		}

}
?>

</body>

</html>
