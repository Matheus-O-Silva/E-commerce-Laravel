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
  </head>
  <body >
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
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
                        <a href="#" class="nav-link active primary-color" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link primary-color">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link primary-color">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link primary-color">Contatos</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>
    <!-- FIM DA NAVBAR -->

    <!-- SLIDER -->
    <div class="container" id="slider-container">
        <div class="carousel slide" id="slider" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button class="active" data-bs-target="#slider" 
                data-bs-slide-to="0" 
                aria-current="true" 
                aria-label="Slide 1" 
                ></button>
                <button data-bs-target="#slider" 
                data-bs-slide-to="1" 
                aria-label="Slide 2" 
                ></button>
                <button data-bs-target="#slider" 
                data-bs-slide-to="2" 
                aria-label="Slide 3" 
                ></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/banner_piticas.jpg') }}" alt="Banner 1" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Camisetas Geek</h5>
                        <a href="#" class="btn btn-dark">Ver produtos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner_piticas2.jpg') }}" alt="Banner 2" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Camisetas Geek</h5>
                        <a href="#" class="btn btn-dark">Ver produtos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner_piticas3.jpg') }}" alt="Banner 3" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Camisetas Geek</h5>
                        <a href="#" class="btn btn-dark">Ver produtos</a>
                    </div>
                </div>
            </div>
            <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#slider"
            data-bs-slide="prev"
            >
            <i class="bi bi-chevron-compact-left"></i>
            <span class="visually-hidden">Previous</span>
            </button>
            <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#slider"
            data-bs-slide="next"
            >
          <i class="bi bi-chevron-compact-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>

    <!-- FIM DO SLIDER -->

    <!-- MINI BANNER -->
    <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card text-center">
              <i class="bi bi-box primary-color"></i>
              <div class="card-body">
                <h5 class="card-title primary-color">Projetos completos</h5>
                <p class="card-text secondary-color">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="btn btn-dark">Saber Mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-center">
              <i class="bi bi-layers primary-color"></i>
              <div class="card-body">
                <h5 class="card-title primary-color">Você participa também</h5>
                <p class="card-text secondary-color">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="btn btn-dark">Saber Mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-center">
              <i class="bi bi-lightning-charge"></i>
              <div class="card-body primary-color">
                <h5 class="card-title primary-color">
                  Adiantamento de entregas
                </h5>
                <p class="card-text secondary-color">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="btn btn-dark">Saber Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FIM DO MINI BANNER -->

    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
      <div class="col-12">
        <h2 class="title primary-color">Trabalhos em Destaque</h2>
        <p class="subtitle secondary-color">
                Conheça nossos produtos em destaque
            </p>
        </div>
        <div class="col-12" id="featured-images">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM DOS DESTAQUES -->

  </body>
</html>
