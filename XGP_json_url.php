<?php

$outfile= '.\json\xgp_games.json';
$url='https://catalog.gamepass.com/sigls/v2?id=f6f1f99f-9b49-4ccd-b3bf-4d9767a77f5e&language=fr-fr&market=FR';
$json = json_encode(array_slice(json_decode(file_get_contents($url), true), 1));

if($json) { 
    if(file_put_contents($outfile, $json, FILE_APPEND)) {
      echo "Saved JSON fetched from “{$url}” as “$outfile”.";
    }
    else {
      echo "Unable to save JSON to “{$outfile}”.";
    }
}
else {
   echo "Unable to fetch JSON from “{$url}”.";
}
?>