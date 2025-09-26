<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(); 
        return view('users', ['users' => $users]); 
    }


    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $create = User::create([
            'name'=> $request -> input('name'),
            'email'=>$request -> input('email'),
            'password'=> password_hash( $request -> input('password'), PASSWORD_DEFAULT)
        ]);
        if ($create) {
            return redirect()->route('users.index')->with('message', 'Cadastrado com Sucesso');
        } else {
            return redirect()->back()->with('message', 'Erro no Cadastro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   $user = User::findOrFail($id);
        return view('user_show', ['user' => $user]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $user = User::findOrFail($id); 
    return view('user_edit', ['user' => $user]); 
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
 
        $user = User::findOrFail($id);

        $update = $user->update($request->except('_token', '_method'));

        if ($update) {
            return redirect()->route('users.index')->with('message', 'Atualizado com Sucesso');
        } else {
            return redirect()->back()->with('message', 'Erro na Atualização');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $user = User::findOrFail($id);
        $delete = $user->delete();

        if ($delete) {
            return redirect()->route('users.index')->with('message', 'Deletado com Sucesso');
        } else {
            return redirect()->back()->with('message', 'Erro ao Deletar');
        }
    }
}
