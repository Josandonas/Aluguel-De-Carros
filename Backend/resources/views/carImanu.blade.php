            <!DOCTYPE html>
            <html>

            <head>

              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <meta name="description" content="">
              <meta name="author" content="">

              <title>Automóveis Flux</title>

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

              <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
              <!-- Bootstrap core CSS -->
              <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

              <!-- Custom fonts for this template -->
              <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
              <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
              <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
              <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
              <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> 
              <!-- Custom styles for this template -->

              <link href="css/cars.css" rel="stylesheet">

            </head>

            <body id="page-top"  src="../img/categoria.jpg">
                 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container">
                      <a class="navbar-brand" href="index.blade.php"><h3>Sair</h3></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                        <!--https://forum.imasters.com.br/topic/466064-exibir-nome-do-usu%C3%A1rio-logado/    link para colocar nome na page-->
                        <a class="nav-link js-scroll-trigger"><h1><strong></strong></h1></a>
                      </li>
                        </ul>
                        <ul>
                           <a href="escolhacar.blade.php"><button type="button" class="btn btn-primary btn-lg">Voltar</button></a>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <br>
                  <br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white" >Intermediarios (Manual)</h2>
          </div>
        </div>
        
              <div id="carousel-determinante" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>  
                    </ol>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/intermediarios/jeep.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="myDiv" style="background-color:orange;">Jeep Compass 2.0 Sport 2019</h5>
                        <p id="myDiv" style="background-color:orange;">R$ 150,00 por dia</p>
                        <button type="button" class="btn btn-primary btn-block">Selecionar</button>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#car1"> Informações</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                        <img class="d-block w-100" src="./img/intermediarios/hondaCivic.jpg">
                        <div class="carousel-caption d-none d-md-block">
                        <h5 id="myDiv" style="background-color:orange;">Honda Civic</h5>
                        <p id="myDiv" style="background-color:orange;">R$ 150,00 por dia</p>
                        <button type="button" class="btn btn-primary btn-block">Selecionar</button>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#car2"> Informações</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./img/intermediarios/fordRanger.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="myDiv" style="background-color:orange;">Ford Ranger </h5>
                        <p id="myDiv" style="background-color:orange;">R$ 150,00 por dia</p>
                        <button type="button" class="btn btn-primary btn-block">Selecionar</button>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#car3"> Informações</button>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-determinante" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-determinante" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
        </div>
             
  <br>
  <br>



              <!-- Footer -->
                  <footer class="py-5 bg-dark">
                    <div class="container"  align="center">
                        <span  class="m-0 text-white">Copyright &copy; Automóveis Flux  2019</span>
                    </div>
                  </footer>


                <!-- Modal car 1 -->
                <div class="modal fade" id="car1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Jeep Compass 2.0 Sport 2019</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>A diária é equivalente: R$ 150,00</h5>
                        <h5>Sem ar-condicionado</h5>
                        <p>Potência: 166 - 159 Cavalos</p>
                        <p>Aceleração: De 0 a 100 km/h em 10,6 segundos</p>
                        <p>Dimensões: 1.81 Metros Largura x  1.63 metros Altura</p>
                        <p>Motor: 2.0 Tigershark Flex </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal-->

                <!-- Modal car 2 -->
                <div class="modal fade" id="car2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Honda Civic</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>A diária é equivalente: R$ 150,00</h5>
                        <h5>Sem ar-condicionado</h5>
                        <p>Potência: 173 cavvalos </p>
                        <p>Aceleração: De 0 a 150 km/h em 12,4 segundos</p>
                        <p>Dimensões: 1,80 metros Largura x  1,43 metros Altura</p>
                        <p>Motor: 1.5 turbo</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal-->

                <!-- Modal car 3 -->
                <div class="modal fade" id="car3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ford Ranger</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>A diária é equivalente: R$ 150,00</h5>
                        <h5>Sem ar-condicionado</h5>
                        <p>Potência: 200 cavalos</p>
                        <p>Aceleração: De 0 a 200 km/h em 14,1 segundos</p>
                        <p>Dimensões: 4 Metros de Comprimento x 2,0 metros de Altura</p>
                        <p>Motor: 2.2 Duratorq</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal-->


              <!-- Bootstrap core JavaScript -->
              <script src="vendor/jquery/jquery.min.js"></script>
              <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              <!-- Plugin JavaScript -->
              <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

              <!-- Contact form JavaScript -->
              <script src="js/jqBootstrapValidation.js"></script>
              <script src="js/contact_me.js"></script>

              <!-- Custom scripts for this template -->
              <script src="js/agency.min.js"></script>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
              <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
              <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
            </body>

            </html>
