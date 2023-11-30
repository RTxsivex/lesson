<?php
#1
$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
$reg = '#(a+)(?:\$\@)+(b+)#';
preg_match_all($reg, $str, $res);
print_r($res);
