<?php

$arrPessoa = [
    0 => "Jo�o Fulano,123.456.789-00,21 Maio 1993,(21) 3079-9987,Rua do Ouvidor,50,20040-030,Rio de Janeiro",
    1 => "Maria Fulana, 98765432100,11 de Abril de 1995,(11) 933339871,Rua Vergueiro,3185,04101-300,S�o Paulo",
    2 => "denise teste, 987-654-32100,28 Dezembro de 1991,(31)45562712,SCS Qd. 8 Bl. B-50,11,70333-900,Rio Grande",
    3 => "Francisco de Assis Alves, 66332003073 10 de Janeiro de 1991,(31)45562712, estrada raio de sol,11,70333-900,S�o Paulo"
];

$pattern = "/[0123]\d\s+(?:de\s+)?[A-Z][a-z�]{1,8}\s+(?:de\s+)?[12]\d{3}/";
$matches = [];
$retorno = null;

foreach($arrPessoa as $key => $value) {
    $subject = $value;
    $retorno = preg_match($pattern, $subject, $match);

    if($retorno !== 1) {
        continue;
    }

    array_push($matches, $match[0]);
}

$retorno === 1? print_r($matches) : ($retorno === false ? print "Erro na regex!" : print "Nenhum alvo encontrado!");

/*
 ============
 |SA�DA:    |
 ============
 Array
    (
        [0] => 21 Maio 1993
        [1] => 11 de Abril de 1995
        [2] => 28 Dezembro de 1991
        [3] => 10 de Janeiro de 1991
    )
*/