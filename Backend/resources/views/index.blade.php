<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">Home-Page</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">

           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/garagem-cadastro">Cadastro Garagem</a>
          </li> 

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#cadas1" >Cadastro</a>
          </li>      
      
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>  <!-- -->

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"  data-toggle="modal" data-target="#exampleModal">login </a>
          </li>
        </ul>
    
      </div>
    
    </div>
  
  </nav>
  

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" >Bem Vindo ao Automóveis Flux</div>
        <div class="intro-heading text-uppercase">Prazer em Recebê-lo</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Serviços</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Serviços</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <a href="/posLogin"><h4 class="service-heading">Alugar</h4></a>
          <p class="text-muted"> Você não paga pela depreciação inicial sofrida pelo carro zero quilômetro. Os nossos carros têm cara de zero quilômetro e preço de seminovo.</p>
        </div>
        <div class="col-md-4">
         <a href="/mostrar"><span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span></a> 
          <a href="/mostrar"><h4 class="service-heading" >Ver Modelos</h4></a>
          <p class="text-muted">Você pode financiar com as melhores taxas do mercado, além de pagar a entrada em parcelas no seu cartão de crédito.</p>
        </div>
        <div class="col-md-4">

          <i class="text-center" class="fa fa-refresh fa-spin fa-2x fa-fw" aria-hidden="true"></i>
            <span class="sr-only">Refreshing...</span>

          <i class="fa fa-cog fa-spin fa-8x fa-fw" aria-hidden="true"></i>
          <span class="sr-only">Saving. Hang tight!</span>
    
           <a href="/garagem"><h4 class="service-heading">Controle de garagem</h4></a>
          <p class="text-muted">Edite e Controle sua garagem.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Entre em Contato Conosco</h2>
          <h3 class="section-subheading text-muted">Digite sua Dúvida ou Alguma Observação</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Nome *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Telefone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Digite sua mensagem *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensagem</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

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
          <form  method="POST" action ="{{ route('login') }}" role="form">
          @csrf
            <div class="form-group">

                <div class="input-group margin-bottom-sm">
                  <span class="input-group-addon"><i class="fas fa-envelope fa-fw"></i></span>
                  <input class="form-control" type="text" name = "email" placeholder="Email" required autofocus>
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                  <input class="form-control" type="password" name = "senha" placeholder="Senha" required autofocus>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="modal-footer">
           <input class="btn btn-success btn-lg  btn-block " type="submit" value="Entrar" class="btn">
        </div> 
        </form>

        <div class="modal-footer">
            <a href="#"> Não tem uma conta ainda?</a>
            <input class="btn btn-info btn-lg  btn-block " type="submit" value=" Crie sua Conta" class="btn" data-toggle="modal" data-target="#cadas1">
        </div>  

      </div>
    </div>
  </div>
</div>
<!--  end-Modal -->


<!-- Modal -->

  <div class="modal fade" id="cadas1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" >Cadastre-se</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            </div>
            <!-- body -->
            <div class="modal-body">
                <form method="POST" action="/cadastro">
                @csrf
                    <div class="form-group">
                        <label for="inputName">Nome:</label> 
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" ng-model="cadastroNome" required="autofocus">  
                    </div>

                    <div class="form-group">
                        <label for="inputCpf">CPF:</label> 
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="11">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Email:</label> <input type="email" class="form-control" id="email" name = "email" placeholder="exemplo@outlook.com" ng-model="cadastroEmail" required="autofocus">
                    </div>

                    <div class="form-group">
                        <label for="inputTel" >Telefone:</label> <input class="form-control" id="telefone" name = "telefone" maxlength="13" placeholder=" (00) 00000-0000" OnKeyPress="formatar('##-#####-####', this)" required="autofocus">
                    </div>

                    <div class="form-group">
                        <label for="inputSenha">Senha:</label> 
                        <input type="password" class="form-control" id="inputSenha" name="senha" placeholder="Senha" ng-model="cadastroSenha" required="autofocus">
                    </div>

                    <div class="modal-footer">
                          <button type="submit" id="btnCadastrar" class="btn btn-success btn-block" data-loading-text="Cadastrando...">Criar Cadastro</button>
                     </div>
                </form>
            </div>

            <!-- footer -->
            <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-block" class="close" data-dismiss="modal" aria-label="Close" > Cancelar</button>
            </div>
            <!-- end footer -->
        </div>
    </div>
</div>
<!--  end-Modal -->


        

<!--  script que realiza o formato tanto do cpf-telefone -->
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }  
}
</script>
<!--   fim do script  -->

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

</body>

</html>
