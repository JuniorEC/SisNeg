<?php include("cabecalho.php");
include ("logica_usuario.php");
?>


<h1>Adicionar novo produto</h1>
<form action="AddProdutoDAO.php">
    <table class="table">
        <tr>
             <td>Nome do produto</td>
             <td> <input class="form-control" type="text" name="nm_product"><br/></td>
        </tr>
        <tr>
             <td>Tipo</td>
             <td> <input class="form-control" type="text" name="tp_product"><br/></td>
        </tr>
                <tr>
             <td>Valor</td>
             <td> <input class="form-control" type="text" name="value"><br/></td>
        </tr>
        
        <tr>
             <td>quantidade</td>
             <td> <input class="form-control" type="text" name="qtd_product"><br/></td>
        </tr>

        <tr>
             <td>Tipo de negociação</td>
             <td> <input class="form-control" type="text" name="tp_business"><br/></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type=<"submit">Anunciar</button>
            </td>
        </tr>
        
    </table>
</form>
<?php include ("rodape.php")?>