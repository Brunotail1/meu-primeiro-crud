<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function create()
    {
        return view('Clientes.create');
    }


    public function consultaCep($cep)
    {

        $cep = preg_replace('/[^0-9]/', '', $cep);

        $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/{$cep}/json/");
        return $response->json();
    }
    public function store(Request $request)
    {


        $request->validate([
            'nome' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
        ]);


        Cliente::create($request->except('_token'));


        return redirect()->route('clientes.create')->with('sucesso', 'Cliente cadastrado com sucesso!');
    }

    public function index()
    {
        $clientes = Cliente::all();

        return view('Clientes.index', compact('clientes'));
    }

    public function excluir($id)
    {

        Cliente::findOrFail($id)->delete();

        return redirect()->route('clientes.index')->with('sucesso', 'Cliente excluído com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('Clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->except(['_token', '_method']));

        return redirect()->route('clientes.index')->with('sucesso', 'Cliente atualizado com sucesso!');
    }
}
