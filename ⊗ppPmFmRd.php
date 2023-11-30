<form action="" method="GET">
    <tr>Укажите ващ пол</tr><br><br>

    <tr>М</tr>
    <input type="radio" name="man" >
    <tr>Ж</tr>
    <input type="radio" name="woman" >
    <input type="submit">
</form>

<?php
echo "Ваш пол ";
echo isset($_GET['man'])?"M":"Ж";