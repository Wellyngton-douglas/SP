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
				<form action= {{ route('app.fornecedor.listar') }} method="post">
					@csrf
					<input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
					{{ $errors->has('nome') ? $errors->first('nome') : '' }}
					<br>
					<input name="site" value="{{ old('site') }}" type="text" placeholder="Site" class="borda-preta">
					{{ $errors->has('site') ? $errors->first('site') : '' }}
					<br>
					<input name="uf" value="{{ old('uf') }}" type="text" placeholder="UF" class="borda-preta">
					{{ $errors->has('uf') ? $errors->first('uf') : '' }}
					<br>
					<input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
					{{ $errors->has('email') ? $errors->first('email') : '' }}
					<br>
					<button type="submit" class="borda-preta">ENVIAR</button>
				</form>			
			</div>
		
		</div>
	</div>
	
	@include('app.layouts._partials.rodape')
@endsection