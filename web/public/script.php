<div class="form">
<link rel="stylesheet" href="style.css">
<?php
    $volver = "<br><a href='index.php'><button type='button'>Volver</button></a>";
    if (isset($_POST['number']) && $_POST['number'] != null) {
        $number = intval($_POST['number']);
        if($number <=0){
            echo "el numero debe ser mayor e igual a 0." , $volver;
            return;
        }
        echo $number,"<br>↓<br>";
        operacion($number);
        echo $volver;
    } else {
        echo 'Necesitas poner un numero valido.';
        echo $volver;
    }

    function operacion($number){
        $aux = 0;
        if($number == 1){
            echo $number;
            return $number;
        }
        if (($number % 2) == 0) {
            $aux = $number/2;
        } else {
            $aux = ($number*3)+1;
        }
        echo $aux,"<br>";
        return operacion($aux);
    }
?>
</div>

