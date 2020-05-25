<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use estoque\Categoria;
use Validator;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller{

	public function lista(){

		$produtos = Produto::all();

		return view('produto/listagem')->with('produtos',$produtos);
	}


	public function mostra($id){
		
		$produto = Produto::find($id);

		return view('produto/detalhes')->with('produto',$produto);
	}

	public function novo(){

		return view('produto/formulario')->with('categorias', Categoria::all());
	}

	public function adiciona(ProdutoRequest $request){
		//a linha abaixo faz todo o trabalho sozinha
		//Produto::create($request->all());
		
		//recebendo produto de forma mais explicita
		$parametros = $request->all();
		$produto = new Produto($parametros);


		if ($produto->save()) {
			return redirect('/')->withInput();
		}
		
	}
	
	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect('/');
	}
//-------------------------------------------ATUALIZA----------------------
	public function edita($id){
		$produto = Produto::find($id);
		return view('produto/form-edita')->with(['categorias' => Categoria::all(), 'produto' => $produto]);
	}

	public function salva(ProdutoRequest $request){
		$produtoAtualizado = new Produto($request->all());

		if ($produtoAtualizado->save()) {
			return redirect('/')->withInput();
		}

	}
	//---------------------------------------------------------------------------


}
