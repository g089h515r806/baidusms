<?php

include_once 'BaiduSmsClient.php';
header('Content-Type:text/html;charset=utf-8');

$config = array(
  'endPoint' => 'sms.bj.baidubce.com',
  'accessKey' => '615c2ed10718888888888888888',
  'secretAccessKey' => 'a6e71bcfb99999999999999999999',
);

$smsClient = new BaiduSmsClient($config);

$message = array(
  "invokeId" => "rMi6pVgB-sfaf-tsdf",
  "phoneNumber" => "1368888888888888",
  "templateCode" => "smsTpl:e7476asdfsdf0de19d04ae906",
  "contentVar" => array(
    "code" =>  "123abc1234",
  ),
);

$ret = $smsClient->sendMessage($message);

print var_export($ret, true);