<?php

    // Temos que pegar todo mundo que está vindo do formulário.

    for($i=1;$i<=7;$i++) {
        $n[$i] = $_POST['n\$\i']; // O código precisa de ajustes aqui.
        echo $n[$i];
    }

    // Está incompleto. Ainda não resolve a questão.

?>