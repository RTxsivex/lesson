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
function factorialRecur($factor){
    return $factor==1? $factor: $factor*factorialRecur($factor-1);
}
echo "Факториал числа {$_GET['factor']} =   ".factorialRecur((int)$_GET['factor']); ?>
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
#6
<form action="" method="get">
    <tr>Тройка Пифагора</tr><br>
    <input name="numb11" value="<?= $_GET['numb11'] ?? 3?>">
    <input name="numb12" value="<?= $_GET['numb12'] ?? 4?>">
    <input name="numb13" value="<?= $_GET['numb13'] ?? 5?>">
    <input type="submit">
</form>
<?php
$a = (int)$_GET['numb11'];
$b = (int)$_GET['numb12'];
$c = (int)$_GET['numb13'];

function searchPifagor($a, $b, $c)
{
    return $a**2+$b**2==$c**2 ? "Тройка Пифагора" : "Увы, но нет";
}
echo searchPifagor($a,$b,$c)?>
<br>
#7
<form action="" method="get">
    <tr>Введи дату дня рождения</tr><br>
    <input name="holiday" value="<?=$_GET['holiday'] ?? "01.01.1990"?>">
    <input type="submit">
</form>
<?php
$today = strtotime(date('d.m.Y'));
$holiday = strtotime(date('d.m.Y',strtotime($_GET['holiday'])));
while ($holiday<$today)
{
    $holiday = strtotime('+1 year',$holiday);

}
echo  "Количество дней до праздника: ". round(($holiday-$today)/(60*60*24));
?>
#8
<form action="" method="get">
    <textarea name="text"> <?= $_GET['text'] ?? 'test'?> </textarea><br><br>
    <input type="submit">
</form>
<?php
$input = $_GET['text'];

echo "Количество слов: ".count(preg_split('#\s+#', $input))."<br>"."Количество символов: ".mb_strlen($input, "utf8");
?>
#9
<form action="" method="get">
    <textarea name="text"> <?= $_GET['text'] ?? 'test'?> </textarea><br><br>
    <input type="submit">
</form>
<?php
$str = $_GET['text'];
function getCharPercentage($str)
{
    $char_counts = array_count_values(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY));
    $resStr='';
    $total_chars = mb_strlen($str,'utf8');
    foreach ($char_counts as $char =>$count)
    {
        $res[$char]=round($count/$total_chars*100.,2)."%";
    }

    return $res;
}

echo '<pre>';
print_r(getCharPercentage($str)); // Добавьте сюда ваш текст
echo '</pre>';
?>
#10
<form action="" method="GET">
    <select name="day">
        <?php
        $days=range(1,31,1);
        foreach ($days as $day)
            echo "<option>$day</option><br>";?>
    </select><br><br>
    <select name="month">
        <?php
        $months = ['Январь'=>1, 'Февраль'=>2 , 'Март'=>3  , 'Апрель'=>4  , 'Май'=>5  , 'Июнь'=>6  , 'Июль'=>7  , 'Август'=>8  , 'Сентябрь'=>9  , 'Октябрь'=>10  , 'Ноябрь'=>11  , 'Декабрь'=>12];
        foreach ($months as $key=>$month)
            echo "<option>$month.$key</option><br>";?>
    </select><br><br>
    <select name="year">
        <?php
        $arr=range(1990,2025,1);
        foreach ($arr as $year)
            echo "<option>$year</option><br>";?>
    </select><br><br>
    <input type="submit">
</form>
<?php
print_r(date('D',strtotime($_GET['day'].".".preg_replace('#[а-яёА-ЯЁ]+#u','',$_GET['month']).$_GET['year'])));
?>

#11
<form action="" method="get">
    <input name="day"value="<?=$_GET['day']?? 1?>"><br><br>
    <input name="month"value="<?=$_GET['month']?? 1?>"><br><br>
    <input type="submit">
</form>

<?php
function getZodiacSign($day, $month){
    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return "Овен";
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return "Телец";
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return "Близнецы";
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return "Рак";
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return "Лев";
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return "Дева";
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return "Весы";
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return "Скорпион";
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return "Стрелец";
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return "Козерог";
    } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return "Водолей";
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return "Рыбы";
    }
    return "Не удалось определить знак зодиака";
}

// Получаем день и месяц из GET-параметров
$day = isset($_GET['day']) ? intval($_GET['day']) : 1;
$month = isset($_GET['month']) ? intval($_GET['month']) : 1;

// Определяем знак зодиака
$zodiac = getZodiacSign($day, $month);
echo "Ваш знак зодиака: " . $zodiac;

