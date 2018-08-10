<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \zidanesteig\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

  $page = new Page();
  $page->setTpl("index");

});

$app->get("/veterinario", function(){
	$page = new Page();
	$page->setTpl("veterinario");
});

$app->get("/cliente", function(){
	$page = new Page();
	$page->setTpl("cliente");
});

$app->get("/sobre", function(){
	$page = new Page();
	$page->setTpl("sobre");
});

$app->run();

 ?>
