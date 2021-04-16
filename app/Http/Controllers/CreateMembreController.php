<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateMembreController extends Controller
{
    public function create() {
        return view('pages.CreateMembres');
    }
    public function store (Request $request) {
        // dd('coucou');
        $membre = new Membre();
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route('home');
    }
}
