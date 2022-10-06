<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Aula 35 - Validações</title>
    <style>
        .formularios {
            font-weight: bold;
        }

        .formularios__input {
            display: block;
        }
        
        .button {
            font-weight: bold;
            margin-top: 5px;
            padding: 2px;
        }
    </style>
</head>
<body>
    <?php 
/* Validações 
    Funções(filter_input - filter_var)
*/
        if(isset($_POST['enviar-formulario'])) {
            // Array de erros
            $erros = array();

            // FILTER_VALIDATE_INT
            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
                $erros [] = "Idade precisa ser um número inteiro";
            } 
            // FILTER_VALDATE_EMAIL
            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $erros [] = "Email inválido";
            } 
            // FILTER_VALIDATE_FLOAT
            if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
                $erros [] = "Peso precisa ser um número decimal";
            } 
            // FILTER_VALIDATE_IP
            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
                $erros [] = "IP inválido";
            }
            // FILTER_VALIDATE_URL
            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
                $erros [] = "URL inválida";
            }
            // Exibindo mensagens
            if (!empty($erros)) {
                foreach ($erros as $erro) {
                    echo "<li> $erro </li>";
                }
            } else {
                echo "Parabéns, seus dados estão corretos!";
            }
        }
    ?>
    <div class="formularios">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            Idade: <input class="formularios__input" type="text" name="idade" id="idade">
            Email: <input class="formularios__input" type="email" name="email" id="email">
            Peso: <input class="formularios__input" type="text" name="peso" id="peso">
            IP: <input class="formularios__input" type="text" name="ip" id="ip">
            URL: <input class="formularios__input" type="text" name="url" id="url">
            <button class="button" type="submit" name="enviar-formulario">Enviar</button>
        </form>
    </div>
</body>
</html>