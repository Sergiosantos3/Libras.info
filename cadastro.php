<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro — LIBRAS.info</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login-cadatro.css">
</head>
<body>

    <main class="container">
        <form id="formCadastro" action="./actions/usuario_cadastrar.php" method="POST">

            <a href="./index.php" class="logo-center">LIBRAS<span>.info</span></a>
            <p class="subtitle">Crie sua conta gratuita e comece a aprender Libras hoje!</p>

            <div class="input-cadastro">
                <input type="text" name="nome" placeholder="Nome completo" required>
            </div>
            <div class="input-cadastro">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="input-cadastro">
                <input type="password" name="senha_hash" placeholder="Crie uma senha" required minlength="6">
            </div>
            <div class="input-cadastro">
                <input type="password" name="confirmar_senha" placeholder="Confirme a senha" required minlength="6">
            </div>
            <div class="date-cadastro">
                <input type="date" name="data_nascimento" required>
            </div>
            <div class="options-nivellibras">
                <select name="nivel_libra">
                    <option value="">Qual seu nível em Libras?</option>
                    <option value="1">Nunca estudei (iniciante)</option>
                    <option value="2">Já sei o básico</option>
                    <option value="3">Intermediário / Avançado</option>
                </select>
            </div>

            <button type="submit" class="btn-cadastro">Criar Minha Conta</button>

            <div class="login-link">
                Já tem conta? <a href="./login.php">Fazer login</a>
            </div>

            <a href="./index.php" class="voltar">← Voltar ao início</a>

        </form>
    </main>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

</body>
</html>