<?php

namespace App\Http\Controllers;

use App\Models\Bezoeker;

use Illuminate\Http\Request;

class BezoekerController extends Controller
{
    public function index()
    {
        // Haal alle bezoekers op en neem de relaties mee (eager loading)
        $bezoekers = Bezoeker::with(['receptionist', 'pas'])->get();

        // Stuur de data naar de view 'bezoekers.index'
        return view('bezoekers.index', compact('bezoekers'));
    }

     public function update(Request $request, $id)
    {
    $bezoeker = \App\Models\Bezoeker::findOrFail($id);
    $bezoeker->vertrek = now(); // Registreert de huidige datum en tijd
    $bezoeker->save();

    return redirect()->route('bezoekers.index');
    }
}
