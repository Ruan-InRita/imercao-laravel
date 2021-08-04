<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = $request->all();

        return view('produto',[
            'data' => isset($data['ruan']) ?  "eh verdadeira" : "Nao eh verdadeira"
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try{
            Product::create([
              'name' => $data['nome'],
              'price' => $data['preco'],
              'description' => $data['descricao'],
              'brand' => $data['marca']
            ]);

            return redirect()->route("home");
        }catch(Exception $error){
            dd($error);
        }
    }
    public function pageList(){

        $produtos = Product::all()->toArray();
        $pro = DB::table('product')->get();

        return view('list-product',['produtos' => $produtos]);
    }
}
