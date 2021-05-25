<?php
class Solicitacao {

    private $solicita;

    public function __construct(Solicita $solicita){
        $this->solicita = $solicita;
    }

    public function enviar (string $empresaSolicitada){

        //Lógica
    }
}
    //Essa classe é fictícia.
    //Esse CRUD é simples e não possui locais onde se possa herdar/herança, pois apenas cadastra, deleta, edita e lista os livros.

interface BaseSolicitacao {

    public function enviarSolicitacao();
    public function enviarCancelamento();
    public function receberRetorno();

}

class Empresa1 implements BaseSolicitacao {

    public function enviarSolicitacao(){
        //Caso seja alterado algo na empresa1, basta alterar neste trecho de código.
    }
    
}
?>