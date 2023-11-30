<?php
#1
$str = 'x[]z x{}z x.z x()z';
$s = preg_replace('#x*[\[\]\{\}\(\)]+z#', '!', $str);
print_r('#1  '.$s);
echo "\n";

#2
$str = '[abc] {abc} abc (abc) [abc]';
$s = preg_replace('#[{\[\(].*?[}\]\)]#', '!', $str);
print_r('#2 '.$s);
echo "\n";