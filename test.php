<?php
function digPow($n, $p) {
    // your code
    $nToArr= array_map('intval', str_split($n));
    for ($i=0;$i<count($nToArr);$i++)
    {
        $res[]=$nToArr[$i]**($p+$i);
    }
    $res=array_sum($res);
    return $res%$n==0 ? $res/$n : -1;
}

echo digPow(46288,3);