<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legislação - LIBRAS.info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/legislacao.css">
</head>

<body>

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

    <section class="pagina-hero">
        <div class="container">
            <div class="text-center fade-up">
                <div class="hero-icone-circulo"><i class="bi bi-file-earmark-text"></i></div>
                <div class="hero-eyebrow"><i class="bi bi-shield-check"></i> Direitos garantidos</div>
                <h1>Legislação <span class="gradiente">Libras</span></h1>
                <p class="lead mx-auto">Conheça as leis e decretos que garantem os direitos da comunidade surda no Brasil</p>
            </div>
        </div>
    </section>

    <div class="container pb-5">

        <div class="bloco-info fade-up-2">
            <h2><i class="bi bi-shield-check"></i> Marco Legal da Libras no Brasil</h2>
            <p>A legislação brasileira sobre Libras representa uma conquista histórica da comunidade surda. Através de leis e decretos, o Brasil reconhece a Libras como língua oficial e garante direitos fundamentais às pessoas surdas.</p>
        </div>

        <!-- Principais Leis -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-bookmarks-fill"></i> Principais Leis e Decretos</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <!-- Lei 10.436 -->
            <div class="col-12">
                <div class="card-escuro">
                    <div class="card-body" style="padding:28px 32px;">
                        <div class="d-flex align-items-start gap-4 flex-wrap">
                            <div style="width:56px;height:56px;border-radius:14px;background:linear-gradient(135deg,rgba(0,200,255,.2),rgba(14,165,233,.1));border:1px solid rgba(0,200,255,.25);display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:var(--destaque);flex-shrink:0;">1</div>
                            <div class="flex-grow-1">
                                <h5 style="font-size:1rem;margin-bottom:4px;">Lei nº 10.436, de 24 de abril de 2002</h5>
                                <p style="color:var(--destaque);font-size:.82rem;font-weight:600;margin-bottom:12px;">Lei de Reconhecimento da Libras</p>
                                <p>Esta é a lei mais importante para a comunidade surda brasileira. Ela reconhece oficialmente a Língua Brasileira de Sinais como meio legal de comunicação e expressão.</p>
                                <div style="background:rgba(255,255,255,.04);border:1px solid var(--borda);border-radius:10px;padding:16px 20px;margin-top:14px;">
                                    <p style="color:#fff;font-size:.83rem;font-weight:700;margin-bottom:8px;">Principais Pontos:</p>
                                    <ul style="color:var(--texto-sec);font-size:.83rem;padding-left:18px;margin:0;">
                                        <li style="margin-bottom:4px;">Reconhece Libras como língua das comunidades surdas</li>
                                        <li style="margin-bottom:4px;">Determina apoio governamental ao uso e difusão da Libras</li>
                                        <li style="margin-bottom:4px;">Garante atendimento adequado aos surdos nos serviços públicos</li>
                                    </ul>
                                </div>
                                <a href="http://www.planalto.gov.br/ccivil_03/leis/2002/l10436.htm" target="_blank" class="btn-accent mt-3 d-inline-flex align-items-center gap-2" style="font-size:.82rem;padding:7px 16px;">
                                    <i class="bi bi-link-45deg"></i> Ler Lei Completa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decreto 5.626 -->
            <div class="col-12">
                <div class="card-escuro">
                    <div class="card-body" style="padding:28px 32px;">
                        <div class="d-flex align-items-start gap-4 flex-wrap">
                            <div style="width:56px;height:56px;border-radius:14px;background:linear-gradient(135deg,rgba(167,139,250,.2),rgba(139,92,246,.1));border:1px solid rgba(167,139,250,.25);display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:#a78bfa;flex-shrink:0;">2</div>
                            <div class="flex-grow-1">
                                <h5 style="font-size:1rem;margin-bottom:4px;">Decreto nº 5.626, de 22 de dezembro de 2005</h5>
                                <p style="color:#a78bfa;font-size:.82rem;font-weight:600;margin-bottom:12px;">Regulamentação da Lei de Libras</p>
                                <p>Regulamenta a Lei 10.436/2002 e estabelece diretrizes práticas para sua implementação em diversas áreas da sociedade.</p>
                                <div style="background:rgba(255,255,255,.04);border:1px solid var(--borda);border-radius:10px;padding:16px 20px;margin-top:14px;">
                                    <p style="color:#fff;font-size:.83rem;font-weight:700;margin-bottom:8px;">Principais Determinações:</p>
                                    <ul style="color:var(--texto-sec);font-size:.83rem;padding-left:18px;margin:0;">
                                        <li style="margin-bottom:4px;"><strong style="color:#fff">Educação:</strong> Inclusão de Libras como disciplina obrigatória nos cursos de formação de professores</li>
                                        <li style="margin-bottom:4px;"><strong style="color:#fff">Saúde:</strong> Garantia de atendimento em Libras nos serviços de saúde</li>
                                        <li style="margin-bottom:4px;"><strong style="color:#fff">Trabalho:</strong> Direito a intérprete em processos seletivos</li>
                                    </ul>
                                </div>
                                <a href="http://www.planalto.gov.br/ccivil_03/_ato2004-2006/2005/decreto/d5626.htm" target="_blank" class="btn-accent mt-3 d-inline-flex align-items-center gap-2" style="font-size:.82rem;padding:7px 16px;">
                                    <i class="bi bi-link-45deg"></i> Ler Decreto Completo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lei 13.146 -->
            <div class="col-12">
                <div class="card-escuro">
                    <div class="card-body" style="padding:28px 32px;">
                        <div class="d-flex align-items-start gap-4 flex-wrap">
                            <div style="width:56px;height:56px;border-radius:14px;background:linear-gradient(135deg,rgba(74,222,128,.15),rgba(34,197,94,.08));border:1px solid rgba(74,222,128,.25);display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:#4ade80;flex-shrink:0;">3</div>
                            <div class="flex-grow-1">
                                <h5 style="font-size:1rem;margin-bottom:4px;">Lei nº 13.146, de 6 de julho de 2015</h5>
                                <p style="color:#4ade80;font-size:.82rem;font-weight:600;margin-bottom:12px;">Lei Brasileira de Inclusão (LBI)</p>
                                <p>Conhecida como LBI, estabelece direitos fundamentais para pessoas com deficiência, incluindo as pessoas surdas, garantindo inclusão social e cidadania.</p>
                                <div style="background:rgba(255,255,255,.04);border:1px solid var(--borda);border-radius:10px;padding:16px 20px;margin-top:14px;">
                                    <p style="color:#fff;font-size:.83rem;font-weight:700;margin-bottom:8px;">Destaques para Pessoas Surdas:</p>
                                    <ul style="color:var(--texto-sec);font-size:.83rem;padding-left:18px;margin:0;">
                                        <li style="margin-bottom:4px;">Direito à comunicação em Libras em todos os serviços públicos e privados</li>
                                        <li style="margin-bottom:4px;">Garantia de intérprete em hospitais, tribunais e repartições públicas</li>
                                        <li style="margin-bottom:4px;">Direito à educação bilíngue (Libras e português escrito)</li>
                                    </ul>
                                </div>
                                <a href="http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2015/lei/l13146.htm" target="_blank" class="btn-accent mt-3 d-inline-flex align-items-center gap-2" style="font-size:.82rem;padding:7px 16px;">
                                    <i class="bi bi-link-45deg"></i> Ler Lei Completa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Direitos garantidos -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-list-check"></i> Direitos Garantidos por Lei</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-cabecalho card-cab-destaque">
                        <i class="bi bi-mortarboard-fill"></i> Educação
                    </div>
                    <div class="card-body">
                        <ul style="padding-left:18px;margin:0;">
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Educação bilíngue: Libras + português escrito</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Intérprete de Libras em sala de aula</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Material didático acessível</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Escolas bilíngues para surdos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-cabecalho card-cab-destaque">
                        <i class="bi bi-hospital-fill"></i> Saúde
                    </div>
                    <div class="card-body">
                        <ul style="padding-left:18px;margin:0;">
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Atendimento com intérprete em hospitais</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Informações sobre tratamentos em Libras</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Profissionais capacitados para surdos</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Acompanhante intérprete em consultas</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-cabecalho card-cab-destaque">
                        <i class="bi bi-briefcase-fill"></i> Trabalho
                    </div>
                    <div class="card-body">
                        <ul style="padding-left:18px;margin:0;">
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Intérprete em entrevistas de emprego</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Proibição de discriminação</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Adaptações no ambiente de trabalho</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Comunicação acessível com colegas</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-cabecalho card-cab-destaque">
                        <i class="bi bi-tv-fill"></i> Comunicação e Mídia
                    </div>
                    <div class="card-body">
                        <ul style="padding-left:18px;margin:0;">
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Janela de Libras em programas de TV</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Legendas em conteúdos audiovisuais</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Sites governamentais em Libras</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Acessibilidade em propagandas eleitorais</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-cabecalho card-cab-destaque">
                        <i class="bi bi-bank2"></i> Serviços Públicos
                    </div>
                    <div class="card-body">
                        <ul style="padding-left:18px;margin:0;">
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Intérprete em repartições públicas</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Atendimento acessível em bancos</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Informações em Libras sobre serviços</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Acessibilidade em processos judiciais</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-escuro">
                    <div class="card-cabecalho card-cab-destaque">
                        <i class="bi bi-shield-check"></i> Justiça
                    </div>
                    <div class="card-body">
                        <ul style="padding-left:18px;margin:0;">
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Intérprete em audiências</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Direito a depoimento em Libras</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Documentos judiciais acessíveis</li>
                            <li style="color:var(--texto-sec);font-size:.84rem;margin-bottom:5px;">Igualdade de tratamento perante a lei</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Violação de direitos -->
        <!-- O que fazer em caso de violação -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-exclamation-triangle-fill"></i> O que fazer em caso de violação?</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="accordion accordion-escuro" id="violationAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#step1" aria-expanded="true">
                        <i class="bi bi-1-circle-fill me-2" style="color:var(--destaque)"></i> Documente a Situação
                    </button>
                </h2>
                <div id="step1" class="accordion-collapse collapse show" data-bs-parent="#violationAccordion">
                    <div class="accordion-body">Registre detalhes: data, local, pessoas envolvidas e o que aconteceu. Se possível, tire fotos ou vídeos e consiga testemunhas.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step2">
                        <i class="bi bi-2-circle-fill me-2" style="color:var(--destaque)"></i> Tente Resolver Diretamente
                    </button>
                </h2>
                <div id="step2" class="accordion-collapse collapse" data-bs-parent="#violationAccordion">
                    <div class="accordion-body">Converse com o responsável pelo estabelecimento. Muitas vezes a situação pode ser resolvida pelo diálogo e conscientização.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step3">
                        <i class="bi bi-3-circle-fill me-2" style="color:var(--destaque)"></i> Registre uma Reclamação Formal
                    </button>
                </h2>
                <div id="step3" class="accordion-collapse collapse" data-bs-parent="#violationAccordion">
                    <div class="accordion-body">
                        <strong style="color:#fff">Ouvidoria:</strong> do órgão ou empresa. &nbsp;
                        <strong style="color:#fff">Procon:</strong> para estabelecimentos comerciais. &nbsp;
                        <strong style="color:#fff">Ministério Público:</strong> para casos graves.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step4">
                        <i class="bi bi-4-circle-fill me-2" style="color:var(--destaque)"></i> Busque Apoio de Organizações
                    </button>
                </h2>
                <div id="step4" class="accordion-collapse collapse" data-bs-parent="#violationAccordion">
                    <div class="accordion-body">FENEIS (Federação Nacional de Educação e Integração dos Surdos), associações locais de surdos, conselhos de direitos da pessoa com deficiência.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step5">
                        <i class="bi bi-5-circle-fill me-2" style="color:var(--destaque)"></i> Acione a Justiça
                    </button>
                </h2>
                <div id="step5" class="accordion-collapse collapse" data-bs-parent="#violationAccordion">
                    <div class="accordion-body">Se as medidas anteriores não resolverem, procure um advogado ou a Defensoria Pública para entrar com ação judicial.</div>
                </div>
            </div>
        </div>

        <!-- Canais de denúncia -->
        <div class="separador-secao">
            <span class="separador-secao-texto"><i class="bi bi-telephone-fill"></i> Canais de Denúncia e Apoio</span>
            <div class="separador-secao-linha"></div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5 style="color:var(--destaque);font-size:.9rem;">Disque 100</h5>
                        <p style="font-size:.82rem;margin-bottom:6px;">Disque Direitos Humanos — denúncias de violações</p>
                        <p style="font-size:.82rem;color:#fff;margin-bottom:2px;"><strong>Telefone: 100</strong></p>
                        <small style="color:#576677;">Ligação gratuita</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5 style="color:var(--destaque);font-size:.9rem;">Ministério Público Federal</h5>
                        <p style="font-size:.82rem;margin-bottom:6px;">Para violações de direitos constitucionais</p>
                        <p style="font-size:.82rem;color:#fff;margin-bottom:2px;"><strong>mpf.mp.br</strong></p>
                        <small style="color:#576677;">Sistema de atendimento online</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5 style="color:var(--destaque);font-size:.9rem;">Defensoria Pública</h5>
                        <p style="font-size:.82rem;margin-bottom:6px;">Assistência jurídica gratuita</p>
                        <p style="font-size:.82rem;color:#fff;margin-bottom:2px;"><strong>Defensoria do seu estado</strong></p>
                        <small style="color:#576677;">Atendimento presencial e online</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5 style="color:var(--destaque);font-size:.9rem;">FENEIS</h5>
                        <p style="font-size:.82rem;margin-bottom:6px;">Federação Nacional de Educação e Integração dos Surdos</p>
                        <p style="font-size:.82rem;color:#fff;margin-bottom:2px;"><strong>feneis.org.br</strong></p>
                        <small style="color:#576677;">Orientação e apoio à comunidade surda</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5 style="color:var(--destaque);font-size:.9rem;">Procon</h5>
                        <p style="font-size:.82rem;margin-bottom:6px;">Para problemas com estabelecimentos comerciais</p>
                        <p style="font-size:.82rem;color:#fff;margin-bottom:2px;"><strong>Procon da sua cidade</strong></p>
                        <small style="color:#576677;">Atendimento presencial e online</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-escuro">
                    <div class="card-body">
                        <h5 style="color:var(--destaque);font-size:.9rem;">Conselho de Defesa</h5>
                        <p style="font-size:.82rem;margin-bottom:6px;">Conselho dos Direitos da Pessoa com Deficiência</p>
                        <p style="font-size:.82rem;color:#fff;margin-bottom:2px;"><strong>Conselho municipal/estadual</strong></p>
                        <small style="color:#576677;">Orientação e encaminhamento</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="alerta-info mt-4">
            <i class="bi bi-info-circle-fill me-2"></i>
            <strong>Seus direitos são garantidos por lei!</strong> Conhecer seus direitos é o primeiro passo para exigi-los. Se você sofreu discriminação ou teve seus direitos negados, não hesite em buscar os canais apropriados.
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