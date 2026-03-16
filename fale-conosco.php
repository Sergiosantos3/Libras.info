<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/fale_conosco.css">
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
                <div class="hero-icone-circulo"><i class="bi bi-envelope-fill"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-send-fill"></i> Fale com a equipe</div>
                <h1>Fale <span class="gradiente">Conosco</span></h1>
                <p class="lead mx-auto">Entre em contato com nossa equipe — respondemos em até 24 horas úteis</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <!-- Diferenciais rápidos -->
        <div class="row g-3 mb-5 fade-up-2">
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px;">
                        <i class="bi bi-lightning-fill d-block mb-2" style="font-size:1.8rem;color:var(--destaque);"></i>
                        <h5>Resposta Rápida</h5>
                        <p>Respondemos todas as mensagens em até 24 horas úteis</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px;">
                        <i class="bi bi-shield-check d-block mb-2" style="font-size:1.8rem;color:var(--destaque);"></i>
                        <h5>Privacidade</h5>
                        <p>Seus dados são protegidos e utilizados apenas para contato</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-escuro text-center">
                    <div class="card-body" style="padding:24px;">
                        <i class="bi bi-camera-video-fill d-block mb-2" style="font-size:1.8rem;color:var(--destaque);"></i>
                        <h5>Acessibilidade</h5>
                        <p>Atendimento disponível em Libras via videochamada</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário + Info -->
        <div class="row g-4">

            <!-- ── FORMULÁRIO ── -->
            <div class="col-lg-8">
                <div class="bloco-info" style="padding:36px;">
                    <h2 style="margin-bottom:28px;"><i class="bi bi-chat-left-text-fill"></i> Envie sua Mensagem</h2>

                    <form id="contactForm">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label-dark">Nome Completo *</label>
                                <input type="text" class="form-control form-control-dark" placeholder="Seu nome completo" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-dark">E-mail *</label>
                                <input type="email" class="form-control form-control-dark" placeholder="seu@email.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-dark">Telefone</label>
                                <input type="tel" class="form-control form-control-dark" placeholder="(00) 00000-0000">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label-dark">Assunto *</label>
                                <select class="form-select form-select-dark" required>
                                    <option value="">Selecione um assunto</option>
                                    <option>Dúvida sobre Libras</option>
                                    <option>Sugestão</option>
                                    <option>Elogio</option>
                                    <option>Reclamação</option>
                                    <option>Proposta de Parceria</option>
                                    <option>Outro</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label-dark">Mensagem *</label>
                                <textarea class="form-control form-control-dark" rows="6"
                                    placeholder="Digite sua mensagem aqui..." required></textarea>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-start gap-2">
                                    <input class="form-check-input form-check-input-dark mt-1" type="checkbox" required id="aceite">
                                    <label class="form-label-dark mb-0" for="aceite" style="font-weight:400;font-size:.85rem;">
                                        Concordo com a <a href="#" style="color:var(--destaque);">Política de Privacidade</a> e autorizo o uso dos meus dados para resposta. *
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn-enviar">
                                    <i class="bi bi-send-fill"></i> Enviar Mensagem
                                </button>
                            </div>

                            <div class="col-12">
                                <small style="color:#576677;">* Campos obrigatórios</small>
                            </div>
                        </div>
                    </form>

                    <!-- Mensagem de sucesso (oculta por padrão) -->
                    <div id="successMessage" class="alerta-sucesso mt-4" style="display:none;">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <strong>Mensagem enviada com sucesso!</strong> Entraremos em contato em breve.
                    </div>
                </div>
            </div>

            <!-- ── INFORMAÇÕES DE CONTATO ── -->
            <div class="col-lg-4">

                <!-- Dados de contato -->
                <div class="info-contato-card mb-4">
                    <h5><i class="bi bi-info-circle-fill"></i> Informações de Contato</h5>

                    <div class="info-item">
                        <div class="info-item-icone"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <h6>E-mail</h6>
                            <a href="/cdn-cgi/l/email-protection#43202c2d3722372c032f2a213122306d2a2d252c"><span class="__cf_email__" data-cfemail="9efdf1f0eaffeaf1def2f7fcecffedb0f7f0f8f1">[email&#160;protected]</span></a>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-item-icone"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <h6>Telefone</h6>
                            <p>(11) 1234-5678</p>
                            <small>Seg a Sex, 8h às 18h</small>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-item-icone"><i class="bi bi-whatsapp"></i></div>
                        <div>
                            <h6>WhatsApp</h6>
                            <a href="https://wa.me/5511912345678" target="_blank">(11) 91234-5678</a>
                            <br><small>Atendimento com vídeo em Libras</small>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-item-icone"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <h6>Endereço</h6>
                            <p>Rua da Inclusão, 123<br>Centro — São Paulo/SP<br>CEP: 01234-567</p>
                        </div>
                    </div>
                </div>

                <!-- Horário -->
                <!-- <div class="info-contato-card mb-4">
                    <h5><i class="bi bi-clock-fill"></i> Horário de Atendimento</h5>
                    <div class="info-item" style="flex-direction:column;gap:10px;">
                        <div>
                            <h6 style="margin-bottom:2px;">Segunda a Sexta</h6>
                            <p>8h às 12h | 13h às 18h</p>
                        </div>
                        <div>
                            <h6 style="margin-bottom:2px;">Sábado</h6>
                            <p>9h às 13h</p>
                        </div>
                        <div>
                            <h6 style="margin-bottom:2px;">Domingo</h6>
                            <p>Fechado</p>
                        </div>
                    </div>
                    <div class="alerta-info mt-3" style="padding:12px 16px;font-size:.82rem;">
                        <i class="bi bi-camera-video-fill me-2"></i>
                        Atendimento em Libras disponível via videochamada
                    </div>
                </div> -->

                <!-- Redes sociais -->
                <!-- <div class="banner-social">
                    <h5><i class="bi bi-share-fill me-2"></i>Redes Sociais</h5>
                    <div class="d-flex gap-2 mb-3">
                        <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="social-btn"><i class="bi bi-tiktok"></i></a>
                    </div>
                    <p style="font-size:.82rem;color:var(--texto-sec);margin:0;">Siga-nos para conteúdo diário sobre Libras!</p>
                </div> -->

            </div>
        </div><!-- /row formulário + info -->

        <!-- FAQ -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-question-circle-fill"></i> Perguntas Frequentes</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="accordion accordion-escuro" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button " type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq0">
                        Como posso aprender Libras? </button>
                </h2>
                <div id="faq0" class="accordion-collapse collapse show"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Comece pelos nossos vídeos educativos na seção "Vídeos". Recomendamos também cursos presenciais ou online com professores surdos certificados. Entre em contato para indicações de cursos na sua região.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq1">
                        Quanto tempo leva para aprender Libras? </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse "
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">O tempo varia de pessoa para pessoa. Para conversação básica, geralmente 6 meses de estudo regular são suficientes. Para fluência intermediária, conte com 1 a 2 anos de prática constante. A imersão com a comunidade surda acelera muito o aprendizado.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq2">
                        Vocês oferecem certificados? </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse "
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Atualmente somos uma plataforma educativa. Para certificados oficiais, recomendamos cursos reconhecidos pelo MEC ou pelo PROLIBRAS (Exame Nacional de Proficiência em Libras). Entre em contato para informações sobre instituições certificadoras.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq3">
                        Como posso contribuir com o projeto? </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse "
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Adoraríamos contar com sua contribuição! Você pode: compartilhar nosso conteúdo, sugerir melhorias, enviar materiais educativos ou entrar em contato para discutir parcerias. Toda ajuda é bem-vinda para difundir o conhecimento sobre Libras.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faq4">
                        Posso usar o conteúdo para fins educacionais? </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse "
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">Sim! Todo nosso conteúdo pode ser usado para fins educacionais não comerciais. Pedimos apenas que cite a fonte. Para uso comercial ou em grande escala, entre em contato conosco para obter autorização.</div>
                </div>
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
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            document.querySelector('.custom-navbar').classList.toggle('rolando', window.scrollY > 50);
        });