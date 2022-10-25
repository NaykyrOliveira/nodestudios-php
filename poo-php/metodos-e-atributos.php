<?php
// Métodos e Atributos Estáticos
class Login {
// Atributo estático
    public static $user;

//Método estático
    public static function verificaLogin() {
    // Exibindo o nome do usuário no metodo
        echo "O usuário ".self::$user. " está logado";
    }
    
}

// Atribuir valor em atributo estático
Login::$user = "admin"; 
// Com métodos estáticos não é preciso estânciar a classe basta declarar o nome dela.
Login::verificaLogin();
/* $this não funciona com atributos estáticos 
   ao trabalhar com atributos estáticos utilizar o self::
*/
