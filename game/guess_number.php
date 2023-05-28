<?php
session_start();

$secretNumber = 42; // Загаданное число

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0; // Инициализация счетчика попыток
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = $_POST['guess']; // Полученное число от пользователя

    if ($guess == $secretNumber) {
        echo "Поздравляем! Вы угадали число ($secretNumber) с {$_SESSION['attempts']} попытками.";
        unset($_SESSION['attempts']); // Сброс счетчика попыток
    } elseif ($guess < $secretNumber) {
        echo "Ваше число ($guess) слишком маленькое. Попробуйте еще раз.<br>";
        $_SESSION['attempts']++; // Увеличение счетчика попыток
    } else {
        echo "Ваше число ($guess) слишком большое. Попробуйте еще раз.<br>";
        $_SESSION['attempts']++; // Увеличение счетчика попыток
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<html>
<head>
    <meta charset="UTF-8">
    <title>Игра "Угадай число"</title>
</head>
<body>
    <h1>Игра "Угадай число"</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="guess">Введите число:</label><br>
        <input type="number" id="guess" name="guess" required><br><br>
        <input type="submit" value="Проверить">
    </form>
</body>
</html>
