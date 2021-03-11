<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $objProduto;
    private $objCategoria;
    private $objMarca;

    public function __construct()
    {

        $this->objProduto = new Produto();
        $this->objCategoria = new Categoria();
        $this->objMarca = new Marca();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produto = $this->objProduto->all();
        $categoria = $this->objCategoria->all();
        $marca = $this->objMarca->all();


        return view('produtos', compact('produto', 'categoria', 'marca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = $this->objCategoria->all();
        $marca = $this->objMarca->all();
        $categoria_padrao = $this->objCategoria->find(1);
        $marca_padrao = $this->objMarca->find(1);

        return view('create_produto', compact('categoria', 'marca', 'categoria_padrao', 'marca_padrao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $produto_inserido = $this->objProduto->create([
            'nome' => $request->nome,
            'especificacao' => $request->especificacao,
            'status' => $request->status,
            'marca_id' => $request->marca_id,
        ]);

        $produto = $this->objProduto->findOrFail($produto_inserido->id);

        $this->objCategoria->produto()->attach(['produto_id' => $produto->id], ['categoria_id' => $request->categoria_id]);

        return redirect('/produtos/adicionar');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->objProduto->find($id);
        $produto_marca = $this->objProduto->find($id)->marca;
        $produto_categoria = $this->objProduto->find($id)->categoria;

        return view("show_produto", compact('produto', 'produto_marca', 'produto_categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->objProduto->find($id);
        $produto_marca = $this->objMarca->find($produto->marca_id);
        $produto_categoria = $this->objProduto->find($id)->categoria[0];
        $categoria = $this->objCategoria->all();
        $marca = $this->objMarca->all();

        // dd($produto_marca);
        // dd($id);
        // dd($produto_categoria);
        // dd($categoria);
        // dd($marca);

        return view("update_produto", compact('produto', 'produto_marca', 'produto_categoria', 'categoria', 'marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $produto_alterado = $this->objProduto->where(['id' => $id])->update([
            'nome' => $request->nome,
            'especificacao' => $request->especificacao,
            'status' => $request->status,
            'marca_id' => $request->marca_id,
        ]);

        // dd($request->categoria_id); 
        $this->objCategoria->produto()->attach(['produto_id' => $id], ['categoria_id' => $request->categoria_id]);

        return redirect("/produtos/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = $this->objProduto->destroy($id);
        return ($del) ? "Sim" : "Não";
    }
}
