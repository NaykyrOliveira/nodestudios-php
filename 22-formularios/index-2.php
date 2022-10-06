<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Aula 33 - Formulários $_GET</title>
    <style>
        .formularios {
            font-weight: bold;
        }

        .formularios__nome, .formularios__email {
            margin: 5px;
        }
        
        .button {
            font-weight: bold;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php 
        /* Validações */
    ?>
    <div class="formularios">
        <form action="dados-2.php" method="GET">
            Nome: <input class="formularios__nome" type="text" name="nome" id="nome"> <br>
            Email: <input class="formularios__email" type="email" name="email" id="email"> <br>
            <button class="button" type="submit">Enviar</button> <br>
        </form>
        <!-- <a href="dados-2.php?idade=25&sobrenome=josé">Enviar dados</a> -->
    </div>
</body>
</html>