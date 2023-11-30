<?php
$reg ='#\b\d+\.+\d+\b#';
$test[] = '0.25, aa, bbc, xxx';
$test[] = 'xxx1x, YTY, iu, qw';
$test[] = 'aaa, bbb, ccc, xxx';
$test[] = '9.000000000001, ax, ww';
$test[] = '9,000000000001, ax, ww';
$test[] = '0,25, aa, bbc, xxx';
$test[] = '0.25ax, aa, bbc, xxx';
$test[] = 'xa0.25, 0., bbc, xxx';
foreach ($test as $str)
{
    echo $str.'  '.'result '. preg_match($reg, $str)."\n";
}

