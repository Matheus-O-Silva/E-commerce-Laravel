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
                    <img class="card-img-top" src="{{ asset('images/produto1.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto2.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto3.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto4.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto5.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto6.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto7.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto8.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto9.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto10.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto3.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
                <div class="col-12 col-md-4">
                    <img class="card-img-top" src="{{ asset('images/produto4.jpeg') }}" alt="Imagem de capa do card">
                  <div class="card-body">
                      <h5 class="card-title">Camiseta Dunder Mifflin.inc</h5>
                      <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                      <a href="#" class="btn btn-primary">Adicionar item</a> 
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM DOS DESTAQUES -->

    <!-- INFO -->

    <div class="container" id="info-container">
      <div class="col-12">
        <h2 class="title primary-color">Detalhes Importantes</h2>
        <p class="subtitle secondary-color">
          Saiba mais sobre nossos incríveis produtos
        </p>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-5" id="info-banner">
            <img src="{{ asset('img/infobanner.jpg') }}" alt="Informações" class="img-fluid" />
          </div>
          <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
            <div class="row">
              <div class="col-12">
                <h2 class="title">Promoções que fazem sucesso:</h2>
                <p class="subtitle secondary-color">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Praesentium tempore fugit et iusto quisquam beatae impedit
                  nobis quas doloribus, atque, ut id similique eligendi, ab
                  soluta magnam maxime cum debitis.
                </p>
              </div>
              <div class="col-12" id="info-numbers">
                <div class="row">
                  <div class="col-4">
                    <h3 class="primary-color">Lorem Ipsum</h3>
                    <p class="secondary-color">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
                  </div>
                  <div class="col-4">
                    <h3 class="primary-color">Lorem Ipsum</h3>
                    <p class="secondary-color">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
                  </div>
                  <div class="col-4">
                    <h3 class="primary-color">Lorem Ipsum</h3>
                    <p class="secondary-color">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="btn btn-dark">Saber Mais</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIM INFO -->

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
