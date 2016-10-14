<?php
session_start();
if(!isset($_SESSION['role']))
{
	echo "<script>window.location='pages/login.php'</script>";
}else {
  echo "<script>window.location='pages/home.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Absensi</title>
</head>
<body>h gfh
</body>
</html>
