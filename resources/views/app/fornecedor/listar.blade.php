@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')	
	
  <div class="conteudo-pagina">
		<div class="titulo-pagina-2">
			<p>Fornecedor - @yield('titulo')</p>
		</div>

		<div class="menu">
			<ul>
				<li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
				<li><a href="{{ route('app.fornecedor') }}">Consultar</a></li>
			</ul>
		</div>

		<div class="informação-pagina">
			<div style="width:30%; margin-left:auto; margin-right:auto;">
				... Listar ...	
			</div>
		
		</div>
	</div>
	
	@include('app.layouts._partials.rodape')
@endsection