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

if ($method == 'post') {
    $url .= '&botdata=' . file_get_contents('php://input');
}

$data = file_get_contents($url);

print($data);

?>
