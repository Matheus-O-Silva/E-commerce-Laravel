<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../resources/css/style.css">
    
    <title>Nerd Shop | Home</title>
  </head>
  <body>
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
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>

    <!--For Page-->
<div class="page">
    <!--For Row containing all card-->
    <div class="row">
        <!--Card 1-->
        <div class="col-sm">
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="https://i.imgur.com/9VZGPJF.jpg" alt=""> <a>
                        <div class="mask rgba-white-slight"></div>
                    </a> </div>
                <!--Card Body-->
                <div class="card-body card-body-cascade text-center">
                    <!--Card Title-->
                    <h4 class="card-title"><strong><a href="">Mobile</a></strong></h4> <!-- Card Description-->
                    <p class="card-text">This is a Mobile phone with all the advance features and at best price. </p>
                    <p class="price">$50</p> <!-- Card Rating-->
                    <ul class="row rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <!--Card footer-->
                    <div class="card-footer">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="col-sm">
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="https://i.imgur.com/Fc9aj6m.jpg" alt=""> <a>
                        <div class="mask rgba-white-slight"></div>
                    </a> </div>
                <!--Card Body-->
                <div class="card-body card-body-cascade text-center">
                    <!--Card Title-->
                    <h4 class="card-title"><strong><a href="">Camera</a></strong></h4>
                    <!--Card Description-->
                    <p class="card-text">Comes with advance sensors, this is a perfect match for photographers. </p>
                    <p class="price">$60</p> <!-- Card Rating-->
                    <ul class="row rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <!--Card footer-->
                    <div class="card-footer">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="col-sm">
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="https://i.imgur.com/FDdJ4Xm.jpg" alt=""> <a>
                        <div class="mask rgba-white-slight"></div>
                    </a> </div>
                <!--Card Body-->
                <div class="card-body card-body-cascade text-center">
                    <!--Card Title-->
                    <h4 class="card-title"><strong><a href="">Watch</a></strong></h4>
                    <!--Description-->
                    <p class="card-text">Smart watch with Easy-to-go connect option and fitness tracking functions. </p>
                    <p class="price">$70</p> <!-- Card Rating-->
                    <ul class="row rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <!--Card footer-->
                    <div class="card-footer">
                        <p>ADD TO CART</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
  </body>
</html>
