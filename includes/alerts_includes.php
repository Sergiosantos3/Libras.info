<?php

// Mensagem de sucesso
$msg = [
    "usuario_cadastrado" => "Usuário cadastrado com sucesso!",
    "senha_atualizada" => "Senha atualizada com sucesso!",

];

// Mensagem de erro
$err = [
    "erro_cadastro" => "Erro ao cadastrar usuário. Tente novamente.",
    "usuario_cadastro_falha" => "Erro ao cadastrar usuário. Tente novamente.",
    'usuario_sessao_invaliada' => 'Sessão inválida. Por favor, faça login novamente.',
    "usuario_login_falha" => "E-mail e/ou senha inválidos. Verifique suas credenciais.",
    "email_vazio" => "O e-mail não foi informado.",
    "senha_vazia" => "A senha não foi informada.",
    "senha_atual_vazia" => "A senha atual não foi informada.",
    "senha_atual_incorreta" => "A senha atual está incorreta.",
    "senha_nova_vazia" => "A nova senha não foi informada.",
    "erro_atualizar_senha" => "Erro ao atualizar a senha. Tente novamente.",
    "senha_atualizada" => "Senha atualizada com sucesso!",
    "nome_vazio" => "O nome não foi informado.",
    "sobrenome_vazio" => "O sobrenome não foi informado.",
    "telefone_vazio" => "O telefone não foi informado."
    



];
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    <?php
    if (isset($_GET['msg']) && array_key_exists($_GET['msg'], $msg)) {
        $mensagem = $msg[$_GET['msg']];
        echo "Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: '$mensagem',
        background: '#141c2e',
        color: '#e2e8f0',
        confirmButtonText: 'OK',
        confirmButtonColor: '#00c8ff',
        iconColor: '#00c8ff',
        customClass: {
            popup: 'swal-libras',
            confirmButton: 'swal-btn-confirm'
        }
    });";
    }
    ?>
    <?php
    if (isset($_GET['err']) && array_key_exists($_GET['err'], $err)) {
        $mensagem = $err[$_GET['err']];
        echo "Swal.fire({
        icon: 'error',
        title: 'Ops!',
        text: '$mensagem',
        background: '#141c2e',
        color: '#e2e8f0',
        confirmButtonText: 'Entendi',
        confirmButtonColor: '#00c8ff',
        iconColor: '#f87171',
        customClass: {
            popup: 'swal-libras',
            confirmButton: 'swal-btn-confirm'
        }
    });";
    }
    echo "if (history.replaceState) {
    const url = new URL(window.location);
    url.searchParams.delete('err');
    url.searchParams.delete('msg');
    window.history.replaceState({}, document.title, url.toString());
}";
    ?>
</script>