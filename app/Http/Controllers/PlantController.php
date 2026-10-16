<?php

namespace App\Http\Controllers;

use App\Models\Plant;

class PlantController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    // Hanya Menampilkan Katalog
    public function index()
    {
        $plants = Plant::all();
        return view('pages.plants', compact('plants'));
    }

    // Hanya Menampilkan Detail Produk
    public function show($id)
    {
        $plant = Plant::findOrFail($id);
        return view('pages.plant-detail', compact('plant'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}