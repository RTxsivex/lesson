#1
<form action="" method="get">
    <tr>Введите температуру в градусах Цельсия</tr><br>
    <input name="temperature" value="<?= $_GET['temperature'] ?? '0'?>">
    <input type="submit">
</form>
<?php
echo "Температура в градусах Фаренгейта  ". $_GET['temperature']*1.8+32;?>
<br>
#2
<form action="" method="get">
    <tr>Введите число</tr><br>
    <input name="factor" value="<?= $_GET['number'] ?? 1?>">>
    <input type="submit">
</form>
<?php
//function factorialRecur($factor){
//    return $factor==1? $factor: $factor*factorialRecur($factor-1);
//}
//echo "Факториал числа {$_GET['factor']} =   ".factorialRecur((int)$_GET['factor']); ?>
<br>
#3
<form action="" method="get">
    <tr>Введите число</tr><br>
    <input name="number" value="<?= $_GET['number'] ?? 1?>">
    <input type="submit">
</form>
<?php
function multiplier($n)
{
    $res=[];

    for($i=1; $i<=$n;$i++)
    {
        if($n%$i==0)
        {
            $res[]=$i;
        }

    }
    return implode(',',$res);
}
echo "Делители числа {$_GET['number']} =   ".multiplier((int)$_GET['number']); ?>
<br>
#4
<form action="" method="get">
    <tr>Введите число</tr><br>
    <input name="number1" value="<?= $_GET['number1'] ?? 1?>">
    <input name="number2" value="<?= $_GET['number2'] ?? 1?>">
    <input type="submit">
</form>
<?php
$a = (int)$_GET['number1'];
$b = (int)$_GET['number2'];
function evklid($a,$b)
{
    while ($a!==$b)
    {
        $a > $b ? $a -= $b : $b -= $a;
    }
    return $a;
}
$n=evklid($a,$b);
function multipliers ($n)
{
    $res=[];

    for($i=1; $i<=$n;$i++)
    {
        if($n%$i==0)
        {
            $res[]=$i;
        }
    }
    return implode(',',$res);
}
echo "Делители числа {$_GET['number1']} и {$_GET['number2']}=   ".multipliers(evklid($a,$b)); ?>
<br>
#5
<form action="" method="get">
    <tr>Введите число</tr><br>
    <input name="numb1" value="<?= $_GET['numb1'] ?? 1?>">
    <input name="numb2" value="<?= $_GET['numb2'] ?? 1?>">
    <input name="numb3" value="<?= $_GET['numb3'] ?? 1?>">
    <input type="submit">
</form>
<?php
$a = (int)$_GET['numb1'];
$b = (int)$_GET['numb2'];
$c = (int)$_GET['numb3'];

function searchRoot($a, $b, $c)
{
    $D=$b**2 - 4*$a*$c;
    if($D>=0)
    {
        $x1=(-$b-sqrt($D))/(2*$a) && $x2=(-$b+sqrt($D))/(2*$a);
    }
    else
    {
         return 'Дискриминант менеьше 0';
    }
    return $x1." и ".$x2;
}
echo "Корни уравнения =   ". searchRoot($a,$b,$c)?>
<br>