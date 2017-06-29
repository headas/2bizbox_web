<?php require_once('../../Connections/c32_19aq_com.php'); ?>

<?php
mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset1 = "select ps.mn,pt_onhand.onhand,pt_onhand.pn,pt_onhand.pa from pt_onhand left join ps on pt_onhand.pn=ps.pn where pt_onhand.pa = '成品' OR pt_onhand.pa = '市场物料' OR pt_onhand.pa = '配件' order by (pt_onhand.pa='配件'),(pt_onhand.pa='市场物料'),(pt_onhand.pa='成品') desc";
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title></title>

<body>
<table width="1080" border="1" cellpadding="1" cellspacing="0" style="font-size:46px;text-align:center;">
  <tr>
    <td width="25%">型号</td>
    <td width="25%">库存</td>
    <td width="25%">料号</td>
    <td width="25%">类型</td>
  </tr>
  <?php do { ?>
  <tr>
    <td><?php echo $row_Recordset1['mn']; ?></td>
    <td><?php echo $row_Recordset1['onhand']; ?></td>
    <td><?php echo $row_Recordset1['pn']; ?></td>
    <td><?php echo $row_Recordset1['pa']; ?></td>
  </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>