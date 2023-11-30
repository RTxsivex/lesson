<?php

$str = '12:59:59 12:59:12 09:45:09';
$res = preg_replace('#(?<hours>\d+):(\d+):\g{hours}#', '!', $str);
print_r($res);
