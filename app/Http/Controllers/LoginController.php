<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index() {
		return view('site.login', ['titulo' => 'Login']);
	}

	public function autenticar(Request $request) {
		$regras = [
			'usuario' => 'email|required',
		  'senha' => 'required',
		];

		$feedback = [
			'required' => 'O campo precisa :attribute ser preenchido',
			'email' => 'O usúario (email) informado não é valido',
		];
		
		//validação dos dados que vem na requisição
		$request -> validate($regras, $feedback);
		
		return redirect() -> route('site.index');
	}
}
