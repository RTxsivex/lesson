<?php
function findDifference($a, $b)
{
    // write your code here
    return explode(',',str_replace(implode(",",$b),'',implode(',',$a)));
}

print_r(findDifference([1,2,2,4], [1,2]));