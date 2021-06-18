<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContatoModel;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = ContatoModel::all();
        foreach($contatos as $c){
            echo $c->idContato . " ";
            echo $c->Nome . " ";
            echo $c->email . " ";
            echo $c->assunto . " ";
            echo $c->mensagem . "<br/>";
        }
    }

    public function exibirContatos()
    {
        $contatos = ContatoModel::all();
        return view('contatosView', compact('contatos'));
    }

    public function exibirCadastro()
    {
        return view('cadastrarContatosView');
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
        $contato = new ContatoModel();

        $contato->Nome = $request->txNome;
        $contato->email = $request->txEmail;
        $contato->assunto = $request->txAssunto;
        $contato->mensagem = $request->txMensagem;
        $contato->save();
        return redirect()->action('App\Http\Controllers\ContatoController@exibirContatos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contatos = ContatoModel::find($id);
        return view('contatosEditar', compact('contatos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $contato = ContatoModel::find($id);
        $contato->update(['Nome'=>$request->txNome]);
        $contato->update(['email'=>$request->txEmail]);
        $contato->update(['assunto'=>$request->txAssunto]);
        $contato->update(['mensagem'=>$request->txMensagem]);

        return redirect()->action('App\Http\Controllers\ContatoController@exibirContatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contatos = ContatoModel::where('idContato', $id)->delete();
        return redirect()->action('App\Http\Controllers\ContatoController@exibirContatos');
    }
}
