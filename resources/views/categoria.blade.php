@extends("layout")
@section("conteudo")
    <div class="container" id="featured-container">
    <div class="col-12">
      <h2 class="title primary-color">Categorias</h2>
      <p class="subtitle secondary-color">
              Conheça nossas categorias de produtos
          </p>
    

    @if(isset($listaCategoria) && count($listaCategoria) > 0)
    <div class="list-group">
        <a href="{{ route('categoria') }}" class="list-group-item list-group-item-action ">Todas</a> 
        @foreach ($listaCategoria as $categoria)
          <a href="{{ route('categoria_by_id', ['idCategoria' => $categoria->id]) }}" class="list-group-item list-group-item-action" >{{ $categoria->categoria }}</a>
    </div>      
        @endforeach
    @endif

    @include("produtos", ['lista' => $lista])
@endsection    

