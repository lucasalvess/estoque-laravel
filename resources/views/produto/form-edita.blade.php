@extends('../layout/principal')

@section('conteudo')
@if(!empty($errors->all()))
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}} </li>
		@endforeach
	</ul>
</div>
@endif
<h1> Altera produto</h1>
<form action="{{action('ProdutoController@salva')}}" method="post">

	<input type="hidden" value="{{csrf_token()}}" name="_token">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input value="{{$produto->nome}}" type="text" name="nome" id="nome" class="form-control">		
	</div>
	<div class="form-group">
		<label for="valor">Valor:</label>
		<input value="{{$produto->valor}}" type="number" name="valor" id="valor" class="form-control">		
	</div>
	<div class="form-group">
		<label for="quantidade">Quantidade:</label>
		<input value="{{$produto->quantidade}}" type="number" name="quantidade" id="quantidade" class="form-control">
	</div>
	<div class="form-group">
		<label for="tamanho">Tamanho:</label>
		<input value="{{$produto->tamanho}}" type="text" name="tamanho" id="tamanho" class="form-control">		
	</div>
	<div class="form-group">
		<label for="descricao">Descriçao:</label>
		<textarea id="descricao" value="" name="descricao" class="form-control">
			{{$produto->descricao}}
		</textarea>		
	</div>
	<div class="form-group">
		<label for="categoria">Categoria</label>
		<select name="categoria_id" id="categoria" class="form-control">
		@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->nome}}</option>
		@endforeach
			
		</select>
	</div>
	<div class="form-group ">
		<button class="btn btn-primary form-control" type="submit">Salvar</button>
	</div>

</form>
@stop