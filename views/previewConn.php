<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion con php</title>

</head>
<body>
    <?php
        include_once '../models/connection.php';
        Connection::getConnection();
    ?>
    <p>El nombre de usuario ya existe!</p>
</body>
</html>