<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;

class pesanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = pesan::all();

        return view('contact', compact(
            'pesan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesan = new pesan;

        return view('contact', compact(
            'pesan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesan = new pesan;
        $pesan->nama_depan = $request->nama_depan;
        $pesan->nama_belakang = $request->nama_belakang;
        $pesan->email = $request->email;
        $pesan->judul = $request->judul;
        $pesan->pesan = $request->pesan;
        $pesan->save();

        return redirect('pesan')->with('massage1', 'pesan berhasil di kirim');;

    }

    /**
     * Display the specified resource.
     */
    public function show(pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pesan $pesan)
    {
        //
    }
}
