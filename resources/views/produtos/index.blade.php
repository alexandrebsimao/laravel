@extends('MyProject')

@section('content')

<div class="container">

	<h1>Produtos</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Ação</th>
			</tr>
		</thead>
		@foreach($produtos as $produto)
			<tr>
				<td>{{ $produto->id }}</td>
				<td>{{ $produto->nome }}</td>
				<td>{{ $produto->descricao }}</td>
				<td>
					<a href="{{ route('produtos.show', $produto->id) }}">Visualizar</a>
					<a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
					<a href="{{ route('produtos.destroy', $produto->id) }}">Excluir</a>
				</td>
			</tr>
		@endforeach
	</table>
	
	<a href="{{ route('produtos.create') }}">Novo</a>
	
</div>


@endsection