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