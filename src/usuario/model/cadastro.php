<?php

    include('../../banco/conexao.php');

    if($conexao){
        
        $rqst = $_POST;
        $foto = $_FILES['foto'];
        $erroFoto = $foto['error'];

        if($rqst['nome'] == "" || $rqst['nascimento'] == "" || $rqst['endereco'] == "" || $rqst['celular'] == "" || $rqst['cep'] == "" || $rqst['rg'] == "" || $rqst['cpf'] == "" || $rqst['email'] == "" || $rqst['senha'] == "") {

            $dados = array(
                'msg' => "Há campos vazios que precisam ser preenchidos",
                'icone' => 'error'
            );

        } else {

            $sqlCPF = "SELECT * FROM clientes WHERE cpf = $rqst[cpf]";
            $sqlRG = "SELECT * FROM clientes WHERE rg = $rqst[rg]";
            $resultadoRG = mysqli_query($conexao, $sqlRG);
            $resultadoCPF = mysqli_query($conexao, $sqlCPF);
            $contaRG = mysqli_num_rows($resultadoRG);
            $contaCPF = mysqli_num_rows($resultadoCPF);

            if($contaCPF > 0 || $contaRG > 0){
                $dados = array(
                    'msg' => "CPF e/ou RG já cadastrado",
                    'icone' => 'error'
                );
                echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                exit;
            }

            // Celular
                $formatCelular = array("(", ")", "-", " ");
                $celular = str_replace($formatCelular, "", $rqst['celular']);
                if(strlen($celular) != 11){
                    $dados = array(
                        'msg' => "Formato do número do Celular inválido",
                        'icone' => 'error'
                    );
                    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                    exit;
                }

            // CEP
                $cep = str_replace("-", "", $rqst['cep']);
                if(strlen($cep) != 8){
                    $dados = array(
                        'msg' => "Formato de CEP inválido",
                        'icone' => 'error'
                    );
                    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                    exit;
                }

            // RG
                $formatDocumento = array(".", "-");
                $rg = str_replace($formatDocumento, "", $rqst['rg']);

                if(strlen($rg) != 9){
                    $dados = array(
                        'msg' => "Formato de RG inválido",
                        'icone' => 'error'
                    );
                    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                    exit;
                }

            // CPF
                $cpf = str_replace($formatDocumento, "", $rqst['cpf']);
                if(strlen($cpf) != 11){
                    $dados = array(
                        'msg' => "Formato de CPF inválido",
                        'icone' => 'error'
                    );
                    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                    exit;
                }

            // Email

                $email = trim($rqst['email']);
                if(strpos($email, '@') === false){

                    $dados = array(
                        'msg' => "Formato de Email Inválido",
                        'icone' => 'error'
                    );
                    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                    exit;
                }

            // Senha
                $senha = base64_encode(trim($rqst['senha']));

            if($erroFoto == 4){

                $sql = "INSERT INTO clientes (nome, nascimento, endereco, celular, cep, rg, cpf, email, senha, foto) VALUES (" . '"' . $rqst['nome'] .'"' . ', ' . '"' . $rqst['nascimento'] . '"' . ', ' . '"' . $rqst['endereco'] . '"' . ', ' . $celular . ', ' . $cep . ', ' . $rg . ', ' . $cpf . ', ' . '"' . $email . '"' . ', ' . '"' . $senha . '"' . ', ' . '"recursos/img/user.svg"' .")";

                $resultado = mysqli_query($conexao, $sql);

            } else {
                $pasta = "foto/";
                if(!file_exists('../' . $pasta)) mkdir('../' . $pasta, 0755);
                $nomeTemporario = $foto['tmp_name']; 
                $nomeArquivo = $foto['name'];
                $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
                $novoNome = uniqid(time()) . '.' . $extensao;
                $destino  = '../' . $pasta . $novoNome;

                if(move_uploaded_file($nomeTemporario, $destino)){

                    $passou = 'sim';
                    if($extensao == "jpeg" || $extensao == "JPEG" || $extensao == "jpg" || $extensao == "JPG" || $extensao == "png" || $extensao == "PNG" ){

                        $sql = "INSERT INTO clientes (nome, nascimento, endereco, celular, cep, rg, cpf, email, senha, foto) VALUES (" . '"' . $rqst['nome'] .'"' . ', ' . '"' . $rqst['nascimento'] . '"' . ', ' . '"' . $rqst['endereco'] . '"' . ', ' . $celular . ', ' . $cep . ', ' . $rg . ', ' . $cpf . ', ' . '"' . $email . '"' . ', ' . '"' . $senha . '"' . ', ' . '"' . $destino . '"' .")";
                        
                        $resultado = mysqli_query($conexao, $sql);
                       
                    } else{
    
                        $dados = array(
                            'msg' => 'Formato de arquivo não suportado',
                            'icone' => 'error',
                            $sql,
                            $erroFoto,
                            $extensao
                        ); 
                        unlink($destino);
                        echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                        exit;
                    }
                }
            }  
            
            if($resultado){

                $dados = array(
                    'icone' => 'success',
                    'msg' => 'Cliente cadastrado com êxito'
                );

                $session = "SELECT id_cliente, nome, DATE_FORMAT(nascimento, '%d/%m/%Y') as nascimento, endereco, celular, cep, rg, cpf, email, foto FROM clientes WHERE nome = ".'"'.$nome.'"'." AND senha = ".'"'.$senha.'"';
                $resultado = mysqli_query($conexao, $session);

                $informacoes = mysqli_fetch_assoc($resultado);

                $_SESSION['nome'] = $rqst['nome'];
                $_SESSION['nascimento'] = str_replace("-", "/", $rqst['nascimento']);
                $_SESSION['endereco'] = $informacoes['endereco'];
                $_SESSION['celular'] = $informacoes['celular'];
                $_SESSION['cep'] = $informacoes['cep'];
                $_SESSION['rg'] = $informacoes['rg'];
                $_SESSION['cpf'] = $informacoes['cpf'];
                $_SESSION['email'] = $informacoes['email'];
                $_SESSION['foto'] = $foto;

            }else{

                $dados = array(
                    'icone' => 'error',
                    'msg' => 'Erro ao cadastrar Cliente'
                );
                unlink($destino);
            }
            mysqli_close($conexao);
        }
    } else {

        $dados = array(
            'msg' => "Erro 500" . "<br>" . "Ocorreu um erro interno no servidor 😕 ⚠️",
            'icone' => 'error'
        );

    }
    
    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);