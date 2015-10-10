@extends('MyProject')

@section('content')


<div class="container">
	<strong>Nome:</strong><br>
	{{ $produto->nome }}
	<br><br>
	<strong>Descrição:</strong><br>
	{{ $produto->descricao }}
</div>

@endsection