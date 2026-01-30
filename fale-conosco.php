<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco - Libras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./css/sectioncategorias.css">
</head>
<body>
    <a href="./index.php" class="btn btn-back" style="background-color: var(--pink); color: white;">
        <i class="bi bi-arrow-left me-2"></i>Voltar
    </a>

    <div class="container py-5">
        <div class="text-center mb-5">
            <div class="icon-wrapper bg-pink mb-3" style="width: 100px; height: 100px; margin: 0 auto;">
                <i class="bi bi-envelope fs-1 text-white"></i>
            </div>
            <h1 class="display-4 fw-bold text-pink">Fale Conosco</h1>
            <p class="lead text-muted">Entre em contato com nossa equipe</p>
        </div>

        <div class="row g-4">
            <!-- Formulário de Contato -->
            <div class="col-lg-8">
                <div class="contact-form">
                    <h3 class="text-pink fw-bold mb-4">
                        <i class="bi bi-chat-left-text-fill me-2"></i>Envie sua Mensagem
                    </h3>
                    
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nome" class="form-label fw-semibold">Nome Completo *</label>
                                <input type="text" class="form-control" id="nome" required 
                                       placeholder="Seu nome completo">
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label fw-semibold">E-mail *</label>
                                <input type="email" class="form-control" id="email" required 
                                       placeholder="seu@email.com">
                            </div>

                            <div class="col-md-6">
                                <label for="telefone" class="form-label fw-semibold">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" 
                                       placeholder="(00) 00000-0000">
                            </div>

                            <div class="col-md-6">
                                <label for="assunto" class="form-label fw-semibold">Assunto *</label>
                                <select class="form-select" id="assunto" required>
                                    <option value="">Selecione um assunto</option>
                                    <option value="duvida">Dúvida sobre Libras</option>
                                    <option value="sugestao">Sugestão</option>
                                    <option value="elogio">Elogio</option>
                                    <option value="reclamacao">Reclamação</option>
                                    <option value="parceria">Proposta de Parceria</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="mensagem" class="form-label fw-semibold">Mensagem *</label>
                                <textarea class="form-control" id="mensagem" rows="6" required
                                          placeholder="Digite sua mensagem aqui..."></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="aceiteTermos" required>
                                    <label class="form-check-label" for="aceiteTermos">
                                        Concordo com a <a href="#" class="text-pink">Política de Privacidade</a> e 
                                        autorizo o uso dos meus dados para resposta. *
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-pink btn-submit w-100">
                                    <i class="bi bi-send-fill me-2"></i>Enviar Mensagem
                                </button>
                            </div>

                            <div class="col-12">
                                <small class="text-muted">* Campos obrigatórios</small>
                            </div>
                        </div>
                    </form>

                    <div id="successMessage" class="alert alert-success mt-4 d-none" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <strong>Mensagem enviada com sucesso!</strong> Entraremos em contato em breve.
                    </div>
                </div>
            </div>

            <!-- Informações de Contato -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-pink fw-bold mb-4">
                            <i class="bi bi-info-circle-fill me-2"></i>Informações de Contato
                        </h5>
                        
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope-fill text-pink fs-5 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">E-mail</h6>
                                <a href="mailto:contato@libras.edu.br" class="text-decoration-none">
                                    contato@libras.edu.br
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-telephone-fill text-pink fs-5 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Telefone</h6>
                                <p class="mb-0">(11) 1234-5678</p>
                                <small class="text-muted">Seg a Sex, 8h às 18h</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-whatsapp text-pink fs-5 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">WhatsApp</h6>
                                <a href="https://wa.me/5511123456789" target="_blank" class="text-decoration-none">
                                    (11) 91234-5678
                                </a>
                                <br>
                                <small class="text-muted">Atendimento com vídeo em Libras</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-pink fs-5 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Endereço</h6>
                                <p class="mb-0">
                                    Rua da Inclusão, 123<br>
                                    Centro - São Paulo/SP<br>
                                    CEP: 01234-567
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-pink fw-bold mb-4">
                            <i class="bi bi-clock-fill me-2"></i>Horário de Atendimento
                        </h5>
                        
                        <div class="mb-2">
                            <strong>Segunda a Sexta:</strong><br>
                            8h às 12h | 13h às 18h
                        </div>
                        
                        <div class="mb-2">
                            <strong>Sábado:</strong><br>
                            9h às 13h
                        </div>
                        
                        <div>
                            <strong>Domingo:</strong><br>
                            Fechado
                        </div>

                        <div class="alert alert-info mt-3 mb-0" role="alert">
                            <small>
                                <i class="bi bi-info-circle me-1"></i>
                                Atendimento em Libras disponível via videochamada
                            </small>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, var(--pink) 0%, #f472b6 100%);">
                    <div class="card-body text-white">
                        <h5 class="card-title fw-bold mb-3">
                            <i class="bi bi-share-fill me-2"></i>Redes Sociais
                        </h5>
                        
                        <div class="d-flex gap-3 mb-3">
                            <a href="#" class="btn btn-light btn-sm" style="width: 40px; height: 40px; border-radius: 50%; padding: 0; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-facebook text-pink fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-sm" style="width: 40px; height: 40px; border-radius: 50%; padding: 0; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-instagram text-pink fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-sm" style="width: 40px; height: 40px; border-radius: 50%; padding: 0; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-youtube text-pink fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-sm" style="width: 40px; height: 40px; border-radius: 50%; padding: 0; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-tiktok text-pink fs-5"></i>
                            </a>
                        </div>
                        
                        <p class="mb-0 small">
                            Siga-nos nas redes sociais para conteúdo diário sobre Libras!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-section mt-5">
            <h2><i class="bi bi-question-circle-fill text-pink me-2"></i>Perguntas Frequentes</h2>
            
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Como posso aprender Libras?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Você pode começar pelos nossos vídeos educativos disponíveis na seção "Vídeos". 
                            Recomendamos também cursos presenciais ou online com professores surdos certificados. 
                            Entre em contato conosco para indicações de cursos na sua região.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Quanto tempo leva para aprender Libras?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            O tempo varia de pessoa para pessoa. Para conversação básica, geralmente 6 meses 
                            de estudo regular são suficientes. Para fluência intermediária, conte com 1 a 2 anos 
                            de prática constante. A imersão com a comunidade surda acelera muito o aprendizado.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Vocês oferecem certificados?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Atualmente, somos uma plataforma educativa. Para certificados oficiais, recomendamos 
                            cursos reconhecidos pelo MEC ou pelo PROLIBRAS (Exame Nacional de Proficiência em Libras). 
                            Entre em contato para informações sobre instituições certificadoras.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Como posso contribuir com o projeto?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Adoraríamos contar com sua contribuição! Você pode: compartilhar nosso conteúdo, 
                            sugerir melhorias, enviar materiais educativos, ou entrar em contato para discutir 
                            parcerias. Toda ajuda é bem-vinda para difundir o conhecimento sobre Libras.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Posso usar o conteúdo do site para fins educacionais?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sim! Todo nosso conteúdo pode ser usado para fins educacionais não comerciais. 
                            Pedimos apenas que cite a fonte. Para uso comercial ou em grande escala, 
                            entre em contato conosco para obter autorização.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card border-0 bg-light text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-lightning-fill text-pink fs-1 mb-3"></i>
                        <h5 class="fw-bold">Resposta Rápida</h5>
                        <p class="text-muted mb-0">
                            Respondemos todas as mensagens em até 24 horas úteis
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 bg-light text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-shield-check text-pink fs-1 mb-3"></i>
                        <h5 class="fw-bold">Privacidade</h5>
                        <p class="text-muted mb-0">
                            Seus dados são protegidos e utilizados apenas para contato
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 bg-light text-center h-100">
                    <div class="card-body">
                        <i class="bi bi-hand-thumbs-up-fill text-pink fs-1 mb-3"></i>
                        <h5 class="fw-bold">Acessibilidade</h5>
                        <p class="text-muted mb-0">
                            Atendimento disponível em Libras via videochamada
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simulação de envio de formulário
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validação básica
            if (this.checkValidity()) {
                // Mostrar mensagem de sucesso
                document.getElementById('successMessage').classList.remove('d-none');
                
                // Limpar formulário
                this.reset();
                
                // Scroll para mensagem de sucesso
                document.getElementById('successMessage').scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Esconder mensagem após 5 segundos
                setTimeout(function() {
                    document.getElementById('successMessage').classList.add('d-none');
                }, 5000);
            }
        });
    </script>
</body>
</html>