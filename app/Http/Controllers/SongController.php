<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function show() {
        return view('songs');
    }
    public function store(Request $request)
    {
        // 1. Haal de gegevens op uit het request
        $titel = $request->input('title');
        $artiest = $request->input('artist');
        $jaar = $request->input('release_year');

        // 2. Voor nu even testen of het werkt:
        return "De single " . $titel . " van " . $artiest . " uit " . $jaar . " is ontvangen!";
        
        // In de volgende stap ga je dit waarschijnlijk opslaan in de database:
        // Single::create($request->all());
    }
}
