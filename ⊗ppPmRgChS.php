<?php
#1

$str = 'aba aea aca aza axa';
$s = preg_replace("#a[bex]a#", '!', $str);
print_r('#1  '.$s);

echo "\n";

#2

$str = 'a1a a3a a7a a9a aba';
$s = preg_replace("#a[3-6]a#", '!', $str);
print_r('#2  '.$s);

echo "\n";

#3

$str = 'aba aea afa aha aga';
$s = preg_replace("#a[a-g]a#", '!', $str);
print_r('#3  '.$s);

echo "\n";

#4

$str = 'aba aea afa aha aga';
$s = preg_replace("#a[a-fj-z]a#", '!', $str);
print_r('#4  '.$s);

echo "\n";

#5

$str = 'aAa aea aEa aJa a3a';
$s = preg_replace("#a[a-fA-D]a#", '!', $str);
print_r('#5  '.$s);

echo "\n";

#6

$str = 'aAXa aeffa aGha aza ax23a a3sSa';
$s = preg_replace("#a[a-z]+a#", '!', $str);
print_r('#6  '.$s);

echo "\n";

#7

$str = 'aAXa aeffa aGha aza ax23a a3sSa';
$s = preg_replace("#a+[a-zA-Z]+a#", '!', $str);
print_r('#7  '.$s);

echo "\n";

#8

$str = 'aAXa aeffa aGha aza ax23a a3sSa';
$s = preg_replace("#a.[a-z0-9].a#", '!', $str);
print_r('#8  '.$s);

echo "\n";