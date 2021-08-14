@extends("layout")
@section("conteudo")
    <div class="container" id="featured-container">
        <div class="col-12">
            <h2 class="title primary-color">Carrinho</h2>
            <p class="subtitle secondary-color">
            </p>
        </div>    
    </div>
    <div class="container">
        @if(isset($cart) && count($cart) > 0)
        <table class="table table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Foto</th>
                <th>Valor</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        @foreach ($cart as $p)
            <tr>
                <td>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
                <td>{{ $p->nome }}</td>
                <td><img src="{{ asset($p->foto) }}" height="50" /></td>
                <td>{{ $p->valor }}</td>
                <td>{{ $p->descricao }}</td>
            </tr>
        @endforeach
        </table> 
        @endif 
    </div>         
@endsection    

