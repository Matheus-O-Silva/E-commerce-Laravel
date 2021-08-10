<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../resources/css/style.css">
    
    <title>Nerd Shop | Home</title>
  </head>
  <body class= "bg-dark text-black">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Nerd Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Cadastrar-se</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0" style="margin-left: 100px">
            <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
          </form>
        </div>
      </div>
      <li class="nav-item">
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
      </li>  
    </nav>

        
        <div class="container mt-3">

            <div class="row">

                <div class="card" style="width: 18rem; margin: 20px;">
                  <img class="card-img-top" src="{{ asset('images/produto1.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto2.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Deadpool</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto3.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Star Wars Queen</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto4.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Playstation</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto5.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Super Mario cogumelo</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto6.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Free Rick</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto7.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Walter White - Breaking Bad</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto8.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Dharma Iniciative - Lost</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                <div class="card" style="width: 18rem; margin: 20px;">
                <img class="card-img-top" src="{{ asset('images/produto9.jpeg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Lost</h5>
                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                    <a href="#" class="btn btn-primary">Adicionar item</a>
                </div>
                </div>

                

            <div>
        </div>

        
  </body>
</html>
