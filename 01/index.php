<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <pre>
    <?php
        require_once 'pessoa.php';
        $p1 = new pessoa ("João","111.111.111-11","00.000.000");
        $p1->nascimento = "01.01.0001";
        
        $p2 = new endereço ("Rua 1","Bairro 1","Nárnia","PE","10.100.101","Na esquina do reino perdido");
        print_r($p1);
        print_r($p2);

    ?>
    </pre>

    
</body>
</html>