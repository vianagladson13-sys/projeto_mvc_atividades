<?php
//definir url do  projeto
//http://localhost/projetos-michelle/mvc/a_projeto_mvc_funcoes/index.php?page=produtos

//definir páginas válidas no projeto
$paginasValidas = [
    "agenda" => __DIR__ . "/views/agenda.php",
    "cliente" => __DIR__ . "/views/cliente.php",
    "medico" => __DIR__ . "/views/medico.php",
];

// Capturar a página informada na url 
$page = $_GET["page"] ?? "agenda"; //prod. ou cli. ou func.

//Verificar se a página existe
if (array_key_exists($page, $paginasValidas)) {
    require $paginasValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}