<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeos - LIBRAS.info</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS da página de vídeos -->
    <link rel="stylesheet" href="./css/videos.css">
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

    <!-- Botão Voltar (fixo) -->
    <a href="./index.php" class="btn-voltar">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>

    <!-- Hero -->
    <section class="videos-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 fade-up">
                    <div class="hero-eyebrow">
                        <i class="bi bi-play-circle-fill"></i> Biblioteca de Vídeos
                    </div>
                    <h1>Aprenda Libras <br><span class="gradient-text">vendo na prática</span></h1>
                    <p class="lead mt-3">
                        A língua de sinais é visual. Selecione seu nível e assista aulas com instrutores
                        que tornam cada sinal memorável.
                    </p>
                    <div class="stats-row fade-up-2">
                        <div class="stat-pill"><i class="bi bi-camera-video"></i><span><strong>9</strong> vídeos selecionados</span></div>
                        <div class="stat-pill"><i class="bi bi-bar-chart-steps"></i><span><strong>3</strong> níveis de dificuldade</span></div>
                        <div class="stat-pill"><i class="bi bi-clock"></i><span>+3h de conteúdo</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- Abas de filtro -->
        <div class="filter-bar fade-up-3">
            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">Todos os vídeos</button>
                <button class="filter-tab" data-filter="basico">🟦 Básico</button>
                <button class="filter-tab" data-filter="intermediario">🟨 Intermediário</button>
                <button class="filter-tab" data-filter="avancado">🟥 Avançado</button>
            </div>
        </div>

        <!-- ─── BÁSICO ─── -->
        <div class="section-label" data-group="basico">
            <span class="section-label-text"><i class="bi bi-star-fill"></i> Para Iniciantes</span>
            <div class="section-label-line"></div>
        </div>
        <div class="row g-4" id="grid-basico">

            <!-- Alfabeto -->
            <div class="col-md-6 col-lg-4" data-level="basico">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/1o3RWInA3yM" title="Alfabeto Manual em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-alphabet text-info me-2" style="font-size:.85rem"></i>Alfabeto Manual Completo</h5>
                        </div>
                        <p>Aprenda todas as letras do alfabeto em Libras com demonstração lenta e clara.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-basic">Básico</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 12 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Números -->
            <div class="col-md-6 col-lg-4" data-level="basico">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/NFEyjq0OrP0" title="Números em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-123 text-info me-2" style="font-size:.85rem"></i>Números de 0 a 100</h5>
                        </div>
                        <p>Domine a contagem em Libras, desde os números básicos até dezenas e centenas.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-basic">Básico</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 14 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cumprimentos -->
            <div class="col-md-6 col-lg-4" data-level="basico">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/t4h8M9FX0YA" title="Cumprimentos em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-chat-dots text-info me-2" style="font-size:.85rem"></i>Cumprimentos e Saudações</h5>
                        </div>
                        <p>Como cumprimentar, se apresentar e usar expressões básicas de cortesia em Libras.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-basic">Básico</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 7 min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /grid-basico -->

        <!-- ─── INTERMEDIÁRIO ─── -->
        <div class="section-label" data-group="intermediario">
            <span class="section-label-text"><i class="bi bi-trophy-fill"></i> Nível Intermediário</span>
            <div class="section-label-line"></div>
        </div>
        <div class="row g-4" id="grid-intermediario">

            <!-- Família -->
            <div class="col-md-6 col-lg-4" data-level="intermediario">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/i0OHj_FS69Q" title="Família em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-people-fill text-warning me-2" style="font-size:.85rem"></i>Vocabulário de Família</h5>
                        </div>
                        <p>Sinais de todos os membros da família e como falar sobre relacionamentos familiares.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-inter">Intermediário</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 11 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cores -->
            <div class="col-md-6 col-lg-4" data-level="intermediario">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/pc3VN8m9Khg" title="Cores em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-palette-fill text-warning me-2" style="font-size:.85rem"></i>Cores e Objetos</h5>
                        </div>
                        <p>Aprenda as cores em Libras e como descrever objetos com cores e adjetivos.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-inter">Intermediário</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 12 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dias e meses -->
            <div class="col-md-6 col-lg-4" data-level="intermediario">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/IXavvRSlhNU" title="Dias, meses e anos em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-calendar-fill text-warning me-2" style="font-size:.85rem"></i>Dias, Meses e Horas</h5>
                        </div>
                        <p>Como expressar tempo em Libras: dias da semana, meses do ano e horários.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-inter">Intermediário</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 25 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alimentos -->
            <div class="col-md-6 col-lg-4" data-level="intermediario">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/1wpB989ZUgg" title="Alimentos em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-egg-fried text-warning me-2" style="font-size:.85rem"></i>Alimentos e Bebidas</h5>
                        </div>
                        <p>Vocabulário completo sobre comidas, bebidas e expressões usadas em refeições.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-inter">Intermediário</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 10 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profissões -->
            <div class="col-md-6 col-lg-4" data-level="intermediario">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zxptSKxL4-M" title="Profissões em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-briefcase-fill text-warning me-2" style="font-size:.85rem"></i>Profissões e Trabalho</h5>
                        </div>
                        <p>Sinais das principais profissões e vocabulário relacionado ao mundo do trabalho.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-inter">Intermediário</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 16 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Animais -->
            <div class="col-md-6 col-lg-4" data-level="intermediario">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/skElL6gQ_LI" title="Animais em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-bug-fill text-warning me-2" style="font-size:.85rem"></i>Animais</h5>
                        </div>
                        <p>Sinais de animais domésticos, selvagens e aquáticos em Libras.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-inter">Intermediário</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 20 min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /grid-intermediario -->

        <!-- ─── AVANÇADO ─── -->
        <div class="section-label" data-group="avancado">
            <span class="section-label-text"><i class="bi bi-mortarboard-fill"></i> Nível Avançado</span>
            <div class="section-label-line"></div>
        </div>
        <div class="row g-4" id="grid-avancado">

            <!-- Gramática -->
            <div class="col-md-6 col-lg-4" data-level="avancado">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/ytnaqz5N7qU" title="Gramática da Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-book-fill text-danger me-2" style="font-size:.85rem"></i>Gramática da Libras</h5>
                        </div>
                        <p>Entenda a estrutura gramatical da Libras e como construir frases complexas.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-avancado">Avançado</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 12 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conversação -->
            <div class="col-md-6 col-lg-4" data-level="avancado">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/fgrMHDdRHeg?list=PLFdaWy6_jmixvEkG73ZhA2PbkgvMXiGX3" title="Conversação em Libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-chat-text-fill text-danger me-2" style="font-size:.85rem"></i>Conversação Fluente</h5>
                        </div>
                        <p>Diálogos completos em Libras sobre situações cotidianas e profissionais.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-avancado">Avançado</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 58 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cultura Surda -->
            <div class="col-md-6 col-lg-4" data-level="avancado">
                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/kBpELMZ6cuA" title="Cultura Surda"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-meta">
                        <div class="card-meta-top">
                            <h5><i class="bi bi-globe text-danger me-2" style="font-size:.85rem"></i>Cultura Surda</h5>
                        </div>
                        <p>Conheça a cultura, história e identidade da comunidade surda brasileira.</p>
                        <div class="card-footer-row">
                            <span class="level-badge level-avancado">Avançado</span>
                            <span class="card-duration"><i class="bi bi-clock"></i> 10 min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /grid-avancado -->

        <!-- ─── CANAIS RECOMENDADOS ─── -->
        <div class="channels-section">
            <h2 class="section-title"><i class="bi bi-youtube text-accent me-2"></i>Canais Recomendados</h2>
            <p class="section-sub">Siga esses canais para continuar praticando fora da plataforma</p>
            <div class="row g-3">

                <div class="col-sm-6 col-lg-4">
                    <div class="channel-card">
                        <div class="channel-icon"><i class="bi bi-tv-fill"></i></div>
                        <h5>TV INES</h5>
                        <p>Canal oficial do Instituto Nacional de Educação de Surdos com conteúdo educativo e cultural.</p>
                        <a href="https://www.youtube.com/@tvines.oficial" target="_blank">Visitar canal <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="channel-card">
                        <div class="channel-icon"><i class="bi bi-translate"></i></div>
                        <h5>Neto Libras</h5>
                        <p>Vídeos didáticos sobre vocabulário, gramática e cultura surda, organizados por níveis.</p>
                        <a href="#" target="_blank">Visitar canal <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="channel-card">
                        <div class="channel-icon"><i class="bi bi-person-video3"></i></div>
                        <h5>Mãos Aventureiras</h5>
                        <p>Músicas, histórias e vocabulário em Libras. Ótimo para todos os níveis de aprendizado.</p>
                        <a href="https://www.youtube.com/@M%C3%A3osAventureiras" target="_blank">Visitar canal <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="channel-card">
                        <div class="channel-icon"><i class="bi bi-megaphone-fill"></i></div>
                        <h5>Débora Libras</h5>
                        <p>Vídeos curtos e dinâmicos sobre situações cotidianas, expressões e gírias em Libras.</p>
                        <a href="https://www.youtube.com/@debora_libras/featured" target="_blank">Visitar canal <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="channel-card">
                        <div class="channel-icon"><i class="bi bi-book-half"></i></div>
                        <h5>Ellen Oliveira</h5>
                        <p>Contos e histórias narrados inteiramente em Libras. Ótimo para compreensão e vocabulário.</p>
                        <a href="https://www.youtube.com/@ellenoliveira-linguadesina9245" target="_blank">Visitar canal <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="channel-card">
                        <div class="channel-icon"><i class="bi bi-newspaper"></i></div>
                        <h5>Libraria News</h5>
                        <p>Notícias em Libras — excelente para treinar compreensão em velocidade natural.</p>
                        <a href="https://www.youtube.com/@LibrariaNews" target="_blank">Visitar canal <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div><!-- /channels-section -->

        <!-- ─── DICAS ─── -->
        <div class="tips-section">
            <h2 class="tips-title"><i class="bi bi-lightbulb-fill text-accent me-2"></i>Como aprender melhor com vídeos</h2>
            <p class="tips-sub">Pequenos hábitos que fazem uma diferença enorme na sua evolução</p>
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="tip-item">
                        <div class="tip-icon"><i class="bi bi-skip-backward-fill"></i></div>
                        <div>
                            <h6>Repita várias vezes</h6>
                            <p>Pause e assista de novo. Foque em detalhes diferentes a cada vez: movimento, expressão facial, posição das mãos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tip-item">
                        <div class="tip-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                        <div>
                            <h6>Imite em tempo real</h6>
                            <p>Pratique os sinais enquanto assiste. Use espelho ou se grave para verificar se está correto.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tip-item">
                        <div class="tip-icon"><i class="bi bi-speedometer2"></i></div>
                        <div>
                            <h6>Ajuste a velocidade</h6>
                            <p>Use 0.5x para vídeos rápidos. Quando melhorar, tente 1.25x para treinar compreensão natural.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tip-item">
                        <div class="tip-icon"><i class="bi bi-journal-text"></i></div>
                        <div>
                            <h6>Anote o que aprender</h6>
                            <p>Mantenha um caderno com os sinais novos. Revisões frequentes consolidam o aprendizado.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tip-item">
                        <div class="tip-icon"><i class="bi bi-chat-dots-fill"></i></div>
                        <div>
                            <h6>Observe o contexto</h6>
                            <p>Muitos sinais mudam de significado conforme expressão facial e intensidade. Preste atenção nisso.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tip-item">
                        <div class="tip-icon"><i class="bi bi-people-fill"></i></div>
                        <div>
                            <h6>Estude em grupo</h6>
                            <p>Assistir com outras pessoas que aprendem Libras torna o processo mais divertido e eficaz.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /tips-section -->

        <!-- ─── CTA FINAL ─── -->
        <div class="cta-banner">
            <div>
                <h3>🌟 Quer mais conteúdo?</h3>
                <p>Inscreva-se nos canais recomendados e ative as notificações. Praticar todo dia é o segredo da fluência.</p>
            </div>
            <a href="./index.php#cursos" class="btn-cta">
                <i class="bi bi-arrow-right-circle"></i> Ver nossos cursos
            </a>
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
                        <li><a href="#">Blog</a></li>
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
                <div class="footer-legal">
                    <a href="#">Termos de Uso</a>
                    <a href="#">Privacidade</a>
                </div>
            </div>
        </div>
    </footer>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ── Efeito da navbar ao rolar a página ── */
        window.addEventListener('scroll', () => {
            document.querySelector('.custom-navbar').classList.toggle('rolando', window.scrollY > 50);
        });

        /* ── Filtro de nível dos vídeos ── */
        const abas = document.querySelectorAll('.filter-tab');
        const cards = document.querySelectorAll('[data-level]');
        const grupos = document.querySelectorAll('[data-group]');

        abas.forEach(aba => {
            aba.addEventListener('click', () => {
                /* Remove a seleção de todas as abas */
                abas.forEach(a => a.classList.remove('active'));
                aba.classList.add('active');

                const filtro = aba.dataset.filter;

                /* Mostra ou esconde cada card conforme o nível */
                cards.forEach(card => {
                    card.style.display = (filtro === 'all' || card.dataset.level === filtro) ? '' : 'none';
                });

                /* Mostra ou esconde os cabeçalhos e grids de cada seção */
                grupos.forEach(grupo => {
                    const grp = grupo.dataset.group;
                    const visivel = filtro === 'all' || filtro === grp;
                    grupo.style.display = visivel ? '' : 'none';

                    const grid = document.getElementById('grid-' + grp);
                    if (grid) grid.style.display = visivel ? '' : 'none';
                });
            });
        });
    </script>

</body>

</html>