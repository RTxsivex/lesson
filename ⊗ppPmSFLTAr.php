<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<select>
    <?php $arr = ['text1', 'text2', 'text3']; foreach ($arr as $item) { echo" <option>$item</option>"; } ?>
</select>
</body>
</html>