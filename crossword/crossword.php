<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $word1 = $_POST['letter1'] . $_POST['letter2'] . $_POST['letter3'];
        if ($word1 == 'old') {
            echo "<p>correct</p>";
        } 
        else {
            echo "<p>guess again</p>";
        }
        
        $word2 = $_POST['letter4'] . $_POST['letter5'] . $_POST['letter6'];
        if ($word2 == 'air') {
            echo "<p>correct</p>";
        } 
        else {
            echo "<p>guess again</p>";
        }
        
        $word3 = $_POST['letter7'] . $_POST['letter8'] . $_POST['letter9'];
        if ($word3 == 'key') {
            echo "<p>correct</p>";
        } 
        else {
            echo "<p>guess again</p>";
        }
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Crossword</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Crossword</h1>
    Guess the words!
    1. opposite of young
    2. we breath it
    3. you can open the door with it 
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" name="letter1" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter1']) ? $_POST['letter1'] : ''; ?>"></td>
                <td><input type="text" name="letter2" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter2']) ? $_POST['letter2'] : ''; ?>"></td>
                <td><input type="text" name="letter3" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter3']) ? $_POST['letter3'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="text" name="letter4" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter4']) ? $_POST['letter4'] : ''; ?>"></td>
                <td><input type="text" name="letter5" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter5']) ? $_POST['letter5'] : ''; ?>"></td>
                <td><input type="text" name="letter6" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter6']) ? $_POST['letter6'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="text" name="letter7" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter7']) ? $_POST['letter7'] : ''; ?>"></td>
                <td><input type="text" name="letter8" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter8']) ? $_POST['letter8'] : ''; ?>"></td>
                <td><input type="text" name="letter9" maxlength="1" size="1" 
                value="<?php echo isset($_POST['letter9']) ? $_POST['letter9'] : ''; ?>"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Check">
    </form>

    
</body>
</html>
