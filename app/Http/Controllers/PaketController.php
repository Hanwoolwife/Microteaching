<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $pakets = Paket::latest()->paginate(10);
        
        return view('pakets.index', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pakets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the input
        $request->validate([
            'name' => 'required',
            'schedule' => 'required',
            'detail' => 'required'
        ]);
        // create a new paket
        Paket::create($request->all());

        // redirect the user and send friendly message
        return redirect()->route('pakets.index')->with('success', 'Paket created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $paket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        //
    }
}
