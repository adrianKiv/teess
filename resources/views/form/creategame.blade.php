@extends('layouts.createmain')

@section('create')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">tambah game</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">punya ide ga bre</h3>
                <form action="/game" method="POST" class="signin-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_game" placeholder="nama game" required>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control @error('files') is-invalid @enderror" name="files" placeholder="masukan gambar" required>
                    </div>
                    @error('files')
                    <div class="invalid-feedback">
                      {{ "gabisa bre" }}
                    </div>
                    @enderror
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Langsung bikin</button>
                </div>
                    <div class="w-50 text-md-right">
                    <button class="btn btn-secondary"><a href="/game" style="color: #fff">ini tombol BATAL </a></button>
                    </div>
            </form>

            </div>
                </div>
            </div>
        </div>
    </section>
@endsection

