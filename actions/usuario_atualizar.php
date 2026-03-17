<?php
session_start();
require_once('../classes/usuario_class.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario();
    $usuario->id = strip_tags($_POST['id']);
    $usuario->nome = strip_tags($_POST['nome']);
    $usuario->email = strip_tags($_POST['email']);
    $usuario->nivel_libras = strip_tags($_POST['nivel_libras']);

    if (empty($usuario->nome)) {
        header('Location: ../perfil.php?err=nome_vazio');
        exit();
    } else if (empty($usuario->email)) {
        header('Location: ../perfil.php?err=email_vazio');
        exit();
    }
    else if(!filter_var($usuario->email, FILTER_VALIDATE_EMAIL)){
        header('Location: ../perfil.php?err=email_invalido');
        exit();
    } 
    else if (empty($usuario->nivel_libras)) {
        header('Location: ../perfil.php?err=nivel_vazio');
        exit();
    } else {
        if ($usuario->Atualizar() == 1) {
            //Atualizar os dados da sessão
            $_SESSION['usuario']['nome'] = $usuario->nome;
            $_SESSION['usuario']['email'] = $usuario->email;
            $_SESSION['usuario']['nivel_libras'] = $usuario->nivel_libras;

            header('Location: ../perfil.php?msg=usuario_atualizado');
            exit();
           
        } else {
            header('Location: ../perfil.php?err=erro_atualizar_usuario');
            exit();
        }
    }
} else {
    echo "Essa página deve ser carregada por POST.";
}
