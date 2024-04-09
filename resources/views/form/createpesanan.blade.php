@extends('layouts.createmain')

@section('create')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">tambah Pesanan</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">punya ide ga bre</h3>
                <form action="/pesanan" method="POST" class="">
                    @csrf
                    <div class="form-group">
                        {{-- <label class="form-label">email</label> --}}
                        <input type="email" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        {{-- <label class="form-label">id game</label> --}}
                        <input type="text" class="form-control" name="id_game" placeholder="id game" required>
                    </div>

                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="jenis_paket">
                            @foreach ($pakets as $key=>$value)
                            <option value="{{ $value->id_jenis_paket }}">{{ $value->nama_paket }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="metode_pembayaran">
                            @foreach ($metodes as $key=>$value)
                            <option value="{{ $value->id_metode_pembayaran }}">{{ $value->metode_pembayaran }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="jenis_game">
                            @foreach ($jenis_games as $key=>$value)
                            <option value="{{ $value->id_jenis_game }}">{{ $value->nama_game }}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Langsung bikin</button>
                </div>
                    <div class="w-50 text-md-right">
                    <button class="btn btn-secondary"><a href="/pesanan" style="color: #fff">ini tombol BATAL </a></button>
                    </div>
            </form>

            </div>
                </div>
            </div>
        </div>
    </section>
@endsection

