<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Aula 36 - Sanitização (Sanitize Filters)</title>
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
/* Sanitização 
    Funções(filter_input - filter_var)
*/
        if(isset($_POST['enviar-formulario'])) {
            // Array de erros
            $erros = array();

            // Sanitize para limpar as variáveis e validade para validar
//FILTER_SANITIZE_SPECIAL_CHARS (serve para escapar todos os códigos HTML)        
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
// FILTER_SANITIZE_NUMBER_INT (serve para filtrar dados do tipo inteiro)
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

            if (!filter_var($idade, FILTER_VALIDATE_INT)) {
                $erros[] = "Idade precisa ser um número inteiro";
            }
// FILTER_SANITIZE_EMAIL
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = "Email inválido";
            }
// FILTER_SANITIZE_URL
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $erros[] = "URL inválida";
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
            Nome: <input class="formularios__input" type="text" name="peso" id="peso">
            Idade: <input class="formularios__input" type="text" name="idade" id="idade">
            Email: <input class="formularios__input" type="email" name="email" id="email">
            URL: <input class="formularios__input" type="text" name="url" id="url">
            <button class="button" type="submit" name="enviar-formulario">Enviar</button>
        </form>
    </div>
</body>
</html>