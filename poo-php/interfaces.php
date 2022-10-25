<?php
// Iterfaces 
/* Interfaces serve para definir um modelo a ser usado 
   por outras classes */

/* A interface é como um contrato no qual as classes
   que implementarem a interface em questão são obrigadas
   a criarem os mesmo métodos */
interface Crud {
/* Os métodos das interfaces devem ser publicos 
   e na interface só é preciso declarar o nome do método 
   e passar alguns parâmetros quando necessário */
    public function create($data); 
    public function read(); // Lembrete: não é preciso colocar nenhum código de lógica aqui
    public function update();
    public function delete();
        
}

class Noticias implements Crud {
/* A responsabilidade de criar a lógica ou seja código do método
   é da classe que implementar a interface */
    public function create($data) {
        // lógica para criar uma noticia
    }

    public function read() {
        // lógica para ler uma noticia
    }

    public function update() {
        // lógica para atualizar uma noticia
    }

    public function delete() {
        // lógica para deletar uma noticia
    }
}