<?php
require_once 'assets/php/database.php';
require_once 'assets/php/users.php';


$users = new Users();

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Área Cliente</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/" type="text/css">

</head>

<body>
    <div class="container-fluid col-md-6">
        <h2 class="text-center">Lista de pacientes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                   
                    <th scope="col">Nome do paciente</th>
                    <th scope="col">Email</th>
                  
                </tr>
            </thead>
    

            <tbody>
                <tr>
                <?php
				$index = $users->index();                           
				while ($row = $index->fetch(PDO::FETCH_OBJ)) {
                ?>                    
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->email; ?></td>
                
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </div>


</body>

</html>