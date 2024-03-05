<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   if(isset($_GET['operacao'])){
        if($_GET['operacao'] == 'adicao'){
            $numx = $_GET['x'];
            $numy = $_GET['y'];
            echo ($numx + $numy);
        }else if($_GET['operacao'] == 'subtracao'){
            $numx = $_GET['x'];
            $numy = $_GET['y'];
            echo ($numx - $numy);
        }else if($_GET['operacao'] == 'multiplicacao'){
            $numx = $_GET['x'];
            $numy = $_GET['y'];
            echo $numx * $numy;
        }else if($_GET['operacao'] == 'divicao'){
            $numx = $_GET['x'];
            $numy = $_GET['y'];
            echo $numx / $numy;
        }
    }
    ?>
</body>
</html>
