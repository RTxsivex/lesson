<?php
#1

$str = 'a.a aba aea';
$s= preg_replace('#a\.a#', '(0_-)/', $str);
print_r('#1  '.$s);

echo "\n";

#2

$str = $str = '2+3 223 2223';;
$s= preg_replace('#2\+3#', '\(0_-)', $str);
print_r('#2  '.$s);

echo "\n";

#3

$str = '23 2+3 2++3 2+++3 345 567';;
$s= preg_replace('#2*\++3#', '(0_o)', $str);
print_r('#3  '.$s);

echo "\n";

#4

$str = '23 2+3 2++3 2+++3 445 677';
$s= preg_replace('#2*\+*3#', '(x_o)', $str);
print_r('#4  '.$s);

echo "\n";

#5

$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';;
$s= preg_replace('#\*+q+\+#', '(0_x)', $str);
print_r('#5  '.$s);

echo "\n";

#6

$str = '[abc] {abc} abc (abc) [abc]';;;
$s= preg_replace('#\[abc\]#', '!', $str);
print_r('#6  '.$s);

echo "\n";

//or

$str = '[abc] {abc} abc (abc) [abc]';;;
$str= preg_replace('#\[#', '!', $str);
$s= preg_replace('#\]#', '!', $str);
print_r('#6  '.$s);

echo "\n";