<?php

namespace App\Http\Controllers;

use App\Models\Bezoeker;

use App\Models\Receptionist;

use App\Models\Bezoekerspas;

use Illuminate\Http\Request;

class BezoekerController extends Controller
{
    // 1. Laat het overzicht zien
    public function index()
    {
        $bezoekers = Bezoeker::with(['receptionist', 'pas'])->get();
        return view('bezoekers.index', compact('bezoekers'));
    }

    // 2. Laat het formulier zien (DIT IS DE FUNCTIE DIE NU MIST)
    public function create()
    {
        $receptionisten = Receptionist::all();
        $vrijePassen = Bezoekerspas::all(); 
        return view('bezoekers.create', compact('receptionisten', 'vrijePassen'));
    }

    // 3. Sla de bezoeker op
    public function store(Request $request)
    {
        $bezoeker = new Bezoeker();
        $bezoeker->naam = $request->naam;
        $bezoeker->bedrijf = $request->bedrijf;
        $bezoeker->aankomst = now();
        $bezoeker->idReceptionist = $request->idReceptionist;
        $bezoeker->idBezoekerspas = $request->idBezoekerspas;
        $bezoeker->save();

        return redirect()->route('bezoekers.index');
    }

    // 4. Werk de vertrektijd bij
    public function update(Request $request, $id)
{
    $bezoeker = Bezoeker::findOrFail($id);
    $bezoeker->vertrek = now(); // Registreert de huidige datum en tijd
    $bezoeker->save();

    return redirect()->route('bezoekers.index')->with('status', 'Bezoeker is uitgecheckt!');
}
}
