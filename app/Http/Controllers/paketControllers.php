<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class paketControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $pesanans = Pesanan::all();
        return view('admin.paket', compact(
            'pakets', 'metodes', 'jenis_games', 'pesanans'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $pakets = new paket;
        return view('form.createpaket', compact(
            'pakets'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $pakets = new paket;
        $pakets->nama_paket = $request->nama_paket;
        $pakets->isi_paket = $request->isi_paket;
        $pakets->harga_paket = $request->harga_paket;
        $pakets->save();

        return redirect('paket')->with('massage1', 'data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_paket){

        $pakets = paket::findorfail($id_paket);

        return view('form.editpaket', compact(
            'pakets'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_paket){
        $pakets = paket::findorfail($id_paket);

        return view('form.editpaket', compact(
            'pakets'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_paket){
        $pakets = paket::find($id_paket);
        $pakets->nama_paket = $request->nama_paket;
        $pakets->isi_paket = $request->isi_paket;
        $pakets->harga_paket = $request->harga_paket;
        $pakets->update();

        return redirect('paket')->with('massage2', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        paket::destroy($id);

        return redirect('paket')->with('massage3', 'data berhasil di hapus');
    }
}
