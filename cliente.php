<?php

use \zidanesteig\PageCliente;
use \zidanesteig\Model\User;
use \zidanesteig\Model\Address;
use \zidanesteig\Model\Product;
use \zidanesteig\Model\Category;


$app->get('/login_cliente', function() {

	User::verifyLogin(false);

	$products = Product::listAll();

	$page = new zidanesteig\PageCliente();

	$page->setTpl("index",[
	'products'=>Product::checkList($products)
	]);

});

$app->get("/login_cliente/login", function(){

	$page = new zidanesteig\PageCliente([
			"header"=>false,
			"footer"=>false,
		]);

	$page->setTpl("login", [
		'error'=>User::getError(),
		'errorRegister'=>User::getErrorRegister(),
		'registerValues'=>(isset($_SESSION['registerValues'])) ? $_SESSION['registerValues'] : ['name'=>'', 'email'=>'', 'phone'=>'']
	]);

});

$app->post("/login_cliente/login", function(){

try{
User::login($_POST['login'], $_POST['senha']);
} catch(Exception $e) {

	User::setError($e->getMessage());

}
header("location: /login_cliente");
exit;

});

$app->get("/login_cliente/logout", function(){


User::logout();
header("Location: /login_cliente/login");
exit;

});

$app->get("/login_cliente/profile", function(){
		$user = User::getFromSession();
		User::verifyLogin(false);
		$page = new PageCliente();
		$page->setTpl("profile", [
			'user'=>$user->getValues(),
			'profileMsg'=>User::getSuccess(),
			'profileError'=>User::getError()
		]);
	});

$app->post("/login_cliente/login_cliente/profile", function(){

	User::verifyLogin(false);
	if(!isset($_POST['desperson']) || $_POST['desperson'] === '') {
		User::setError("Preencha o seu nome.");
		header('Location: /login_cliente/profile');
		exit;
	}
	if(!isset($_POST['desemail']) || $_POST['desemail'] === '') {
		User::setError("Preencha o seu e-mail.");
		header('Location: /login_cliente/profile');
		exit;
	}

	$user = User::getFromSession();

	if ($_POST['desemail'] !== $user->getdesemail()){
			if (User::checkLoginExist($_POST['desemail']) === true) {
				User::setError("Este endereço de e-mail já está cadastrado.");
				header('Location: /login_cliente/profile');
				exit;
			}
	}
	$_POST['inadmin'] = $user->getinadmin();
	$_POST['despassword'] = $user->getdespassword();
	$_POST['deslogin'] = $_POST['desemail'];
	$user = User::getFromSession();
	$user->setData($_POST);
	$user->save();
	$_SESSION[User::SESSION] = $user->getValues();
	User::setSuccess("Dados alterados com sucesso.");
	header('Location: /login_cliente/profile');
	exit;
});
?>
