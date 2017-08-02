<?php 
include("cabecalho.php");
include("logica_usuario.php");
?>
<div class= "container" >
    <h1>Bem Vindo</h1>
        
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-caption">
            <h2>Login</h2>
            <form action="Login.php" method="post">
              <div class="input-group col-xs-4">
                
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">

              </div>
               
              <div class="input-group col-xs-4" >

                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">

              </div>
              
              <div class="input-group col-xs-4" >
                    <button class="btn btn-success btn-block">Login</button>
                    <label for="or">or</label>
                    <button class="btn btn-primary btn-block">Sing in</button>
              </div>
       </div>       
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
             </form>           
<?php include ("rodape.php")?>