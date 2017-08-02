<?php include_once('Buscas.php'); 


?>
<htlm>
<head>
  <title>SysNe</title>
  <meta charset="utf-8">
  <link href="css/loja.css"rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">SysNe</a>
                </div>
                 <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Produtos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                                <li><a href="AddProduto.php">Adicionar Produto</a></li>
                                <li><a href="ConsultaProdutos.php">Consulta de produtos</a></li>
                         </ul>
                         </li>  
                            
                              
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Nogociações<span class="caret"></span></a>
                        <ul class="dropdown-menu">     
                               
                            <li><a href="NovaDespesa.php">Suas negociações</a></li>
                            <li><a href="HistoricoDespesas.php">Histórico de negociações</a></li>
                        </ul>
                        </li>         
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $_SESSION['email_user']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Meu Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="Logout.php">Sair</a></li>
                        </ul>
                        </li>
                    </ul>
                
               </div>
            </div>         
    </div>                  
<div class="container">
    <div class="principal">