<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class MLControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_games = namagame::all();
        $pesanans = Pesanan::join('jenis_game', 'pesanan.jenis_game', '=', 'jenis_game.id_jenis_game')
                            ->join('jenis_paket', 'pesanan.jenis_paket', '=', 'jenis_paket.id_jenis_paket')
                            ->join('metode_pembayaran', 'pesanan.metode_pembayaran', '=', 'metode_pembayaran.id_metode_pembayaran')
                            ->select('id_pesanan', 'jenis_paket.nama_paket', 'metode_pembayaran.metode_pembayaran', 'jenis_game.nama_game')
                            ->get();
        return view('/beliML', compact(
            'pakets', 'metodes', 'jenis_games', 'pesanans'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $data_pesanan = new pesanan;
        return view('/beliML', compact(
            'jenis_games', 'metodes', 'pakets', 'data_pesanan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_pesanan = new pesanan;
        $data_pesanan->email = $request->email;
        $data_pesanan->id_game = $request->id_game;
        $data_pesanan->jenis_game = $request->jenis_game;
        $data_pesanan->metode_pembayaran = $request->metode_pembayaran;
        $data_pesanan->jenis_paket = $request->jenis_paket;
        $data_pesanan->save();

        return redirect('MLbeli')->with('massage2', 'beli berhasil');
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
    public function destroy(string $id)
    {
        //
    }
}
