<?php // content="text/plain; charset=utf-8"
//��������ͼ���Ӧ���ļ�
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
//=====================�����������===============================
$j = date(j); //��ȡ��ǰ�·�����
$start_time = strtotime(date('Y-m-01'));  //��ȡ���µ�һ��ʱ���
$array = array();
for($i=0;$i<$j;$i++){
     $array[] = date('Y-m-d',$start_time+$i*86400); //ÿ��һ�츳ֵ������
}
//print_r($array);
$arrayc = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
//=====================�����������===============================
$hostname_c32_19aq_com = "192.168.1.10";
$database_c32_19aq_com = "bb2_headas";
$username_c32_19aq_com = "root";
$password_c32_19aq_com = "c3253220.";
$c32_19aq_com = mysql_pconnect($hostname_c32_19aq_com, $username_c32_19aq_com, $password_c32_19aq_com) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES utf8");
//=====================SQL�����ַ���=============================
$sanma = array("112");
$newarray = array();
foreach( $sanma as $num ) {
$result = mysql_query("SELECT FLOOR(qty) FROM sois where pn = '1010600003'");
while ($row = mysql_fetch_array($result)) {
//echo $row['id']; //���$row['id'];
//echo "</br>";
$newarray[] = $row[FLOOR(qty)];
}
//var_dump ($arr);
//print_r ($newarray);//�������
}
//echo "</br>";
//=====================�������=============================







//����ͼ������ݣ������Զ���    $datay3 = array(5,17,32,24,9,9);
$datay1 = array(20,15,23,15,7,7);//����Դ����
$datay2 = $newarray;
$datay3 = array(5,17,32,24,9,9);



// ����ͼ��ĳ���
$graph = new Graph(1300,700); //������С
$graph->SetScale("textlin",0,0); //����y�᷶ΧΪ0-0

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('��Ʒ����������ͼ');//���ñ��⣬Ĭ�ϵı��ⲻ֧������
$graph->title->SetFont(FF_SIMSUN,FS_BOLD,14);   //�����������ͺʹ�С����һ�����������Ƿ�����ʾ���ġ�����ֵ�ɲο�jpgraph_ttf.inc.php�ļ�
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
$p1 = new LinePlot($datay1);	// ���������࣬��y������ע��
$graph->Add($p1);
$p1->SetColor("#6495ED");//������ɫ
$p1->SetLegend('P2350'); //������������

// Create the second line
$p2 = new LinePlot($datay2);	// ���������࣬��y������ע��
$graph->Add($p2);
$p2->SetColor("#B22222");//������ɫ
$p2->SetLegend('P3350');//������������

// Create the third line
$p3 = new LinePlot($datay3);// ���������࣬��y������ע��
$graph->Add($p3);
$p3->SetColor("#FF1493");//������ɫ
$p3->SetLegend('H6390');//������������

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();  // ��ʾͼ

?>

