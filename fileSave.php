<?php

$json = new \stdClass();
$json->name = 'shan';

$json = json_encode($json);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $json);

echo file_get_contents("newfile.txt");
echo json_decode(file_get_contents("newfile.txt"))->name;




?>