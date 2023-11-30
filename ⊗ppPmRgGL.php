<?php

$str = 'aba accca azzza wwwwa';

$s = preg_replace('#a.+?a#', '!', $str);
print_r($s);