<h3>Fornecedores</h3>

@isset($fornecedores)
	@forelse( $fornecedores as $indice => $fornecedor)
		Fornecedores: {{ $fornecedor['nome'] }}
		<br>
		Status: {{ $fornecedor['status'] }}
		<br>
		CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
		<br>
		Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
		<hr>
	@empty
		Não existe fornecederes cadastrados!!!
	@endforelse
@endisset
