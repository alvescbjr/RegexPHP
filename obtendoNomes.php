<?php

$arrPessoa = [
    0 => "João Fulano,123.456.789-00,21 de Maio de 1993,(21) 3079-9987,Rua do Ouvidor,50,20040-030,Rio de Janeiro",
    1 => "Maria Fulana, 98765432100,11 de Abril de 1995,(11) 933339871,Rua Vergueiro,3185,04101-300,São Paulo",
    2 => "denise teste, 987-654-32100,28 de Dezembro de 1991,(31)45562712,SCS Qd. 8 Bl. B-50,11,70333-900,Rio Grande",
    3 => "Francisco de Assis Alves, 66332003073 10 de Janeiro de 1991,(31)45562712, estrada raio de sol,11,70333-900,São Paulo"
];

$pattern = "/[A-Za-z].+?,/";
$matches = [];
$retorno = null;

foreach($arrPessoa as $key => $value) {
    $subject = $value;
    $retorno = preg_match($pattern, $subject, $match);

    if ($retorno !== 1) {
        continue;
    }

    array_push($matches, substr($match[0], 0, -1));
}


$retorno === 1? print_r($matches) : ($retorno === false ? print "Erro na regex!" : print "Nenhum alvo encontrado!");

/*
 ============
 |SAÍDA:    |
 ============
 Array
    (
        [0] => Joo Fulano
        [1] => Maria Fulana
        [2] => denise teste
        [3] => Francisco de Assis Alves
    )
*/