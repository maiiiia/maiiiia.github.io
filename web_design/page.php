<!DOCTYPE html>
<html lang="ru">
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_POST['title']; ?></title>
    <style>
        body {
            background-color: <?php echo $_POST['bgcolor']; ?>;
            color: <?php echo $_POST['fontcolor']; ?>;
        }
    </style>
</head>
<body>
    <?php echo $_POST['text']; ?>
</body>
</html>
