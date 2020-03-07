<?php
//Qdmailをロード
require_once('/home/sendai-tta/www/lib/qdmail.1.2.6b/qdmail.php');
require_once('/home/sendai-tta/www/lib/qdsmtp.0.2.0a/qdsmtp.php');

//メール送信関数
// $to：送信先メールアドレス
// $subject：件名（日本語OK）
// $body：本文（日本語OK）
// $fromname：送信元名（日本語OK）
// $fromaddress：送信元メールアドレス
function mailsender($to,$subject,$body,$fromname,$fromaddress){
    //SMTP送信
    $mail = new Qdmail();
    $mail -> smtp(true);
    $param = array(
        'host'=>'ssl://smtp.gmail.com',
        'port'=> 465 ,
        'from'=>'sendai.tta@gmail.com',
        'user' => 'sendai.tta@gmail.com',
        'pass' => 'sendai00',
        'protocol'=>'SMTP_AUTH',
    );
    $mail ->smtpServer($param);
    $mail ->to($to);
    $mail ->subject($subject);
    $mail ->from($fromaddress,$fromname);
    $mail ->text($body);
    $return_flag = $mail->send();
    return $return_flag;
}

$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo $host;

mailsender('morningmist7@gmail.com', "test", "testbody", "俺", "sendai.tta@gmail.com");