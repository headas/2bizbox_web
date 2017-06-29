<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$fahuo = "http://192.168.1.10/so/shuju/Every_day.php";
$kucun = "http://192.168.1.10/kc_desktop.php";
$time=date("Y-m-d H-i-s");
$shijian=date("Y-m-d");
$info = file_get_contents ($fahuo);
$info1 = file_get_contents ($kucun);
$info_sum = $info. " " .$info1;
file_put_contents("tmp/$time.html",$info_sum);
?>
</body>
</html>
