@extends('layout/principal')

@section('conteudo')

<form action="/login" method="post">

	<input type="hidden" value="{{csrf_token()}}" name="_token">
	<div class="form-group">
		<h1 class="text-center">Login</h1>
	</div>
	
	<div class="form-group">
		<label for="email">Email:</label>
		<input value="{{old('email')}}" type="text" name="email" id="email" class="form-control">		
	</div>
	<div class="form-group">
		<label for="password">Senha:</label>
		<input value="{{old('password')}}" type="password" name="password" id="password" class="form-control"></div>
		<div class="form-group ">
			<button class="btn btn-primary form-control" type="submit">Entrar</button>
		</div>

	</form>
	@stop