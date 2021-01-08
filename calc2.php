<?php

include("pagcalc2.html");

    if($_POST){

     $valor1 = $_POST ['txtv1'];
     $valor2 = $_POST ['txtv2'];
     $op = $_POST['operacao'];
       
        if($op == 'SOMA'){
            $total = $valor1 + $valor2; echo $total;
           
        }elseif($op == 'SUBTRAÇÃO'){
            $total= $valor1 - $valor2 ; echo $total;
            

        }elseif($op == 'MULTIPLICAÇÃO'){
            $total = $valor1 * $valor2 ; echo $total;
            

        }elseif ($op == 'DIVISÃO'){
            $total = $valor1 / $valor2 ; echo $total;


        }






    }


?>