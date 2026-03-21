<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login-cadatro.css">
</head>

<body>

    <div class="auth-card">
        <div class="auth-wrapper" id="authWrapper">
            <div class="panel-form panel-login">
                <div class="form-shell">
                    <div class="form-head">
                        <span class="form-eyebrow">Bem-vindo de volta</span>
                        <h1 class="form-title">Entrar</h1>
                    </div>

                    <form action="./actions/usuario_logar.php" method="POST">
                        <div class="field-group">
                            <label class="form-label">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="seu@email.com" required>
                            </div>
                        </div>

                        <div class="field-group">
                            <label class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" name="senha" id="senhaLogin" placeholder="••••••••" required>
                                <button type="button" class="btn-pass" data-target="senhaLogin">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="field-group" style="text-align:right;">
                            <a href="#" class="toggle-link" style="font-size:.76rem;font-weight:500;">Esqueci minha senha</a>
                        </div>

                        <button type="submit" class="btn-custom">
                            Entrar <i class="bi bi-arrow-right"></i>
                        </button>

                        <p class="text-center" style="font-size:.8rem;color:var(--texto-sec);">
                            Ainda não tem conta?
                            <a href="#" class="toggle-link ms-1 js-para-cadastro">Criar conta grátis</a>
                        </p>
                    </form>

                    <a href="./index.php" class="link-voltar">← Voltar ao início</a>
                </div>
            </div>
            <div class="panel-form panel-cadastro">
                <div class="form-shell">
                    <div class="form-head">
                        <span class="form-eyebrow">Comece agora, é grátis</span>
                        <h1 class="form-title">Criar conta</h1>
                    </div>

                    <form id="formCadastro" action="./actions/usuario_cadastrar.php" method="POST">
                        <div class="field-group-sm">
                            <label class="form-label">Nome completo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" name="nome" placeholder="Seu nome" required>
                            </div>
                        </div>

                        <div class="field-group-sm">
                            <label class="form-label">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="seu@email.com" required>
                            </div>
                        </div>

                        <div class="field-group-sm">
                            <label class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" name="senha_hash" id="senhaCad" placeholder="Mínimo 6 caracteres" minlength="6" required>
                                <button type="button" class="btn-pass" data-target="senhaCad">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="field-group-sm">
                            <label class="form-label">Confirmar senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control" id="confirmaSenhaCad" placeholder="Repita a senha" required>
                                <button type="button" class="btn-pass" data-target="confirmaSenhaCad">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div id="senhaError" class="senha-error">
                                <i class="bi bi-exclamation-circle me-1"></i>As senhas não coincidem.
                            </div>
                        </div>

                        <div class="field-group-sm">
                            <label class="form-label">Nível em Libras</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-bar-chart"></i></span>
                                <select class="form-control" name="nivel_libras" required>
                                    <option value="">Selecione seu nível</option>
                                    <option value="1">Nunca estudei (iniciante)</option>
                                    <option value="2">Já sei o básico</option>
                                    <option value="3">Intermediário / Avançado</option>
                                </select>
                            </div>
                        </div>

                        <div class="field-group-sm" style="margin-top:4px;">
                            <button type="submit" class="btn-custom">
                                Criar minha conta <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                        <p class="text-center" style="font-size:.8rem;color:var(--texto-sec);">
                            Já tem conta?
                            <a href="#" class="toggle-link ms-1 js-para-login">Entrar agora</a>
                        </p>
                    </form>

                    <a href="./index.php" class="link-voltar">← Voltar ao início</a>
                </div>
            </div>
            <div class="panel-brand">
                <div class="brand-blob brand-blob-1"></div>
                <div class="brand-blob brand-blob-2"></div>
                <div class="brand-blob brand-blob-3"></div>

                <div class="brand-content for-login">
                    <a href="./index.php" class="brand-logo">LIBRAS<span>.info</span></a>
                    <div class="brand-divider"></div>
                    <p class="brand-tagline">Inclusão começa<br>pela comunicação.</p>
                    <p class="brand-sub">Aprenda Libras de graça, no seu ritmo, com conteúdo feito para todos.</p>
                    <div class="brand-features">
                        <div class="brand-feature">
                            <div class="brand-feature-icon"><i class="bi bi-hand-index-fill"></i></div>
                            Alfabeto, números e sinais
                        </div>
                        <div class="brand-feature">
                            <div class="brand-feature-icon"><i class="bi bi-play-circle-fill"></i></div>
                            Vídeos com demonstrações
                        </div>
                        <div class="brand-feature">
                            <div class="brand-feature-icon"><i class="bi bi-shield-fill-check"></i></div>
                            100% gratuito para sempre
                        </div>
                    </div>
                    <p class="brand-cta-text">Ainda não tem conta?</p>
                    <button class="brand-cta-btn js-para-cadastro">Criar conta grátis</button>
                </div>

                <div class="brand-content for-cadastro">
                    <a href="./index.php" class="brand-logo">LIBRAS<span>.info</span></a>
                    <div class="brand-divider"></div>
                    <p class="brand-tagline">Já faz parte<br>da família?</p>
                    <p class="brand-sub">Acesse sua conta e continue aprendendo de onde parou.</p>
                    <br>
                    <p class="brand-cta-text">Já tem uma conta?</p>
                    <button class="brand-cta-btn js-para-login">Entrar agora</button>
                </div>
            </div>

        </div>
    </div>

    <!-- VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const wrapper = document.getElementById('authWrapper');

        function irParaCadastro() {
            wrapper.classList.add('modo-cadastro');
        }

        function irParaLogin() {
            wrapper.classList.remove('modo-cadastro');
        }

        document.querySelectorAll('.js-para-cadastro').forEach(el =>
            el.addEventListener('click', e => {
                e.preventDefault();
                irParaCadastro();
            }));
        document.querySelectorAll('.js-para-login').forEach(el =>
            el.addEventListener('click', e => {
                e.preventDefault();
                irParaLogin();
            }));

        // Toggle olho
        document.querySelectorAll('.btn-pass').forEach(btn =>
            btn.addEventListener('click', function() {
                const input = document.getElementById(this.dataset.target);
                const icon = this.querySelector('i');
                const show = input.type === 'password';
                input.type = show ? 'text' : 'password';
                icon.classList.toggle('bi-eye', !show);
                icon.classList.toggle('bi-eye-slash', show);
            }));

        // Validação senhas
        function validarSenhas() {
            const s1 = document.getElementById('senhaCad').value;
            const s2 = document.getElementById('confirmaSenhaCad').value;
            const err = document.getElementById('senhaError');
            const ok = !s2 || s1 === s2;
            err.style.display = ok ? 'none' : 'flex';
            document.getElementById('confirmaSenhaCad').setCustomValidity(ok ? '' : 'Senhas não coincidem');
            return ok;
        }
        ['senhaCad', 'confirmaSenhaCad'].forEach(id => {
            document.getElementById(id).addEventListener('keyup', validarSenhas);
            document.getElementById(id).addEventListener('blur', validarSenhas);
        });
        document.getElementById('formCadastro').addEventListener('submit', e => {
            if (!validarSenhas()) {
                e.preventDefault();
                document.getElementById('confirmaSenhaCad').focus();
            }
        });

        // Abrir direto no cadastro via ?cadastro=1
        if (new URLSearchParams(window.location.search).get('cadastro') === '1') irParaCadastro();
    </script>

    <?php include_once './includes/alerts_includes.php'; ?>
</body>

</html>