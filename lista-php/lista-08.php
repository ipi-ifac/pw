<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if (($n1 > $n2) && ($n1 > $n3))
        echo "O primeiro é o maior.";
    else
        if(($n2 > $n1) && ($n2 > $n3))
            echo "O segundo é o maior.";
        else
            echo "O terceiro é o maior.";

    // essa questão não está completa...

?>