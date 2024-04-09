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
                <form action="{{ url('bayar/'.$metodes->id_metode_pembayaran) }}" method="POST" class="signin-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <input type="text" class="form-control" name="metode_pembayaran" placeholder="metodenya isi" value="{{ $metodes->metode_pembayaran }}">
                    </div>
                    <div class="form-group">
                    <img src="{{ url('assets/images/' . $metodes->files) }}" alt="" width="200px">
                    <input type="file" class="form-control @error('files') is-invalid @enderror" name="files" placeholder="masukan gambar baru">
                    @error('files')
                    <div class="invalid-feedback">
                        {{ "gabisa bre" }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Langsung edittt</button>
                </div>
                <div class="w-50 text-md-right">
                <button class="btn btn-secondary"><a href="/bayar" style="color: #fff">ini tombol BATAL </a></button>
                </div>
            </form>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection

