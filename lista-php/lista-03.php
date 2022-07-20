<!-- Ler um valor de hora com minutos, separado por ":" (dois pontos), e informar quantos minutos passaram desde o início do dia. Exemplo: em 13:50, 13 é o valor de hora e 50 é o valor de minutos, e se passaram 830 minutos desde o início do dia. A entrada será 13:50 e o programa precisa separa 13 como valor de hora e 50 como valor de minutos antes do processamento matemático necessário. -->
<?php

    $valor = $_POST['valor'];

    $dados = explode(":", $valor);

    echo $dados[0]*60+$dados[1];    

?>

