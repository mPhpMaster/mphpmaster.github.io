<?php
$storeFile = "_data/underzpages.json";
$readDir = "UnderZ/";
$d = dir($readDir);
$dataArray = [];
while(false !== ($e = $d->read()))
{
    if(is_file($readDir.$e) AND $e!='.' AND $e!='..') {
        $dataArray[] = [ "name" => str_replace([".md", "-"], ["", "."], $e), "url"=> str_replace([".md"], [""], $e) ];
    }
}
if( !empty($dataArray) ) {
    file_put_contents($storeFile, json_encode($dataArray));
    echo "DONE!";
} else {
    echo "ERROR! No files";
}
?>