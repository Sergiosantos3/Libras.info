<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil — LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/perfil.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="./index.php">
                <div class="brand-icon"><i class="bi bi-hand-index"></i></div>
                <span class="brand-text">LIBRAS<span class="text-accent">.info</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php#sinais">Sinais</a></li>
                    <li class="nav-item"><a class="nav-link" href="./videos.php">Vídeos</a></li>
                    <li class="nav-item"><a class="nav-link" href="./sobre-nos.php">Sobre Nós</a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-accent dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-1"></i> Minha Conta
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item active" href="./perfil.php"><i class="bi bi-person me-2"></i>Perfil</a></li>
                        <li><a class="dropdown-item" href="./perfil.php#configuracoes"><i class="bi bi-gear me-2"></i>Configurações</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="./admin/sair.php"><i class="bi bi-box-arrow-right me-2"></i>Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <a href="./index.php" class="btn-voltar"><i class="bi bi-arrow-left"></i> Voltar</a>

    <!-- HERO / CAPA DE PERFIL -->
    <section class="perfil-hero">
        <div class="container">
            <div class="perfil-capa fade-up">
                <div class="perfil-avatar-wrap">
                    <div class="perfil-avatar" id="avatarPreview">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <label class="btn-trocar-foto" for="inputFoto" title="Trocar foto">
                        <i class="bi bi-camera-fill"></i>
                    </label>
                    <input type="file" id="inputFoto" accept="image/*" class="d-none">
                </div>
                <div class="perfil-capa-info">
                    <div class="hero-eyebrow"><i class="bi bi-person-badge-fill"></i> Minha conta</div>
                    <h1 class="perfil-nome"><?= $_SESSION['usuario']['nome'] ?></h1>
                    <p class="perfil-email">
                        <i class="bi bi-envelope me-1"></i> <?= $_SESSION['usuario']['email'] ?>
                    </p>
                    <div class="perfil-badges">
                        <span class="badge-nivel iniciante">Iniciante</span>
                        <span class="badge-membro">Membro desde <?= date('Y', strtotime($_SESSION['usuario']['data_cadastro'])) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="abas-perfil">
        <div class="container">
            <div class="abas-lista">
                <button class="aba ativa" data-aba="perfil"><i class="bi bi-person-fill"></i> Perfil</button>
                <button class="aba" data-aba="configuracoes"><i class="bi bi-gear-fill"></i> Configurações</button>
                <button class="aba" data-aba="privacidade"><i class="bi bi-shield-fill"></i> Privacidade</button>
            </div>
        </div>
    </div>

    <div class="container perfil-corpo pb-5">

        <!-- ABA: PERFIL -->
        <div class="aba-conteudo ativa" id="aba-perfil">

            <div class="separador-secao mt-4">
                <span class="separador-secao-texto"><i class="bi bi-person-lines-fill"></i> Informações pessoais</span>
                <div class="separador-secao-linha"></div>
            </div>

            <form action="./actions/usuario_atualizar.php" method="POST">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="campo-grupo">
                            <label class="campo-label">Nome completo</label>
                            <input type="text" name="nome" class="campo-input"
                                value="<?= $_SESSION['usuario']['nome'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="campo-grupo">
                            <label class="campo-label">E-mail</label>
                            <input type="email" name="email" class="campo-input"
                                value="<?= $_SESSION['usuario']['email'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="campo-grupo">
                            <label class="campo-label">Nível em Libras</label>
                            <select name="nivel_libras" class="campo-select">
                                <option value="1" <?= $_SESSION['usuario']['nivel_libras'] == '1' ? 'selected' : '' ?>>Nunca estudei (iniciante)</option>
                                <option value="2" <?= $_SESSION['usuario']['nivel_libras'] == '2' ? 'selected' : '' ?>>Já sei o básico</option>
                                <option value="3" <?= $_SESSION['usuario']['nivel_libras'] == '3' ? 'selected' : '' ?>>Intermediário / Avançado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="acoes-form mt-4">
                    <button type="submit" class="btn-salvar">
                        <i class="bi bi-check2-circle me-2"></i>Salvar alterações
                    </button>
                </div>
            </form>

            <!-- Trocar senha -->
            <div class="separador-secao">
                <span class="separador-secao-texto"><i class="bi bi-lock-fill"></i> Alterar senha</span>
                <div class="separador-secao-linha"></div>
            </div>

            <form action="./actions/trocarSenha.php" method="POST">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="campo-grupo">
                            <label class="campo-label">Senha atual</label>
                            <input type="password" name="senha_atual" class="campo-input" placeholder="••••••••">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="campo-grupo">
                            <label class="campo-label">Nova senha</label>
                            <input type="password" name="nova_senha" class="campo-input" placeholder="••••••••" minlength="6">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="campo-grupo">
                            <label class="campo-label">Confirmar nova senha</label>
                            <input type="password" name="confirmar_senha" class="campo-input" placeholder="••••••••" minlength="6">
                        </div>
                    </div>
                </div>
                <div class="acoes-form mt-4">
                    <button type="submit" class="btn-salvar">
                        <i class="bi bi-shield-lock-fill me-2"></i>Atualizar senha
                    </button>
                </div>
            </form>

        </div><!-- /aba-perfil -->

        <!-- ABA: CONFIGURAÇÕES -->
        <div class="aba-conteudo" id="aba-configuracoes">

            <div class="separador-secao mt-4">
                <span class="separador-secao-texto"><i class="bi bi-bell-fill"></i> Notificações</span>
                <div class="separador-secao-linha"></div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="config-card">
                        <div class="config-item">
                            <div class="config-info">
                                <span class="config-titulo">Lembretes de estudo</span>
                                <span class="config-desc">Receba lembretes diários para manter sua sequência</span>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                        <div class="config-item">
                            <div class="config-info">
                                <span class="config-titulo">Atualizações da plataforma</span>
                                <span class="config-desc">Novidades, melhorias e comunicados do LIBRAS.info</span>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separador-secao">
                <span class="separador-secao-texto"><i class="bi bi-palette-fill"></i> Aparência</span>
                <div class="separador-secao-linha"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="campo-grupo">
                        <label class="campo-label">Idioma da interface</label>
                        <select class="campo-select">
                            <option selected>Português (Brasil)</option>
                            <option>English</option>
                            <option>Español</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="campo-grupo">
                        <label class="campo-label">Tamanho do texto</label>
                        <select class="campo-select">
                            <option>Pequeno</option>
                            <option selected>Médio (padrão)</option>
                            <option>Grande</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="config-card">
                        <div class="config-item">
                            <div class="config-info">
                                <span class="config-titulo">Reprodução automática de vídeos</span>
                                <span class="config-desc">Vídeos iniciam automaticamente ao abrir a página</span>
                            </div>
                            <label class="toggle">
                                <input type="checkbox">
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="acoes-form mt-4">
                <button class="btn-salvar"><i class="bi bi-check2-circle me-2"></i>Salvar configurações</button>
            </div>

        </div><!-- /aba-configuracoes -->

        <!-- ABA: PRIVACIDADE -->
        <div class="aba-conteudo" id="aba-privacidade">
            <div class="separador-secao">
                <span class="separador-secao-texto"><i class="bi bi-download"></i> Seus dados</span>
                <div class="separador-secao-linha"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-acao">
                        <div class="card-acao-icone" style="background: rgba(0,200,255,.1); color: var(--destaque);">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                        </div>
                        <div>
                            <h6>Exportar meus dados</h6>
                            <p>Baixe uma cópia de todas as suas informações cadastradas na plataforma.</p>
                            <button class="btn-acao-sec">Solicitar exportação</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-acao">
                        <div class="card-acao-icone" style="background: rgba(239,68,68,.1); color: #f87171;">
                            <i class="bi bi-trash3-fill"></i>
                        </div>
                        <div>
                            <h6>Excluir minha conta</h6>
                            <p>Remove permanentemente sua conta e todos os seus dados. Esta ação não pode ser desfeita.</p>
                            <button class="btn-perigo" data-bs-toggle="modal" data-bs-target="#modalExcluir">
                                Excluir conta
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /aba-privacidade -->

    </div><!-- /container -->

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a href="./index.php" class="footer-brand">
                        <div class="brand-icon"><i class="bi bi-hand-index"></i></div>
                        <span class="brand-text">LIBRAS<span class="text-accent">.info</span></span>
                    </a>
                    <p class="footer-description">Conectando pessoas através da Língua Brasileira de Sinais.</p>
                    <!-- <div class="social-links">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                    </div> -->
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Aprender</h5>
                    <ul class="footer-links">
                        <li><a href="./alfabeto.php">Alfabeto</a></li>
                        <li><a href="./numeros.php">Números</a></li>
                        <li><a href="./cumprimentos.php">Cumprimentos</a></li>
                        <li><a href="./familia.php">Família</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Recursos</h5>
                    <ul class="footer-links">
                        <li><a href="./videos.php">Vídeos</a></li>
                        <li><a href="./sobre-Libras.php">Sobre Libras</a></li>
                        <li><a href="./legislacao.php">Legislação</a></li>
                        <li><a href="./fale-conosco.php">Contato</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Conta</h5>
                    <ul class="footer-links">
                        <li><a href="./perfil.php">Meu perfil</a></li>
                        <li><a href="./perfil.php#configuracoes">Configurações</a></li>
                        <li><a href="./sobre-nos.php">Sobre Nós</a></li>
                        <li><a href="./admin/sair.php">Sair</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 LIBRAS.info. Todos os direitos reservados.</p>
                <div class="footer-legal"><a href="#">Termos de Uso</a><a href="#">Privacidade</a></div>
            </div>
        </div>
    </footer>

    <!-- Modal confirmar exclusão -->
    <div class="modal fade" id="modalExcluir" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-exclamation-triangle-fill text-danger me-2"></i>Excluir conta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza? Esta ação é <strong>irreversível</strong>. Todos os seus dados serão apagados permanentemente.</p>
                    <div class="campo-grupo mt-3">
                        <label class="campo-label">Digite sua senha para confirmar</label>
                        <input type="password" class="campo-input" placeholder="••••••••">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn-acao-sec" data-bs-dismiss="modal">Cancelar</button>
                    <a href="./actions/usuario_excluir.php" class="btn-perigo">Excluir permanentemente</a>
                </div>
            </div>
        </div>
    </div>

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
        window.addEventListener('scroll', () => {
            document.querySelector('.custom-navbar').classList.toggle('rolando', window.scrollY > 50);
        });

        document.querySelectorAll('.aba').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.aba').forEach(b => b.classList.remove('ativa'));
                document.querySelectorAll('.aba-conteudo').forEach(c => c.classList.remove('ativa'));
                btn.classList.add('ativa');
                document.getElementById('aba-' + btn.dataset.aba).classList.add('ativa');
            });
        });

        if (window.location.hash === '#configuracoes') {
            document.querySelector('[data-aba="configuracoes"]').click();
        }

        document.getElementById('inputFoto').addEventListener('change', function() {
            const file = this.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = e => {
                const av = document.getElementById('avatarPreview');
                av.style.backgroundImage = `url(${e.target.result})`;
                av.style.backgroundSize = 'cover';
                av.style.backgroundPosition = 'center';
                av.innerHTML = '';
            };
            reader.readAsDataURL(file);
        });
    </script>

    <?php include_once './includes/alerts_includes.php'; ?>
</body>

</html>