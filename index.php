<?php

    session_start();

    if(isset($_SESSION['cpf'])){
        header('Location: menu.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tela de login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="recursos/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/main.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/util.css">
    <link rel="stylesheet" href="recursos/css/login.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" id="form-login">
                    <span class="login100-form-title p-b-49">
						Login
					</span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">
                        <span class="label-input100">Nome de usuário</span>
                        <input class="input100" id="nome" type="text" name="nome" placeholder="Digite seu nome de usuário">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Senha necessária">
                        <span class="label-input100">Senha</span>
                        <span class="focus-input100" data-symbol="&#xf183;"></span>
                        <input class="input100" id="Senha" type="password" name="senha" placeholder="Digite sua senha ">
                    </div>
                    <div class="text-center p-t-8 p-b-31">
                        <a href="#">
							Esqueceu a senha?
						</a>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn btn-login">
								Login
							</button>
                        </div>
                    </div>
                    <div class="flex-col-c p-t-155 mb-certa">
                        <span class="txt1 p-b-17">
							Faça seu cadastro
						</span>
                        <a href="cadastro.html" class="txt2">
							Cadastre-se
                        </a><br>
                        <a href="funcionario.php" class="txt2">
							Entrar como funcionário 
						</a>
                    </div>
                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
							Entre usando também
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
    <script src="recursos/js/input.js"></script>
    <script src="src/usuario/controller/login-cliente.js"></script>

</body>

</html>