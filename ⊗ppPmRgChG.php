<?php
#1
$str = 'a1a a2a a3a a4a a5a aba aca';
$s = preg_replace('#a+\d+a#', '!', $str);
print_r('#1  '.$s);

echo "\n";

#2
$str = 'a1a a22a a333a a4444a a55555a aba aca';
$s = preg_replace('#a.+?\d+a#', '!', $str);
print_r('#2  '.$s);

echo "\n";

#3
$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
$s = preg_replace('#a.+\d+a#', '!', $str);
print_r('#3  '.$s);

echo "\n";

#4
$str = 'avb a1b a2b a3b a4b a5b abb acb';
$s = preg_replace('#a+?\D+b#', '!', $str);
print_r('#4  '.$s);

echo "\n";

#5
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
$s = preg_replace('#a+?\W+b#', '!', $str);
print_r('#5  '.$s);

echo "\n";

#6
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
$s = preg_replace('#\s#', '!', $str);
print_r('#6  '.$s);

echo "\n";