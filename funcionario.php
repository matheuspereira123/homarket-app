<?php

    session_start();

    if(isset($_SESSION['cpf'])){
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tela de login de funcionários</title>
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
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" id="form-login">
                    <span class="login100-form-title p-b-49">
						Funcionários 
					</span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Nome de usuário necessário">
                        <span class="label-input100">Nome de usuário</span>
                        <input class="input100" id="Usuario" type="text" name="nome" placeholder="Digite seu nome de usuário">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Senha necessária">
                        <span class="label-input100">Senha </span>
                        <input class="input100" id="Senha" type="password" name="senha" placeholder="Digite sua senha ">
                        <span class="focus-input100" data-symbol="&#xf183;"></span>
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
								CONCLUÍDO
							</button>
                        </div>
                    </div>
                    <div class="flex-col-c p-t-155 mb-certa">
                        <a href="index.php" class="txt2">
							voltar
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
    <script src="src/usuario/controller/login-funcionario.js"></script>

</body>

</html>