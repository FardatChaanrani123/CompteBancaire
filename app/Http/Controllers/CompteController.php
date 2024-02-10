<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\AccountType;
use App\Models\compte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return View("compte.index",[
            "comptes" => compte::with('client','accountType')->get()
        ]);  
      }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("compte.create",["clients"=>Client::all(),
        "comptes"=>AccountType::all(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $compte = new Compte();
        $compte->solde = $request->solde;
        $compte->client_id = $request->client_id;
        $compte->account_type_id = $request->type_account;
        $compte->save();
        return redirect()->route('comptes.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $compte = Compte::find($id);
        return View('compte.index',compact('compte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $compte = Compte::find($id);
        $compte->solde = $request->solde;
        $compte->client_id = $request->client_id;
        $compte->account_type_id = $request->type_account;
        $compte->update();
        return redirect()->route('comptes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compte = Compte::find($id);
        $compte->delete();
        return redirect()->route('comptes.index');
    }
}
