<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $characters = Http::get('https://rickandmortyapi.com/api/character');
        $datacharacters = $characters->json();

        $locations = Http::get('https://rickandmortyapi.com/api/location');
        $datalocations = $locations->json();

        $episodes = Http::get('https://rickandmortyapi.com/api/episode');
        $dataepisodes = $episodes->json();

        return view('home', compact('datacharacters','datalocations','dataepisodes'));
    }
}
