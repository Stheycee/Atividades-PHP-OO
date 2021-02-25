<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV</title>
</head>
<body>
    <pre>
    <?php
        require_once 'tv.php';
        $c1 = new Tv ();
        $c1-> volMais("5");
        $c1-> volMenos("5");
        $c1-> cMenos("1");
        $c1-> cMais("2");
        print_r($c1);
        
    ?>
    </pre>

    
</body>
</html>