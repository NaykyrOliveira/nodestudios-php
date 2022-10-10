<?php
// Conexão (require_once pega o arquivo)
    require_once 'db_connect.php';
// Sessão
    session_start();
// Botão enviar
    if (isset($_POST['btn-entrar'])) {
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if (empty($login) or empty($senha)) {
            $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
        } else {
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $$sql);
            if (mysqli_num_rows($resultado) > 0) {

            } else {
                $erros[] = "<li> Confira se os dados estão corretos </li>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de Login (PHP Procedural)</title>
    <style>
        .formulario__input, .formulario__btn {
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <?php 
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo $erro;
            }
        }
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input class="formulario__input" type="text" name="login" id="login">
        Senha: <input class="formulario__input" type="password" name="senha" id="senha">
        <button class="formulario__btn" type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>