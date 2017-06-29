<?php require_once('../../Connections/c32_19aq_com.php'); ?>
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
$query_p2350 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2010500001'";
$p2350 = mysql_query($query_p2350, $c32_19aq_com) or die(mysql_error());
$row_p2350 = mysql_fetch_assoc($p2350);
$totalRows_p2350 = mysql_num_rows($p2350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p3350 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand  WHERE pn = '2011500001'";
$p3350 = mysql_query($query_p3350, $c32_19aq_com) or die(mysql_error());
$row_p3350 = mysql_fetch_assoc($p3350);
$totalRows_p3350 = mysql_num_rows($p3350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_d3370 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2011600001'";
$d3370 = mysql_query($query_d3370, $c32_19aq_com) or die(mysql_error());
$row_d3370 = mysql_fetch_assoc($d3370);
$totalRows_d3370 = mysql_num_rows($d3370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p6350 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2010100001'";
$p6350 = mysql_query($query_p6350, $c32_19aq_com) or die(mysql_error());
$row_p6350 = mysql_fetch_assoc($p6350);
$totalRows_p6350 = mysql_num_rows($p6350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_d6370 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2011100001'";
$d6370 = mysql_query($query_d6370, $c32_19aq_com) or die(mysql_error());
$row_d6370 = mysql_fetch_assoc($d6370);
$totalRows_d6370 = mysql_num_rows($d6370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p7350 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2011000001'";
$p7350 = mysql_query($query_p7350, $c32_19aq_com) or die(mysql_error());
$row_p7350 = mysql_fetch_assoc($p7350);
$totalRows_p7350 = mysql_num_rows($p7350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_p8350 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2010200001'";
$p8350 = mysql_query($query_p8350, $c32_19aq_com) or die(mysql_error());
$row_p8350 = mysql_fetch_assoc($p8350);
$totalRows_p8350 = mysql_num_rows($p8350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_d8370 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2011400001'";
$d8370 = mysql_query($query_d8370, $c32_19aq_com) or die(mysql_error());
$row_d8370 = mysql_fetch_assoc($d8370);
$totalRows_d8370 = mysql_num_rows($d8370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_h6290 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2011700001'";
$h6290 = mysql_query($query_h6290, $c32_19aq_com) or die(mysql_error());
$row_h6290 = mysql_fetch_assoc($h6290);
$totalRows_h6290 = mysql_num_rows($h6290);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_h6390 = "SELECT FLOOR(pt_onhand.onhand) FROM pt_onhand WHERE pn = '2010900001'";
$h6390 = mysql_query($query_h6390, $c32_19aq_com) or die(mysql_error());
$row_h6390 = mysql_fetch_assoc($h6390);
$totalRows_h6390 = mysql_num_rows($h6390);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj2350 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2010500001'";
$zj2350 = mysql_query($query_zj2350, $c32_19aq_com) or die(mysql_error());
$row_zj2350 = mysql_fetch_assoc($zj2350);
$totalRows_zj2350 = mysql_num_rows($zj2350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj3350 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2011500001'";
$zj3350 = mysql_query($query_zj3350, $c32_19aq_com) or die(mysql_error());
$row_zj3350 = mysql_fetch_assoc($zj3350);
$totalRows_zj3350 = mysql_num_rows($zj3350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj3370 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2011600001'";
$zj3370 = mysql_query($query_zj3370, $c32_19aq_com) or die(mysql_error());
$row_zj3370 = mysql_fetch_assoc($zj3370);
$totalRows_zj3370 = mysql_num_rows($zj3370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj6350 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2010100001'";
$zj6350 = mysql_query($query_zj6350, $c32_19aq_com) or die(mysql_error());
$row_zj6350 = mysql_fetch_assoc($zj6350);
$totalRows_zj6350 = mysql_num_rows($zj6350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj6370 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2011100001'";
$zj6370 = mysql_query($query_zj6370, $c32_19aq_com) or die(mysql_error());
$row_zj6370 = mysql_fetch_assoc($zj6370);
$totalRows_zj6370 = mysql_num_rows($zj6370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj7350 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2011000001'";
$zj7350 = mysql_query($query_zj7350, $c32_19aq_com) or die(mysql_error());
$row_zj7350 = mysql_fetch_assoc($zj7350);
$totalRows_zj7350 = mysql_num_rows($zj7350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj8350 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2010200001'";
$zj8350 = mysql_query($query_zj8350, $c32_19aq_com) or die(mysql_error());
$row_zj8350 = mysql_fetch_assoc($zj8350);
$totalRows_zj8350 = mysql_num_rows($zj8350);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj8370 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2011400001'";
$zj8370 = mysql_query($query_zj8370, $c32_19aq_com) or die(mysql_error());
$row_zj8370 = mysql_fetch_assoc($zj8370);
$totalRows_zj8370 = mysql_num_rows($zj8370);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj6290 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2011700001'";
$zj6290 = mysql_query($query_zj6290, $c32_19aq_com) or die(mysql_error());
$row_zj6290 = mysql_fetch_assoc($zj6290);
$totalRows_zj6290 = mysql_num_rows($zj6290);

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_zj6390 = "SELECT FLOOR(sum(qty)) FROM `pt_qa` WHERE pn = '2010100001'";
$zj6390 = mysql_query($query_zj6390, $c32_19aq_com) or die(mysql_error());
$row_zj6390 = mysql_fetch_assoc($zj6390);
$totalRows_zj6390 = mysql_num_rows($zj6390);


$sum1 = $row_p2350['FLOOR(pt_onhand.onhand)']+ $row_p3350['FLOOR(pt_onhand.onhand)']+$row_d3370['FLOOR(pt_onhand.onhand)']+$row_p6350['FLOOR(pt_onhand.onhand)']+$row_d6370['FLOOR(pt_onhand.onhand)']+$row_p7350['FLOOR(pt_onhand.onhand)']+$row_p8350['FLOOR(pt_onhand.onhand)']+$row_d8370['FLOOR(pt_onhand.onhand)']+$row_h6290['FLOOR(pt_onhand.onhand)']+$row_h6390['FLOOR(pt_onhand.onhand)'];

$sum2 = $row_zj2350['FLOOR(sum(qty))']+$row_zj3350['FLOOR(sum(qty))']+$row_zj3370['FLOOR(sum(qty))']+$row_zj6350['FLOOR(sum(qty))']+$row_zj6370['FLOOR(sum(qty))']+$row_zj7350['FLOOR(sum(qty))']+$row_zj8350['FLOOR(sum(qty))']+$row_zj8370['FLOOR(sum(qty))']+$row_zj6290['FLOOR(sum(qty))']+$row_zj6390['FLOOR(sum(qty))'];

	if($row_p2350['FLOOR(pt_onhand.onhand)']< '50.0000'){
		$bgcolor2350="#FF0000";
		}elseif($row_p2350['FLOOR(pt_onhand.onhand)']> '50.0000'){
		$bgcolor2350="#28FF28";
		}
	if($row_p3350['FLOOR(pt_onhand.onhand)']< '50.0000'){
		$bgcolor3350="#FF0000";
		}elseif($row_p3350['FLOOR(pt_onhand.onhand)']> '50.0000'){
		$bgcolor3350="#28FF28";
		}
	if($row_d3370['FLOOR(pt_onhand.onhand)']< '20.0000'){
		$bgcolor3370="#FF0000";
		}elseif($row_d3370['FLOOR(pt_onhand.onhand)']> '20.0000'){
		$bgcolor3370="#28FF28";
		}
	if($row_p6350['FLOOR(pt_onhand.onhand)']< '50.0000'){
		$bgcolor6350="#FF0000";
		}elseif($row_p6350['FLOOR(pt_onhand.onhand)']> '50.0000'){
		$bgcolor6350="#28FF28";
		}
	if($row_d6370['FLOOR(pt_onhand.onhand)']< '20.0000'){
		$bgcolor6370="#FF0000";    //红色
		}elseif($row_d6370['FLOOR(pt_onhand.onhand)']> '20.0000'){
		$bgcolor6370="#28FF28";    //绿色
		}
	if($row_p7350['FLOOR(pt_onhand.onhand)']< '20.0000'){
		$bgcolor7350="#FF0000";
		}elseif($row_p7350['FLOOR(pt_onhand.onhand)']> '20.0000'){
		$bgcolor7350="#28FF28";
		}
	if($row_p8350['FLOOR(pt_onhand.onhand)']< '20.0000'){
		$bgcolor8350="#FF0000";
		}elseif($row_p8350['FLOOR(pt_onhand.onhand)']> '20.0000'){
		$bgcolor8350="#28FF28";
		}
	if($row_d8370['FLOOR(pt_onhand.onhand)']< '20.0000'){
		$bgcolor8370="#FF0000";
		}elseif($row_d8370['FLOOR(pt_onhand.onhand)']> '20.0000'){
		$bgcolor8370="#28FF28";
		}
	if($row_h6290['FLOOR(pt_onhand.onhand)']< '20.0000'){
		$bgcolor6290="#FF0000";
		}elseif($row_h6390['FLOOR(pt_onhand.onhand)']> '20.0000'){
		$bgcolor6290="#28FF28";
		}
	if($row_h6390['FLOOR(pt_onhand.onhand)']< '30.0000'){
		$bgcolor6390="#FF0000";
		}elseif($row_h6390['FLOOR(pt_onhand.onhand)']> '30.0000'){
		$bgcolor6390="#28FF28";
		}
		
		
		
		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title></title>

<body>
<table width="300" border="1" cellpadding="1" cellspacing="0" style="font-size:11px;text-align:center;">
  <tr>
    <td>型号</td>
    <td>类型</td>
    <td>料号</td>
    <td>成品库存</td>
    <td>在检库存</td>
  </tr>
  <tr>
    <td>P2350</td>
    <td>成品</td>
    <td>2010500001</td>
    <td bgcolor=<?php echo $bgcolor2350; ?>><?php echo $row_p2350['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj2350['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>P3350</td>
    <td>成品</td>
    <td>2011500001</td>
    <td bgcolor=<?php echo $bgcolor3350; ?>><?php echo $row_p3350['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj3350['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>D3370</td>
    <td>成品</td>
    <td>2011600001</td>
    <td bgcolor=<?php echo $bgcolor3370; ?>><?php echo $row_d3370['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj3370['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>P6350</td>
    <td>成品</td>
    <td>2010100001</td>
    <td bgcolor=<?php echo $bgcolor6350; ?>><?php echo $row_p6350['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj6350['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>D6370</td>
    <td>成品</td>
    <td>2011100001</td>
    <td bgcolor=<?php echo $bgcolor6370; ?>><?php echo $row_d6370['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj6370['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>P7350</td>
    <td>成品</td>
    <td>2011000001</td>
    <td bgcolor=<?php echo $bgcolor7350; ?>><?php echo $row_p7350['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj7350['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>P8350</td>
    <td>成品</td>
    <td>2010200001</td>
    <td bgcolor=<?php echo $bgcolor8350; ?>><?php echo $row_p8350['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj8350['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>D8370</td>
    <td>成品</td>
    <td>2011400001</td>
    <td bgcolor=<?php echo $bgcolor8370; ?>><?php echo $row_d8370['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj8370['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>H6290</td>
    <td>成品</td>
    <td>2011700001</td>
    <td bgcolor=<?php echo $bgcolor6290; ?>><?php echo $row_h6290['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj6290['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>H6390</td>
    <td>成品</td>
    <td>2010900001</td>
    <td bgcolor=<?php echo $bgcolor6390; ?>><?php echo $row_h6390['FLOOR(pt_onhand.onhand)']; ?>台</td>
    <td><?php echo $row_zj6390['FLOOR(sum(qty))']; ?>台</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><b>总数：</b></td>
    <td><?php echo $sum1; ?>台</td>
    <td><?php echo $sum2; ?>台</td>
  </tr>
</table>
红色为低库存预警</br>
<b>在检库存准确率为80%</b>
</body>
</html>
<?php
mysql_free_result($p2350);

mysql_free_result($p3350);

mysql_free_result($d3370);

mysql_free_result($p6350);

mysql_free_result($d6370);

mysql_free_result($p7350);

mysql_free_result($p8350);

mysql_free_result($d8370);

mysql_free_result($h6290);

mysql_free_result($h6390);

mysql_free_result($zj2350);

mysql_free_result($zj3350);

mysql_free_result($zj3370);

mysql_free_result($zj6350);

mysql_free_result($zj6370);

mysql_free_result($zj7350);

mysql_free_result($zj8350);

mysql_free_result($zj8370);

mysql_free_result($zj6290);

mysql_free_result($zj6390);
?>
