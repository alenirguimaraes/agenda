@extends("template.app")
@section("content")
<div class="container">
	<h2>Contatos</h2>
		<p>Listagem dos contatos cadastrados.</p>
	<div class="col-md-3 panel-group">
		@foreach($pessoas as $pessoa)
			<div class="panel panel-info">
				<div class="panel-heading">
					<strong>{{$pessoa->nome}}</strong>
				</div>
				<div class="panel-body">
					<strong>
						C&oacute;digo: {{$pessoa->id}}
					</strong><br>
					@foreach($pessoa->telefone as $telefone)
					<p><strong>Telefone: </strong>({{$telefone->ddd}}) {{$telefone->telefone}}</p>
					@endforeach
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection