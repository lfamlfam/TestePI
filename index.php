<?php

$msg = null;

if(isset($_POST['login'])){

	if(	$_POST['login'] == 'luiz' && 
		$_POST['password'] == '12345'){
		$msg = 'Bem-Vindo';
	}else{
		$msg = 'Senha ou Usu&aacute;rio Incorreto';
	}

}

include_once('index.tpl.php');
?>
