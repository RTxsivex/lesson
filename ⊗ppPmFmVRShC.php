<form action="" method="GET">
    <input name ="year" value="<?=$_GET['year'] ?? date('Y');?>">
    <input name ="month" value="<?=$_GET['month'] ?? date('m');?>">
    <input name ="day" value="<?=$_GET['day'] ?? date('d');?>">
    <input type = "submit">
</form>

<?php
$endYear = date_create('2023-12-31');
$inputDate = date_create((implode('-',$_GET)));
$interval = date_diff($inputDate, $endYear);
echo $interval->format('До 31 декабря %a дней');