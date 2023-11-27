<?php

$dados = file_get_contents("php://input");


$filmes = json_decode($dados, true);


$arquivo_json = 'filmes.json';


file_put_contents($arquivo_json, json_encode($filmes));

echo 'Dados atualizados com sucesso!';
?>