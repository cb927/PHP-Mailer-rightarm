<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$step1 = str_replace(',', ' ', $_POST['step1']);
$step2 = str_replace(',', ' ', $_POST['step2']);
$step3 = str_replace(',', ' ', $_POST['step3']);
$step4 = str_replace(',', ' ', $_POST['step4']);
$step5 = str_replace(',', ' ', $_POST['step5']);
$station = $_POST['station'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// var_dump($step1, $step2, $step3, $step4, $step5, $station, $name, $age, $email, $phone);exit;

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "viskas.hostingas.lt";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password     
$mail->Username = "noreply@cont.lt";
$mail->Password = "PakipekstMazneis";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";
//Set TCP port to connect to
$mail->Port = 465;

$mail->Priority = 1;
$mail->AddCustomHeader("X-MSMail-Priority: High");
$mail->AddCustomHeader("Importance: High");

$mail->setFrom($email, $name);
$mail->addAddress("free@rightarm.co.jp");
$mail->CharSet = 'UTF-8';
$mail->isHTML(true);
$mail->Subject = "右腕.com - ITエンジニア専門 フリーランスエージェント";
$mail->Body = "<b>ご希望の案件開始時期:</b> " . $step1 . '<br>' . "<b>ご希望の職種:</b> " . $step2 . '<br>' . "<b>得意な言語:</b> " . $step3 . '<br>' . "<b>ご希望のテクノロジー:</b> " . $step4 . '<br>' . "<b>ご希望単金と最寄り駅を教えてください:</b> " . $step5 . '<br>' . "<b>最寄り駅:</b> " . $station . '<br>' . "<b>お名前:</b> " . $name . '<br>' . "<b>ご年齢:</b> " . $age . '<br>' . "<b>メールアドレス:</b> " . $email . '<br>' . "<b>電話番号:</b> " . $phone;
try {
    $mail->send();
    return "Message has been sent successfully";
} catch (Exception $e) {
    return "Mailer Error: " . $mail->ErrorInfo;
}
