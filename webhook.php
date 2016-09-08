<?php

$method = strtolower($_SERVER['REQUEST_METHOD']);
$url = 'http://maikiem.sayobot.com/webhook.yo?';
foreach($_GET as $k=>$v) {
    $url .= str_replace('hub_', 'hub.', $k) .'='.$v.'&';
}
foreach($_POST as $k=>$v) {
    $url .= str_replace('hub_', 'hub.', $k) .'='.$v.'&';
}
$url .= 'botmethod=' . $method;

$data = file_get_contents($url);

print($data);

?>
