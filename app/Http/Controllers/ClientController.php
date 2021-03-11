<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Representante; 
use App\Models\Cliente; 

class ClientController extends Controller
{

    private $objRepresentante;
    private $objCliente;


    public function __construct()
    {

        $this->objRepresentante = new Representante();
        $this->objCliente = new Cliente();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $representante = $this->objRepresentante->all();
        $cliente = $this->objCliente->all();

       // dd($cliente); 
        return view('clientes', compact('cliente', 'representante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = $this->objCliente->find($id);
        $representante = $this->objCliente->find($id)->representante;

        // dd($representante); 
        return view("show_cliente", compact('cliente', 'representante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = $this->objCliente->find($id);
        $representante = $this->objCliente->find($id)->representante;
        $representantes = $this->objRepresentante->All();

        // dd($produto);
        // dd($produto_marca);
        // dd($produto_categoria[0]);
        // dd($categoria);
        // dd($marca);

        return view("update_cliente", compact('cliente', 'representante', 'representantes'));
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
    }
}
