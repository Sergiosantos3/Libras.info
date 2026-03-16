<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números em Libras - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/numeros.css">
</head>

<body>

    <!-- Navbar -->
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
    <a href="./index.php" class="btn-voltar"><i class="bi bi-arrow-left"></i> Voltar</a>

    <!-- Hero -->
    <section class="pagina-hero">
        <div class="container">
            <div class="text-center fade-up">
                <div class="hero-icone-circulo"><i class="bi bi-hash"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-123"></i> Aprenda a contar</div>
                <h1>Números em <span class="gradiente">Libras</span></h1>
                <p class="lead mx-auto">Do zero ao trilhão — domine a contagem em língua de sinais</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- Como funcionam -->
        <div class="bloco-info fade-up-2">
            <h2><i class="bi bi-lightbulb-fill"></i> Como funcionam os números em Libras</h2>
            <ul>
                <li><strong>Números de 0 a 4:</strong> Utilizam a quantidade de dedos correspondente</li>
                <li><strong>Números de 5 a 9:</strong> Combinam a mão aberta (5) com dedos adicionais</li>
                <li><strong>Dezenas, centenas e milhares:</strong> Possuem sinais específicos e combinações</li>
            </ul>
        </div>

        <!-- 0 a 10 -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-1-circle"></i> Números de 0 a 9</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">0</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/gNvjjvz4SsM"
                            title="Número 0 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">1</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/_pijJeY9gbk"
                            title="Número 1 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">2</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/cAdYY3PxZoI"
                            title="Número 2 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">3 e 4</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/kyeUrkeya-s"
                            title="Número 3 e 4 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">5</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/OmAJaq206VY"
                            title="Número 5 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">6</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/ktZWXEHIYjk"
                            title="Número 6 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">7</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/viOIEfDahpc"
                            title="Número 7 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">8</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/inuojMTzaPg"
                            title="Número 8 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="sinal-card">
                    <div class="numero-display">9</div>
                    <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                        <iframe src="https://www.youtube.com/embed/QZVp9oVz1bM"
                            title="Número 9 em libras"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Números maiores -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-123"></i> Números Maiores</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-arrow-up-circle-fill text-info me-2"></i>Dezenas (30, 40, 50…)</h5>
                        <p>As dezenas são formadas combinando o número da dezena com o sinal de zero. Por exemplo: 30 é o sinal de 3 seguido do sinal de 0.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-calculator-fill text-info me-2"></i>Centenas (100, 200…)</h5>
                        <p>100 tem um sinal específico (cem). As outras centenas são formadas pelo número + sinal de cem. Exemplo: 200 = 2 + cem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-stack text-info me-2"></i>Milhares (1.000, 2.000…)</h5>
                        <p>1.000 tem seu sinal específico (mil). Os outros milhares seguem o padrão: número + mil. Exemplo: 5.000 = 5 + mil.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-infinity text-info me-2"></i>Milhões e além</h5>
                        <p>Milhão, bilhão e trilhão possuem sinais específicos. Números compostos são formados pela combinação sequencial das partes.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aplicações práticas -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-award-fill"></i> Aplicações Práticas</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:28px 20px;">
                        <i class="bi bi-clock-fill mb-3 d-block" style="font-size:2rem;color:var(--destaque);"></i>
                        <h5>Horas</h5>
                        <p>Use os números para indicar horários e tempo</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:28px 20px;">
                        <i class="bi bi-currency-dollar mb-3 d-block" style="font-size:2rem;color:var(--destaque);"></i>
                        <h5>Valores</h5>
                        <p>Expresse preços e quantias monetárias</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:28px 20px;">
                        <i class="bi bi-calendar-fill mb-3 d-block" style="font-size:2rem;color:var(--destaque);"></i>
                        <h5>Datas</h5>
                        <p>Comunique dias, meses e anos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:28px 20px;">
                        <i class="bi bi-telephone-fill mb-3 d-block" style="font-size:2rem;color:var(--destaque);"></i>
                        <h5>Telefones</h5>
                        <p>Compartilhe números de contato</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:28px 20px;">
                        <i class="bi bi-house-fill mb-3 d-block" style="font-size:2rem;color:var(--destaque);"></i>
                        <h5>Endereços</h5>
                        <p>Indique números de casas e apartamentos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:28px 20px;">
                        <i class="bi bi-speedometer2 mb-3 d-block" style="font-size:2rem;color:var(--destaque);"></i>
                        <h5>Medidas</h5>
                        <p>Comunique pesos, distâncias e quantidades</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dicas -->
        <div class="bloco-info mt-4">
            <h2><i class="bi bi-lightbulb-fill"></i> Dicas para Praticar Números</h2>
            <ul>
                <li>Comece praticando os números de 0 a 10 até dominá-los completamente</li>
                <li>Pratique contar objetos ao seu redor em Libras</li>
                <li>Tente dizer sua idade, número de telefone e endereço em Libras</li>
                <li>Pratique dizendo as horas durante o dia</li>
                <li>Faça exercícios matemáticos simples usando Libras</li>
                <li>Assista vídeos de contagem em Libras para ver os movimentos corretos</li>
            </ul>
        </div>

        <div class="alerta-info mt-3">
            <i class="bi bi-info-circle-fill me-2"></i>
            <strong>Importante:</strong> Alguns números podem ter variações regionais. Os sinais apresentados aqui são os mais comuns e amplamente utilizados no Brasil.
        </div>

    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            document.querySelector('.custom-navbar').classList.toggle('rolando', window.scrollY > 50);
        });
    </script>
</body>

</html>