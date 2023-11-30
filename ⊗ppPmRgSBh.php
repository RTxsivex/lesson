<?php
#1
$str = '2023-10-29 2024-11-30 2025-12-31';
$reg = '#(\d{4})+\-+(\d{2})+\-(\d{2})#';
echo preg_match_all($reg, $str, $res, PREG_SET_ORDER);
print_r($res);
