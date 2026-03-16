<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cumprimentos em Libras - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cumprimentos.css">
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
                <div class="hero-icone-circulo"><i class="bi bi-chat-dots-fill"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-emoji-smile"></i> Saudações do dia a dia</div>
                <h1>Cumprimentos em <span class="gradiente">Libras</span></h1>
                <p class="lead mx-auto">Expressões essenciais para iniciar qualquer conversa com confiança</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- Introdução -->
        <div class="bloco-info fade-up-2">
            <h2><i class="bi bi-chat-heart-fill"></i> Comunicação Básica</h2>
            <p>Os cumprimentos são essenciais para iniciar qualquer conversa. Em Libras, além dos sinais das mãos, as expressões faciais são fundamentais para transmitir emoções e dar o tom da comunicação. Aprenda os sinais mais usados no dia a dia e já comece a se comunicar!</p>
        </div>

        <!-- Saudações Básicas -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-sun-fill"></i> Saudações Básicas</span>
            <div class="separador-secao-linha"></div>
        </div>

        <!-- ── SAUDAÇÕES ─────────────────────────────────────────── -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>OLÁ / OI</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/hNwsPmE0bn4" title="OLÁ em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Mão aberta, movimentada para os lados próximo ao rosto. É um dos sinais mais básicos e importantes.</p>
                        <span class="badge-essencial">Essencial</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>BOM DIA</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/CQf7WvVtjEE" title="BOM DIA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Sinal de "bom" (polegar para cima) + sinal de "dia" (braço indicando o sol nascendo).</p>
                        <span class="badge-essencial">Manhã</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>BOA TARDE</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/ixr7JoklwF8" title="BOA TARDE em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Sinal de "bom" + sinal de "tarde" (braço no meio, indicando meio do dia).</p>
                        <span class="badge-geral">Tarde</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>BOA NOITE</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/Gv7-0RFtbpE" title="BOA NOITE em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Sinal de "bom" + sinal de "noite" (braços indicando que o sol se pôs).</p>
                        <span class="badge-neutro">Noite</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>TCHAU</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/R6Z4kec7QSA" title="TCHAU em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Mão aberta, movimento de abrir e fechar próximo ao rosto, com expressão amigável.</p>
                        <span class="badge-neutro">Despedida</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>DORMIR</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/n91motnkjwc" title="DORMIR em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Mãos juntas ao lado do rosto, inclinando a cabeça, indicando "ir dormir".</p>
                        <span class="badge-neutro">Despedida noturna</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── PERGUNTAS COMUNS ───────────────────────────────────── -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-question-circle-fill"></i> Perguntas Comuns</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>TUDO BEM?</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/Urz6FQyQ9f0" title="TUDO BEM em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>QUAL SEU NOME?</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/NqJKXE3suD0" title="QUAL SEU NOME em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>MEU NOME É…</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/ZakGuIWpma4" title="MEU NOME em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── EXPRESSÕES DE CORTESIA ─────────────────────────────── -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-emoji-smile-fill"></i> Expressões de Cortesia</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>POR FAVOR</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/4he8YrLosQ4" title="POR FAVOR em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <span class="badge-positivo">Cortesia</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>OBRIGADO(A)</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/flkPu55D0Oc" title="OBRIGADO em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <span class="badge-positivo">Gratidão</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>DE NADA</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/lJb5HMZdOz8" title="DE NADA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <span class="badge-positivo">Cortesia</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>DESCULPA</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/uANSbkBax_k" title="DESCULPA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Mão em movimento circular sobre o peito, com expressão de arrependimento.</p>
                        <span class="badge-essencial">Desculpas</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>NADA/NENHUM</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 56.25%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/ttjH-Jvme2Q" title="NADA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <span class="badge-geral">Positivo</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5>COM LICENÇA</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/DNtoCfTeLy8" title="COM LICENÇA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <span class="badge-positivo">Cortesia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── EXPRESSÕES DE SENTIMENTO ──────────────────────────── -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-heart-fill"></i> Expressões de Sentimento</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px 14px;">
                        <h5 style="font-size:.9rem;">FELIZ</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/hIHVaY7ZFNM" title="FELIZ em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px 14px;">
                        <h5 style="font-size:.9rem;">TRISTE</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/jccna4qyWZw" title="TRISTE em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px 14px;">
                        <h5 style="font-size:.9rem;">AMOR</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/ZPgaGLuuecY" title="AMOR em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px 14px;">
                        <h5 style="font-size:.9rem;">VIDA</h5>
                        <div class="ratio" style="--bs-aspect-ratio: 177.78%; max-height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                            <iframe src="https://www.youtube.com/embed/PrrIFmOMLXs" title="VIDA em Libras" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dicas -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-lightbulb-fill"></i> Dicas para Cumprimentar em Libras</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-emoji-smile text-info me-2"></i>Expressões Faciais</h5>
                        <p>As expressões faciais são tão importantes quanto os sinais das mãos. Elas transmitem emoção, tom e gramática em Libras. Seja expressivo e mantenha contato visual!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-eye text-info me-2"></i>Contato Visual</h5>
                        <p>Manter contato visual é essencial na comunicação em Libras. É considerado educado e mostra que você está atento à conversa. Evite desviar o olhar constantemente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-hand-thumbs-up text-info me-2"></i>Linguagem Corporal</h5>
                        <p>A postura e os movimentos do corpo complementam os sinais. Mantenha-se em uma posição confortável e visível, evitando gesticular muito rápido inicialmente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5><i class="bi bi-stars text-info me-2"></i>Seja Natural</h5>
                        <p>Não tenha medo de errar! A comunidade surda geralmente é muito receptiva a quem está aprendendo. Pratique com confiança e peça feedback quando necessário.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de frases -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-chat-left-quote-fill"></i> Frases Úteis do Dia a Dia</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="card-escuro">
            <div class="card-body" style="padding:0;">
                <div class="table-responsive">
                    <table class="tabela-escura">
                        <thead>
                            <tr>
                                <th>Português</th>
                                <th>Contexto de Uso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Tudo bem?</strong></td>
                                <td>Pergunta comum após cumprimentar alguém</td>
                            </tr>
                            <tr>
                                <td><strong>Preciso de ajuda</strong></td>
                                <td>Quando precisar de assistência</td>
                            </tr>
                            <tr>
                                <td><strong>Não entendi</strong></td>
                                <td>Quando não compreender algo</td>
                            </tr>
                            <tr>
                                <td><strong>Pode repetir?</strong></td>
                                <td>Pedir para sinalizar novamente</td>
                            </tr>
                            <tr>
                                <td><strong>Estou aprendendo Libras</strong></td>
                                <td>Informar que você está começando</td>
                            </tr>
                            <tr>
                                <td><strong>Até logo</strong></td>
                                <td>Despedida informal</td>
                            </tr>
                            <tr>
                                <td><strong>Tenha um bom dia</strong></td>
                                <td>Desejo de despedida gentil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="alerta-aviso mt-4">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <strong>Lembre-se:</strong> Em Libras, a ordem das palavras pode ser diferente do português. Por exemplo, "Como você está?" pode ser sinalizado como "VOCÊ BEM?". A prática e o contexto ajudarão você a entender essas diferenças.
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