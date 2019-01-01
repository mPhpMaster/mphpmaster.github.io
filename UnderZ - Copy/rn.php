<?php
$styledir = "./";
$d = dir($styledir);
$dnum = 0;
while(false !== ($e = $d->read()))
{
    if(is_file($styledir.$e) AND $e!='.' AND $e!='..') {
        echo str_replace([".md", ".", "(", ")", ""], "", $e) . ".md\n";
        file
    }
}


?>