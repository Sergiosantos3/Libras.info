<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once('../classes/usuario_class.php');
        $usuario = new Usuario();

        $usuario->nome = strip_tags($_POST['nome']);
        $usuario->email = strip_tags($_POST['email']);
        $usuario->senha_hash = strip_tags($_POST['senha_hash']);
        $usuario->nivel_libras = strip_tags($_POST['nivel_libras']);

        if(empty($usuario->nome)){
            header('Location: ../login.php?err=nome_vazio');
            exit();
        }
        else if(empty($usuario->email)){
            header('Location: ../login.php?err=email_vazio');
            exit();
        }
        else if(empty($usuario->senha_hash)){
            header('Location: ../login.php?err=senha_vazia');
            exit();
        }
        else if(empty($usuario->nivel_libras)){
            header('Location: ../login.php?err=nivel_vazio');
            exit();
        }
        else{
            if($usuario->Cadastrar() == 1){
                header('Location: ../login.php?msg=cadastro_sucesso');
                exit();
            }
            else{
                // header('Location: ../html/login.html');
                header('Location: ../cadastro.php');
                exit();
            }
        }
    }
    else{  
        echo "Essa página deve ser carregada por POST.";
        
    }

?>