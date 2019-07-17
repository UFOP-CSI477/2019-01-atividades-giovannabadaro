<?php
require_once 'assets/php/database.php';
require_once 'assets/php/procedures.php';
require_once 'assets/php/users.php';

$procedures = new Procedures();

$consulta = "SELECT p.*, g.name FROM procedures p INNER JOIN users g ON p.users_id = g.id ";


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
        <h2 class="text-center">Lista de exame por paciente</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                   
                    <th scope="col">Nome do Exame</th>
                    <th scope="col">Nome do Paciente</th>
                  
                </tr>
            </thead>
    

            <tbody>
                <tr>
                <?php
				$index = $procedures->index();                           
				while ($row = $index->fetch(PDO::FETCH_OBJ)) {
                ?>                    
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $procedures["name"];; ?></td>
                
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </div>


</body>

</html>