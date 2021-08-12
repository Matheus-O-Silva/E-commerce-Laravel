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
            <li>{{ $categoria->categoria }}</li>
        @endforeach
      </ul>
    @endif

    @if(isset($lista) && count($lista) > 0)
      <ul>
        @foreach ($lista as $produtos)
            <li>{{ $produtos->nome }}</li>
        @endforeach
      </ul>
    @endif
@endsection    

