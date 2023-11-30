<?php

#1
$str = '^xx axx ^zz bkk @ss';
$s = preg_replace('#[\^\@]..#','!', $str );
print_r('#1   '.$s);
echo "\n";

#2
$str = '^xx axx ^zz bkk @ss';
$s = preg_replace('#[^\^\@]..#','!', $str );
print_r('#2   '.$s);
echo "\n";