<?php
$styledir = "./";
$d = dir($styledir);
$eFile = [];
while(false !== ($e = $d->read()))
{
    if(is_file($styledir.$e) AND $e!='.' AND $e!='..') {
        if($e=="rn.php") continue;

        $__old = $e;
        $__new = str_replace([".md", ".",/* "(", ")", ""*/], ["", "-"], $e) . ".md";
        echo $__old . " -> " . $__new . "\n";
        $_op = rename($styledir.$__old, $styledir. $__new);
        echo "\t" . ($_op==true ? "Done" : "Error") . "\n";
        if($_op!=true)
        $eFile[] =  $__old;
//        break;
    }
}
echo "\n\n";
print_r($eFile);

?>