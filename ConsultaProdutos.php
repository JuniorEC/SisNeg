<?php include ("cabecalho.php")
?>
<table class="table table-striped table-bordered">
        <tr>
            <td>Código do produto</td>
            <td>Nome</td>
            <td>Tipo</td>
            <td>Quantidade</td>
            <td>Valor</td>
            <td>tipo de negociação</td>
        </tr>
    <?php
     $Produtos = BuscaProduto();
        foreach($Produtos as $produto) :
     ?>
      <tr>
          <td><?=$produto ['cd_product']?></td>
          <td><?=$produto ['tp_product']?></td>
          <td><?=$produto ['nm_product']?></td>
          <td><?=$produto ['qtd_product']?></td>
          <td><?=$produto ['value']?></td>
          <td><?=$produto ['tp_business']?></td>
      </tr>
    <?php    
        endforeach
    ?>
</table>
<?php include ("rodape.php")?>