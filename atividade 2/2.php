<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="numero" id="numero" name="numero" required>
        <input type="submit" name="tabuada" value="Enviar">Tabuada</input>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (isset($_POST['tabuada'])) {
                $numero = $_POST['numero'];

                echo "A tabuada do número $numero é:<br>";

                for ($i = 1; $i < 10; $i++) {
                    echo " " . $numero * $i . "<br>";
                }
            }
        }
    ?>
</body>

/* PHP

Variáveis e tipos;
If-Else;
For;
While;
Do-while*/

/* HTML
Como criar o documento (html, head, body);
Estilos (CSS - alterar cor de fundo, alterar letra, alterar cor de letra);
DIV
SECTION
GRID
Posicionamneto com CSS (Flex, width, height);
Formulários (input, select, textarea, button);
*/

</html>