<?php 
session_start();

 ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">

    <title>Oficina de Hambúrguer</title>

    <!-- Bootstrap core CSS and My Css -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/meu.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    
    <!-- Custom styles -->
    <link href="css/full-width-pics.css" rel="stylesheet">
    <!-- FONTES GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">


</script>

  </head>

  <body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fontGochiBrand" href="#">Hamburgueria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link fontGochiBrand animated fadeIn" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link fontGochiBrand animated fadeIn" href="#">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontGochiBrand animated fadeIn" href="sobrenos.html">Sobre Nós</a>
            </li>            
          </ul>
        </div>
      </div>
    </nav><br>
    <!-- Menu -->

  <section class="py-5 bg-image-full" style="background-image: url('img/banner3.jpg');">
    <br><br><br>
      <div class="container">
        <div class="row text-center">
            <div class="col-md-2"></div>

           <div class="col-md-8">
             <h1 class="fontGochi2 animated bounceInDown">Cadastre-se</h1>

             <div id="bg-branco" class="labelLogin2">
                  <?php 
                    if (isset($_SESSION['cadastroErro'])) {
                      echo $_SESSION['cadastroErro'];
                      unset ($_SESSION['cadastroErro']);
                    }
                   ?>
                  </div>
              <div class="row text-center">

                <div class="col-md-6">                                  
                    <div class="form-group">
                      <form action="inserir.php" method="post">
                        <label class="labelLogin animated fadeInLeft">Bairro</label>
                        <input type="text" name="bairro" class="form-control animated fadeInLeftBig" placeholder="Seu Bairro" required="">
                    </div>

                    <div class="form-group">
                        <label class="labelLogin animated fadeInLeft">Rua</label>
                        <input type="text" name="rua" class="form-control animated fadeInLeftBig" placeholder="Nome da Rua" required="">
                    </div>

                    <div class="form-group">
                        <label class="labelLogin animated fadeInLeft">Número</label>
                        <input type="text" name="numeroresidencia" class="form-control animated fadeInLeftBig" placeholder="Número da Residência" required="">
                    </div>

                    <div class="form-group">
                        <label class="labelLogin animated fadeInLeft">Complemento</label>
                        <input type="text" name="complemento" class="form-control animated fadeInLeftBig" placeholder="Ex : Ao lado da padaria 3" required="">
                    </div>
                     <button  type="reset" class="btn meubuton fontGochi3 animated fadeInUp">Limpar Tudo</button>                     
                </div>

                 <div class="col-md-6">              
                    <div class="form-group">                    
                        <label class="labelLogin animated fadeInRight">Nome</label>
                        <input type="text" name="nome" class="form-control animated fadeInRightBig" placeholder="Seu nome" required="">
                    </div>

                    <div class="form-group">
                        <label class="labelLogin animated fadeInRight">Email</label>
                        <input type="email" name="email" class="form-control animated fadeInRightBig" placeholder="Seu Email" required="">
                    </div>

                    <div class="form-group">
                        <label class="labelLogin animated fadeInRight">Senha</label>
                        <input type="password" name="password" class="form-control animated fadeInRightBig" placeholder="Sua Senha" required="">
                    </div>

                    <div class="form-group">
                        <label class="labelLogin animated fadeInRight">Telefone</label>
                        <input type="text" name="telefone" class="form-control animated fadeInRightBig" placeholder="Seu Telefone" required="">
                    </div>  

                  
                         <button type="submit" name="cadUsuario" class="btn finalizado2 fontGochi3 animated fadeInUp">Cadastrar</button>
                      
                    </form>
                    

                </div>
                
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
      </div><br><br><br>
  </section><br>

    <!-- Footer -->
    <footer class="py-5 bg-cinza">
      <div class="container">
        <div class="row ">
          <div class="col-md-4">   
            <ul>
              <li class="fontGochi tituloFooter">Oficina de Hambúrguer Info</li>
              <li class="listaFooter">Sobre a ODH</li>
              <li class="listaFooter">Termos de uso</li>
              <li class="listaFooter">Fale Conosco</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li class="fontGochi tituloFooter">Minha ODH</li>
              <li class="listaFooter">Ingredientes</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li class="fontGochi tituloFooter">Redes Socias</li>
              <li class="listaRedes"><img  class="img-responsive blur" src="img/faceIcon.png" alt=""></li>
              <li class="listaRedes"><img class="img-responsive blur" src="img/youtubeIcon.png" alt=""></li>
            </ul>
          </div>
          </div>
        <p class="m-0 text-center letraBranca ">Copyright &copy; Oficina de Hambúrguer 2017</p>
      </div>
      
    </footer>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
