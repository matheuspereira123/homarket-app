<?php

    include('../../banco/conexao.php');

    if($conexao){

        session_start();

        $rqst = $_POST;

        if($rqst['nome'] == ""){

            $dados = array(
                'msg' => "Preencha os campos vazios obrigatórios",
                'icone' => 'error'
            );

        } else{

            $nome = trim($rqst['nome']);
            $senha = base64_encode(trim($rqst['senha']));

            $sql = "SELECT nome FROM funcionarios WHERE nome = ".'"'.$nome.'"';
            $resultado = mysqli_query($conexao, $sql);
            $nomes = mysqli_num_rows($resultado);

            if($nomes > 0){

                $sql = "SELECT id_funcionario, nome, DATE_FORMAT(nascimento, '%d/%m/%Y') as nascimento, endereco, celular, cep, rg, cpf, email, foto FROM funcionarios WHERE nome = ".'"'.$nome.'"'." AND senha = ".'"'.$senha.'"';
                $resultado = mysqli_query($conexao, $sql);
                $usuarios = mysqli_num_rows($resultado);

                if($usuarios > 0){

                    $dados = array(
                        'msg' => "Funcionário logado com sucesso",
                        'icone' => 'success'
                    );

                    $informacoes = mysqli_fetch_assoc($resultado);

                    $_SESSION['nome'] = $informacoes['nome'];
                    $_SESSION['nascimento'] = $informacoes['nascimento'];
                    $_SESSION['endereco'] = $informacoes['endereco'];
                    $_SESSION['celular'] = $informacoes['celular'];
                    $_SESSION['cep'] = $informacoes['cep'];
                    $_SESSION['rg'] = $informacoes['rg'];
                    $_SESSION['cpf'] = $informacoes['cpf'];
                    $_SESSION['email'] = $informacoes['email'];
                    $_SESSION['foto'] = $informacoes['foto'];
                    
                } else{

                    $dados = array(
                        'msg' => "Senha incorreta",
                        'icone' => 'error',
                        $sql
                    );
                }

            } else{

                $dados = array(
                    'msg' => "Funcionário não cadastrado pelo ADM",
                    'icone' => 'error'
                );
            }

        }
        mysqli_close($conexao);
    } else {

        $dados = array(
            'msg' => "Erro 500" . "<br>" . "Ocorreu um erro interno no servidor 😕 ⚠️",
            'icone' => 'error'
        );
    }
    
    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);