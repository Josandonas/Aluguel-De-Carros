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

        <link href="css/pos.css" rel="stylesheet">

      </head>

      <body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">

            <a class="navbar-brand" href="/">Sair</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>

            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
                    <a href="/garagem-cadastro" class="nav-link js-scroll-trigger" data-toggle="modal">Cadastro de Garagem</a>
                  </li>
                <li class="nav-item">
                  <!--https://forum.imasters.com.br/topic/466064-exibir-nome-do-usu%C3%A1rio-logado/    link para colocar nome na page-->
                  <a class="nav-link js-scroll-trigger"><h1><strong></strong></h1></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Header  -->
        <header class="masthead" >
              <div class="intro-text">
                <div class="form-group">
                    <form method="POST" action="/buscar_garagem/">
                      <div class="facareserva">
                        <div class="passo1">
                          <div class="row">
                            <div class="col-2">
                              <h5><label for="mySearch">Agência:</label>  </h5>
                            </div>
                            <div class="col-9">
                                <input class="form-control form-control-lg" type="text" placeholder="Nome da Agência" >
                            </div>
                            <div class="col-1">
                                <button type="submit"><i class="fa fa-3x fa-search" aria-hidden="true"></i></button>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                      <!--<div>
                        <label for="mySearch">Didite o nome da agência:</label>
                        <input type="search" id="mySearch" name="nome"
                        placeholder="Nome da Agência" >
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <span class="validity"></span>
                      </div>-->
       <div class="card">

          <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <td> CEP </td>
          <td> Nome </td>
          <td> Cidade </td>
          <td> Estado </td>
        </tr>

            @foreach($agencia as $age)

            <tr>
              <td>{{$age->cep}}</td>
              <td><a href="carros_da_agencia/{{$age->id}}"> {{$age->razao_social}} </a></td>
              <td> {{$age->cidade}} </td>
              <td> {{$age->estado}} </td>
            </tr>

            @endforeach

      </thead>
          </table>
              </div>

                         </header>
        <!-- end Header e bloco de pesquisa -->
        
      


        <!-- Footer -->
        <footer>
          <div class="container" >
            <div class="row">
              <div class="col-md-12" >
                <span class="copyright" >Copyright &copy; Automóveis Flux  2019</span>
              </div>
            </div>
          </div>
        </footer>

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
