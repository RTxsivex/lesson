<form action="" method="GET">
    <?php if(empty($_GET)){?>
    <textarea name="test"></textarea>
    <input type="submit">
</form>
<?php
    }
else{
    echo $_GET['test'];
}
?>


