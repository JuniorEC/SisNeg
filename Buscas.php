<?php
include_once('Conecta.php');
session_start();

function mostrar($valor, $pause = false)
{
    echo "<pre>";
       print_r($valor);
    echo "</pre>";
    
    if($pause){
        die();
    }
}

function updateOnline ($email) {
   
    $idUsuario = $id['id_user'];
    $sql = "UPDATE  `sisneg`.`tb_user` SET  `online` =  '1' WHERE  `tb_user`.`id_user` ={$idUsuario};";
    $Resultado = mysqli_query(Conecta::PegaConexao(), $sql);
    $_SESSION['id_user'] = $idUsuario;
    $_SESSION['email_user'] = $email['email'];    
    $Resultado->num_rows;
        
}


function updateAcabarOnline ($usuario) {
    
    $idUsuario = $usuario;
    $sql = "UPDATE  `sisneg`.`tb_user` SET  `online` =  null WHERE  `tb_user`.`id_user` ={$idUsuario};";
    mysqli_query(Conecta::PegaConexao(), $sql);    
}

function BuscaProduto () {
    $Produtos = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from tb_product_register");
        while($produto = mysqli_fetch_assoc($Resultado)){
         array_push($Produtos, $produto);
    }
    return $Produtos;
}

function BuscaDespesa () {
    $Despesas = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from despesas");
        while($despesa = mysqli_fetch_assoc($Resultado)){
         array_push($Despesas, $despesa);
    }
    return $Despesas;
}

function ListaUsuario () {
    $usuarios = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from dados_colaboradores as c where c.delete='0'");
        while($usuario = mysqli_fetch_assoc($Resultado)){
         array_push($usuarios, $usuario);
    }
    return $usuarios;
}

function BuscaLoginUsuario($email, $senha) {
    $senhaMd5 = md5($senha);
    $query = "select * from tb_user where email_user='{$email}' and pwd_user='{$senhaMd5}'";
    $resultado = mysqli_query(Conecta::PegaConexao(), $query);
    $usuario = mysqli_fetch_assoc($resultado);
    updateOnline($email);
    return $usuario;
}

function BuscaTipo($email) {
    $query = "select tipo from dados_colaboradores where email='{$email}'";
    $resultado = mysqli_query(Conecta::PegaConexao(), $query);
    $usuario = mysqli_fetch_assoc($resultado);
    updateOnline($usuario);
    return $usuario;
}

function InativaUsuario($id) {
    $usuariosInativados = array();
    $Resultado = mysqli_query(Conecta::PegaConexao(), "select * from dados_colaboradores where id='{$id}'");
    while($usuario = mysqli_fetch_assoc($Resultado)){
         array_push($usuariosInativados, $usuario);
    return $usuariosInativados;
}
}