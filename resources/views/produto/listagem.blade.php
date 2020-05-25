@extends('layout/principal')


@section('conteudo')
<h1>Listagem de produtos</h1>
<table class="table table-striped table-hover table-bordered ">
	@foreach ($produtos as $produto)		
	<tr class={{$produto->quantidade <= 1 ? 'danger' : ''}}>
		<td>{{$produto->nome}}</td>
		<td>{{$produto->descricao}}</td>
		<td>{{$produto->valor}}</td>
		<td>{{$produto->quantidade}}</td>
		<td>{{$produto->tamanho}}</td>
		<td>{{$produto->categoria['nome']}}</td>
		<td><a href="{{action('ProdutoController@mostra', $produto->id)}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
		<td><a href="{{action('ProdutoController@remove',$produto->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
		<td><a href="{{action('ProdutoController@edita',$produto->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></td>
	</tr>
	@endforeach
</table>
<h4>
	<span class="label label-danger pull-right"> Um ou menos itens no estoque </span> 
</h4>

@if(old('nome'))
<div class="alert alert-success">
	{{old('nome')}} adicionado com sucesso!
</div>
@endif    
@stop