<?php
#1
//$arr[] = 'site.ru';
//$arr[] = 'site.com';
//$arr[] = 'my-site.com';
//$arr[] = 'my-cool-site.com';
//$arr[] = 'my_site.com';
//$arr[] = 'site123.com';
//$arr[] = 'site.travel';
//$arr[] = 'si$te.com';
//$arr[] = 'site.r';
//
//$reg = '#^[a-z0-9-][a-z0-9-]+\.[a-z]{2,}$#';
//foreach ($arr as $item)
//{
//    echo $item.'  #1  result  '.preg_match($reg, $item)."\n";
//}

#2
$arr[] = 'addr@mail.ru';
$arr[] = 'addr123@mail.ru';
$arr[] = 'my-addr@mail.ru';
$arr[] = 'my_addr@mail.ru';
$arr[] = 'addr@site.ru';
$arr[] = 'addr.ru';
$arr[] = 'addr@.ru';
$arr[] = 'my@addr@mail.ru';

$reg = '#^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$#';
foreach ($arr as $item)
{
    echo $item.'  #2  result  '.preg_match($reg, $item)."\n";
}