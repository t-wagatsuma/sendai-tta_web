<?php
require "/home/sendai-tta/www/lib/google-api-php-client-1-master/src/Google/autoload.php";

// クライアントを新たに生成
$client = new Google_Client();
$client->setApplicationName("DemoApp");
// 証明書を生成して
$credentials = $client->loadServiceAccountJson("/home/sendai-tta/www/lib/form17-7e154bf8ef8b.json", array(
    Google_Service_Drive::DRIVE
));
// クライアントに読ませる
$client->setAssertionCredentials($credentials);

// アクセストークンをリフレッシュする
$client->getAuth()->refreshTokenWithAssertion();
// アクセストークンを取得
$accessTokenJson = $client->getAccessToken();
$accessToken = json_decode($accessTokenJson)->access_token;

//echo $accessToken;

$client->addScope("https://www.googleapis.com/auth/drive");
$service = new Google_Service_Drive($client);
$file = new Google_Service_Drive_DriveFile();
//var_dump($file);
//$file->setTitle("Hello World");

//var_dump($service->files);
$result = $service->files->create($file, array(
  'data' => file_get_contents("/home/sendai-tta/www/sendai-tta/kyoukai.html"),
  'mimeType' => 'application/octet-stream',
  'uploadType' => 'multipart'
));

var_dump($result);