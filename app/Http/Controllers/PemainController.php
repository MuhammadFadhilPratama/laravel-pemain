<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
     public  function index()
        {
        return view('player', [
            'title' => 'Player',
            'pemain' => Pemain::all()
        ]);
    }
    public  function show(Pemain $pemain_detil)
    {
    return view('player_detil', [
        'title' => 'Player Detil',
        'pemain_detil' => $pemain_detil
    ]);
}
}

