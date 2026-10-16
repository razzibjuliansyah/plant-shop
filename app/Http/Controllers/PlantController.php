<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    // Menu 1: Home
    public function home()
    {
        return view('pages.home');
    }

    // Menu 2: About Us
    public function about()
    {
        return view('pages.about');
    }

    // Menu 3: Katalog Produk Tanaman Hias
    public function index()
    {
        $plants = Plant::all();
        return view('pages.plants', compact('plants'));
    }

    // Detail Produk Berdasarkan ID
    public function show($id)
    {
        $plant = Plant::findOrFail($id);
        return view('pages.plant-detail', compact('plant'));
    }

    // Menu 4: Contact
    public function contact()
    {
        return view('pages.contact');
    }
}