<?php
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./page-inicial.css">
    <link rel="stylesheet" href="./teste.js">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <title> Espaço Hair</title>
</head>

<body>
    <header>
        <section>
            <nav class="navbar navbar-expand-sm">
                <img id="logo" src="./img/logo-icon2.png" alt="Logo">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="myNavbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav mb-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link">Agendar Serviço</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="btn btn-primary mx-2" id="botao2" href="adminLogin.php" role="button">Administrador</a>
                </div>
                <div>
                    <a id="botao2" href="./login.php" class="btn btn-lg active" role="button" aria-pressed="true" value="Login">Login</a>
                </div>
            </nav>
    </header>
    <main>
        <div id="apresentacao">
            <h1>Estúdio Hair</h1>
            <h3 class="text-center">Nós vamos criar sua melhor imagem.</h3>
            <p class="text-center">Procura qualidade? Aqui você encontra!</p>
            <p class="text-center">Buscamos sempre a melhor qualidade e estamos prontos para atender às suas mais altas expectativas.</p>
        </div>
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <div>
                        <img id="foto1" src="./img/blogmaquiagem.jpg" alt="">
                        <a id="botao" class="btn" href="./maquiagem.html">MAQUIAGEM</a>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img id="foto1" src="./img/blogpele.jpg" alt="">
                        <a id="botao" class="btn" href="./estetica.html">ESTÉTICA</a>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img id="foto1" src="./img/blogcabelo.jpg" alt="">
                        <a id="botao" class="btn" href="./cabelo.html">CABELO</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="apresentacao1">
            <h1>Sobre o Espaço Hair </h1>
            <div class="row">
                <div class="col-sm-8">
                    <p class="text-center"> Com uma assinatura inconfundível e forte identidade de moda, o Estúdio Hair é hoje um dos salões de beleza mais importantes do país.
                        Há mais de 40 anos no mercado, o estúdio teve seu crescimento e à consolidação do mercado de beleza, assim como o da moda brasileira.
                    </p>
                    <p class="text-center"> O estúdio nasceu da ideia do Senac, para prestar um serviço de apoio e implantação de Esmalterias, Salões de Beleza, Makes e outros negócios inovadores.
                    </p>
                </div>
            </div>
        </div>
        <div class="servico">
            <h1>Serviços</h1>
            <div id="linha-horizontal"></div>
            <div class="row">
                <div class="col">
                    <img src="./img/icone-cabelo-1.png" alt="">
                    <h2>CABELOS</h2>
                    <h5>Serviços para a beleza dos seus Cabelos: corte, coloração, tratamentos, penteados…</h5>
                </div>
                <div class="col">
                    <img src="./img/icone-maquiagem.png" alt="">
                    <h2>MAQUIAGEM</h2>
                    <h5>Para eventos, casamentos ou uma ocasião especial, confira nossos serviços…</h5>
                </div>
                <div class="col">
                    <img src="./img/icone-micropigmentacao.png" alt="">
                    <h2>SOBRANCELHA</h2>
                    <h5>Para dar um up no visual e na autoestima, servicos de micropigmentação…</h5>
                </div>
                <div class="col">
                    <img src="./img/icone-maos-e-pes.png" alt="">
                    <h2>MÃOS E PÉS</h2>
                    <h5>Suas mãos e pé merecem o melhor. Oferecemos serviços de manicure, pedicure…</h5>
                </div>
            </div>
            <div class="row">
                <div class="col mt-5">
                    <img src="./img/icone-estetica.png" alt="">
                    <h2>ESTÉTICA</h2>
                    <h5>Sua pele merece, conheça nossos tratamentos faciais e corporais…</h5>
                </div>
                <div class="col mt-5">
                    <img src="./img/icone-depilacao.png" alt="">
                    <h2>DEPILAÇÃO</h2>
                    <h5>Serviços de depilação com ceras, egípcia (linha), clareamento…</h5>
                </div>
                <div class="col mt-5">
                    <img src="./img/icone-bem-estar.png" alt="">
                    <h2>BEM-ESTAR</h2>
                    <h5>Tudo que você merece para o seu Bem Estar: massagens, banhos terapêuticos…</h5>
                </div>
                <div class="col mt-5">
                    <img src="./img/icone-homem.png" alt="">
                    <h2>BELEZA DO HOMEM</h2>
                    <h5>Serviços para a Beleza do Homem: cabelo, barba, estética, bem estar…</h5>
                </div>
            </div>
            <div>
                <button id="botao1" type="button" data-toggle="modal" data-target="#staticBackdrop">Agende seu
                    Serviço!</button>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div id="popup" class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="staticBackdropLabel">Agende seu Horário</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Para agendar seu horário realize o cadastro ou efetue seu login.</h5>
                            </div>
                            <div class="modal-footer">
                                <button id="botao2" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" id="botao2" href="login.php" role="button">Login</a>
                                <a class="btn btn-primary" id="botao2" href="login.php" role="button">Cadastre-se</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel slide mt-5" data-ride="carousel">
                <div id="carousel" class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/krastase-logo-vector.png" alt="...">
                        <img src="./img/loreoal-paris-vector-logo.png" alt="...">
                        <img src="./img/goldwell-logo-vector.png" alt="...">
                        <img src="./img/wella-logo-vector.png" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/alfa-logo-vector.png" alt="...">
                        <img src="./img/keune-logo-vector.png" alt="...">
                        <img src="./img/redken-logo-vector.png" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>

    </main>
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #E2CFB9;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">NOSSAS REDES SOCIAIS</h6>
                    </div>

                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <a class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>

                </div>

            </div>
        </div>

        <div class="container text-center text-md-left mt-5">

            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">


                    <h4 class="text-uppercase font-weight-bold lblFooter">Estudio HAIR</h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <h6 class="lblFooter">Diariamente: 10am - 10pm</h6>
                    <h6 class="lblFooter">Sabado: 12am - 20pm</h6>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h4 class="text-uppercase font-weight-bold lblFooter">contato</h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <h6 class="lblFooter">
                        <i class="fas fa-home mr-3"></i> São Paulo, SP</h6>
                    <h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-home mr-3"></i> Av. Eng. Eusébio Stevaux, 823</h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-envelope mr-3"></i> estudiohair@senac.com.br</h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-phone mr-3"></i> + 11 123456789</h6>
                        <h6 class="lblFooter">
                            <i class="fas fa-print mr-3"></i> + 11 987654321</h6>
                </div>

            </div>
            <div class="footer-copyright text-center py-3 lblFooter">© 2020 Copyright:
                <a href="https://www.sp.senac.br/" style="text-decoration: none; color: #E2CFB9"> Senac</a>
            </div>
        </div>
    </footer>
</body>

</html>