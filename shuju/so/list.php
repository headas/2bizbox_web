<?php require_once('../../../Connections/c32_19aq_com.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset2 = "select salesorder0_.so as col_0_0_, salesorder0_.change_order as col_1_0_, salesorder0_.entered as col_2_0_, salesorder0_.id as col_3_0_, salesorder0_.po as col_4_0_, salesorder0_.project as col_5_0_, salesorder0_.status as col_6_0_, salesorder0_.notes as col_7_0_, salesorder0_.comments as col_8_0_, salesorder0_.salesman as col_9_0_, salesorder0_.ar_total as col_10_0_, salesorder0_.currency as col_11_0_, salesorder0_.reldoc as col_12_0_, salesorder0_.ar_prepay as col_13_0_, salesorder0_.ar_prepay_gl as col_14_0_, customerve1_.name as col_15_0_ from so salesorder0_ left outer join ab customerve1_ on salesorder0_.id=customerve1_.id where 1=1 and (salesorder0_.so like 'S%') and (salesorder0_.status in ('OPEN' , 'NOT REVIEWED')) order by salesorder0_.so desc limit 1000";
$Recordset2 = mysql_query($query_Recordset2, $c32_19aq_com) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>销售单列表</title>
<?php
/***********************************************
*
*截取一定长度的字符串，确保截取后字符串不出乱码
*
***********************************************/
function jiequ($str,$cutleng)
{
$str = $str; //要截取的字符串
$cutleng = $cutleng; //要截取的长度
$strleng = strlen($str); //字符串长度
if($cutleng>$strleng)return $str;//字符串长度小于规定字数时,返回字符串本身
$notchinanum = 0; //初始不是汉字的字符数
for($i=0;$i<$cutleng;$i++)
{
if(ord(substr($str,$i,1))<=128)
{
$notchinanum++;
}
}
if(($cutleng%2==1)&&($notchinanum%2==0))//如果要截取奇数个字符，所要截取长度范围内的字符必须含奇数个非汉字，否则截取的长度加一
{
$cutleng++;
}
if(($cutleng%2==0)&&($notchinanum%2==1))//如果要截取偶数个字符，所要截取长度范围内的字符必须含偶数个非汉字，否则截取的长度加一
{
$cutleng++;
}
$str = substr($str,0,$cutleng);
return $str."...";
}

?>
</head>
<style>
#c{font-size:1px;}
</style>
<body>
<table width="100%" border="1" cellpadding="1" cellspacing="0" style="font-size:11px;text-align:center;">
  <tr>
    <td>销售单号</td>
    <td>日期</td>
    <td>版本</td>
    <td>客户</td>
    <td>客户名称</td>
    <td>私有备注</td>
    <td>备注</td>
    <td>总计</td>
    <td>货币</td>
    <td>状态</td>
  </tr>
  <?php do { 	
  if ($row_Recordset2['col_6_0_']=="NOT REVIEWED"){
	$shenhe="未审核";
	$bgcolor="#FF0000";
	}elseif($row_Recordset2['col_6_0_']=="OPEN"){
	$shenhe="打开";
	$bgcolor="#FFFFFF";
		}
  ?>
    <tr>
      <td><a href="so.php?so=<?php echo $row_Recordset2['col_0_0_']; ?>"> <?php echo $row_Recordset2['col_0_0_']; ?></a></td>
      <td><?php echo $row_Recordset2['col_1_0_']; ?>&nbsp; </td>
      <td><?php echo $row_Recordset2['col_2_0_']; ?>&nbsp; </td>
      <td><?php echo $row_Recordset2['col_3_0_']; ?>&nbsp; </td>
      <td><?php echo $row_Recordset2['col_15_0_']; ?>&nbsp; </td>
      <td><?php echo $row_Recordset2['col_7_0_']; ?></td>
      <td><?php echo jiequ($row_Recordset2['col_8_0_'],25); ?></td>
      <td><?php echo $row_Recordset2['col_10_0_']; ?></td>
      <td><?php echo $row_Recordset2['col_11_0_']; ?></td>
      <td bgcolor=<?php echo $bgcolor; ?>><a href="so.php?so=<?php echo $row_Recordset2['col_0_0_']; ?>"> <?php echo $shenhe; ?></a></td>
    </tr>
    <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<br />
总数<?php echo $totalRows_Recordset2 ?>记录 
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
