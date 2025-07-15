<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular a tabuada de um número informado</title>
</head>

<body>
    <form method="POST" action="">
        Digite a tabuada desejada:
        <select name="tabuada">
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
        <input type="submit" value="Calcular">
    </form>
</body>

<?php
    $valor = $_POST['tabuada'];

    for($y = 0; $y <= 10; $y++)
    {
        echo "$valor * $y = ".($valor * $y);
        echo "<br>";
    }
?>

</html>