<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Front-End <?php echo date('Y-m-d');?> </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/22bd473149.js" crossorigin="anonymous"></script>
   <!-- Progress Bar-->
    <script src="js/progressbar.min.js"></script>
    <!--Parallax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>
<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                    <a href="#" class="navbar-brand">
                        <img class="logo" src="img/hdcagency_logo.svg" alt="hDC Agency"> Samuel's Agency
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                        aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu">Home</a>
                        <a class="nav-item nav-link" id="about-menu">A agência</a>
                        <a class="nav-item nav-link" id="services-menu">Serviços</a>
                        <a class="nav-item nav-link" id="team-menu">Time</a>
                        <a class="nav-item nav-link" id="portifolio-menu">Projetos</a>
                        <a class="nav-item nav-link" id="contact-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-md-block">
                            <h2>Vamos desenvolver um e-commerce?</h2>
                            <p>Conte com nossa equipe, atendemos mais de 1000 lojas virtuais!</p>
                            <a href="#" class="main-btn">Ver Portifólio</a>
                        </div>    
                    </div>   
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de Software">
                        <div class="carousel-caption d-md-block">
                            <h2>Que tal tirar o projeto do papel?</h2>
                            <p>Nossa equipe está pronta para atendê-lo!</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>    
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Manutenção em Software">
                        <div class="carousel-caption d-md-block">
                            <h2>Você está buscando manutenção em seu software?</h2>
                            <p>Estamos disponíveis para resolver quaisquer eventualidades!</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>    
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> 
            </div>
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Sobre a Samuel's Agency</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/agencia.jpg" alt="Agencia hDC">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Uma Agência futurista!</h3>
                            <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
                            <p>Alinhamos seus desejos e ideais de forma que seja possível concretizá-los de maneira mais rápida e coerente ao mercado.</p>
                            <p>Buscamos não somente atendê-los com um serviço de exelência, mas também com um valor acessível a qualquer um que deseje entrar no mercado virtual.</p>
                            <p>Veja nossos diferênciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Utilização de Machine Learning</li>
                                <li><i class="fas fa-check"></i>Layout responsivo</li>
                                <li><i class="fas fa-check"></i>Integração com diversos sistemas</li>
                                <li><i class="fas fa-check"></i>Sistema de pagamento próprio</li>
                                <li><i class="fas fa-check"></i>Desenvolvimnto com metodologia ágil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div id ="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nossas Especialidades</h3>
                        </div>
                        <div class="col-md-4 service-box">
                                <i class="fas fa-mobile-alt"></i>
                                <h4>Aplicativos Nativos</h4>
                                <p>Utilizamos o poder dos dispositivos móveis construindo aplicativos nativos.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>E-commerces</h4>
                            <p>Nossa plataforma própia de e-commerce, adaptável à qualquer regra de negócio (B2B & B2C).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-paint-brush"></i>
                            <h4>Design Criativo</h4>
                            <p>Nossos designers são especializados em UI/UX e possuem mais de 5 anos de experiência em mercado.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fab fa-google"></i>
                            <h4>Experts em SEO</h4>
                            <p>Nosso serviço de marketing aprovisionará seu mercado e customizará seus lucros.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                            <h4>Suporte 24/7</h4>
                            <p>Você terá direito a equipe de suporte em diferentes plataformas. (chat, email, skype).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                            <h4>Experiência em servidores</h4>
                            <p>Garantimos rápido tempo de resposta do seu site para seu cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 circle-box">
                            <div id="circleA"></div>
                            <p>Projetos Entregues</p>                                                     
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleB"></div>
                            <p>Clientes Satisfeitos</p>                                                     
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleC"></div>
                            <p>Colaboradores</p>                                                     
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleD"></div>
                            <p>Projetos em Andamento</p>                                                     
                        </div>
                   </div>
                </div>
            </div>
            <div id="team-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso time</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile1.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Fabrício</h5>
                                    <p class="card-text">Software Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile2.jpg" class="card-img-top" alt="Imagem de Perfil 2">
                                <div class="card-body">
                                    <h5 class="card-title">Juliana</h5>
                                    <p class="card-text">SEO Consultant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="img/profile3.jpg" class="card-img-top" alt="Imagem de Perfil 3">
                                <div class="card-body">
                                    <h5 class="card-title">Carlos</h5>
                                    <p class="card-text">Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"> 
                            <div class="card">
                                <img src="img/profile4.jpg" class="card-img-top" alt="Imagem de Perfil 4">
                                <div class="card-body">
                                    <h5 class="card-title">Patrícia</h5>
                                    <p class="card-text">UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 apply-box" id="company-img"></div>
                        <div class="col-md-6 text-center apply box" id="pattern-img">
                        <h4>Gosta de Desafios?</h4>
                        <p>Possuímos várias opções disponíveis, entre elas: Software Engineer, UI/UX Designer, Project Manager, dentre outras.</p>
                        <p>Clique no botão abaixo e confira os benefícios e as posições em aberto.</p>
                        <p>Aqui você terá a chance de trabalhar com as melhores tecnologias e os profissionais mais competentes.</p>
                        <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a>
                        </div>   
                    </div>
                </div>
            </div>    
                <div id="portifolio-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class ="main-title">Conheça nossos projetos</h3>
                            </div>
                            <div class="col-md-12" id="filter-btn-box">
                                <button class="main-btn filter-btn active" id="all-btn">Todos</button>
                                <button class="main-btn filter-btn" id="dev-btn">Desenvolvimento</button>
                                <button class="main-btn filter-btn" id="dsg-btn">Design</button>
                                <button class="main-btn filter-btn" id="seo-btn">SEO</button>
                            </div>
                            <div class="col-md-4 project-box dev">
                                <img src="img/proj1.jpg" class="img-fluid" alt="Projeto 1">
                            </div>
                            <div class="col-md-4 project-box dsg">
                                <img src="img/proj2.jpg" class="img-fluid" alt="Projeto 2">
                            </div>
                            <div class="col-md-4 project-box seo">
                                <img src="img/proj3.jpg" class="img-fluid" alt="Projeto 3">
                            </div>
                            <div class="col-md-4 project-box dev">
                                <img src="img/proj4.jpg" class="img-fluid" alt="Projeto 4">
                            </div>
                            <div class="col-md-4 project-box dsg">
                                <img src="img/proj5.jpg" class="img-fluid" alt="Projeto 5">
                            </div>
                            <div class="col-md-4 project-box dev">
                                <img src="img/proj6.jpg" class="img-fluid" alt="Projeto 6">
                            </div>
                        </div>
                    </div>
                </div> 
                <div id="news-area">
                    <div class="container">
                        <div class="col-md-12">
                            <h3 class="main-title">Conheça nossas novidades</h3>
                        </div>
                        <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre desenvolvimento de software</p>
                        <form action="">
                            <input type="email" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
                            <input type="submit" id="news-btn" value="Inscrever">
                        </form>
                    </div>
                </div> 
                <div id="call-area">
                    <div class="container">
                        <div class="row">
                            <p>Deseja realizar um orçamento, sem compromisso?</p>
                            <button class="main-btn" id="call-btn">Orçar</button>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer>
    <div id="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main-title">Entre em contato conosco</h3>
                </div>
                <div class="col-md-4 contact-box">
                    <i class="fas fa-phone"></i>
                    <p><span class="contact-title"> Ligue para:</span> (31) 98258-1305</p>
                    <p><span class="contact-title"> Horários:</span> 8:00 - 19:00</p>
                </div>
                <div class="col-md-4 contact-box">
                    <i class="fas fa-envelope"></i>
                    <p><span class="contact-title"> Envie um e-mail:</span> samuel.alan.58@gmail.com</p>
                </div>
                <div class="col-md-4 contact-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><span class="contact-title"> Venha nos conhecer:</span> Rua dos Tubinambas - N°996</p>
                </div>
                <div class="col-md-6" id="msg-box">
                    <p>Deixe-nos uma mensagem:</p>
                </div>
                <div class="col-md-6" id="contact-form">
                    <form action="">
                        <input type="email" class="form-control" placeholder="E-mail" name="email"> </input>
                        <input type="text" class="form-control" placeholder="Assunto" name="subject"></input>
                        <textarea class="form-control" rows="3" placeholder="Sua mensagem ..." name="message"></textarea>
                        <input type="submit" class="main-btn" value="Enviar"></input>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <div id="copy-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Desenvolvidor por <a href="hhtp:www.horadecodar.com.br" target="_blank"> Samuel's Agency</a> &copy; 2022</p>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <script src="js/script.js"></script>
</body>