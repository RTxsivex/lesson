<?php

#1
$str = 'aa aba abba abbba abbbba abbbbba';
$s = preg_replace('#ab{2,4}a#', '!', $str);
print_r('#1  '.$s);

echo "\n";

#2
$str = 'aa aba abba abbba abbbba abbbbba';
$s = preg_replace('#ab{1,3}a#', '!', $str);
print_r('#2  '.$s);

echo "\n";

#3
$str = 'aa aba abba abbba abbbba abbbbba';
$s = preg_replace('#ab{4,}a#', '!', $str);
print_r('#3  '.$s);

echo "\n";