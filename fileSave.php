<?php

$json = new \stdClass();
$json->id = 0;
$sessions = [];
$session = new \stdClass();
$session->image = "img/exmo_header.png";
$session->name = "first session";
$session->description = "description";
$sessions[] = $session;
$json->sessions = $sessions;


$json = json_encode($json);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $json);





?>