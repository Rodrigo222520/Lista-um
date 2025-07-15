<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Informar se um número é positivo, negativo ou zero</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verifica_numero">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verifica_numero'])) {
            $numero = $_POST['numero'];
            if ($numero > 0) {
                echo "O numero é positivo";
            } else if ($numero < 0) {
                echo "O $numero é negativo";
            } else {
                echo "O $numero é = 0";
            }
        };
    };

    ?>
</body>

</html>