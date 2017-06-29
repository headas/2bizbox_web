<?php
$hostname_c32_19aq_com = "192.168.1.10";
$database_c32_19aq_com = "bb2_headas";
$username_c32_19aq_com = "root";
$password_c32_19aq_com = "c3253220.";
$c32_19aq_com = mysql_pconnect($hostname_c32_19aq_com, $username_c32_19aq_com, $password_c32_19aq_com) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES utf8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
$sanma = array("112");
$newarray = array();
foreach( $sanma as $num ) {
$result = mysql_query("SELECT FLOOR(qty) FROM sois where pn = '2010500001'");
while ($row = mysql_fetch_array($result)) {
//echo $row['id']; //输出$row['id'];
//echo "</br>";
$newarray[] = $row[FLOOR(qty)];
}
var_dump ($arr);
print_r ($newarray);//输出数组
}
echo "</br>";
?>
</body>
</html>
