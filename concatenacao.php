<html>
    <head>
        <meta charset="utf-8" />
        <title>Concatenação em PHP</title>
    </head>

    <body>

    <?php

        $nome = 'Sam';
        $cor = 'roxo';
        $idade = 25;
        $atividade = 'ler';

        //operador: '.'
        echo 'Olá ' . $nome .', vi que sua cor preferida é '. $cor . ', estou vendo também que você possui '. $idade .' anos e que gosta de '. $atividade .' ';
        
        echo '<br />';
        echo '<br />';

        //aspas duplas ->IMPACTA NA PERFORMANCE (fica mais lento)
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade";
    ?>
        
    </body>
</html>