<form action="" method="GET">
    <tr>Вам есть 18?</tr><br><br>
    <input type="hidden" name="flag" value="0">
    <tr>Yes</tr>
    <input type="checkbox" name="flag" value="1">
    <tr>No</tr>
    <input type="checkbox" name="no">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if ($_GET['flag'] === '1') {
        echo 'доступ разрешен';
    } else {
        echo 'давай до свидания';
    }
}
?>