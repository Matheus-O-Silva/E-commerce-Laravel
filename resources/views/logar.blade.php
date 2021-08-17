<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        
    <title>Nerd Shop | Home</title>
    <link rel="shotcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(function() {
        //Jquery Onload
        $("#cpf").mask("000.000.000-00")
        $("#cep").mask("00000-000")
      })
    </script>

  </head>
  <body class= "bg-dark text-light" style="background-color: #BEBEBE;">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" style="background-color: #6495ED;" id="navbar">
        <div class="container py-3">
            <a href="#" class="navbar-brand primary-color">
                <img src="{{ asset('img/favicon.ico') }}" alt="Imovi">
                <span>Nerd Shop</span>
            </a>
            <button class="navbar-toggler" type="button"
             data-bs-toggle="collapse"
             data-bs-target="#navbar-items"
             aria-controls="navbar-items"
             aria-expanded="false"
             aria-label="toggle navigation">
             <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a href="{{ route('home')}}" class="nav-link primary-color" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categoria')}}" class="nav-link primary-color">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cadastrar')}}" class="nav-link primary-color">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link primary-color">Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logar')}}" class="nav-link primary-color {{ request()->is('logar') ? 'active' : '' }}">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ver_carrinho')}}" class="btn btn-sm"><i class="bi bi-cart-fill" style="heigh: 10px; width: 10px;"></i></a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>
    <!-- FIM DA NAVBAR -->

    <!-- FORM LOGIN -->
    <div class="d-flex justify-content-center">
    <div class="card  text-dark text-center" style="width: 300px; margin: 150px 30px 30px;">

        <div class="card-header">
            <h1>Entrar</h1>
        </div>

        <div class="card-body">

             <!-- STATUS OK / STATUS ERRO -->
            <div class="container">
                <div class="row">
                    @if($message = Session::get("erro"))
                    <div class="col-12">
                        <div class="alert alert-danger">
                        {{ $message }}
                        <div>
                    </div>
                    @endif

                    @if($message = Session::get("ok"))
                    <div class="col-12">
                        <div class="alert alert-success">
                        {{ $message }}
                        <div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- FIM STATUS -->


            <form method="post" action="{{ route('logar')}}">
            @csrf

                <div class="form-group">
                    <label><strong>CPF</strong></label>
                    <input type="text" class="form-control" id="cpf" name="login" placeholder="000.000.000-00" required autofocus>
                </div>

                <div class="form-group my-4">
                    <label><strong>Senha</strong></label>
                    <input type="password" name="senha" class="form-control" placeholder="*********" required>
                </div>

                <button type="submit" value="logar" class="btn btn-lg btn-success">Entrar</button>

            </form>    

        </div>

    </div>
</div>
    

    <!-- FIM FORM LOGIN -->

 
    


    <!-- FOOTER -->
<footer class="container-fluid bg-dark-color" id="footer" style="margin-top: 5px;">
      <div class="container" >
        <div class="row> 
          <!-- FOOTER TOP -->
          <div class="col-12" id="footer-top">
            <div class="row justify-content-between">
              <div class="col-4">
                <h2>Nerd Shop</h2>
              </div>
              <div class="col-4" id="social-icons" style="margin-top: 5px;">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-twitter"></i>
              </div>
            </div>
          </div>
          <!-- FOOTER DETAILS -->
          <div class="col-12" id="footer-details">
            <div class="row">
              <div class="col-12 col-md-4" id="news-container">
                <h4>Fique por dentro das novidades</h4>
                <p class="secondary-color">
                  Inscreva-se para saber em primeira mão
                </p>
                <form>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Digite o seu e-mail"
                    />
                  </div>
                  <button class="btn btn-dark">Inscrever</button>
                </form>
              </div>
              <div class="col-12 col-md-4" id="contact-container">
                <h4>Formas de contato</h4>
                <p class="secondary-color">(99)9999-9999</p>
                <p class="secondary-color">contato@nerdshop.com</p>
              </div>
              <div class="col-12 col-md-4" id="links-container">
                <div class="row">
                  <h4>Você pode estar buscando por:</h4>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li><a href="#" class="secondary-color">Sob Demanda</a></li>
                      <li><a href="#" class="secondary-color">Camisetas</a></li>
                      <li><a href="#" class="secondary-color">Outros Produtos</a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li><a href="#" class="secondary-color">Contratar</a></li>
                      <li>
                        <a href="#" class="secondary-color">Trabalhe conosco</a>
                      </li>
                      <li><a href="#" class="secondary-color">Contato</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FOOTER BOTTOM -->
          <div class="col-12" id="footer-bottom">
            <div class="row justify-content-between">
              <div class="col-12 col-md-3" style="margin-top: 3px;">
                <p class="secondary-color">NerdSHOP &copy; 2021</p>
              </div>
              <div class="col-12 col-md-3">
                <p class="secondary-color">
                  Realizamos seu pedido com
                  <i class="bi bi-heart"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- FIM FOOTER -->

  </body>
</html>


