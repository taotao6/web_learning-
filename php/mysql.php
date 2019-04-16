<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$id=mysql_connect("localhost","root","");
	if($id){
		echo "OK,数据库连接成功！<br>";
		$ok=mysql_select_db("student",$id);
	}
	 ?>
	
</body>
</html>