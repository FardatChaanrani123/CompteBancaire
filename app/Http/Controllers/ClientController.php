<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $client = Client::all();
        return View('client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return View('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->CNI = $request->CNI;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->naissance = $request->naissance;
        $client->save();
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return view('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
       // $client = Client::all();
        return View('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $client->CNI = $request->CNI;
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->naissance = $request->naissance;
        $client->update();
        return redirect()->route('clients.index')->with("success","Modification effectuee");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients.index')->with("danger","Suppression ok");
    }
}
