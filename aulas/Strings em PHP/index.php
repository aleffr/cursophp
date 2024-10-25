<?php 
//> double qouted /Aspas Duplas
//" Curso  "

//> Operador de concatenacao
//-- ' . ' / PONTO

//" Curso  "  .  " PHP "

//aspas duplas interpreta - analisa o convert_uudecode

//" PHP \u{1F418}" o resultado serar PHP e o emoji de elefante

//> single quoted /Aspas Duplas
//aspas simples  nao interpreta - analisa o conteudo
//" PHP \u{1F418}" o resultado serar PHP \u{1F418} de elefante

/*
    $nome = "Gustavo";
    echo 'Olá $nome !';
    echo "<BR>Olá $nome !";
*/

//HEREDOC
/*
$canal = "Curso em Vídeo";
$curso = "PHP";
$ano = date('Y');
echo <<< TESTE
    Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo esse ano de $ano?
    Abraços! \u{1F597}
    TESTE;
*/

//NOWDOC
/*
$canal = "Curso em Vídeo";
$curso = "PHP";
$ano = date('Y');
echo <<< 'TESTE' //> utiliza aspas simples
    Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo esse ano de $ano?
    Abraços! \u{1F597}
    TESTE;
*/
?>