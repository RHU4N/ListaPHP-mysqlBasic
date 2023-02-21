<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['usuario'])){
        $valida = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $i = filter_var($valida, FILTER_VALIDATE_INT);
        $u = $_GET['usuario'];
        $s = $_GET['senha'];
        $c = $_GET['cargo'];
    }else{
        $i = "";
        $u = "";
        $s = "";
        $c = "";
    }
    ?>

    <center>
        <h1>Editar Usuário</h1>
        <form action="verifica2.php" method="post" name="frmcons">
        Código: <input type="text" name="txti" value="<?php echo $i; ?>"><br><br>
        <input type="submit" value="Consultar" name="btnpes"><br><br>
        Usuário: <input type="text" name="txtu" value="<?php echo $u; ?>"><br>
        Senha: <input type="text" name="txts" value="<?php echo $s; ?>"><br>
        Cargo: <input type="text" name="txtc" value="<?php echo $c; ?>"><br><br>
        <input type="submit" value="Alterar" name="btnalt">
        <input type="submit" value="Excluir" name="btnex">
        <input type="submit" value="Listar" name="btnli"><br>
        </form>
    </center>
    <a href="index.php">Voltar</a>
</body>
</html>