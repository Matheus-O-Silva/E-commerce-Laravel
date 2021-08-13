<!-- CONTEÚDO -->
  <div class="container" id="featured-container">
    <div class="col-12">
      <h2 class="title primary-color">Produtos em Destaque</h2>
      <p class="subtitle secondary-color">
              Conheça nossos produtos em destaque
          </p>
    </div>
    <div class="col-12" id="featured-images">
      <div class="row g-4">
        @if(isset($lista) && count($lista) > 0)
          @foreach ($lista as $prod)
            <div class="col-12 col-md-2">
                <img class="card-img-top" src="{{ asset( $prod->foto ) }}" alt="Imagem de capa do card">
              <div class="card-body">
                  <h5 class="card-title">{{ $prod->nome}} - R$ {{ $prod->valor }}</h5>
                  <p class="card-text">{{ $prod->descricao}}</p>
                  <a href="#" class="btn btn-primary">Adicionar item</a> 
              </div>
            </div>
          @endforeach
        @endif    
      </div>
    </div>
  </div>

  <!-- FIM DOS CONTEÚDOS -->