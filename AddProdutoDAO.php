<?php include ("cabecalho.php");
include ("logica_usuario.php");

verificaUsuario();

function InsereProduto ( $codigo, $tipo, $nome, $quantidade, $valor, $negocio) {
    $query ="insert into tb_product_register (cd_product ,tp_product, nm_product, qtd_product, value, tp_business) values ('{$codigo}','{$tipo}','{$nome}','{$quantidade}','{$valor}','{$negocio}')";
    return mysqli_query(Conecta::PegaConexao(), $query);
}

$codigo = 2;

//$codigo = $_GET['cd_product'];
$tipo = $_GET['tp_product'];
$nome = $_GET['nm_product'];
$quantidade = $_GET['qtd_product'];
$valor = $_GET['value'];
$negocio = $_GET['tp_business'];

if(InsereProduto( $codigo, $tipo, $nome, $quantidade, $valor, $negocio)) { ?>
    <p class ="text-success"> O produto <?= $nome ?> foi adicionado/</p>
<?php } else { ?>
    $msg = mysqli_error(Conecta::PegaConexao());
<?php
}   
?>