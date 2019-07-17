<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Matilda - Biblioteca Digital</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center pt-5 mt-5">
            <div class="card bg-light mb-3 " style="max-width: 18rem;">
                <div class="card-body">
                    
                    <form action="valida-login.php" method="post">
                        <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
                            <label for="email">Login</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="form-group" style="font-family: 'Montserrat', sans-serif;">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="">
                        </div>
                     
                        <button type="submit" class="btn btn-primary btn-block botao" value="" name="login">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>