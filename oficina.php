<?php 
session_start();

if (!$_SESSION["usuarioNome"]) {

  header("Location:login.php");
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.png">

    <title>Oficina de Hambúrguer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/meu.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- JavaScript do Hamburgao -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/hamburgao.js"></script>

    <!-- Custom styles -->
    <link href="css/full-width-pics.css" rel="stylesheet">
    <!-- FONTES GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">


</script>

  </head>

  <body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fontGochiBrand animated fadeIn animacao_3" href="#">Hamburgueria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link fontGochiBrand animated fadeIn animacao_3" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link fontGochiBrand animated fadeIn animacao_3" href="#">Faça o Seu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontGochiBrand animated fadeIn animacao_3" href="sobrenos.html">Sobre Nós</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link fontGochiBrand animated fadeIn animacao_3" href="#"><?php echo $_SESSION['usuarioNome'] ?></a>
            </li> 
            <li class="nav-item">
              <a class="nav-link fontGochiBrand animated fadeIn animacao_3" href="sair_login.php">Log Out</a>
            </li>                                  
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="py-5 bg-image-full" style="background-image: url(img/banner.jpg);">
      <img class="img-fluid d-block mx-auto animated fadeInLeftBig logo_animacao_1" src="img/logo.png" alt="">
      <p class="fontGochiPrincipal text-center animated jackInTheBox logo_animacao_2">Oficina de Hambúrguer</p><br>
      <div id="bg-branco" class="container labelLogin2 text-center">
        <?php 
            if (isset($_SESSION['compreAlgo'])) {
                  echo $_SESSION['compreAlgo'];
                  unset ($_SESSION['compreAlgo']);
            }
        ?>
      </div>
      <div id="bg-verde" class="container labelLogin3 text-center">
        <?php 
          if (isset($_SESSION['compraRealizada'])) {
             echo $_SESSION['compraRealizada'];
              unset ($_SESSION['compraRealizada']);
          }
        ?>
      </div>
    </header><br>
   <!-- Header -->

   <section class="py-5 bg-image-full" style="background-image: url('img/bannerMadeira.png');">

      <div class="container text-center">
         
        <h1 class="fontGochi2">Monte Seu Hambúrguer</h1>
      </div>
    </section><br>

   <div class="col-md-12">
    <div class="container" id="divScroll" >
      <div class="row">   

        <div class="col-md-4 lousa" style="background-image: url(img/lousa.png)";>
            <p class="fontGochi7 text-center">Ingredientes</p>
                        
              <div id="scroll"  ondragenter="drag_enter(event)" ondrop="cancelar(event)" ondragover="allowDrop(event)" ondragleave="drag_leave(event)"><br>

                  <img id="carne" class="img-responsive" src="img/carne-boi.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                  <img id="bacon" class="img-responsive" src="img/bacon.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                  <img id="tomate" class="img-responsive" src="img/tomate.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                   <img id="alface" class="img-responsive" src="img/alface.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                  <img id="cheddar" class="img-responsive" src="img/cheddar.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                  <img id="picles" class="img-responsive" src="img/picles.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                  <img id="presunto" class="img-responsive" src="img/presunto1.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">

                  <img id="ovo" class="img-responsive" src="img/ovo.png" droppable ="false" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)"  ondragover="allowDrop(event)">


            </div>
        </div>

        <div class="col-md-4 text-center">

          <p id="app_status" class="fontGochi6 text-center">Meu Hambúrguer</p>
            <img class="img-responsive" src="img/paoTeste.png" alt="">
           
              <div id="hamburguer" ondragenter="drag_enter(event)" ondrop="drag_drop(event)" ondragover="allowDrop(event)" ondragleave="drag_leave(event)"></div>      
              
            <img class="img-responsive" src="img/paoDois.png" alt="">          
        </div>

        <div class="col-md-4 lousa" style="background-image: url(img/lousa.png)";>
          <p class="fontGochi7 text-center">Acréscimos</p>
          <div class="row text-center">
            
            <div class="col-md-6">
              <form  name="form1" method="post" action="carrinho.php" class="form-horizontal">
                <div class="checkbox">
                  <label class="acrescimos">Carne <input id="Acarne" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Carne"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Bacon <input id="Abacon" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Bacon"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Picles <input id="Apicles"  onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Picles"></label>
                </div>

                           
            </div>
            
            <div class="col-md-6">

                <div class="checkbox">
                  <label class="acrescimos">Queijo <input id="Aqueijo"  onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Queijo"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Salada <input id="Asalada" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Salada"></label>
                </div>

              <div class="checkbox">
                <label class="acrescimos">Cebola <input id="Acebola" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Cebola"></label>
              </div>
          </div>
        </div>
      
        <p class="fontGochi7 text-center">Molhos</p>
          <div class="row text-center">
            <div class="col-md-6">
                <div class="checkbox">
                  <label class="acrescimos">Azeite <input id="Aazeite" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Azeite"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Barbecue <input  id="Abarbecue" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Barbecue"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Maionese <input id="Amaionese" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Maionese"></label>
                </div>             
            </div>
            
            <div class="col-md-6">
                <div class="checkbox">
                  <label class="acrescimos">Ketshup <input id="Aketshup" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Ketshup"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Chippotle <input  id="AChip" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Chippotle"></label>
                </div>

                <div class="checkbox">
                  <label class="acrescimos">Mostarda <input  id="Amost" onclick="verificaChecks(id)" type="checkbox" name="dados[]" value="Mostarda"></label>
                </div>
                
            </div>
          </div>

        <p class="fontGochi7 text-center">Total do Hambúrguer:</p>
          <div class="row">
            <div class="col-md-6">
              <p class="fontGochi7">R$</p>
            </div>
          
            <div class="col-md-6">
                <input type="text" class="form-control" id="subtotal" disabled>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br>

  <section class="py-5 bg-image-full" style="background-image: url('img/bannerMadeira.png');">

      <div class="container text-center">
        <h1 class="fontGochi2">Para Acompanhar !</h1>
      </div>
    </section>

    <section class="py-5 bg-image-full" style="background-image: url('img/kat_most.png');">

      <div class="container text-center">
        <h1 class="fontGochiBatata">Batatas</h1>
        <div class="row">

          <div class="col-md-4">
            <p class="acompanhamentos">Pequena(200g)</p>
            <img class="img-responsive" src="img/batataP.png" alt=""><br><br><br><br><br>
            <div class="row">

              <div class="col-md-6">
                <p class="acompanhamentos">Quantidade</p>
              </div>

             <div class="col-md-6">
              <select name="batataPequena" class="form-control select" id="batataPequena" onchange="batataP()">
                <option value="">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div></div>
                       
          </div>

          <div class="col-md-4">
            <p class="acompanhamentos">Média(300g)</p>
            <img class="img-responsive" src="img/batataM.png" alt=""><br><br><br>
             <div class="row">

              <div class="col-md-6">
                <p class="acompanhamentos">Quantidade</p>
              </div>

             <div class="col-md-6">
              <select class="form-control select" name="batataMedia" id="batataMedia" onchange="batataM()">
                <option value="">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div></div>
          </div>

          <div class="col-md-4">
            <p class="acompanhamentos">Grande(400g)</p>
            <img class="img-responsive" src="img/batataG.png" alt=""><br>
             <div class="row">

              <div class="col-md-6">
                <p class="acompanhamentos">Quantidade</p>
              </div>

             <div class="col-md-6">
              <select class="form-control select" name="batataGrande" id="batataGrande" onchange="batataG()">
                <option value="">0</option>
                <option value="2">1</option>
                <option value="3">2</option>
                <option value="3">3</option>
              </select>
            </div></div>
          </div>

        </div>
      </div>
    </section>

    <section class="py-5 bg-image-full" style="background-image: url('img/bannerBebidas.png');">

      <div class="container text-center">
        <h1 class="fontGochiBebidas">Bebidas</h1>

        <div class="row text-center">

          <div class="col-md-6">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                    <p class="acompanhamentos">Refrigerantes</p>

                    <div class="form-group">
                      <select class="form-control bebidas" id="refri" name="refri" onchange="formRefri(),calcRefri()">
                        <option value="semRefri">Escolha um Refrigetante/Sem refrigerante</option>                   
                        <option value="Lata">Lata</option>
                        <option value="umLitro">Garrafa 1 litro</option>
                        <option value="doisLitros">Garrafa 2 litros</option>
                              
                      </select>
                    </div>

                    <p class="acompanhamentos">Quantidade</p>
                    <div class="form-group">
                      <select class="form-control bebidas" id="quantidadeRefri" name="quantidadeRefri" onchange="calcRefri()" disabled="">
                        <option id="nada1" value=""></option>                            
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>            
                        
                      </select>
                    </div>

                     <p class="acompanhamentos">Sabor</p>
                    <select class="form-control bebidas" id="saborRefri" name="saborRefri" disabled="">
                      <option id="nada2" value=""></option>  
                      <option value="Coca-Cola">Coca-Cola</option>
                      <option value="Fanta-Laranja">Fanta Laranja</option>
                      <option value="Kuat">Kuat</option>
                      <option value="Fanta-Uva">Fanta Uva</option>
                      
                    </select>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>

         

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-2"></div>
            <div class="col-md-9">
                <p class="acompanhamentos">Sucos</p>

                <div class="form-group">
                  <select class="form-control bebidas" id="suco" name="suco" onchange="formSuco(),calcSuco()">
                    <option value="semSuco">Escolha um Suco/Sem Suco</option>  
                    <option value="Lata">Lata</option>
                    <option value="umLitro">Caixa 1 litro</option>                       
                  </select>
                </div>

                <p class="acompanhamentos">Quantidade</p>
                <div class="form-group">
                  <select class="form-control bebidas" id="quantidadeSuco" name="quantidadeSuco" onchange="calcSuco()" disabled>
                    <option id="nada3" value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>           
                  </select>
                </div>

                 <p class="acompanhamentos">Sabor</p>
                <select class="form-control bebidas" id="saborSuco" name="saborSuco" disabled>
                  <option id="nada4" value=""></option>
                  <option value="Uva">Uva</option>
                  <option value="Laranja">Laranja</option>
                  <option value="Goiaba">Goiaba</option>
                  <option value="Manga">Manga</option>
                  
                </select>
            </div>
              <div class="col-md-1"></div>
             </div>
         </div>
        </div>
    </section><br>

    <section class="py-5 bg-image-full" style="background-image: url('img/bannerMadeira.png');">

      <div class="container text-center">

        <h1 class="fontGochi2">Finalizar Compra</h1>

          <div class="row text-center">

              <div class="col-md-6">
                <p class="fontGochi2">Total do Pedido:</p>
              </div>

              <div class="col-md-6">

                <div class="row text-center">

                  <div class="col-md-6">
                     <p class="fontGochi2">R$</p>
                  </div>

                  <div class="col-md-6"><br>                   
                     <input name="totalFinal" id="totalFinal" class="form-control" disabled>
                     <input name="totalFinalH" id="totalFinalH" type="hidden">
                     <!-- itens hambumguer -->
                     <input name="itenCarne" id="itenCarne" type="hidden" value="">
                     <input name="itenAlface" id="itenAlface" type="hidden" value="">
                     <input name="itenBacon" id="itenBacon" type="hidden" value="">
                     <input name="itenPicles" id="itenPicles" type="hidden" value="">
                     <input name="itenCheddar" id="itenCheddar" type="hidden" value="">
                     <input name="itenOvo" id="itenOvo" type="hidden" value="">
                     <input name="itenPresunto" id="itenPresunto" type="hidden" value="">
                     <input name="itenTomate" id="itenTomate" type="hidden" value="">
                     

                  </div>

                </div>
              </div>
            
          </div>

          <button onmousedown="localizacao(),post()" type="submit" class="btn finalizado fontGochi3">Comprar</button>
        </form>
      </div>
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
