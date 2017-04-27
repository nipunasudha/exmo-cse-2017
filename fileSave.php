<?php

$names = $_GET["name"];
$description = $_GET["description"];
$time = $_GET["time"];
$image = $_GET["image"];
$sessions = $_GET["session"];
$sessionNext = $_GET["sessionNext"];
$json = new \stdClass();
$json->id = $sessions-1;
$json->nextId = $sessionNext-1;
$sessions = [];
foreach ($names as $key => $name){
    $session = new \stdClass();
    $session->name = $name;
    $session->description = $description[$key];
    $session->image = $image[$key];
    $session->time = $time[$key];
    $sessions[] = $session;
}
$json->sessions = $sessions;


$json = json_encode($json);

$myfile = fopen("sessions.txt", "w") or die("Unable to open file!");
fwrite($myfile, $json);


header("Location: index.php"); /* Redirect browser */
exit();


?>