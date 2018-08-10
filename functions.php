<?php

use \zidanesteig\Model\User;
use \zidanesteig\Model\Cart;

function formatPrice($vlprice){

	if (!$vlprice > 0) $vlprice = 0;
	return number_format($vlprice, 2, ",", ".");

}

function format_date($date){

	return date ('d/m/Y', strtotime($date));

}

function post($key)
{
	return str_replace("'", "", $_POST[$key]);
}
function get($key)
{
	return str_replace("'", "", $_GET[$key]);
}

function checkLogin($inadmin = true)
{

return User::checklogin($inadmin);

}

function getUserName()
{

$user = User::getFromSession();
return $user->getdesperson();

}

function getCartNrQtd()
{
	$cart = Cart::getFromSession();
	$totals = $cart->getProductsTotals();
	return $totals['nrqtd'];
}

function getCartVlSubTotal()
{
	$cart = Cart::getFromSession();
	$totals = $cart->getProductsTotals();
	return formatPrice($totals['vlprice']);
}

 ?>
