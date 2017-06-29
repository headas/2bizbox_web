<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

$datay1=array(13,8,19);
$datay2=array(3,1,0);//多增加的数据

// Create the graph.
$graph = new Graph(650,450);//画布大小
//$graph->SetScale('textlin');
$graph->SetScale('textlin',-10,25);//设置y轴范围为5-75
$graph->yaxis->scale->ticks->Set(5);//设置y轴刻度为10
//$graph->xaxis->scale->ticks->Set(5);
$graph->xaxis->title->Set("X轴");
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD,14); 
$graph->yaxis->title->Set("Y轴");
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD,14); 

$graph->SetMarginColor('white');//设置边框背景颜色
$graph->SetMargin(40,40,10,10);//设置图在边框中的位置

// Setup title
$graph->title->Set('P2350 月销量曲线图');//设置标题，默认的标题不支持中文
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);   //设置字体类型和大小。第一个参数决定是否能显示中文。参数值可参考jpgraph_ttf.inc.php文件

// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);//设置柱体颜色
//$bplot->SetFillgradient('orange','darkred',GRAD_VER); //设置柱体颜色
$bplot->SetColor('orange');//柱体边界的颜色

// Create the second bar
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillGradient('olivedrab1','olivedrab4',GRAD_VERT);//柱体中增加部分的颜色
$bplot2->SetColor('red');//柱体中增加部分的边框颜色


// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot,$bplot2));
$graph->Add($accbplot);

$graph->Stroke();
?>

accbarframeex01.php