<?php
$fahuo = "http://192.168.1.10/so/shuju/Every_day.php";
$kucun = "http://192.168.1.10/kc_desktop.php";
$time=date("Y-m-d H-i-s");
$shijian=date("Y-m-d");
$info = file_get_contents ( $fahuo );
$info1 = file_get_contents ($kucun);
$info_sum = $info. " " .$info1;
//file_put_contents("tmp/$time.html",$info_sum);

/**
* http://cx7863.blog.163.com/
*/
header("content-type:text/html;charset=utf-8");
ini_set("magic_quotes_runtime",0);
require 'class.phpmailer.php';
try {
	$mail = new PHPMailer(true); 
	$mail->SMTPDebug = 1;			// 开启Debug
	$mail->IsSMTP();          // 使用SMTP模式发送新建
	$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
	$mail->SMTPAuth   = true;                  //开启认证
	$mail->SMTPSecure = "ssl";          //打开SSL加密
	$mail->Port       = 465;                    
	$mail->Host       = "smtp.exmail.qq.com"; 
	$mail->Username   = "chenquan@headas.com";    
	$mail->Password   = "123456";            
	//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could  not execute: /var/qmail/bin/sendmail ”的错误提示
	$mail->AddReplyTo("chenquan@headas.com","mckee");//回复地址
	$mail->From       = "chenquan@headas.com";
	$mail->FromName   = "www.headas.com";
	$mail->AddAddress("911196413@qq.com");
	$mail->AddAddress("chenquan@headas.com");
	$mail->AddAddress("fengfeicui@headas.com");
	$mail->Subject  = "华创视际-发货数据概览 $shijian";
	$mail->Body = $info_sum;
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
	$mail->WordWrap   = 80; // 设置每行字符串的长度
	//$mail->AddAttachment("tmp/$time.html");  //可以添加附件
	$mail->IsHTML(true); 
	$mail->Send();
	echo '邮件已发送';
} catch (phpmailerException $e) {
	echo "邮件发送失败：".$e->errorMessage();
}
?>

