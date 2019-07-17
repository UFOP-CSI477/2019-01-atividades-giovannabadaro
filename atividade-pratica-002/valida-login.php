<?php
require_once 'assets/php/database.php';
require_once 'assets/php/users.php';
$users = new users();
$email = $_POST['email'];
$password = $_POST['senha'];
$login = $users->setEmail($email);
$login = $users->locate();
if(is_null($login) || empty($login)){
	echo "E-mail inválido";
	exit();
}
if(sha1($password) == $login->password){
	if(!isset($_SESSION)){
		session_start();
	}
	$_SESSION['email'] = $login->email;
	$_SESSION['tipo'] = $login->tipo;
	echo "Bem vindo!<br>";
	if (!isset($_SESSION['tipo'])) {
		session_destroy();
		header("Location: ./teste-login.php");
		exit;
	} else {
		switch ($_SESSION['tipo']) {
			case 1:
			echo "Redireciona para a home do administrador";
		            header("Location: adm_menu.php");
			break;
			case 2:
			echo "Redireciona para a home do usuario";
		            header("Location: paciente_menu");
			break;
		}
	}
	exit();

}
else{
	echo "senha invalida";
	exit();
}
?>