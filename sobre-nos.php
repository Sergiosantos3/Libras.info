<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós — LIBRAS.info</title>
    <meta name="description" content="Conheça a história e o propósito por trás do LIBRAS.info — um projeto nascido da indignação e do desejo de tornar a inclusão real.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/sobre-nos.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <div class="brand-icon">
                    <i class="bi bi-hand-index"></i>
                </div>
                <span class="brand-text">LIBRAS<span class="text-accent">.info</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sinais">Sinais</a></li>
                    <li class="nav-item"><a class="nav-link" href="#alfabeto">Alfabeto</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cursos">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="./sobre-nos.php">Sobre</a></li>
                </ul>
                <?php if (isset($_SESSION['usuario'])): ?>
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
                <?php else: ?>
                    <a href="./login.php" class="btn btn-accent">Login/Cadastre-se</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <a href="./index.php" class="btn-voltar"><i class="bi bi-arrow-left"></i> Voltar</a>

    <!-- HERO -->
    <section class="pagina-hero">
        <div class="container">
            <div class="text-center fade-up">
                <div class="hero-icone-circulo"><i class="bi bi-heart-fill"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-people-fill"></i> Nossa história</div>
                <h1>Sobre <span class="gradiente">Nós</span></h1>
                <p class="lead mx-auto">Nascemos da indignação. Crescemos com o propósito de tornar a inclusão real.</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- ORIGEM -->
        <div class="bloco-destaque fade-up-2">
            <div class="aspas"><i class="bi bi-quote"></i></div>
            <p class="frase-destaque">
                Por que uma criança surda precisa esperar a faculdade para ter acesso à sua própria língua?
            </p>
            <span class="frase-autor">— A pergunta que deu origem ao LIBRAS.info</span>
        </div>

        <!-- HISTÓRIA -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-clock-history"></i> Como tudo começou</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="bloco-info fade-up">
            <h2><i class="bi bi-lightbulb-fill"></i> A indignação que virou projeto</h2>
            <p>O LIBRAS.info nasceu de uma inquietação simples, mas poderosa: a Língua Brasileira de Sinais ainda é invisível em boa parte das escolas brasileiras. Para a maioria dos alunos ouvintes, o primeiro contato com Libras só acontece — quando acontece — no ensino superior. Para crianças surdas, essa lacuna significa anos de exclusão, dificuldades de comunicação e barreiras que poderiam ser evitadas.</p>
            <p class="mt-3">A ideia foi direta: se o ensino formal ainda não chegou lá, que pelo menos a internet chegue. Juntamos em um só lugar os conteúdos mais básicos e importantes — alfabeto, números, cumprimentos, família, legislação — para que qualquer pessoa, de qualquer lugar, possa começar a aprender Libras hoje, de graça e sem complicação.</p>
        </div>

        <!-- POR QUE ISSO IMPORTA -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-megaphone-fill"></i> Por que isso importa</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-motivo">
                    <div class="card-motivo-icone" style="background: rgba(0,200,255,.12); color: var(--destaque);">
                        <i class="bi bi-building"></i>
                    </div>
                    <div>
                        <h5>Libras nas escolas ainda é exceção</h5>
                        <p>Apesar do Decreto nº 5.626/2005 tornar obrigatório o ensino de Libras nos cursos de formação de professores, a língua ainda está ausente da maioria das salas de aula da educação básica.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-motivo">
                    <div class="card-motivo-icone" style="background: rgba(167,139,250,.12); color: #a78bfa;">
                        <i class="bi bi-ear"></i>
                    </div>
                    <div>
                        <h5>10,7 milhões de brasileiros com deficiência auditiva</h5>
                        <p>São mais de 10 milhões de pessoas que dependem de Libras para se comunicar plenamente — e que muitas vezes encontram barreiras em ambientes que deveriam ser inclusivos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-motivo">
                    <div class="card-motivo-icone" style="background: rgba(34,197,94,.12); color: #4ade80;">
                        <i class="bi bi-person-heart"></i>
                    </div>
                    <div>
                        <h5>Inclusão começa no cotidiano</h5>
                        <p>Não é preciso ser intérprete ou especialista. Um cumprimento em Libras, saber soletrar um nome, entender o básico — já é suficiente para transformar a vida de alguém.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-motivo">
                    <div class="card-motivo-icone" style="background: rgba(245,158,11,.12); color: #fbbf24;">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <div>
                        <h5>A internet pode encurtar essa distância</h5>
                        <p>Com acesso a conteúdo gratuito, organizado e acessível, qualquer pessoa pode começar hoje. Sem precisar esperar o sistema mudar.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--  MISSÃO / VISÃO / VALORES -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-compass-fill"></i> Missão, Visão e Valores</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-mvv">
                    <div class="card-mvv-topo missao">
                        <i class="bi bi-bullseye"></i>
                        <span>Missão</span>
                    </div>
                    <p>Democratizar o acesso ao aprendizado de Libras reunindo conteúdo básico e de qualidade em um único lugar, gratuito e acessível para todos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-mvv">
                    <div class="card-mvv-topo visao">
                        <i class="bi bi-eye-fill"></i>
                        <span>Visão</span>
                    </div>
                    <p>Um Brasil onde Libras seja conhecida por todos — ouvintes e surdos — como parte natural da comunicação cotidiana e da cultura escolar.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-mvv">
                    <div class="card-mvv-topo valores">
                        <i class="bi bi-stars"></i>
                        <span>Valores</span>
                    </div>
                    <p>Inclusão sem discurso vazio. Simplicidade no aprendizado. Respeito à identidade e cultura surda. Acesso gratuito como princípio, não como exceção.</p>
                </div>
            </div>
        </div>

        <!-- O QUE OFERECEMOS -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-grid-fill"></i> O que você encontra aqui</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-3">
            <div class="col-6 col-md-3">
                <a href="./alfabeto.php" class="card-recurso">
                    <i class="bi bi-hand-index-fill"></i>
                    <span>Alfabeto</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./numeros.php" class="card-recurso">
                    <i class="bi bi-123"></i>
                    <span>Números</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./cumprimentos.php" class="card-recurso">
                    <i class="bi bi-chat-heart-fill"></i>
                    <span>Cumprimentos</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./familia.php" class="card-recurso">
                    <i class="bi bi-house-heart-fill"></i>
                    <span>Família</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./videos.php" class="card-recurso">
                    <i class="bi bi-play-circle-fill"></i>
                    <span>Vídeos</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./legislacao.php" class="card-recurso">
                    <i class="bi bi-file-earmark-text-fill"></i>
                    <span>Legislação</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./sobre-Libras.php" class="card-recurso">
                    <i class="bi bi-book-fill"></i>
                    <span>Sobre Libras</span>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="./fale-conosco.php" class="card-recurso">
                    <i class="bi bi-envelope-fill"></i>
                    <span>Contato</span>
                </a>
            </div>
        </div>

        <!--  CTA FINAL -->
        <div class="cta-final mt-5">
            <div class="cta-glow"></div>
            <i class="bi bi-hand-index-thumb-fill cta-icone"></i>
            <h3>Pronto para dar o primeiro passo?</h3>
            <p>Comece pelo alfabeto. São 26 letras que podem mudar a forma como você enxerga o mundo — e a forma como o mundo enxerga você.</p>
            <div class="cta-botoes">
                <a href="./alfabeto.php" class="btn-cta-principal">
                    <i class="bi bi-play-fill me-2"></i>Começar agora
                </a>
                <a href="./fale-conosco.php" class="btn-cta-secundario">
                    Fale conosco <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

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
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                    </div>
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
                        <li><a href="#">Cursos</a></li>
                        <li><a href="./sobre-Libras.php">Sobre Libras</a></li>
                        <li><a href="./legislacao.php">Legislação</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Institucional</h5>
                    <ul class="footer-links">
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="./legislacao.php">Legislação</a></li>
                        <li><a href="#">Parceiros</a></li>
                        <li><a href="./fale-conosco.php">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 LIBRAS.info. Todos os direitos reservados.</p>
                <div class="footer-legal"><a href="#">Termos de Uso</a><a href="#">Privacidade</a></div>
            </div>
        </div>
    </footer>

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
    </script>
</body>

</html>