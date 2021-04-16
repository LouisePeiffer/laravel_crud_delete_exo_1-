<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $dataMembres = Membre::all();
        return view('pages.membres', compact('dataMembres'));
    }
    public function femmes() {
        $dataFemmes = Membre::where('genre', 'femme')->take(15)->get();
        return view('pages.femmes', compact('dataFemmes'));
    }
    public function hommes() {
        $dataHommes = Membre::where('genre', 'homme')->take(15)->get();
        return view('pages.hommes', compact('dataHommes'));
    }
}
