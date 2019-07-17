<?php

require_once 'assets/php/database.php';
require_once 'assets/php/users.php';
    
   
$users = new Users();
if(isset($_POST['enviar'])){
   
    
	$users->setName($_POST['nome']);
	$users->setEmail($_POST['email']);	
    $users->setPassword($_POST['password']);
    $users->setRemember_token($_POST['remember_token']);
    $users->setPassword($_POST['3']);


	
	if($users->insert() == 1){
		$result = "Equipamento inserido";
	}else{
		$error = "Erro ao inserir";
	}
	
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/" type="text/css">

</head>

<body>
    <div class="container">
        <div class="content d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card ml-5 mt-5">
                    <div class="card-header">
                        <h4 class="card-title">Solicitaçao de exames</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="paciente_solicita_exame.php">
                            <div class="row">
                                <div class="col-md-12 pr-3">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="nome" class="form-control" placeholder="nome do paciente">
                                    </div>
                                </div>
                                <div class="col-md-12 pl-3 pr-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="E-mail do paciente">
                                    </div>
                                </div>
                                <div class="col-md-12 pl-3 pr-3">
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="password" class="form-control "placeholder="Digite uma nova senha">
                                    </div>
                                </div>
                                <div class="col-md-12 pl-3 pr-3">
                                    <div class="form-group">
                                        <label>Lembrar da senha</label>
                                        <input type="text" name="remember_token" class="form-control "placeholder="Digite algo para lembrar da senha">
                                    </div>
                                </div>
                                

                            </div>
                            <button type="submit" value="enviar" name="enviar" class="btn btn-info btn-fill pull-right">Salvar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>