<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once('../classes/usuario_class.php');
        $usuario = new Usuario();
        $usuario->nome = strip_tags($_POST['nome']);
        $usuario->email = strip_tags($_POST['email']);
        $usuario->senha_hash = strip_tags($_POST['senha_hash']);
        $usuario->data_nascimento = strip_tags($_POST['data_nascimento']);
        $usuario->nivel_libra = strip_tags($_POST['nivel_libra']);

        if(empty($usuario->nome)){
            echo "O nome não foi informado";
        }
        else if(empty($usuario->email)){
            echo "O Email não foi informado";
        }
        else if(empty($usuario->senha_hash)){
            echo "A senha não foi informado";
        }
        else if(empty($usuario->data_nascimento)){
            echo "A Data de Nascimento não foi informado";
        }
        else if(empty($usuario->nivel_libra)){
            echo "O seu Nivel não foi informado";
        }
        else{
            if($usuario->Cadastar() == 1){
                header('Location: ../site-css/login.html');
            }
            else{
                header('Location: ../site-css/cadastrar.html');
            }
        }
    }

?>