<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfabeto em Libras - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/alfabeto.css">
    <link rel="stylesheet" href=".css/index.css">
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

    <!-- Hero -->
    <section class="pagina-hero">
        <div class="container">
            <div class="text-center fade-up">
                <div class="hero-icone-circulo"><i class="bi bi-hand-index-fill"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-alphabet-uppercase"></i> A base da comunicação</div>
                <h1>Alfabeto <span class="gradiente">Manual</span></h1>
                <p class="lead mx-auto">Clique em cada letra para ver o sinal em Libras ampliado</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- Dica de uso -->
        <div class="alerta-info fade-up-2 mb-4">
            <i class="bi bi-hand-index-fill me-2"></i>
            <strong>Como usar:</strong> Clique em qualquer letra para ampliar o sinal. Use as setas ← → para navegar entre as letras sem fechar o painel.
        </div>

        <!-- Grid do alfabeto -->
        <div class="grid-alfabeto fade-up-3" id="gridAlfabeto">
            <div class="letra-card" data-letra="A">
                <img src="./img/letra A.png" alt="Letra A em Libras">
                <span>A</span>
            </div>
            <div class="letra-card" data-letra="B">
                <img src="./img/letra B.png" alt="Letra B em Libras">
                <span>B</span>
            </div>
            <div class="letra-card" data-letra="C">
                <img src="./img/letra C.png" alt="Letra C em Libras">
                <span>C</span>
            </div>
            <div class="letra-card" data-letra="D">
                <img src="./img/letra D.png" alt="Letra D em Libras">
                <span>D</span>
            </div>
            <div class="letra-card" data-letra="E">
                <img src="./img/letra E.png" alt="Letra E em Libras">
                <span>E</span>
            </div>
            <div class="letra-card" data-letra="F">
                <img src="./img/letra F.png" alt="Letra F em Libras">
                <span>F</span>
            </div>
            <div class="letra-card" data-letra="G">
                <img src="./img/letra G.png" alt="Letra G em Libras">
                <span>G</span>
            </div>
            <div class="letra-card" data-letra="H">
                <img src="./img/letra H.png" alt="Letra H em Libras">
                <span>H</span>
            </div>
            <div class="letra-card" data-letra="I">
                <img src="./img/letra I.png" alt="Letra I em Libras">
                <span>I</span>
            </div>
            <div class="letra-card" data-letra="J">
                <img src="./img/letra J.png" alt="Letra J em Libras">
                <span>J</span>
            </div>
            <div class="letra-card" data-letra="K">
                <img src="./img/letra K.png" alt="Letra K em Libras">
                <span>K</span>
            </div>
            <div class="letra-card" data-letra="L">
                <img src="./img/letra L.png" alt="Letra L em Libras">
                <span>L</span>
            </div>
            <div class="letra-card" data-letra="M">
                <img src="./img/letra M.png" alt="Letra M em Libras">
                <span>M</span>
            </div>
            <div class="letra-card" data-letra="N">
                <img src="./img/letra N.png" alt="Letra N em Libras">
                <span>N</span>
            </div>
            <div class="letra-card" data-letra="O">
                <img src="./img/letra O.png" alt="Letra O em Libras">
                <span>O</span>
            </div>
            <div class="letra-card" data-letra="P">
                <img src="./img/letra P.png" alt="Letra P em Libras">
                <span>P</span>
            </div>
            <div class="letra-card" data-letra="Q">
                <img src="./img/letra Q.png" alt="Letra Q em Libras">
                <span>Q</span>
            </div>
            <div class="letra-card" data-letra="R">
                <img src="./img/letra R.png" alt="Letra R em Libras">
                <span>R</span>
            </div>
            <div class="letra-card" data-letra="S">
                <img src="./img/letra S.png" alt="Letra S em Libras">
                <span>S</span>
            </div>
            <div class="letra-card" data-letra="T">
                <img src="./img/letra T.png" alt="Letra T em Libras">
                <span>T</span>
            </div>
            <div class="letra-card" data-letra="U">
                <img src="./img/letra U.png" alt="Letra U em Libras">
                <span>U</span>
            </div>
            <div class="letra-card" data-letra="V">
                <img src="./img/letra V.png" alt="Letra V em Libras">
                <span>V</span>
            </div>
            <div class="letra-card" data-letra="W">
                <img src="./img/letra W.png" alt="Letra W em Libras">
                <span>W</span>
            </div>
            <div class="letra-card" data-letra="X">
                <img src="./img/letra X.png" alt="Letra X em Libras">
                <span>X</span>
            </div>
            <div class="letra-card" data-letra="Y">
                <img src="./img/letra Y.png" alt="Letra Y em Libras">
                <span>Y</span>
            </div>
            <div class="letra-card" data-letra="Z">
                <img src="./img/letra Z.png" alt="Letra Z em Libras">
                <span>Z</span>
            </div>
        </div>

        <!-- Informações complementares -->
        <div class="separador-secao mt-5">
            <span class="separador-secao-texto"><i class="bi bi-lightbulb-fill"></i> Sobre o Alfabeto Manual</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-info-circle-fill text-info me-2"></i>O que é o Alfabeto Manual?</h5>
                        <p>O alfabeto manual (datilologia) é um conjunto de configurações de mãos que representam as letras do alfabeto. É utilizado principalmente para soletrar nomes próprios e palavras sem sinal específico em Libras.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-hand-index-fill text-info me-2"></i>Quando Usar?</h5>
                        <p>Use o alfabeto manual para: soletrar nomes de pessoas e lugares, palavras técnicas sem sinal estabelecido, quando não souber o sinal de uma palavra específica, ou para ensinar a grafia de palavras.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-stopwatch-fill text-info me-2"></i>Dicas de Prática</h5>
                        <p>Pratique na frente do espelho para verificar a posição das mãos. Comece devagar e vá aumentando a velocidade. Tente soletrar palavras curtas como seu nome e nomes de pessoas próximas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-exclamation-triangle-fill text-info me-2"></i>Ponto de Atenção</h5>
                        <p>O alfabeto manual não substitui a Libras — é apenas uma ferramenta complementar. Procure sempre aprender os sinais próprios de cada palavra, pois a comunicação em Libras fluente vai muito além da datilologia.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Painel ampliado de letra (overlay) -->
    <div class="painel-letra" id="painelLetra">
        <div class="painel-conteudo">
            <button class="btn-fechar-painel" id="btnFechar" title="Fechar">
                <i class="bi bi-x-lg"></i>
            </button>
            <img id="painelImg" src="" alt="">
            <div class="painel-letra-label">Letra</div>
            <div class="painel-letra-nome" id="painelNome">A</div>
            <div class="painel-nav">
                <button class="btn-nav" id="btnAnterior"><i class="bi bi-chevron-left"></i> Anterior</button>
                <button class="btn-nav" id="btnProximo">Próximo <i class="bi bi-chevron-right"></i></button>
            </div>
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
                        <li><a href="./sobre-nos.php">Sobre Nós</a></li>
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
        /* Navbar scroll */
        window.addEventListener('scroll', () => {
            document.querySelector('.custom-navbar').classList.toggle('rolando', window.scrollY > 50);
        });

        /* Painel de letra ampliada */
        const letras = Array.from(document.querySelectorAll('.letra-card'));
        const painel = document.getElementById('painelLetra');
        const painelImg = document.getElementById('painelImg');
        const painelNome = document.getElementById('painelNome');
        const btnFechar = document.getElementById('btnFechar');
        const btnAnterior = document.getElementById('btnAnterior');
        const btnProximo = document.getElementById('btnProximo');

        let indiceAtual = 0;

        /* Abre o painel com a letra no índice dado */
        function abrirLetra(indice) {
            indiceAtual = indice;
            const letra = letras[indice].dataset.letra;

            painelImg.src = `./img/letra ${letra}.png`;
            painelImg.alt = `Letra ${letra} em Libras`;
            painelNome.textContent = letra;

            /* Marca visualmente a carta ativa */
            letras.forEach(c => c.classList.remove('ativa'));
            letras[indice].classList.add('ativa');

            /* Atualiza estado dos botões de navegação */
            btnAnterior.disabled = (indice === 0);
            btnProximo.disabled = (indice === letras.length - 1);

            painel.classList.add('visivel');
            document.body.style.overflow = 'hidden';
        }

        /* Fecha o painel */
        function fecharPainel() {
            painel.classList.remove('visivel');
            document.body.style.overflow = '';
            letras.forEach(c => c.classList.remove('ativa'));
        }

        /* Clique em cada carta */
        letras.forEach((card, idx) => {
            card.addEventListener('click', () => abrirLetra(idx));
        });

        /* Botões de navegação */
        btnAnterior.addEventListener('click', () => {
            if (indiceAtual > 0) abrirLetra(indiceAtual - 1);
        });
        btnProximo.addEventListener('click', () => {
            if (indiceAtual < letras.length - 1) abrirLetra(indiceAtual + 1);
        });

        /* Fecha ao clicar fora do conteúdo ou no X */
        btnFechar.addEventListener('click', fecharPainel);
        painel.addEventListener('click', (e) => {
            if (e.target === painel) fecharPainel();
        });

        /* Navegação pelo teclado */
        document.addEventListener('keydown', (e) => {
            if (!painel.classList.contains('visivel')) return;
            if (e.key === 'Escape') fecharPainel();
            if (e.key === 'ArrowLeft' && indiceAtual > 0) abrirLetra(indiceAtual - 1);
            if (e.key === 'ArrowRight' && indiceAtual < letras.length - 1) abrirLetra(indiceAtual + 1);
        });
    </script>
</body>

</html>