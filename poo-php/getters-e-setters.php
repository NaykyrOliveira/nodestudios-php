<?php
// Getters e Setters
class login {
// Publicos
   /* public $email;
    public $senha; */
// Privados
    private $email;
    private $senha;
    private $nome;
// Constructor nada mais é do que um método
    public function __construct($email, $senha, $nome) {
        $this -> nome = $nome;
        $this -> setEmail($email);
        $this -> setSenha($senha);
    }

    public function getNome(){
        return $this -> nome;
    }
// Getters  método que vai pegar um valor
    public function getEmail() {
        return $this -> email;
    }
// Setters método que vai setar o valor ao atributo (precisa passar um parâmetro)
    public function setEmail($e) {
    // Filtrar os dados
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this -> email = $email;
    }

    public function getSenha() {
        return $this -> senha;
    }

    public function setSenha($s) {
        $this -> senha = $s;
    }

    public function Logar() {
        if($this -> email == "teste@teste.com" and $this -> senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Confira os dados e tente novamente";
        }
    }
}
// O construtor é inicializado no momento em que estânciamos uma classe
$logar = new Login("teste@teste.com", "123456", "Rodrigo Oliveira");
// $logar -> email = "teste@teste.com"; (public)
// $logar -> setEmail("teste()/@teste.com"); (private)
// $logar -> senha = "123456"; (public)
// $logar -> setSenha("123456"); (private)
$logar -> Logar();
echo "<br>";
// Para pegar um valor
echo $logar -> getNome();
