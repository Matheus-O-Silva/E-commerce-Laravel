<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Controllers\Services\VendaService;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {

        $data = [];

        //Buscar todos os produtos
        $listaProdutos = Produto::all(); //Select * from Produtos 
        $data['lista'] = $listaProdutos;

        return view("home", $data);
    }

    public function categoria(Request $request, $idCategoria = 0)
    {
        $data = [];

        //Select * from categorias
        $listaCategoria = Categoria::all();

        //Select * from produtos limit 4
        $queryProduto  = Produto::limit(4);

        if($idCategoria != 0) {
            //select * from produtos WHERE categoria_id = {{ $idCategoria }}
            $queryProduto->where("categoria_id", $idCategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategoria;
        return view("categoria", $data);
    }

    public function adicionarCarrinho($idProduto = 0,Request $request)
    {
        //Buscar produto por ID
        $prod = Produto::find($idProduto);

        if($prod) {

            //Buscar da sessão o carrinho atual
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session(['cart' => $carrinho]);
        }

        return redirect()->route("home");
    }

    public function verCarrinho(Request $request)
    {
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];

        return view("carrinho", $data);
    }

    public function excluirCarrinho($indice, Request $request)
    {
        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }

        session(["cart" => $carrinho]);
        return redirect()->route("ver_carrinho");
    }

    public function finalizar(Request $request)
    {
        $products = session('cart', []);
        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($products, Auth::user());

        if($result["status"] == "ok"){
            $request()->session()->forget("cart");
        }

        $request->session()->flash($result['status'], $result['message']);

        return redirect()->route("ver_carrinho");
    }
}