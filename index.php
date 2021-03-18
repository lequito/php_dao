<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        dao
        <?php
            require_once 'config.php';
            $sql = new Sql();
            $usuarios = $sql->select("SELECT * FROM usuarios");
            echo json_encode($usuarios);
        ?>
    </body>
</html>
