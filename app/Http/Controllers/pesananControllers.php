<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class pesananControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $lihat_pesan = pesan::all();
        $jenis_games = NamaGame::all();
        $data_pesanan = pesanan::all();
        $pesanans = Pesanan::join('jenis_game', 'pesanan.jenis_game', '=', 'jenis_game.id_jenis_game')
                            ->join('jenis_paket', 'pesanan.jenis_paket', '=', 'jenis_paket.id_jenis_paket')
                            ->join('metode_pembayaran', 'pesanan.metode_pembayaran', '=', 'metode_pembayaran.id_metode_pembayaran')
                            ->select('pesanan.id_pesanan', 'email', 'id_game', 'jenis_paket.nama_paket', 'metode_pembayaran.metode_pembayaran', 'jenis_game.nama_game', 'pesanan.created_at')
                            ->get();
        return view('indexadmin', compact(
            'pakets', 'metodes', 'jenis_games', 'pesanans', 'lihat_pesan', 'data_pesanan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $data_pesanan = new pesanan;
        return view('form.createpesanan', compact(
            'jenis_games', 'metodes', 'pakets', 'data_pesanan'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data_pesanan = new pesanan;
        $data_pesanan->email = $request->email;
        $data_pesanan->id_game = $request->id_game;
        $data_pesanan->jenis_game = $request->jenis_game;
        $data_pesanan->metode_pembayaran = $request->metode_pembayaran;
        $data_pesanan->jenis_paket = $request->jenis_paket;
        $data_pesanan->save();

        return redirect('admin')->with('massage1', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_pesanan){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $data_pesanan = pesanan::findorfail($id_pesanan);
        $pesanans = Pesanan::join('jenis_game', 'pesanan.jenis_game', '=', 'jenis_game.id_jenis_game')
        ->join('jenis_paket', 'pesanan.jenis_paket', '=', 'jenis_paket.id_jenis_paket')
        ->join('metode_pembayaran', 'pesanan.metode_pembayaran', '=', 'metode_pembayaran.id_metode_pembayaran')
        ->select('id_pesanan', 'email', 'id_game', 'jenis_paket.nama_paket', 'metode_pembayaran.metode_pembayaran', 'jenis_game.nama_game')
        ->get();
        return view('form.editpesanan', compact(
            'data_pesanan', 'pesanans', 'pakets', 'metodes', 'jenis_games'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_pesanan){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $data_pesanan = pesanan::findorfail($id_pesanan);
        $pesanans = Pesanan::join('jenis_game', 'pesanan.jenis_game', '=', 'jenis_game.id_jenis_game')
        ->join('jenis_paket', 'pesanan.jenis_paket', '=', 'jenis_paket.id_jenis_paket')
        ->join('metode_pembayaran', 'pesanan.metode_pembayaran', '=', 'metode_pembayaran.id_metode_pembayaran')
        ->select('id_pesanan', 'email', 'id_game', 'jenis_paket.nama_paket', 'metode_pembayaran.metode_pembayaran', 'jenis_game.nama_game', 'pesanan.created_at')
        ->get();

        return view('form.editpesanan', compact(
            'data_pesanan', 'pakets', 'metodes', 'jenis_games', 'pesanans'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_pesanan){
        $data_pesanan = pesanan::find($id_pesanan);
        $data_pesanan->email = $request->email;
        $data_pesanan->id_game = $request->id_game;
        $data_pesanan->jenis_game = $request->jenis_game;
        $data_pesanan->metode_pembayaran = $request->metode_pembayaran;
        $data_pesanan->jenis_paket = $request->jenis_paket;
        $data_pesanan->update();

        return redirect('admin')->with('massage2', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_pesanan)
    {
        pesanan::destroy($id_pesanan);

        return redirect('admin')->with('massage3', 'data berhasil di hapus');
    }
}
