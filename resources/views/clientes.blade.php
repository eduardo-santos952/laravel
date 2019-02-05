	<h2>Listando Clientes:</h2>
	<ul>
		@foreach($clientes as $cliente)
		<li><a href="{{$cliente->id}}">{{$cliente->nome}}</a></li>
		@endforeach
	</ul>
	<form method="post">
		{{csrf_field()}}
		<input type="text" name="nome" placeholder="Nome!">
		<input type="text" name="email" placeholder="email!">
		<input type="submit" value="inserir">
	</form>
