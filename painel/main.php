<?php

if (isset($_POST['sair'])) {
    session_destroy();
    sleep(1);
    header("Location: " . INCLUDE_PATH);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>style/painel.css">
    <title>Painel</title>
</head>

<body>
    <h2><a href="<?php echo INCLUDE_PATH?>">Painel</a></h2>
    <h4>Bem vindo <?php echo ucfirst($_SESSION['user'])."!"; ?></h4>
    <br>
    <form action="" method="post">
        <input type="submit" value="Sair" name="sair" class="btn_sair">
    </form>
</body>

</html>