<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'config.php';
            /*$sql = new Sql();
            $usuarios = $sql->select("SELECT * FROM usuarios");
            echo json_encode($usuarios);*/
            
            $user = new Usuario();
            $user->loadById(6);
            echo $user;
        ?>
    </body>
</html>
