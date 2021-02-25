<?php
class Aluno
{
	public $nome;
	public $matricula;
	public $nota1;
	public $nota2;
	public $media; 
	public $soma;
	

	public function __construct($nota1,$nota2) {
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;

	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setMatricula($matricula)
	{
		$this->matricula = $matricula;
	}

	public function setNota1($nota1)
	{
		$this->$nota1 = $nota1;
	}
	public function setNota2($nota2)
	{
		$this->$nota2 = $nota2;
	}

	public function setMedia($media)
	{
		$this->media = $media;
	}
	public function setSoma($soma)
	{
		$this->soma = $soma;
	}



	function getNome()
	{
		return $this->nome;
	}

	function getMatricula()
	{
		return $this->matricula;
	}

	public function getNota1()

	{
		return $this->nota1;
	}

	public function getnota2()
	{
		return $this->nota2;
	}

	public function getMedia()
	{
		return $this->media;
	}
	public function getSoma()
	{
		return $this->soma;
	}



	function resumir()
	{
		
        echo "O aluno(a) $this->nome, matriculado(a) na classe de $this->matricula possui as notas $this->nota1 e $this->nota2, ficando assim com a média $this->media.";
	}

	function mediaa()
	{
		$this->setsoma($this->getNota1()+$this->getNota2());
		$this->setmedia($this->getSoma()/2);
	}
	
}


$c1 = new Aluno(10,8);
$c1->setNome("Maria");
$c1->setmatricula("Biologia");
$c1->mediaa();
echo $c1-> resumir();









