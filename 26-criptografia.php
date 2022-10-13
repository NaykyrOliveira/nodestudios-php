<?php
// Criptografia Base64 (mão dupla criptograda e descriptografa)
    $senha = "teste";
    $novaSenha = base64_encode($senha);
    
    echo "base64: ".$novaSenha."<br>";
    echo "Sua senha é: ".base64_decode($novaSenha);
    echo "<hr>";

// Criptografia MD5 (mão única só criptografa)
/* Autenticaçõo com o MD5:
    Quando o úsuario for se cadastrar no sistema, antes de inserir a senha 
    no banco de dados. Passar o MD5 e cadastra-lá criptografado e quando for 
    fazer a comparação, criptografar a senha que o úsuario já digitou e fazer
    a comparação com a senha que foi cadastrada no banco de dados já criptografada.
*/
    echo "Md5: ".md5($senha);
    echo "<hr>";

// Criptografia SHA1 (mão única só criptografa)
// Autenticação com SHA1 é feita da mesma forma que o MD5
    echo "Sha1: ".sha1($senha);
    echo "<hr>";

// Senhas seguras com password_hash ()
    $senha = "1234567";
    $senha_db = '$2y$10$0pyNBnHioXq7TVSscWtG2u0gDR/3EvRFRZ7VXoufSQ9q7h7Hcetmu';
    // quanto maior o custo, mais seguro será o hash em contra partida consome mais recursos.
    $options = [
              'cost' => 10,
    ];
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

    // echo $senhaSegura;
// Autenticação com password_hash
    if (password_verify($senha, $senha_db)) {
        echo "Senha válida";
    } else {
        echo "Senha inválida";
    }