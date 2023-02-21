<!DOCTYPE html>

<?php
    include_once 'UsuarioDAO.php';
    $obj = new UsuarioDAO();
    $select = $obj->lista();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>

    <center>
        <h1>Listar Usuário</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Usuario</td>
                <td>Senha</td>
                <td>Cargo</td>
                <td></td>
            </tr>
<?php
if(isset($select)){
    foreach($select as $usuario){
        echo '<tr>';
        echo '<td>' . $usuario['id'] . '</td>';
        echo '<td>' . $usuario['usuario'] . '</td>';
        echo '<td>' . $usuario['senha'] . '</td>';
        echo '<td>' . $usuario['cargo'] . '</td>';
        echo '<td><a href="pag_pes_usu.php?id=' . $usuario['id'] . 
        '&&usuario=' . $usuario['usuario'] .
        '&&senha=' . $usuario['senha'] .
        '&&cargo=' . $usuario['cargo'] .
        '">Editar </a></td>';
        echo '</tr>';
    } 
}else{
    echo "Tabela Vazia";
}
?>
        </table>
<br>
<br>
<hr>
    </center>

    <a href="index.php">Voltar</a>
</body>
</html>