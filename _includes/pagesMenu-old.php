<?php

/*  pageMenu By: hlaCk */

// path underzpages to write
$storeFile = '_data/underzpages.json';
// path to dir of underzpages read
$readDir = '../UnderZ/';

$d = dir($readDir);
$pages = [];

while (false !== ($page = $d->read())) {
    if (is_file($readDir.$page) and $page != '.' and $page != '..') {
        $pages[] = ['name' => str_replace(['.md', '-'], ['', '.'], $page), 'url'=> str_replace(['.md'], [''], $page)];
    }
}

if (! empty($pages)) {
    file_put_contents($storeFile, json_encode($pages));
    echo 'DONE!';
} else {
    echo 'ERROR! No files';
}
