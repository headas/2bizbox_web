<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>华创视际销售数据报表系统</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".div2").click(function(){ 
		$(this).next("div").slideToggle("slow").siblings(".div3:visible").slideUp("slow");
	});
});
</script>

<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% "微软雅黑";}
a,a:hover{color:#000;text-decoration:none;}

.left{width:200px;height:100%;border-right:1px solid #CCCCCC ;#FFFFFF;color:#000000;font-size:14px;text-align:center;position:absolute;left:0;top:0;}
.div1{text-align:center;width:200px;padding-top:10px;}
.div2{height:40px;line-height:40px;cursor:pointer;font-size:13px;position:relative;border-bottom:#ccc 1px dotted;}
.jbsz {position:absolute;height:20px;width:20px;left:40px;top:10px;background:url(images/1.png);}
.xwzx {position:absolute;height:20px;width:20px;left:40px;top:10px;background:url(images/2.png);}
.zxcp {position:absolute;height:20px;width:20px;left:40px;top:10px;background:url(images/4.png);}
.lmtj {position:absolute;height:20px;width:20px;left:40px;top:10px;background:url(images/8.png);}
.div3{display:block;font-size:13px;}  //左侧列表自动展开
.div3 ul{margin:0;padding:0;}
.div3 li{height:30px;line-height:30px;list-style:none;border-bottom:#ccc 1px dotted;text-align:center;}

</style>

</head>
<body>

<div class="left">

		<div class="div2"><div class="xwzx"></div>
		销售数据</div>
		<div class="div3">
			<ul>
				<li><a href="./shuju/delivery.php" target="mainFrame">发货查询</a></li>
				<li><a href="./shuju/Every_day.php" target="mainFrame">数据报表</a></li>
				<li><a href="javascript:void(0);" target="mainFrame">测试测试</a></li>
                
			</ul>
		</div>
		<div class="div2"><div class="zxcp"></div>订单数据</div>
		<div class="div3">
			<ul>
				<li><a href="./shuju/Alone_Owe.php" target="mainFrame">欠货状态</a></li>
				<li><a href="./shuju/Owe.php" target="mainFrame">欠货明细</a></li>
				<li><a href="./shuju/kc_desktop.php" target="mainFrame">成品库存</a></li>
                
			</ul>
		</div>
		<div class="div2"><div class="lmtj"></div>财务报表</div>
		<div class="div3">
			<ul>
				<li><a href="javascript:void(0);" target="mainFrame">测试测试</a></li>
                <li><a href="shuju/Month_Receivables.php" target="mainFrame">上月收款</a></li>
				<li><a href="./shuju/Cashier_record.php" target="mainFrame">收款记录</a></li>
				<li><a href="shuju/reconciliation.php" target="mainFrame">客户对账</a></li>
                <li><a href="javascript:void(0);" target="mainFrame">测试测试</a></li>
                
			</ul>
		</div>
		<div class="div2"><div class="lmtj"></div>邮件报表</div>
		<div class="div3">
        <ul>
        <li><a href="javascript:void(0);" target="mainFrame">测试测试</a></li>
        <li><a href="javascript:void(0);" target="mainFrame">测试测试</a></li>
        
        </ul>
</div>
        
        
</div>
</div>


</body>
</html>
