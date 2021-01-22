<?php

    include('../../banco/conexao.php');

    if($conexao){

        $rqst = $_POST;
        $pesquisa = $rqst['pesquisa'];

        $sql = "SELECT * FROM produtos WHERE nome =".'"'.$pesquisa.'"'. " OR marca =".'"'.$pesquisa.'"';
        $resultado = mysqli_query($conexao, $sql);
        while($linha = mysqli_fetch_assoc($resultado)){
            $dadosTipo[] = $linha;
        }
        
        $dados = array(
            'dados' => $dadosTipo
        );

        mysqli_close($conexao);

    } else {

        $dados = array(
            'msg' => "Erro 500" . "<br>" . "Ocorreu um erro interno no servidor 😕 ⚠️",
            'icone' => 'error'
        );
    }
    
    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);