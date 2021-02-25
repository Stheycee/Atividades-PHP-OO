<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV</title>
</head>
<body>
<?php 
class Tv {
    public $volume;
    public $canal;

    public function __construct() {
        $this->setVolume(50);
        $this->setCanal(13);
        echo"<p> TV ligada</p>";
     }
    

    public function getVolume() {
        return $this->volume;
    }
    public function setVolume($v) {
        $this->volume == $v;
    }

    public function getCanal() {
        return $this->canal;
    }
    public function setCanal($c) {
        $this->canal == $c;
    }

    public function volMais() { 
        $this->setVolume($this->getVolume()+5); 
        echo "<p>Volume:{$this->getVolume()} +5</p>"; 
        
        
    }

public function volMenos() {
    $this->setVolume($this->getVolume()-5);
    echo "<p>Volume:{$this->getVolume()} -5 </p>'<br>'";
    }
                

public function cMais() {
        $this->setCanal($this->getCanal()+1);
        echo "<p> {$this->getCanal()} O canal foi mudado: +1 </p>";
        
    }


public function cMenos() {
        $this->setCanal($this->getCanal()-1);
        echo "<p> {$this->getCanal()} O canal foi mudado: -1 </p>";
    }
    


    
    
}

?>

    
</body>
</html>