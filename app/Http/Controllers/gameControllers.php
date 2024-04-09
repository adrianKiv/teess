<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\MetodePembayaran;
use App\Models\NamaGame;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class gameControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pakets = Paket::all();
        $metodes = MetodePembayaran::all();
        $jenis_games = NamaGame::all();
        $pesanans = Pesanan::all();
        return view('admin.game', compact(
            'pakets', 'metodes', 'jenis_games', 'pesanans'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $jenis_games = new NamaGame;
        return view('form.creategame', compact(
            'jenis_games'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $jenis_games = new namagame;
        $jenis_games->nama_game = $request->nama_game;

        $credentials = $request->validate([
            "nama_game" => ['required','string'],
            'files' => 'image|file|max:2048'
        ]);

            $request->file('files')->move('assets/images/', $request->file('files')->GetClientOriginalName());
            $jenis_games->files = $request->file('files')->GetClientOriginalName();
        $jenis_games->save();

        return redirect('game')->with('massage1', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_game){

        $jenis_games = namagame::findorfail($id_game);

        return view('form.editgame', compact(
            'jenis_games'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_game){
        $jenis_games = namagame::findorfail($id_game);

        return view('form.editgame', compact(
            'jenis_games'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_game){
        $jenis_games = namagame::find($id_game);
        $file = namagame::find($id_game);

        $credentials = $request->validate([
            "nama_game" => ['required','string'],
            'files' => 'image|file|max:4096'
        ]);

        if($request->file('files') == "") {

            $jenis_games->update([
                'nama_game' => $request->nama_game,
            ]);

        } else {
            //hapus old image
            $file_name = $file->files;
            $file_path = public_path('assets/images/'. $file_name);
            unlink($file_path);

            //upload new image
            $request->file('files')->move('assets/images/', $request->file('files')->GetClientOriginalName());
            $jenis_games->files = $request->file('files')->GetClientOriginalName();
            $jenis_games->update();

        }

        return redirect('game')->with('massage2', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $file = namagame::find($id);
        $file_name = $file->files;
        $file_path = public_path('assets/images/' . $file_name);
        unlink($file_path);

        $file->delete();
        // namagame::destroy($id);

        return redirect('game')->with('massage3', 'data berhasil di hapus');
    }
}
