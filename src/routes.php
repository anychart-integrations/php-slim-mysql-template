<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Routes
$app->get('/', function (Request $request, Response $response) {
    $this->logger->addInfo("Get Fruits");
    $mapper = new FruitMapper($this->db);
    $fruits = $mapper->getFruits();
    $response = $this->view->render($response, "index.phtml", ["tickets" => $fruits,
        "title" => "Anychart PHP Slim template",
        "chartTitle" => "Top 5 fruits",
        "chartData" => json_encode($fruits)]);
    return $response;
});