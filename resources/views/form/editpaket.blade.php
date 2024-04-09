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
                <form action="{{ url('paket/'.$pakets->id_jenis_paket) }}" method="POST" class="signin-form">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_paket" placeholder="nama paket" value="{{ $pakets->nama_paket }}">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="isi_paket" placeholder="isi paket" value="{{ $pakets->isi_paket }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="harga_paket" placeholder="harga paket" value="{{ $pakets->harga_paket }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Langsung edittt</button>
                </div>
                <div class="w-50 text-md-right">
                <button class="btn btn-secondary"><a href="/paket" style="color: #fff">ini tombol BATAL </a></button>
                </div>
            </form>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection
