<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESSOA</title>
</head>
<body>
<?php 
class Pessoa {
    public $nome;
    public $cpf;
    public $rg;
    public $nascimento;
    
    
    public function __construct($n,$c,$r) {
        $this->nome = $n;
        $this->cpf = $c;
        $this->rg = $r;
        

    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome == $n;
    }

    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($c) {
        $this->cpf == $c;
    }

    public function getRg() {
        return $this->rg;
    }
    public function setRg($r) {
        $this->rg == $r;
    }
    public function getNascimento() {
        return $this->nascimento;
    }
    public function setNascimento($nn) {
        $this->nascimento == $nn;
    }
    
}



class Endereço {
    public $rua;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $complemento;

    public function __construct($rr,$b,$ci,$e,$cc,$co) {
        $this->rua = $rr;
        $this->bairro = $b;
        $this->cidade = $ci;
        $this->estado = $e;
        $this->cep = $cc;
        $this->complemento = $co;

    }



    public function getRua() {
        return $this->rua;
    }
    public function setRua($rr) {
        $this->rua == $rr;
    }
    public function getBairro() {
        return $this->bairro;
    }
    public function setBairro($b) {
        $this->bairro == $b;
    }
    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($ci) {
        $this->cidade == $ci;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($e) {
        $this->estado == $e;
    }
    public function getCep() {
        return $this->cep;
    }
    public function setCep($cc) {
        $this->cep== $cc;
    }
    public function getComplemnto() {
        return $this->complemento;
    }
    public function setComplemnto($co) {
        $this->complemento == $co;
    }

}


?>

    
</body>
</html>