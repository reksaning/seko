<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="post" action="send.php">
<input type="text" name="nohp" value="+62"><br>
<textarea name="msg"></textarea><br>
<input type="submit" name="submit" value="Kirim SMS">
</form>
<?php
$noTujuan = "+6281333104139";
$message = "loha";
 
exec('c:\xampp\htdocs\smsku\bin\gammu-smsd-inject.exe -c c:\xampp\htdocs\smsku\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
 
?>

</body>
</html>