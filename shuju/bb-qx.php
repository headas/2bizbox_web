<?php // content="text/plain; charset=utf-8"
//加载生成图表对应的文件
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
//=====================输出日期数组===============================
$j = date(j); //获取当前月份天数
$start_time = strtotime(date('Y-m-01'));  //获取本月第一天时间戳
$array = array();
for($i=0;$i<$j;$i++){
     $array[] = date('Y-m-d',$start_time+$i*86400); //每隔一天赋值给数组
}
//print_r($array);
$arrayc = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
//=====================输出日期数组===============================
$hostname_c32_19aq_com = "192.168.1.10";
$database_c32_19aq_com = "bb2_headas";
$username_c32_19aq_com = "root";
$password_c32_19aq_com = "c3253220.";
$c32_19aq_com = mysql_pconnect($hostname_c32_19aq_com, $username_c32_19aq_com, $password_c32_19aq_com) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES utf8");
//=====================SQL连接字符串=============================
$sanma = array("112");
$newarray = array();
foreach( $sanma as $num ) {
$result = mysql_query("SELECT FLOOR(qty) FROM sois where pn = '1010600003'");
while ($row = mysql_fetch_array($result)) {
//echo $row['id']; //输出$row['id'];
//echo "</br>";
$newarray[] = $row[FLOOR(qty)];
}
//var_dump ($arr);
//print_r ($newarray);//输出数组
}
//echo "</br>";
//=====================输出数组=============================







//创建图表的数据，可以自定义    $datay3 = array(5,17,32,24,9,9);
$datay1 = array(20,15,23,15,7,7);//数组源数据
$datay2 = $newarray;
$datay3 = array(5,17,32,24,9,9);



// 设置图表的长宽
$graph = new Graph(1300,700); //画布大小
$graph->SetScale("textlin",0,0); //设置y轴范围为0-0

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('产品月销量曲线图');//设置标题，默认的标题不支持中文
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);   //设置字体类型和大小。第一个参数决定是否能显示中文。参数值可参考jpgraph_ttf.inc.php文件
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($array);
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD,9);   //(FF_FONT1,FS_BOLD);
$graph->xaxis->SetLabelAngle(70);
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);	// 创建坐标类，将y轴数据注入
$graph->Add($p1);
$p1->SetColor("#6495ED");//设置颜色
$p1->SetLegend('P2350'); //设置线条名称

// Create the second line
$p2 = new LinePlot($datay2);	// 创建坐标类，将y轴数据注入
$graph->Add($p2);
$p2->SetColor("#B22222");//设置颜色
$p2->SetLegend('P3350');//设置线条名称

// Create the third line
$p3 = new LinePlot($datay3);// 创建坐标类，将y轴数据注入
$graph->Add($p3);
$p3->SetColor("#FF1493");//设置颜色
$p3->SetLegend('H6390');//设置线条名称

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();  // 显示图

?>

