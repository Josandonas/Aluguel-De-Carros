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

  <link href="css/nova.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">

      <a class="navbar-brand" href="/">Voltar para Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">

        

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"  data-toggle="modal" data-target="#exampleModal">login </a>
          </li> 


        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->

  <header class="masthead" >
    <div class="container">

      <div class="intro-text">
        <a href=""><div class="intro-lead-in">Automóveis Flux</div></a>
        <div class="intro-heading text-uppercase">Alterar Garagem</div>



    <form action="" method="POST">
<div class="card">
    <div class="card-header">
    </div>
                    <div class="form-group">
                        <label for="inputName">Nome da Garagem:</label> 
                        <input type="text" name="razao_social" value="{{$garagem->razao_social}}" class="form-control" id="razaoSocial" placeholder="Nome da Garagem" ng-model="razaoSocial">
                    </div>

                    <div class="form-group">
                        <label for="inputCpf">CNPJ:</label> 
                        <input type="text" name="cnpj" value="{{$garagem->id}}" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" maxlength="18">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Email:</label> 
                        <input type="email" class="form-control" id="email" name = "email" value="{{$garagem->id}}" placeholder="exemplo@outlook.com" ng-model="cadastroEmail" required="autofocus">
                    </div>

	          				<div class="form-group">
                        <label for="inputTel" >Telefone:</label> 
                        <input class="form-control" id="telefone" name = "telefone" value="{{$garagem->telefone}}" maxlength="13" placeholder=" (00) 00000-0000" OnKeyPress="formatar('##-#####-####', this)" required="autofocus">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Cidade:</label> 
                        <input type="text" name="cidade" value="{{$garagem->cidade}}" class="form-control" id="Cidade" placeholder="Nome da Cidade" ng-model="Cidade">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Estado:</label> 
                        <input type="text" name="estado" value="{{$garagem->cidade}}" class="form-control" id="Estado" placeholder="Nome do Estado" ng-model="Estado">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Rua:</label> 
                        <input type="text" name="rua" value="{{$garagem->rua}}" class="form-control" id="Rua" placeholder="Nome da Rua" ng-model="Rua">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Número:</label> 
                        <input type="text" name="numero" value="{{$garagem->numero}}" class="form-control" id="numero" placeholder="Numero" ng-model="Numero">
                    </div>

                    <div class="form-group">
                        <label for="inputName">CEP:</label> 
                        <input type="text" name="cep" value="{{$garagem->cep}}" class="form-control" id="cep" placeholder="CEP" ng-model="cep" maxlength="8">
                    </div>
					                           
                </form>
            </div>

            <!-- footer -->
            <div class="modal-footer">
			                      <button type="button" id="btnCadastrar" class="btn btn-success btn-block" data-loading-text="Cadastrando...">Salvar Cadastro</button>
            </div>
            <!-- end footer -->

            <!-- footer -->
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-block" class="close" data-dismiss="modal" aria-label="Close" > Cancelar</button>
            </div>


<a class="navbar-brand" href="/garagem">Voltar</a>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" >Login</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>

      </div>
      <div class="modal-body">
        <!-- body -->
        <div class="modal-header">
          <form role="form">
            <div class="form-group">

                <div class="input-group margin-bottom-sm">
                  <span class="input-group-addon"><i class="fas fa-envelope fa-fw"></i></span>
                  <input class="form-control" type="text" placeholder="Email" required autofocus>
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                  <input class="form-control" type="password" placeholder="Senha" required autofocus>
                </div>
            </div>
          </form>
        </div>
        <!-- footer -->
        <div class="modal-footer">
           <input class="btn btn-success btn-lg  btn-block " type="submit" value="Entrar" class="btn">
        </div> 

        <div class="modal-footer">
            <a href="#"> Não tem uma conta ainda?</a>
            <input class="btn btn-info btn-lg  btn-block " type="submit" value=" Crie sua Conta" class="btn" data-toggle="modal" data-target="#cadas1">
        </div>  

      </div>
    </div>
  </div>
</div>
<!--  end-Modal -->




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