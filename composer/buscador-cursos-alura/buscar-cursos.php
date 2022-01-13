<?php

require "vendor/autoload.php";
require 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);

/*$resposta = $client->request("GET", 'http://alura.com.br/cursos-online-programacao/php');

$html = $resposta->getBody();

$crawler =  new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter("span.card-curso__nome");*/

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar("/cursos-online-programacao/php");

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}