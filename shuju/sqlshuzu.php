<?php
$link=MySQL_connect('192.168.1.10','root','c3253220.');
if(!$link) echo "连接失败Error !";
else echo "SQL连接成功Ok!";
MySQL_close();
?>
<?php
$hostname_c32_19aq_com = "192.168.1.10";
$database_c32_19aq_com = "bb2_headas";
$username_c32_19aq_com = "root";
$password_c32_19aq_com = "c3253220.";
$c32_19aq_com = mysql_pconnect($hostname_c32_19aq_com, $username_c32_19aq_com, $password_c32_19aq_com) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES utf8");

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset1 = "SELECT * FROM ab WHERE id LIKE '%HC%'";
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
==
<?php
$sanma = array("112");
$arr = array();
foreach( $sanma as $num ) {
$result = mysql_query("SELECT * FROM ab WHERE id LIKE '%HC%'");
while($row = mysql_fetch_array($result)){
echo $row['id']; //输出$row['id'];
$arr[] = $rows['id'];
echo "</br>";

}
var_dump ($arr);
echo "</br>";
//print_r ($arr);
}
echo "</br>";






?>
</body>
</html>
