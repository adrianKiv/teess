@extends('layouts.createmain')

@section('create')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Sok di edit</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">bisa yukk</h3>

                <form action="{{ url('pesanan/'.$data_pesanan->id_pesanan) }}" method="POST" class="signin-form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        {{-- <label class="form-label">email</label> --}}
                        <input type="email" class="form-control" name="email" value="{{ $data_pesanan->email }}" required>
                    </div>
                    <div class="form-group">
                        {{-- <label class="form-label">id game</label> --}}
                        <input type="text" class="form-control" name="id_game" value="{{ $data_pesanan->id_game }}" required>
                    </div>
                    <select name="jenis_paket">
                        <div class="dropdown-menu">
                            @foreach ($pakets as $key=>$value)
                            <ul class="dropdown-menu">
                                <li>
                                    <option value="{{ $value->id_jenis_paket }}">{{ $value->nama_paket }}</option>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </select>
                    <select name="metode_pembayaran">
                        <div class="dropdown-menu">
                            @foreach ($metodes as $key=>$value)
                            <ul class="dropdown-menu">
                                <li>
                                    <option value="{{ $value->id_metode_pembayaran }}">{{ $value->metode_pembayaran }}</option>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </select>
                    <select name="jenis_game">
                        <div class="dropdown-menu">
                            @foreach ($jenis_games as $key=>$value)
                            <ul class="dropdown-menu">
                                <li>
                                    <option value="{{ $value->id_jenis_game }}">{{ $value->nama_game }}</option>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </select>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Langsung edittt</button>
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

