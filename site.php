<?php

use \zidanesteig\Page;

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
?>
