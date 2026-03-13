<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — LIBRAS.info</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login-cadatro.css">
</head>
<body>

    <main class="container">
        <form id="formLogin" action="actions/usuario_logar.php" method="POST">

            <a href="./index.php" class="logo-center">LIBRAS<span>.info</span></a>

            <div class="input-login">
                <input placeholder="E-mail" type="email" id="email" name="email" required>
            </div>
            <div class="input-login">
                <input placeholder="Senha" type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="login">Entrar</button>

            <div class="remember-forgot">
                <a href="#">Esqueceu a senha?</a>
                <a href="./cadastro.php">Criar conta grátis</a>
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