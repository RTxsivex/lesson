<?php
#1
$str = '12 34 56 78';
$res = preg_replace('#(\d)(\d)#', '$2$1', $str);
print_r("#1  result: ".$res);
echo "\n";

#2
$str = '31.12.2025';
$res = preg_replace('#(\d+)\.(\d+)\.(\d+)#', '$3.$2.$1', $str);
print_r("#1  result: ".$res);
echo "\n";