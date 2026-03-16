<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../classes/usuario_class.php');

    
    if (!isset($_SESSION['usuario'])) {
        header('Location: ../login.php?err=usuario_sessao_invaliada');
        exit();
    }

    
    if (empty($_POST['senha_atual'])) {
        header('Location: ../perfil.php?err=senha_atual_vazia');
        exit();
    }

   
    $usuario = new Usuario();
    $usuario->email      = $_SESSION['usuario']['email']; 
    $usuario->senha_hash = strip_tags($_POST['senha_atual']);

    $resultado = $usuario->Logar();
    if (sizeof($resultado) != 1) {
        header('Location: ../perfil.php?err=senha_atual_incorreta');
        exit();
    }

   
    $novaSenha = strip_tags($_POST['nova_senha']);
    if (empty($novaSenha)) {
        header('Location: ../perfil.php?err=senha_nova_vazia');
        exit();
    }

   
    $usuario->senha_hash = $novaSenha;
    $usuario->id         = $_SESSION['usuario']['id']; 
    $trocarSenha = $usuario->TrocarSenha();

    if ($trocarSenha == 1) {
        header('Location: ../perfil.php?msg=senha_atualizada');
        exit();
    } else {
        header('Location: ../perfil.php?err=erro_atualizar_senha');
        exit();
    }
} else {
    echo "Essa página deve ser carregada por POST.";
}
