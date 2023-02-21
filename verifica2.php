<?php

if ($_POST) {
    include_once('Usuario.php');
    include_once('UsuarioDAO.php');
    $objU = new Usuario();
    $oDAO = new UsuarioDAO();

    if (isset($_POST['btncad'])) {
        //include ("pag_cad.php");
        $u = $_POST['usuario'];
        $s = $_POST['senha'];
        $c = $_POST['cargo'];
        $objU->setUsuario($u);
        $objU->setSenha($s);
        $objU->setCargo($c);
        if ($oDAO->adiciona($objU)) {
            echo ("Adicionado com sucesso");
        } else {
            echo ("Erro ao cadastrar");
        }
    }

    else if (isset($_POST['btnpes'])){
        $i = $_POST['txti'];
        $objU->setId($i);
        $dados = $oDAO->pesquisa($objU);
        $i = $dados['id'];
        $u = $dados['usuario'];
        $s = $dados['senha'];
        $c = $dados['cargo'];
        header("location: pag_pes_usu.php?id=" . $i .
        "&&usuario=" . $u . "&&senha=" . $s . "&&cargo=" . $c);
    }

    else if (isset($_POST['btnalt'])){
        $i = $_POST['txti'];
        $u = $_POST['txtu'];
        $s = $_POST['txts'];
        $c = $_POST['txtc'];
        $objU->setID($i);
        $objU->setUsuario($u);
        $objU->setSenha($s);
        $objU->setCargo($c);
        if($oDAO->altera($objU)){
            header("location: pag_listar.php");
        } else {
            echo ("Erro ao alterar");
        }
    }

    else if (isset($_POST['btnex'])){
        $i = $_POST['txti'];
        $objU->setID($_POST['txti']);
        if($oDAO->delete($objU)){
            header("location: pag_listar.php");
        } else {
            echo ("Erro ao deletar");
        }
    }

    else if (isset($_POST['btnli'])){
        $dados = $oDAO->lista();
        foreach($dados as $d):
            echo "Código:" . $d['id'] . " Nome:" . $d['usuario'] .
            " Senha:" . $d['senha'] . " Cargo:" . $d['cargo'] . "<br>";
        endforeach;
    }
    if (isset($_POST['btnli'])){
        header("location: pag_listar.php");
    }

}


echo "<br><br><a href='index.php'>Voltar</a>";

?>