<?php

class Usuario {
    private $id;
    private $usuario;
    private $senha;
    private $cargo;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getUsuario(){
        return $this->usuario;
    }

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    function getSenha(){
        return $this->senha;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }

    function getCargo(){
        return $this->cargo;
    }

    function setCargo($cargo){
        $this->cargo = $cargo;
    }
}

?>