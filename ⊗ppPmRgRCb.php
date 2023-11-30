<?php
#1
$str ='1 2 3 4 5';
$reg = '#(\d+)#';
$res = preg_replace_callback($reg, function ($match){
    return $match[0].'='.$match[1]*$match[1].'|';
}, $str);

print_r($res);