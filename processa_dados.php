<?php 
    $numInf = $_POST["infnum"];
    $ulti = 1;
    $penul = 0;
        
    echo "0<br/>
            1<br/>"; 

    for($con=1 ; $con<=$numInf-2 ; $con++)
    {
        $new = $ulti + $penul;
        echo $new."<br/>";
       
        
        $penul = $ulti;
        $ulti = $new;
    } 

    echo "<br/>A sequência de fibonacci nada mais é que a soma de um numero mais o seu anterior, exemplo, 3 +5 = 8. PS: Sempre começa do 0 e repete 2 vezes o 1";
?>