<?php
#1
$str = '2025-12-31';
$reg = '#(\d{4})+\-(\d{2})+\-(\d{2})#';

echo preg_match($reg, $str, $res)."\n";
print_r($res);

#2
$str2 = 'index.html';
$reg2 = '#([a-z0-9_-]+)\.([a-z]{2,})#';

echo preg_match($reg2, $str2, $res2)."\n";
print_r($res2);