<?php
/* SQL Ijection 
    Tipo de ataque que se aproveita de sistemas que interajam com banco de dados e não possuem tratamentos nos INPUTS
*/
// Conexão (require_once para pegar o arquivo sem necessidade de copiar todo o código)
    require_once 'db_connect.php';
// Sessão
    session_start();
// Botão enviar
    if (isset($_POST['btn-entrar'])) {
        $erros = array();
        // função do mysqli para filtrar os dados 
// * Nunca confie no usuário e aplique filtro de segurança em todos os inputs
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if (empty($login) or empty($senha)) {
            $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
        } else {
            // 105 OR 1=1 
            // 1; DROP TABLE teste 
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);
                if (mysqli_num_rows($resultado) == 1) {
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                } else {
                    $erros[] = "<li> Confira os dados e tente novamente </li>";
                }
            } else {
                $erros[] = "<li> Confira os dados e tente novamente </li>";
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
    <title>SQL Injection</title>
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
            foreach($erros as $erro) {
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