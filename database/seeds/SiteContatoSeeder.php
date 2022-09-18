<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(82) 98817-2493';
        $contato->email = 'sistemasg@contato.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Quero conhecer a ferramenta';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
