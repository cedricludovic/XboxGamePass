<?php

$file = ".\json\xgp_games.json";
$json = file_get_contents($file);
$data = json_decode($json,true);
$array = array(array_column($data, 'id'));
$id = array($array);
print_r($id);
?>