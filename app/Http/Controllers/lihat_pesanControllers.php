<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;

class lihat_pesanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = pesan::all();

        return view('admin.lihat_pesan', compact(
            'pesan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pesan)
    {
        pesan::destroy($id_pesan);

        return redirect('lihat_pesan')->with('massage3', 'data berhasil di hapus');
    }
}
