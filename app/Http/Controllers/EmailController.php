<?php

namespace App\Http\Controllers;

use App\Entities\Email;
use App\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller {

    public function create($pessoa_id) {

        $pessoa = Pessoa::find($pessoa_id);
        return view('email.create', compact('pessoa'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'pessoa_id' => 'required',
                    'email' => 'required|email',
        ]);
        if ($validator->fails()) {

            return redirect()->route('email.create', ['pessoa_id' => $request->get('pessoa_id')])
                            ->withErrors($validator)
                            ->withInput();
        }
        $email = Email::create($request->all());
        $pessoa = $email->pessoa;
        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    public function delete($id) {
        $email = Email::find($id);
        $pessoa = $email->pessoa;
        return view('email.delete', compact('email', 'pessoa'));
    }

    public function destroy($id) {
        $pessoa = Email::find($id)->pessoa;
        Email::destroy($id);
        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }
    public function edit($id) {
        $email = Email::find($id);
        return view('email.edit', compact('email'));
    }

    public function update(Request $request, $id) {
        $email = Email::find($id);
        $validator = Validator::make($request->all(), [
                    'pessoa_id' => 'required',
                    'email' => 'required|email'
        ]);
        if ($validator->fails()) {

            return redirect()->route('email.edit', ['id'=>$id])
                            ->withErrors($validator)
                            ->withInput();
        }
        $email->fill($request->all())->save();

        $letra = strtoupper(substr($email->pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }    

}
