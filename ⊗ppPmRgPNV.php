<?php
#1
$str = 'func1() func2() func3()';
$reg = '#(\w+)\(\)#';
preg_match_all($reg, $str, $res);
echo '#1 result: ';
print_r($res);
echo "\n";

#2
$str = '<a href="" class="eee" id="zzz">';
$reg = '#(\w+)\=["]#';
preg_match_all($reg, $str, $res);
echo '#2 result: ';
print_r($res);
echo "\n";

#3
$str = '$aaa $bbb $ccc';
$reg = '#\$([a-z+]{3})#';
preg_match_all($reg, $str, $res);
echo '#3 result: ';
print_r($res);