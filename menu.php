<?php

    session_start();

    if(!isset($_SESSION['cpf'])){
        header('Location: index.php');
    }

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">

        <title>Layout do Mercado</title>
        <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
        <link rel="stylesheet" href="recursos/css/Matheus.css">
        <link rel="stylesheet" href="recursos/css/menu.css">
        <link rel="stylesheet" href="recursos/libs/MaterialDesign/css/materialdesignicons.css">

    </head>

    <body class="bg-index">

        <nav class="navbar navbar-expand-lg navbar-dark bg-menu-index">
            <a href="menu.html" class="navbar-brand text-primary img">
                <img src="recursos/img/Big.png" width="80px" height="80px" class="img-fluid">
            </a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a id="orange" class="nav-link text-center ml-5" href="TLprod.html"><i class="mdi mdi-shopping mdi-36px"></i><p>Produtos</p></a>
                    </li>
                    <li class="nav-item">
                        <a id="orange" class="nav-link text-center ml-5" href="#"><i class="mdi mdi-account-group mdi-36px"></i><p>Fornecedores</p></a>
                    </li>
                    <li class="nav-item">
                        <a id="orange" class="nav-link text-center ml-5 atendimento-index" href="#"><i class="mdi mdi-face-agent mdi-36px"></i><p>Atendimento</p></a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button id="my-dropdown" class="btn btn-light dropdown-toggle orange " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mais</button>
                    <div class="dropdown-menu" aria-labelledby="my-dropdown">
                        <a id="orange" class="dropdown-item active bg-light text-center Horarios" href="#"><i class="mdi mdi-timetable mdi-24px orange"></i><p class="text-center orange ">Horários</p></a>
                        <a id="orange" class="dropdown-item active bg-light text-center" href="promocoes.html"><i class="mdi mdi-square-inc-cash mdi-24px text-center orange"></i><p class="text-center orange ">Promoções</p></a>
                        <a id="orange" class="dropdown-item active bg-light text-center btn-cart" href="#"><i class="mdi mdi-cart-outline mdi-24px text-center orange"></i><p class="text-center orange ">Carrinho</p></a>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-light dropdown-toggle orange" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a id="orange" class="dropdown-item active bg-light text-center btn-sair"><i class="mdi mdi-exit-to-app mdi-24px"></i><p>Sair</p></a>
                            <a id="orange" class="dropdown-item active bg-light text-center" href="#"><i class="mdi mdi-account-check-outline mdi-24px"></i><p>Ver perfil</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid bg-pw text-center">
            <h1 class="display-4 text-dark text-center black">
                <strong>
                Bem vindo ao mercado Mapé
            </strong>
            </h1>
            <br>
            <form>
                <div class="form-group row">
                    <div class="offset-md-4 col-12 col-md-4">
                        <label for=""></label>
                       <form id="pesquisa"><input id="pesquisa" type="text" name="pesquisa" placeholder="Digite o produto que deseja..." class="form-control input-login text-dark"></form>
                    </div>
                    <button id="btn-pesquisa" class="mt-3 btn orange btn-pesquisar text-center btn-dark efeito-search"><i class="mdi mdi-search-web mdi-24px"></i></button>
                </div>
            </form>
        </div>
        <div id="img" class="row">
            <div class="col-md-12 col-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade mx-auto" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="recursos/img/img Mercado1.jpg" height="650px" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="recursos/img/jumbotron.jpg" height="650px" width="100%">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="recursos/img/frios.jpg" height="650px" width="100%">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
        <footer>
            <div style="background-color: #6451ce;">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center ">
                        <div class="text-white col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h5 class="mb-0">Redes sociais</h5>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                            <a href="https://www.facebook.com/Homarket-113042787137424" class="text-white">
                                <i class="mdi mdi-facebook-box mdi-24px ml-2"></i>
                            </a>
                            <a href="https://twitter.com/Homarket2" class="text-white">
                                <i class="mdi mdi-twitter-circle mdi-24px ml-2"></i>
                            </a>
                            <a href="https://mail.google.com/mail/u/3/#inbox" class="text-white">
                                <i class="mdi mdi-gmail mdi-24px ml-2"></i>
                            </a>
                            <a href="#" class="text-white">
                                <i class="mdi mdi-linkedin-box mdi-24px ml-2"></i>
                            </a>
                            <a href="#" class="text-white">
                                <i class="mdi mdi-instagram mdi-24px ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-cinza">
                <br>
                <br>
            </div>
            <div class="container text-center text-md-left  bg-cinza col-md-12 col-12">
                <div class="row ">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-light">Desenvolvedores</h6>
                        <button type="button" class="efeito efeito-btn mb-4  mx-auto" style="width: 60px; height: 3px;"></button>
                        <p>
                            <a href="https://www.facebook.com/profile.php?id=100028307790482" class="text-white">Matheus Pereira</a><br>
                            <a href="https://www.facebook.com/marioguilherme.rodrigues" class="text-white">Mário Guilherme</a><br>
                        </p>
                    </div>
                    <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">Sobre nós</h6>
                        <button type="button" class="efeito efeito-btn mb-4  mx-auto" style="width: 60px; height: 3px;"></button>
                        <p class="text-white text-justify">O Homarket é um grupo que desenvolve sites para estabelecimentos de vendas com um método inovador de vendas de produtos online (drive thru de produtos)</p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">Contato</h6>
                        <button type="button" class="efeito efeito-btn mb-4  mx-auto" style="width: 60px; height: 3px;"></button>
                        <p class="text-white">
                            <i class="mdi mdi-email mdi-16px"></i>homarket.pmgda@gmail.com
                        </p>
                        <p class="text-white ">
                            <i class="mdi mdi-facebook-box mdi-16px"></i>Homarket
                        </p>
                        <p class="text-white ">
                            <i class="mdi mdi-phone mdi-16px"></i>+55 (14) 99847-6034
                        </p>
                        <p class="text-white ">
                            <i class="mdi mdi-phone mdi-16px"></i>+55 (14) 99725-8378
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 bg-black">© 2020 Copyright:
                <a href="https://www.facebook.com/Homarket-113042787137424" class="text-white"> @Homarket</a>
            </div>
        </footer>

        <!-- Janela Modal -->
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="modalBunitinhu">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title aviso-prod"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer text-center">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="recursos/js/jquery-3.5.1.min.js"></script>
        <script src="recursos/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="recursos/js/mercado.js"></script>
        <script src="src/usuario/controller/menu.js"></script>

    </body>

    </html>