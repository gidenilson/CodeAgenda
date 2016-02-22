<?php

namespace App\Http\Controllers;

use App\Entities\Telefone;
use App\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TelefoneController extends Controller {

    public function create($pessoa_id) {

        $pessoa = Pessoa::find($pessoa_id);
        return view('telefone.create', compact('pessoa'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'pessoa_id' => 'required',
                    'descricao' => 'required|min:3|max:50',
                    'codpais' => 'required|max:8',
                    'prefixo' => 'required|integer',
                    'sufixo' => 'required|integer'
        ]);
        if ($validator->fails()) {

            return redirect()->route('telefone.create', ['pessoa_id' => $request->get('pessoa_id')])
                            ->withErrors($validator)
                            ->withInput();
        }
        $telefone = Telefone::create($request->all());
        $pessoa = $telefone->pessoa;
        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    public function delete($id) {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('telefone', 'pessoa'));
    }

    public function destroy($id) {
        $pessoa = Telefone::find($id)->pessoa;
        Telefone::destroy($id);
        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }
    public function edit($id) {
        $telefone = Telefone::find($id);
        return view('telefone.edit', compact('telefone'));
    }

    public function update(Request $request, $id) {
        $telefone = Telefone::find($id);
        $validator = Validator::make($request->all(), [
                    'pessoa_id' => 'required',
                    'descricao' => 'required|min:3|max:50',
                    'codpais' => 'required|max:8',
                    'prefixo' => 'required|integer',
                    'sufixo' => 'required|integer'
        ]);
        if ($validator->fails()) {

            return redirect()->route('telefone.edit', ['id'=>$id])
                            ->withErrors($validator)
                            ->withInput();
        }
        $telefone->fill($request->all())->save();

        $letra = strtoupper(substr($telefone->pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }    

}
