<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)     //na post na get de accessible am objet $request
    {
        $nom = $request -> nom;
        $description = $request -> description;

        Client::create([
            'nom' => $nom,
            'description' => $description,
        ]);

        return redirect() -> route('clients.index');
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Client::find($id) -> delete();
        return redirect() -> route('clients.index');
    }
}
