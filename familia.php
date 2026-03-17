<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Família em Libras - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/familia.css">
</head>

<body>

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

    <section class="pagina-hero">
        <div class="container">
            <div class="text-center fade-up">
                <div class="hero-icone-circulo"><i class="bi bi-people-fill"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-house-heart-fill"></i> Sinais do lar</div>
                <h1>Família em <span class="gradiente">Libras</span></h1>
                <p class="lead mx-auto">Aprenda os sinais dos membros da família e como falar sobre seus relacionamentos</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <div class="bloco-info fade-up-2">
            <h2><i class="bi bi-house-heart-fill"></i> A Família em Libras</h2>
            <p>Os sinais relacionados à família são fundamentais na comunicação do dia a dia. Eles permitem falar sobre relacionamentos, apresentar pessoas e compartilhar histórias familiares. Muitos desses sinais têm características visuais que remetem ao papel de cada membro na família.</p>
        </div>

        <!-- Núcleo Familiar -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-diagram-3-fill"></i> Núcleo Familiar</span>
            <div class="separador-secao-linha"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/519RfKp6V7A" title="FAMÍLIA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>FAMÍLIA</h5>
                        <span class="badge-geral">Geral</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/U4nK2YtvLp4" title="PAI em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>PAI</h5>
                        <span class="badge-masculino">Masculino</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/BW81XxYEjyQ" title="MÃE em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>MÃE</h5>
                        <span class="badge-feminino">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/BW81XxYEjyQ" title="FILHO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>FILHO</h5>
                        <span class="badge-masculino">Masculino</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 100%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/OjZBYFl0-CU" title="FILHA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>FILHA</h5>
                        <span class="badge-feminino">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/rOCRob03b74" title="CRIANÇA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>Criança</h5>
                        <span class="badge-neutro">Neutro</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- IRMÃOS E RELACIONAMENTOS -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-people"></i> Irmãos e Relacionamentos</span>
            <div class="separador-secao-linha"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/QpJ2hAeBLGU" title="IRMÃO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>IRMÃO</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 100%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/-IwV8txXwKM" title="IRMÃ em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>IRMÃ</h5>
                        <span class="badge-feminino">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 100%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/G1YGlnQAjJ8" title="ESPOSO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>ESPOSO</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 100%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/aPM8NA4yjGE" title="ESPOSA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>ESPOSA</h5>
                        <span class="badge-feminino">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/v13kTeMPKuc" title="CASADO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>CASADO(A)</h5>
                        <span class="badge-geral">Estado civil</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="conteudo-card">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/TQR5FgawPRQ" title="SOLTEIRO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5>SOLTEIRO(A)</h5>
                        <span class="badge-neutro" style="font-size:.68rem;">Neutro</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── FAMÍLIA ESTENDIDA ───────────────────────────────────── -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-tree-fill"></i> Família Estendida</span>
            <div class="separador-secao-linha"></div>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/LkPgrPQOPtM" title="AVÔ em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">AVÔ</h5>
                        <span class="badge-masculino" style="font-size:.68rem;">Masculino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/a7ctD2sIQ5M" title="AVÓ em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">AVÓ</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Mãe do pai/mãe</p>
                        <span class="badge-feminino" style="font-size:.68rem;">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 56.25%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/InihCfxTmZo" title="TIO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">TIO</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Irmão do pai/mãe</p>
                        <span class="badge-masculino" style="font-size:.68rem;">Masculino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 56.25%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/sAEhJO_r_gs" title="TIA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">TIA</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Irmã do pai/mãe</p>
                        <span class="badge-feminino" style="font-size:.68rem;">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 100%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/MEi8a4b2Soo" title="PRIMO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">PRIMO</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Filho do tio/tia</p>
                        <span class="badge-masculino" style="font-size:.68rem;">Masculino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/QPstS8FVfA4" title="PRIMA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">PRIMA</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Filha do tio/tia</p>
                        <span class="badge-feminino" style="font-size:.68rem;">Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/8WChjExfnOg" title="Sinal de Libras em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">Sinal de Libras</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Libras</p>
                        <span class="badge-masculino" style="font-size:.68rem;">Masculino</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="conteudo-card" style="text-align:center;">
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/5nbOBOtgT18" title="Meu sinal em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <h5 style="font-size:.88rem;margin-bottom:2px;">Meu sinal</h5>
                        <p style="font-size:.77rem;margin-bottom:8px;">Sinal</p>
                        <span class="badge-feminino" style="font-size:.68rem;">Neutro</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Frases úteis -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-chat-square-text-fill"></i> Frases Úteis sobre Família</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="card-escuro">
            <div class="card-body" style="padding:0;">
                <div class="table-responsive">
                    <table class="tabela-escura">
                        <thead>
                            <tr>
                                <th>Português</th>
                                <th>Uso em Contexto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Esta é minha família</strong></td>
                                <td>Apresentando membros da família</td>
                            </tr>
                            <tr>
                                <td><strong>Tenho dois irmãos</strong></td>
                                <td>Falando sobre irmãos</td>
                            </tr>
                            <tr>
                                <td><strong>Minha mãe é surda</strong></td>
                                <td>Informando características familiares</td>
                            </tr>
                            <tr>
                                <td><strong>Meu pai trabalha como…</strong></td>
                                <td>Descrevendo profissão dos pais</td>
                            </tr>
                            <tr>
                                <td><strong>Você tem filhos?</strong></td>
                                <td>Perguntando sobre descendentes</td>
                            </tr>
                            <tr>
                                <td><strong>Sou casado(a)</strong></td>
                                <td>Informando estado civil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Dicas -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-lightbulb-fill"></i> Dicas Importantes</span>
            <div class="separador-secao-linha"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-gender-ambiguous text-info me-2"></i>Gênero nos Sinais</h5>
                        <p>Sinais masculinos geralmente são feitos na parte superior do rosto (testa) e femininos na parte inferior (queixo/boca).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-arrow-left-right text-info me-2"></i>Variações Regionais</h5>
                        <p>Alguns sinais de família podem variar entre regiões do Brasil. Os apresentados aqui são os mais comuns e reconhecidos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-people-fill text-info me-2"></i>Família Moderna</h5>
                        <p>A comunidade surda reconhece diversos modelos familiares. Use os sinais de forma inclusiva para representar todas as configurações.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-heart-fill text-info me-2"></i>Contexto Cultural</h5>
                        <p>Na cultura surda, "família" pode incluir amigos próximos e a comunidade surda, que muitas vezes funciona como uma segunda família.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="alerta-aviso mt-4">
            <i class="bi bi-info-circle-fill me-2"></i>
            <strong>Curiosidade:</strong> Muitas pessoas surdas têm "nomes em sinais" — apelidos visuais dados pela comunidade surda que refletem características físicas ou de personalidade.
        </div>

    </div>

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