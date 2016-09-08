<?php

$url = 'http://maikiem.sayobot.com/webhook.yo?';
foreach($_GET as $k=>$v) {
    $url .= $k.'='.$v.'&';
}
foreach($_POST as $k=>$v) {
    $url .= $k.'='.$v.'&';
}

print($url);

$data = file_get_contents($url);

print($data);

?>
