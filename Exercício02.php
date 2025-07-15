<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a tabuada de um número informado</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite a tabuada desejada:</label>
        <input type="number" id="numero" name="numero" required>
        <select name="Tabuada">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
            <option value=8>8</option>
            <option value=9>9</option>
            <option value=10>10</option>
        </select>
    </form>
</body>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['Tabuada'])) {
            $numero = $_POST['numero'];
            $total = 0;
            for($y = 1; $y <= 10; $y++)
            {
                $total = $y * $numero;
                echo $total;
                echo "<br>";
            };
        };
    };

?>

</html>