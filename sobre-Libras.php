<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Libras - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/sobre_libras.css">
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
                    <li class="nav-item"><a class="nav-link" href="index.php#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#sinais">Sinais</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#alfabeto">Alfabeto</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#cursos">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?sobre">Sobre</a></li>
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

    <!-- Hero -->
    <section class="pagina-hero">
        <div class="container">
            <div class="text-center fade-up">
                <div class="hero-icone-circulo"><i class="bi bi-book"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-info-circle-fill"></i> Conheça a língua</div>
                <h1>Sobre <span class="gradiente">Libras</span></h1>
                <p class="lead mx-auto">História, características e importância da Língua Brasileira de Sinais</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- O que é -->
        <div class="bloco-info fade-up-2">
            <h2><i class="bi bi-info-circle-fill"></i> O que é Libras?</h2>
            <p>A Libras (Língua Brasileira de Sinais) é a língua de sinais utilizada pelas comunidades surdas do Brasil. É uma língua natural, com estrutura gramatical própria, que não é simplesmente uma versão sinalizada do português, mas sim um sistema linguístico completo e independente.</p>
            <p class="mt-3">Reconhecida oficialmente pela <strong style="color:#fff">Lei nº 10.436, de 24 de abril de 2002</strong>, a Libras é considerada o meio legal de comunicação e expressão das comunidades surdas brasileiras.</p>
        </div>

        <!-- Timeline -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-clock-history"></i> História da Libras</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="timeline fade-up">
            <div class="timeline-item">
                <div class="timeline-ponto"></div>
                <h5>1857 — Início no Brasil</h5>
                <p>O educador francês Ernest Huet chegou ao Brasil a convite de D. Pedro II e fundou a primeira escola para surdos do país, o Imperial Instituto de Surdos Mudos (atual INES).</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-ponto"></div>
                <h5>1880 — Congresso de Milão</h5>
                <p>O Congresso Internacional de Educação de Surdos proibiu o uso de línguas de sinais na educação, priorizando o oralismo. Isso gerou quase 100 anos de repressão às línguas de sinais.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-ponto"></div>
                <h5>1960–1980 — Reconhecimento Científico</h5>
                <p>Pesquisas linguísticas comprovaram que as línguas de sinais são línguas naturais e completas, com toda a complexidade das línguas orais.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-ponto"></div>
                <h5>2002 — Reconhecimento Legal</h5>
                <p>A Lei nº 10.436 reconheceu oficialmente a Libras como meio legal de comunicação e expressão das comunidades surdas brasileiras.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-ponto"></div>
                <h5>2005 — Regulamentação</h5>
                <p>O Decreto nº 5.626 regulamentou a Lei de Libras, estabelecendo diretrizes para seu ensino, formação de profissionais e inclusão da disciplina nos cursos de formação de professores.</p>
            </div>
        </div>

        <!-- Importância -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-star-fill"></i> Importância da Libras</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-people-fill text-info me-2"></i>Inclusão Social</h5>
                        <p>A Libras permite que pessoas surdas participem plenamente da sociedade, acessem informações, educação e serviços públicos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-person-check-fill text-info me-2"></i>Identidade Cultural</h5>
                        <p>A língua de sinais é fundamental para a identidade e cultura das comunidades surdas, sendo um patrimônio cultural imaterial.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-mortarboard-fill text-info me-2"></i>Desenvolvimento Educacional</h5>
                        <p>Estudantes surdos que têm acesso à educação em Libras apresentam melhor desempenho acadêmico e desenvolvimento cognitivo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-briefcase-fill text-info me-2"></i>Oportunidades Profissionais</h5>
                        <p>O conhecimento de Libras abre portas para carreiras como intérprete, professor e diversos campos da acessibilidade.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Características -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-lightbulb-fill"></i> Características da Libras</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="bloco-info">
            <h2><i class="bi bi-list-check"></i> Como a língua funciona</h2>
            <ul>
                <li><strong>Língua visual-espacial:</strong> Utiliza o espaço e movimentos corporais para se expressar</li>
                <li><strong>Gramática própria:</strong> Possui estrutura gramatical independente do português</li>
                <li><strong>Regionalismo:</strong> Assim como o português, possui variações regionais</li>
                <li><strong>Expressões não-manuais:</strong> Utiliza expressões faciais e corporais como parte da gramática</li>
                <li><strong>Configuração de mãos:</strong> A forma das mãos é essencial para o significado dos sinais</li>
                <li><strong>Movimento:</strong> A direção e tipo de movimento alteram o significado</li>
                <li><strong>Ponto de articulação:</strong> O local onde o sinal é feito tem significado gramatical</li>
            </ul>
        </div>

        <!-- Dados -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-graph-up"></i> Dados sobre a Surdez no Brasil</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="numero">10,7M</div>
                    <div class="rotulo">Pessoas com deficiência auditiva no Brasil</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="numero">2,7M</div>
                    <div class="rotulo">Com surdez severa</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="numero">5%</div>
                    <div class="rotulo">Da população brasileira</div>
                </div>
            </div>
        </div>
        <p class="text-center" style="font-size:.8rem; color: #576677;">* Fonte: IBGE — Censo 2010</p>

        <!-- Mitos e Verdades -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-question-circle-fill"></i> Mitos e Verdades</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="accordion accordion-escuro" id="mythsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#myth1">
                        <i class="bi bi-x-circle text-danger me-2"></i> Mito: Libras é uma linguagem universal
                    </button>
                </h2>
                <div id="myth1" class="accordion-collapse collapse show" data-bs-parent="#mythsAccordion">
                    <div class="accordion-body"><strong>Verdade:</strong> Cada país tem sua própria língua de sinais. A Libras é específica do Brasil, assim como existe a ASL (americana), BSL (britânica) e muitas outras.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#myth2">
                        <i class="bi bi-x-circle text-danger me-2"></i> Mito: Libras é só português sinalizado
                    </button>
                </h2>
                <div id="myth2" class="accordion-collapse collapse" data-bs-parent="#mythsAccordion">
                    <div class="accordion-body"><strong>Verdade:</strong> Libras tem gramática própria e estrutura completamente diferente do português. Não é uma tradução palavra por palavra.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#myth3">
                        <i class="bi bi-x-circle text-danger me-2"></i> Mito: Surdos não podem dirigir ou fazer atividades normais
                    </button>
                </h2>
                <div id="myth3" class="accordion-collapse collapse" data-bs-parent="#mythsAccordion">
                    <div class="accordion-body"><strong>Verdade:</strong> Pessoas surdas podem fazer praticamente todas as atividades que ouvintes fazem, incluindo dirigir, praticar esportes e trabalhar em diversas profissões.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#myth4">
                        <i class="bi bi-check-circle text-success me-2"></i> Verdade: Aprender Libras beneficia o cérebro
                    </button>
                </h2>
                <div id="myth4" class="accordion-collapse collapse" data-bs-parent="#mythsAccordion">
                    <div class="accordion-body">Estudos mostram que aprender línguas de sinais melhora habilidades cognitivas, memória visual, coordenação motora e até habilidades matemáticas e espaciais.</div>
                </div>
            </div>
        </div>

        <div class="alerta-info mt-4">
            <i class="bi bi-lightbulb-fill me-2"></i>
            <strong>Sabia que?</strong> Aprender Libras beneficia ouvintes e surdos igualmente — e é uma das línguas mais expressivas e belas do mundo!
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
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Dicionário</a></li>
                        <li><a href="./sobre-Libras.php">Sobre Libras</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            document.querySelector('.custom-navbar').classList.toggle('rolando', window.scrollY > 50);
        });
    </script>
</body>

</html>