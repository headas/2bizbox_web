<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

$datay1=array(13,8,19);
$datay2=array(3,1,0);//�����ӵ�����

// Create the graph.
$graph = new Graph(650,450);//������С
//$graph->SetScale('textlin');
$graph->SetScale('textlin',-10,25);//����y�᷶ΧΪ5-75
$graph->yaxis->scale->ticks->Set(5);//����y��̶�Ϊ10
//$graph->xaxis->scale->ticks->Set(5);
$graph->xaxis->title->Set("X��");
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD,14); 
$graph->yaxis->title->Set("Y��");
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD,14); 

$graph->SetMarginColor('white');//���ñ߿򱳾���ɫ
$graph->SetMargin(40,40,10,10);//����ͼ�ڱ߿��е�λ��

// Setup title
$graph->title->Set('P2350 ����������ͼ');//���ñ��⣬Ĭ�ϵı��ⲻ֧������
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);   //�����������ͺʹ�С����һ�����������Ƿ�����ʾ���ġ�����ֵ�ɲο�jpgraph_ttf.inc.php�ļ�

// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);//����������ɫ
//$bplot->SetFillgradient('orange','darkred',GRAD_VER); //����������ɫ
$bplot->SetColor('orange');//����߽����ɫ

// Create the second bar
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillGradient('olivedrab1','olivedrab4',GRAD_VERT);//���������Ӳ��ֵ���ɫ
$bplot2->SetColor('red');//���������Ӳ��ֵı߿���ɫ


// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot,$bplot2));
$graph->Add($accbplot);

$graph->Stroke();
?>

accbarframeex01.php