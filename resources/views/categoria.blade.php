@extends("layout")
@section("conteudo")
    <div class="container" id="featured-container">
    <div class="col-12">
      <h2 class="title primary-color">Categorias</h2>
      <p class="subtitle secondary-color">
              Conheça nossas categorias de produtos
          </p>
    </div>

    @if(isset($listaCategoria) && count($listaCategoria) > 0)
      <ul>
        @foreach ($listaCategoria as $categoria)
            <li><a href="{{ route('categoria_by_id', ['idCategoria' => $categoria->id]) }}">{{ $categoria->categoria }}</a></li>
        @endforeach
      </ul>
    @endif

    @include("produtos", ['lista' => $lista])
@endsection    

