<?php
session_start();

$secretNumber = 42; 

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = $_POST['guess']; 

    if ($guess == $secretNumber) {
        echo "Congratulations, you guessed the number with ($secretNumber) с {$_SESSION['attempts']} attempts.";
        unset($_SESSION['attempts']); 
    } elseif ($guess < $secretNumber) {
        echo "Your number is ($guess) too small, try again.<br>";
        $_SESSION['attempts']++;
    } else {
        echo "Your number is ($guess) too big, try again.<br>";
        $_SESSION['attempts']++; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>"Guess number" game</title>
</head>
<body>
    <h1>"Guess number" game</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="guess">Enter a number:</label><br>
        <input type="number" id="guess" name="guess" required><br><br>
        <input type="submit" value="Check">
    </form>
</body>
</html>
