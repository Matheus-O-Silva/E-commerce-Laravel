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
                        <a href="{{ route('cadastrar')}}" class="nav-link active primary-color">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link primary-color {{ request()->is('contatos') ? 'active' : '' }}">Contatos</a>
                    </li>
                    @if(!session('LoggedUser'))
                      <li class="nav-item">
                          <a href="{{ route('logar')}}" class="nav-link primary-color {{ request()->is('logar') ? 'active' : '' }}">Entrar</a>
                      </li>
                    @else
                      <li class="nav-item">
                          <a href="#" class="nav-link primary-color {{ request()->is('compras_carrinho') ? 'active' : '' }}">Minhas Compras</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link primary-color">Sair</a>
                      </li>
                    @endif  
                    <li class="nav-item">
                        <a href="{{ route('ver_carrinho')}}" class="btn btn-sm"><i class="bi bi-cart-fill" style="heigh: 10px; width: 10px;"></i></a>
                    </li>
                </ul>
            </div>   
          @if(session('LoggedUser'))
            <div class="col-12">
              <p class="text-right">Seja bem-vindo(a), {{ $LoggedUserinfo->nome }}</p>
            </div>
          @endif     
        </div>
    </nav>
    <!-- FIM DA NAVBAR -->

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

    <!-- FORM DE CADASTRO -->

    <div class="container">
        <div class="row">
          <div class="col-12 mt-5">
                  <h2 class="title primary-color">Dados Pessoais</h2>
                  <p class="subtitle secondary-color">
                  </p>
              </div>   
          </div>
          <form method="post" action="{{ route('cadastrar_cliente')}}">
          @csrf
            <div class="form-group mt-3 col-6">
              <label for="Nome">Nome Completo</label>
              <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite seu nome completo">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="Nome">CPF</label>
              <input type="text" name="cpf" class="form-control" id="cpf" aria-describedby="cpf" placeholder="Digite seu CPF completo">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu melhor e-mail">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-6">
              <label for="Senha">Senha</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
            </div>
            <div class="col-12 mt-5 col-6">
                <h2 class="title primary-color">Endere??o</h2>
                <p class="subtitle secondary-color">
                </p>
            </div> 
            <div class="form-group mt-3 col-6">
              <label for="Logradouro">Logradouro</label>
              <input type="text" name="logradouro" class="form-control" id="endereco" aria-describedby="Endere??o" placeholder="Digite seu Endere??o completo">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="Nome">N??mero</label>
              <input type="text" name="numero" class="form-control" id="numero" aria-describedby="numero" placeholder="N??mero">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="Nome">Complemento</label>
              <input type="text" name="complemento" class="form-control" id="Complemento" aria-describedby="Complemento" placeholder="Complemento">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="Nome">CEP</label>
              <input type="text" name="cep" class="form-control" id="cep" aria-describedby="cep" placeholder="Digite seu cep">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="Nome">Cidade</label>
              <input type="text" name="cidade" class="form-control" id="Cidade" aria-describedby="Cidade" placeholder="Digite sua Cidade">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-3 col-6">
              <label for="estado">Estado</label>
              <input type="text" name="estado" class="form-control" id="Estado" aria-describedby="Estado" placeholder="Digite seu Estado">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> 
            <div class="form-check mt-3 col-6">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" value="cadastrar" class="btn btn-primary mt-3">Cadastrar</button>
          </form>
        </div>    
    </div>         

    <!-- FIM FORM CADASTRO -->
    


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
                  Inscreva-se para saber em primeira m??o
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
                  <h4>Voc?? pode estar buscando por:</h4>
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


