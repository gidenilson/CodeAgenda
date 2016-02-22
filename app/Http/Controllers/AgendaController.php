<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;
use App\Entities\Telefone;
use Illuminate\Http\Request;

class AgendaController extends Controller {

    public function index($letra = 'A') {

        $pessoas = Pessoa::where('apelido', 'like', $letra . '%')->get();
        return view('agenda', compact('pessoas'));
    }

    public function pesquisa(Request $req) {
        $pesquisa = $req->input('pesquisa');
        $pessoas = [];
        if(!empty($pesquisa)) {
           $pessoas = Pessoa::where('apelido', 'like', '%' . $pesquisa . '%')->orWhere('nome', 'like', '%' . $pesquisa . '%')->get(); 
        }        
        return view('agenda', compact('pessoas'));
    }

    



}
