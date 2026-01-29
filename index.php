<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRAS.info - Aprenda Língua Brasileira de Sinais</title>
    <meta name="description" content="Aprenda Libras de forma simples e interativa. Cursos, alfabeto manual, sinais básicos e muito mais.">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS -->
   <link rel="stylesheet" href="./css/styles.css">
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
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                </ul>
                <a href="#cursos" class="btn btn-accent">Começar Agora</a>
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
                        <a href="#sobre" class="btn btn-outline-light btn-lg">Saiba Mais</a>
                    </div>
                    <div class="hero-stats">
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
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-visual">
                        <div class="gradient-circle"></div>
                        <div class="floating-cards">
                            <div class="floating-card card-1">🤚 A</div>
                            <div class="floating-card card-2">🖐️ B</div>
                            <div class="floating-card card-3">✌️ K</div>
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
                    <a href="#" class="category-card">
                        <div class="category-icon bg-blue"><i class="bi bi-hand-index"></i></div>
                        <h3 class="category-title">Alfabeto Manual</h3>
                        <p class="category-description">Aprenda as letras do alfabeto em Libras</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
                        <div class="category-icon bg-emerald"><i class="bi bi-book"></i></div>
                        <h3 class="category-title">Sobre Libras</h3>
                        <p class="category-description">História e importância da língua de sinais</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
                        <div class="category-icon bg-violet"><i class="bi bi-hash"></i></div>
                        <h3 class="category-title">Números</h3>
                        <p class="category-description">Aprenda a contar em Libras</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
                        <div class="category-icon bg-rose"><i class="bi bi-chat-dots"></i></div>
                        <h3 class="category-title">Cumprimentos</h3>
                        <p class="category-description">Saudações e expressões do dia a dia</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
                        <div class="category-icon bg-amber"><i class="bi bi-people"></i></div>
                        <h3 class="category-title">Família</h3>
                        <p class="category-description">Sinais relacionados a família</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
                        <div class="category-icon bg-cyan"><i class="bi bi-play-btn"></i></div>
                        <h3 class="category-title">Vídeos</h3>
                        <p class="category-description">Aulas em vídeo para praticar</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
                        <div class="category-icon bg-indigo"><i class="bi bi-file-earmark-text"></i></div>
                        <h3 class="category-title">Legislação</h3>
                        <p class="category-description">Direitos e leis sobre Libras</p>
                        <div class="category-arrow"><i class="bi bi-chevron-right"></i></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a href="#" class="category-card">
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
            
            <div class="alphabet-grid">
                <button class="alphabet-letter" data-letter="A" data-emoji="🤚">A</button>
                <button class="alphabet-letter" data-letter="B" data-emoji="🖐️">B</button>
                <button class="alphabet-letter" data-letter="C" data-emoji="🤏">C</button>
                <button class="alphabet-letter" data-letter="D" data-emoji="☝️">D</button>
                <button class="alphabet-letter" data-letter="E" data-emoji="✊">E</button>
                <button class="alphabet-letter" data-letter="F" data-emoji="🤌">F</button>
                <button class="alphabet-letter" data-letter="G" data-emoji="👉">G</button>
                <button class="alphabet-letter" data-letter="H" data-emoji="🤞">H</button>
                <button class="alphabet-letter" data-letter="I" data-emoji="🤙">I</button>
                <button class="alphabet-letter" data-letter="J" data-emoji="🤙">J</button>
                <button class="alphabet-letter" data-letter="K" data-emoji="✌️">K</button>
                <button class="alphabet-letter" data-letter="L" data-emoji="🤟">L</button>
                <button class="alphabet-letter" data-letter="M" data-emoji="✊">M</button>
                <button class="alphabet-letter" data-letter="N" data-emoji="✊">N</button>
                <button class="alphabet-letter" data-letter="O" data-emoji="👌">O</button>
                <button class="alphabet-letter" data-letter="P" data-emoji="👇">P</button>
                <button class="alphabet-letter" data-letter="Q" data-emoji="👇">Q</button>
                <button class="alphabet-letter" data-letter="R" data-emoji="🤞">R</button>
                <button class="alphabet-letter" data-letter="S" data-emoji="✊">S</button>
                <button class="alphabet-letter" data-letter="T" data-emoji="✊">T</button>
                <button class="alphabet-letter" data-letter="U" data-emoji="✌️">U</button>
                <button class="alphabet-letter" data-letter="V" data-emoji="✌️">V</button>
                <button class="alphabet-letter" data-letter="W" data-emoji="🤟">W</button>
                <button class="alphabet-letter" data-letter="X" data-emoji="👆">X</button>
                <button class="alphabet-letter" data-letter="Y" data-emoji="🤙">Y</button>
                <button class="alphabet-letter" data-letter="Z" data-emoji="☝️">Z</button>
            </div>
            
            <div id="letterDisplay" class="letter-display d-none">
                <div class="letter-display-content">
                    <span id="letterEmoji" class="letter-emoji"></span>
                    <div class="letter-info">
                        <span class="letter-label">Letra</span>
                        <span id="letterText" class="letter-text"></span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="link-accent">Ver alfabeto completo <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Cursos Section -->
    <section id="cursos" class="courses-section">
        <div class="container">
            <div class="section-header-flex">
                <div>
                    <span class="section-badge section-badge-primary">Cursos</span>
                    <h2 class="section-title">Nossos Cursos em Destaque</h2>
                    <p class="section-description">Cursos estruturados para todos os níveis</p>
                </div>
                <a href="#" class="btn btn-outline-secondary d-none d-md-inline-flex">
                    Ver todos os cursos <i class="bi bi-chevron-right ms-2"></i>
                </a>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header bg-blue-gradient">
                            <span class="course-emoji">🧑‍🏫</span>
                            <span class="course-level">Iniciante</span>
                        </div>
                        <div class="course-body">
                            <h3 class="course-title">Libras Básico</h3>
                            <p class="course-description">Curso introdutório para iniciantes.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 8 horas</span>
                                <span><i class="bi bi-people"></i> 2.5K</span>
                                <span><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                            </div>
                            <button class="btn btn-secondary w-100">Começar Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header bg-emerald-gradient">
                            <span class="course-emoji">💬</span>
                            <span class="course-level">Intermediário</span>
                        </div>
                        <div class="course-body">
                            <h3 class="course-title">Conversação</h3>
                            <p class="course-description">Desenvolva habilidades de comunicação fluente.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 12 horas</span>
                                <span><i class="bi bi-people"></i> 1.8K</span>
                                <span><i class="bi bi-star-fill text-warning"></i> 4.8</span>
                            </div>
                            <button class="btn btn-secondary w-100">Começar Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header bg-amber-gradient">
                            <span class="course-emoji">🎓</span>
                            <span class="course-level">Avançado</span>
                        </div>
                        <div class="course-body">
                            <h3 class="course-title">Libras Avançado</h3>
                            <p class="course-description">Domine expressões complexas e técnicas.</p>
                            <div class="course-meta">
                                <span><i class="bi bi-clock"></i> 16 horas</span>
                                <span><i class="bi bi-people"></i> 950</span>
                                <span><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                            </div>
                            <button class="btn btn-secondary w-100">Começar Curso</button>
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
                        <li><a href="#">Alfabeto</a></li>
                        <li><a href="#">Números</a></li>
                        <li><a href="#">Cumprimentos</a></li>
                        <li><a href="#">Família</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Recursos</h5>
                    <ul class="footer-links">
                        <li><a href="#">Vídeos</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Dicionário</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-title">Institucional</h5>
                    <ul class="footer-links">
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Legislação</a></li>
                        <li><a href="#">Parceiros</a></li>
                        <li><a href="#">Contato</a></li>
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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Interação Alfabeto
        document.querySelectorAll('.alphabet-letter').forEach(button => {
            button.addEventListener('click', function() {
                const letter = this.dataset.letter;
                const emoji = this.dataset.emoji;
                document.querySelectorAll('.alphabet-letter').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('letterEmoji').textContent = emoji;
                document.getElementById('letterText').textContent = letter;
                document.getElementById('letterDisplay').classList.remove('d-none');
            });
        });

        // Navbar scroll Efeito
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.custom-navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href'))?.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
