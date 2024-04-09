<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class bayarControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $pesanans = Pesanan::all();
        return view('admin.metode', compact(
            'pakets', 'metodes', 'jenis_games', 'pesanans'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $metodes = new Metodepembayaran;
        return view('form.createbayar', compact(
            'metodes'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $metodes = new Metodepembayaran;
        $metodes->metode_pembayaran = $request->metode_pembayaran;

        $credentials = $request->validate([
            "metode_pembayaran" => ['required','string'],
            'files' => 'image|file|max:2048'
        ]);

        $request->file('files')->move('assets/images/', $request->file('files')->GetClientOriginalName());
            $metodes->files = $request->file('files')->GetClientOriginalName();
            $metodes->save();

        return redirect('bayar')->with('massage1', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_bayar){

        $metodes = Metodepembayaran::findorfail($id_bayar);

        return view('form.editbayar', compact(
            'metodes'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_bayar){
        $metodes = Metodepembayaran::findorfail($id_bayar);

        return view('form.editbayar', compact(
            '$metodes'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_bayar){
        $metodes = Metodepembayaran::find($id_bayar);
        $file = metodepembayaran::find($id_bayar);

        $credentials = $request->validate([
            "metode_pembayaran" => ['required','string'],
            'files' => 'image|file|max:4096'
        ]);

        if($request->file('files') == "") {

            $metodes->update([
                'metode_pembayaran' => $request->metode_pembayaran,
            ]);

        } else {
            //hapus old image
            $file_name = $file->files;
            $file_path = public_path('assets/images/'. $file_name);
            unlink($file_path);

            //upload new image
            $request->file('files')->move('assets/images/', $request->file('files')->GetClientOriginalName());
            $metodes->files = $request->file('files')->GetClientOriginalName();
            $metodes->update();

        }

        return redirect('bayar')->with('massage2', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file = metodepembayaran::find($id);
        $file_name = $file->files;
        $file_path = public_path('assets/images/' . $file_name);
        unlink($file_path);

        $file->delete();
        // Metodepembayaran::destroy($id);

        return redirect('bayar')->with('massage3', 'data berhasil di hapus');
    }
}
