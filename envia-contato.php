<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

include("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "squila151@gmail.com";
$mail->Password = "android26";

$mail->setFrom("squila151@gmail.com", "Eduardo Borges");
$mail->addAddress("squila151@gmail.com");
$mail->Subject = "E-mail de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br>Email: {$email}<br>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if($mail->send()){
	$_SESSION["success"] = "Mensagem enviada com sucesso!";
	header("Location: index.php");
}else{
	$_SESSION["danger"] = "Erro ao enviar mensagem ".$mail->ErrorInfo;
	header("Location: contato.php");
}
die();

?>
