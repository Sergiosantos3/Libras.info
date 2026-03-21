<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRAS.info - Aprenda Língua Brasileira de Sinais</title>
    <meta name="description" content="Aprenda Libras de forma simples e interativa. Cursos, alfabeto manual, sinais básicos e muito mais.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
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

    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <span class="hero-badge">🤟 Bem-vindo ao LIBRAS.info</span>
                    <h1 class="hero-title">
                        Aprenda <span class="text-gradient">Libras</span> de forma simples e interativa
                    </h1>
                    <p class="hero-description">
                        Descubra a beleza da Língua Brasileira de Sinais. Cursos gratuitos,
                        alfabeto manual, sinais do dia a dia e muito mais.
                    </p>
                    <div class="hero-buttons">
                        <a href="#cursos" class="btn btn-accent btn-lg">
                            <i class="bi bi-play-fill me-2"></i>Começar Agora
                        </a>
                        <a href="sobre-nos.php" class="btn btn-outline-light btn-lg">Saiba Mais</a>
                    </div>
                    <!-- <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">10K+</span>
                            <span class="stat-label">Alunos</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Sinais</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Aulas</span>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-visual">
                        <div class="gradient-circle"></div>
                        <div class="floating-cards">
                            <div class="floating-card card-1">🤚 A</div>
                            <div class="floating-card card-2">🖐️ B</div>
                            <div class="floating-card card-3">✌️ K</div>
                            <div class="floating-card-meio card-4">🤟</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorias Section -->
    <section id="sinais" class="categories-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Explore</span>
                <h2 class="section-title">Categorias de Aprendizado</h2>
                <p class="section-description">
                    Navegue pelas diferentes categorias e comece sua jornada de aprendizado em Libras
                </p>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <a href="./alfabeto.php" class="category-card">
                        <div class="category-icon bg-blue"><i class="bi bi-hand-index"></i></div>
                        <h3 class="category-title">Alfabeto Manual</h3>
                        <p class="category-description">Aprenda as letras do alfabeto em Libras</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./sobre-Libras.php" class="category-card">
                        <div class="category-icon bg-emerald"><i class="bi bi-book"></i></div>
                        <h3 class="category-title">Sobre Libras</h3>
                        <p class="category-description">História e importância da língua de sinais</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./numeros.php" class="category-card">
                        <div class="category-icon bg-violet"><i class="bi bi-hash"></i></div>
                        <h3 class="category-title">Números</h3>
                        <p class="category-description">Aprenda a contar em Libras</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./cumprimentos.php" class="category-card">
                        <div class="category-icon bg-rose"><i class="bi bi-chat-dots"></i></div>
                        <h3 class="category-title">Cumprimentos</h3>
                        <p class="category-description">Saudações e expressões do dia a dia</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./familia.php" class="category-card">
                        <div class="category-icon bg-amber"><i class="bi bi-people"></i></div>
                        <h3 class="category-title">Família</h3>
                        <p class="category-description">Sinais relacionados a família</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./videos.php" class="category-card">
                        <div class="category-icon bg-cyan"><i class="bi bi-play-btn"></i></div>
                        <h3 class="category-title">Vídeos</h3>
                        <p class="category-description">Aulas em vídeo para praticar</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./legislacao.php" class="category-card">
                        <div class="category-icon bg-indigo"><i class="bi bi-file-earmark-text"></i></div>
                        <h3 class="category-title">Legislação</h3>
                        <p class="category-description">Direitos e leis sobre Libras</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="./fale-conosco.php" class="category-card">
                        <div class="category-icon bg-pink"><i class="bi bi-envelope"></i></div>
                        <h3 class="category-title">Fale Conosco</h3>
                        <p class="category-description">Entre em contato com nossa equipe</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Alfabeto -->
    <section id="alfabeto" class="alphabet-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge section-badge-accent">Alfabeto Manual</span>
                <h2 class="section-title">Aprenda o Alfabeto em Libras</h2>
                <p class="section-description">
                    O alfabeto manual é a base para a comunicação em Libras. Clique em cada letra para ver o sinal.
                </p>
            </div>

            <!-- <div class="alphabet-grid">
                <button class="alphabet-letter" data-letter="A"><img src="./img/letra A.png" alt="Letra A em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="B"><img src="./img/letra B.png" alt="Letra B em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="C"><img src="./img/letra C.png" alt="Letra C em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="D"><img src="./img/letra D.png" alt="Letra D em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="E"><img src="./img/letra E.png" alt="Letra E em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="F"><img src="./img/letra F.png" alt="Letra F em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="G"><img src="./img/letra G.png" alt="Letra G em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="H"><img src="./img/letra H.png" alt="Letra H em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="I"><img src="./img/letra I.png" alt="Letra I em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="J"><img src="./img/letra J.png" alt="Letra J em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="K"><img src="./img/letra K.png" alt="Letra K em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="L"><img src="./img/letra L.png" alt="Letra L em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="M"><img src="./img/letra M.png" alt="Letra M em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="N"><img src="./img/letra N.png" alt="Letra N em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="O"><img src="./img/letra O.png" alt="Letra O em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="P"><img src="./img/letra P.png" alt="Letra P em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="Q"><img src="./img/letra Q.png" alt="Letra Q em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="R"><img src="./img/letra R.png" alt="Letra R em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="S"><img src="./img/letra S.png" alt="Letra S em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="T"><img src="./img/letra T.png" alt="Letra T em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="U"><img src="./img/letra U.png" alt="Letra U em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="V"><img src="./img/letra V.png" alt="Letra V em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="W"><img src="./img/letra W.png" alt="Letra W em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="X"><img src="./img/letra X.png" alt="Letra X em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="Y"><img src="./img/letra Y.png" alt="Letra Y em libras" class="letter-img img-fluid"></button>
                <button class="alphabet-letter" data-letter="Z"><img src="./img/letra Z.png" alt="Letra Z em libras" class="letter-img img-fluid"></button>
            </div>

            <div id="letterDisplay" class="letter-display d-none">
                <div class="letter-display-content">
                    <img id="letterImage" class="letter-image img-fluid" src="" alt="Sinal da letra">
                    <div class="letter-info">
                        <span class="letter-label">Letra</span>
                        <span id="letterText" class="letter-text"></span>
                    </div>
                </div>
            </div> -->

            <div class="text-center mt-5">
                <a href="./alfabeto.php" class="link-accent">Ver alfabeto completo <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Cursos Section -->
    <section id="cursos" class="courses-section">
        <div class="container">
            <div class="section-header-flex">
                <div>
                    <span class="section-badge section-badge-primary">Cursos</span>
                    <h2 class="section-title">Ensinamentos</h2>
                    <p class="section-description">Cursos estruturados para todos os níveis</p>
                </div>
                <!-- <a href="#" class="btn btn-outline-secondary d-none d-md-inline-flex">
                    Ver todos os cursos <i class="bi bi-chevron-right ms-2"></i>
                </a> -->
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header bg-blue-gradient">
                            <span class="course-emoji"></span>
                            <span class="course-level">Iniciante</span>
                        </div>
                        <div class="course-body">
                            <h3 class="course-title">Libras Básico</h3>
                            <p class="course-description">Curso introdutório para iniciantes.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 12+ Horas</span>
                            </div>
                            <a href="https://www.youtube.com/watch?v=7yepxfXKF4M&list=PLFdaWy6_jmiwYgI7iM4_ltkg35VaFqPps">
                                <button class="btn btn-secondary w-100">Começar Curso</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header bg-emerald-gradient">
                            <span class="course-emoji"></span>
                            <span class="course-level">Intermediário</span>
                        </div>
                        <div class="course-body">
                            <h3 class="course-title">Conversação</h3>
                            <p class="course-description">Desenvolva habilidades de comunicação fluente.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 1 Horas</span>
                            </div>
                            <button class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#modalvideo">Começar Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header bg-amber-gradient">
                            <span class="course-emoji"></span>
                            <span class="course-level">Avançado</span>
                        </div>
                        <div class="course-body">
                            <h3 class="course-title">Libras Avançado</h3>
                            <p class="course-description">Domine expressões complexas e técnicas.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 16 horas</span>
                            </div>
                            <a href="https://netolibras.com.br/">
                                <button class="btn btn-secondary w-100">Começar Curso</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a href="#" class="footer-brand">
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
                        <li><a href="alfabeto.php">Alfabeto</a></li>
                        <li><a href="numeros.php">Números</a></li>
                        <li><a href="cumprimentos.php">Cumprimentos</a></li>
                        <li><a href="familia.php">Família</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Recursos</h5>
                    <ul class="footer-links">
                        <li><a href="videos.php">Vídeos</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Dicionário</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Institucional</h5>
                    <ul class="footer-links">
                        <li><a href="sobre-Libras.php">Sobre Nós</a></li>
                        <li><a href="legislacao.php">Legislação</a></li>
                        <li><a href="#">Parceiros</a></li>
                        <li><a href="fale-conosco.php">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 LIBRAS.info. Todos os direitos reservados.</p>
                <div class="footer-legal">
                    <a href="#">Termos de Uso</a>
                    <a href="#">Privacidade</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal Vídeo -->
    <div class="modal fade" id="modalvideo" tabindex="-1" aria-labelledby="modalvideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalvideoLabel">Conversação em Libras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/fgrMHDdRHeg?list=PLFdaWy6_jmixvEkG73ZhA2PbkgvMXiGX3"
                            title="1 Hora de Conversação em Língua de Sinais - Libras para Iniciantes"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ── Alfabeto inline ── */
        const buttons = document.querySelectorAll('.alphabet-letter');
        const display = document.getElementById('letterDisplay');
        const letterImage = document.getElementById('letterImage');
        const letterText = document.getElementById('letterText');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const letra = button.dataset.letter;
                letterImage.src = `./img/letra ${letra}.png`;
                letterImage.alt = `Sinal da letra ${letra} em LIBRAS`;
                letterText.textContent = letra;
                display.classList.remove('d-none');
            });
        });

        display.addEventListener('click', (e) => {
            if (e.target === display || !e.target.closest('.letter-display-content')) {
                display.classList.add('d-none');
            }
        });

        /* ── Navbar scroll ── */
        window.addEventListener('scroll', function() {
            document.querySelector('.custom-navbar').classList.toggle('scrolled', window.scrollY > 50);
        });

        /* ── Smooth scroll ── */
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href'))?.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>

</html>