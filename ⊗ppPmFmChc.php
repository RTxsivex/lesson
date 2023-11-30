<form action="" method="GET">
    <tr>Ваше имя?</tr>
    <input name = "name"><br>
    <tr>Поздароваться?</tr>
    <input type="checkbox" name="check"><br>
    <input type="submit">
</form>

<?php
echo isset($_GET['check'])? "Привет, {$_GET['name']}": "До свидания, {$_GET['name']}";