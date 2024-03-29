<?php

    session_start();

    if(isset($_SESSION['cpf'])){
        header('Location: menu.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tela de cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/util.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/main.css">
    <link rel="stylesheet" href="recursos/css/login.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" id="form-cadastro">
                    <span class="login100-form-title p-b-49">
						Cadastro
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">
                        <span class="label-input100">Nome de usuário</span>
                        <input class="input100" type="text" name="nome" placeholder="Digite seu nome de usuário">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Idade necessária">
                        <span class="label-input100">Data de nascimento </span>
                        <input class="input100" type="date" name="nascimento" placeholder="Digite sua idade ">
                        <span class="focus-input100" data-symbol="&#xf32e;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Endereço necessário">
                        <span class="label-input100">Endereço </span>
                        <input class="input100 endereco" type="text" name="endereco" placeholder="Digite seu endereço">
                        <span class="focus-input100" data-symbol="&#xf175;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Telefone necessário">
                        <span class="label-input100">Celular </span>
                        <input class="input100 celular" type="tel" name="celular" placeholder="Digite seu Telefone  ">
                        <span class="focus-input100" data-symbol="&#xf2c8;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="CEP necessário">
                        <span class="label-input100">CEP </span>
                        <input class="input100 cep" type="text" name="cep" placeholder="Digite seu CEP ">
                        <span class="focus-input100" data-symbol="&#xf173;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="RG necessário">
                        <span class="label-input100">RG </span>
                        <input class="input100 rg" type="text" name="rg" placeholder="Digite seu RG ">
                        <span class="focus-input100" data-symbol="&#xf150;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="CPF necessário">
                        <span class="label-input100">CPF </span>
                        <input class="input100 cpf" type="text" name="cpf" placeholder="Digite seu CPF ">
                        <span class="focus-input100" data-symbol="&#xf150;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="E-mail necessário">
                        <span class="label-input100">E-mail</span>
                        <input class="input100" type="email" name="email" placeholder="Digite seu E-mail">
                        <span class="focus-input100" data-symbol="&#xf3fa;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Senha necessária">
                        <span class="label-input100">Senha </span>
                        <input class="input100" type="password" name="senha" placeholder="Digite sua senha ">
                        <span class="focus-input100" data-symbol="&#xf183;"></span>
                    </div>
                    <div class="wrap-input100" data-validate="">
                        <span class="label-input100" for="customFile">Escolha uma foto de perfil</span>
                        <input class="input100 foto-padding" type="file" name="foto" id="customFile">
                        <span class="focus-input100" data-symbol="&#xf225;"></span>
                    </div>

                    <div class="text-center p-t-8 p-b-31">
                        <a href="index.php">
							Voltar
						</a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn btn-cadastrar">
								Conclúido
							</button>
                        </div>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
							Entre usando
						</span>
                    </div>

                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <script src="recursos/js/jquery-3.5.1.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="src/usuario/controller/cadastro.js"></script>
    <script src="recursos/libs/jQuery Mask/jquery.mask.js"></script>
    <script src="recursos/js/input.js"></script>

</body>

</html>