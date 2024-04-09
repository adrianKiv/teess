<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Crypt;

class AdminControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pakets = Paket::all();
        $data_admins = admin::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $lihat_pesan = pesan::all();
        $data_pesanan = pesanan::all();
        $pesanans = Pesanan::join('jenis_game', 'pesanan.jenis_game', '=', 'jenis_game.id_jenis_game')
                            ->join('jenis_paket', 'pesanan.jenis_paket', '=', 'jenis_paket.id_jenis_paket')
                            ->join('metode_pembayaran', 'pesanan.metode_pembayaran', '=', 'metode_pembayaran.id_metode_pembayaran')
                            ->select('id_pesanan', 'email', 'id_game', 'jenis_paket.nama_paket', 'metode_pembayaran.metode_pembayaran', 'jenis_game.nama_game', 'pesanan.created_at')
                            ->get();
        return view('indexadmin', compact(
            'data_pesanan', 'pakets', 'metodes', 'jenis_games', 'pesanans', 'lihat_pesan', 'data_admins'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(){
    //     $data_admins = new Admin;
    //     return view('form.createadmin', compact(
    //         'data_admins'
    //     ));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request){
    //     $data_admins = new Admin;
    //     $data_admins->username_admin = $request->username;
    //     $data_admins->password = Crypt::encrypt($request->password);
    //     $data_admins->save();

    //     return redirect('admin')->with('massage1', 'data berhasil di tambahkan');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show($id_admin){

    //     $data_admins = Admin::findorfail($id_admin);

    //     return view('form.editadmin', compact(
    //         'data_admins'
    //     ));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id_admin){
    //     $data_admins = Admin::findorfail($id_admin);

    //     return view('form.editadmin', compact(
    //         'data_admins'
    //     ));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id_admin){
    //     $data_admins = Admin::find($id_admin);
    //     $data_admins->username_admin = $request->username_admin;
    //     $data_admins->password = Crypt::encrypt($request->password);
    //     $data_admins->save();

    //     return redirect('admin')->with('massage2', 'data berhasil di update');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy($id)
    // {
    //     Admin::destroy($id);

    //     return redirect('admin')->with('massage3', 'data berhasil di hapus');
    // }
}
