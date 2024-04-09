<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class beliControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexML(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_games = namagame::all();
        $pesanans = Pesanan::join('jenis_game', 'pesanan.jenis_game', '=', 'jenis_game.id_jenis_game')
                            ->join('jenis_paket', 'pesanan.jenis_paket', '=', 'jenis_paket.id_jenis_paket')
                            ->join('metode_pembayaran', 'pesanan.metode_pembayaran', '=', 'metode_pembayaran.id_metode_pembayaran')
                            ->select('id_pesanan','pesanan.nama_pembeli', 'jenis_paket.nama_paket', 'metode_pembayaran.metode_pembayaran', 'jenis_game.nama_game')
                            ->get();
        return view('/beliML', compact(
            'pakets', 'metodes', 'jenis_games', 'pesanans'
        ));
    }

    public function indexPUBG(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliPUBGM', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }

    public function indexAPEX(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliApex', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }

    public function indexDOTA(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliDota', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }

    public function indexGENSHIN(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliHonkai', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }

    public function indexLOL(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliLOL', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }

    public function indexSTAR(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliStarRail', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }

    public function indexVALO(){
        $pakets = paket::all();
        $metodes = metodepembayaran::all();
        $jenis_game = namagame::all();
        return view('beliValo', compact(
            'pakets', 'metodes', 'jenis_game'
        ));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function createML(){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $data_pesanan = new pesanan;
        return view('beliML', compact(
            'jenis_games', 'metodes', 'pakets', 'data_pesanan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data_pesanan = new pesanan;
        $data_pesanan->nama_pembeli = $request->nama_pembeli;
        $data_pesanan->jenis_game = $request->jenis_game;
        $data_pesanan->metode_pembayaran = $request->metode_pembayaran;
        $data_pesanan->jenis_paket = $request->jenis_paket;
        $data_pesanan->save();

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(paket $paket){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paket $paket){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paket $paket){
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paket $paket){
        //
    }
}
