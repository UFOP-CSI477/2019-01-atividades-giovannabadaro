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
    <div>
        <h4 class="display-4 text-center">Bem-vindo</h4>
        <h6 class="text-center">Selecione a opção desejada</h6>
    </div>
    <div class="container d-flex align-items-center">
        <!--div para os cards-->

        <div class="row justify-content-center ml-5  mt-5">
            <!--margin top 5-->
            <div class="col-md-4 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar</h5>
                        <p class="card-text">Cadastrar Paciente</p>
                        <a href="paciente_cadastra.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Solicitar exame</h5>
                        <p class="card-text">Cadastrar um novo exame</p>
                        <a href="paciente_solicita_exame.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pl-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de exames</h5>
                        <p class="card-text">Lista de exames solicitados</p>
                        <a href="paciente_lista_exame.php" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


</body>

</html>