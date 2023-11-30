<?php
function evklid($a,$b)
{
    while($a!==$b)
    {
        $a>$b ? $a-=$b : $b-=$a;
    }
    return $a;
}
for ($i=1;$i<=evklid($a,$b);$i++)
{
    if(evklid($a,$b)%$i==0)
    {
        $res[]=$i;
    }
}
