<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 1', 'valor' => '10', 'foto' => 'images/produto1.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome' => 'Produto 2', 'valor' => '10', 'foto' => 'images/produto2.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'Produto 3', 'valor' => '10', 'foto' => 'images/produto3.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'Produto 4', 'valor' => '10', 'foto' => 'images/produto4.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'Produto 5', 'valor' => '10', 'foto' => 'images/produto5.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'Produto 6', 'valor' => '10', 'foto' => 'images/produto6.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome' => 'Produto 7', 'valor' => '10', 'foto' => 'images/produto7.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome' => 'Produto 8', 'valor' => '10', 'foto' => 'images/produto8.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod8->save();

        $prod9 = new \App\Models\Produto(['nome' => 'Produto 9', 'valor' => '10', 'foto' => 'images/produto9.jpeg', 'descricao' => 'Lorem Ipsum sit dolor ammet', 'categoria_id' => $cat->id]);
        $prod9->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
