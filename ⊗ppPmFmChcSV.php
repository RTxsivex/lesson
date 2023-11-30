<form action="" method="get">
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="1" <?php if(!empty($_GET['flag'])) echo 'checked';?>>
    <input type="checkbox" name="on" value="1" <?php if(!empty($_GET['on'])) echo 'checked';?>>
    <input type="checkbox" name="of" value="1" <?php if(!empty($_GET['of'])) echo 'checked';?>>
    <input type="submit">
</form>