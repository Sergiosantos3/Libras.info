<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once('../classes/usuario_class.php');
    $usuario = new Usuario();
    $usuario->email = strip_tags($_POST['email']);
    $usuario->senha_hash = strip_tags($_POST['senha']);


    if(empty($usuario->email)){
      header('Location: ../login.php?err=email_vazio');
        exit();
    }
    else if(empty($usuario->senha_hash)){
        header('Location: ../login.php?err=senha_vazia');
        exit();
    }
    else{
        $resultado = $usuario->Logar();
        print_r($resultado);
        if(sizeof($resultado) != 1){
            header('Location: ../login.php?err=usuario_login_falha');
            exit();
            
        }
        else{
            //Iniciar sessão de 
            session_start();
            //criar sessão com os dados vindo do banco de dados
            $_SESSION['usuario'] = $resultado[0];
            //redirecionar para a área padina inicial
            header('Location: ../index.php');
            exit();
        }
    }
}
else{
    echo "Essa página deve ser carregada por POST.";
}
?>