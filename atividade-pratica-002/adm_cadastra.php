<?php

require_once 'assets/php/database.php';
require_once 'assets/php/procedures.php';
    
   
$procedures = new Procedures();
if(isset($_POST['enviar'])){
   
    
	$procedures->setName($_POST['nome']);
	$procedures->setPrice($_POST['price']);	
	$procedures->setUsers_id($_POST['users_id']);


	
	if($procedures->insert() == 1){
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
                        <h4 class="card-title">Cadastro de Procedimentos</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="adm_cadastra.php">
                            <div class="row">
                                <div class="col-md-12 pr-3">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="nome" class="form-control" placeholder="nome do procedimento">
                                    </div>
                                </div>
                                <div class="col-md-12 pl-3 pr-3">
                                    <div class="form-group">
                                        <label>Preço</label>
                                        <input type="text" name="price" class="form-control" placeholder="preço do procedimento">
                                    </div>
                                </div>
                                <div class="col-md-12 pl-3 pr-3">
                                    <div class="form-group">
                                        <label>user id</label>
                                        <input type="text" name="users_id" class="form-control">
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