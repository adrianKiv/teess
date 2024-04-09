@extends('layouts.main')
@section('container')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>ADMIN ONLY</h3>
        </div>
      </div>
    </div>
  </div>
{{--
  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/single-game.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>Shark Shop</h4>
          <span class="price">Best voucher game site</span>
          <p>LUGX Gaming Template is based on the latest Bootstrap 5 CSS framework. This template is provided by TemplateMo and it is suitable for your gaming shop ecommerce websites. Feel free to use this for any purpose. Thank you.</p>
          <form id="qty" action="#">
            <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
            <button type="submit"><i class="fa fa-shopping-bag"></i>Beli</button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="section most-played">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>DATA PESANAN</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="main-button">
                      <a href="{{ url('pesanan/create') }}">tambah data <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                      </svg></a>
                  </div>
              </div>

              <table class="table table-hover">
                <tr>
                    <th>custumer</th>
                    <th>jenis paket</th>
                    <th>metode pembayaran</th>
                    <th>jenis game</th>
                    <th>aksi</th>
                </tr>
                @foreach ($pesanans as $key=>$value)
                    <tr>
                        <td> {{ $value->nama_pembeli }}</td>
                        <td> {{ $value->nama_paket }}</td>
                        <td> {{ $value->metode_pembayaran }}</td>
                        <td> {{ $value->nama_game }}</td>
                        <form action= "/pesanan/delete/{{ $value->id_pesanan }}" method="post">
                            @method('delete')
                            @csrf
                        <td><a class="btn btn-outline-success" href="{{ url('pesanan/'.$value->id_pesanan) }}">Update</a>
                            <button type="submit" class="btn btn-outline-danger">hapus
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
                                    <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                  </svg>
                            </button></td>
                        </form>
                    </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>

    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>DATA ADMIN</h2>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="main-button">
                          <a href="{{ url('admin/create') }}">Tambah data</a>
                      </div>
                  </div>

                  <table class="table table-hover">
                    <tr>
                        <th>nama</th>
                        <th>password</th>
                        <th>aksi bre</th>
                    </tr>
                    @foreach ($data_admins as $key=>$value)
                        <tr>
                            <td> {{ $value->username }}</td>
                            <td> {{ $value->password }}</td>
                            <form action= "/admin/delete/{{ $value->id_admin }}" method="post">
                                @method('delete')
                                @csrf
                            <td><a class="btn btn-outline-success" href="{{ url('admin/'.$value->id_admin) }}">Update</a>
                                <button type="submit" class="btn btn-outline-danger">Delete</button></td>
                            </form>
                        </tr>
                    @endforeach
                  </table>
        </div>
    </div>
</div>

<div class="section most-played">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>DATA JENIS GAME</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="main-button">
                      <a href="{{ url('game/create') }}">Tambah data <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                      </svg></a>
                  </div>
              </div>

              <table class="table table-hover">
                <tr>
                    <th>Nama Game</th>
                    <th>Gambar Game</th>
                    <th>aksi bre</th>
                </tr>
                @foreach ($jenis_games as $key=>$value)
                    <tr>
                        <td> {{ $value->nama_game }}</td>
                        <td>
                           <button class="btn btn-outline-light"><a href="{{ ('assets/images/'.$value->files) }}">see foto</a></button>
                        </td>
                        <form action= "/game/delete/{{ $value->id_jenis_game }}" method="post">
                            @method('delete')
                            @csrf
                        <td><a class="btn btn-outline-success" href="game/{{ $value->id_jenis_game }}">Update</a>
                            <button type="submit" class="btn btn-outline-danger">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>

<div class="section most-played">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>DATA JENIS PAKET</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="main-button">
                      <a href="{{ url('paket/create') }}">Tambah data <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                      </svg></a>
                  </div>
              </div>

              <table class="table table-hover">
                <tr>
                    <th>Nama Paket</th>
                    <th>isi Paket</th>
                    <th>Harga Paket</th>
                    <th>aksi bre</th>
                </tr>
                @foreach ($pakets as $key=>$value)
                    <tr>
                        <td> {{ $value->nama_paket }}</td>
                        <td> {{ $value->isi_paket }}</td>
                        <td> {{ $value->harga_paket }}</td>
                        <form action= "/paket/delete/{{ $value->id_jenis_paket }}" method="post">
                            @method('delete')
                            @csrf
                        <td><a class="btn btn-outline-success" href="paket/{{ $value->id_jenis_paket }}">Update</a>
                            <button type="submit" class="btn btn-outline-danger">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>
<div class="section most-played">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>DATA JENIS PEMBAYARAN</h2>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="main-button">
                      <a href="{{ url('bayar/create') }}">Tambah data <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                        <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                      </svg></a>
                  </div>
              </div>

              <table class="table table-hover">
                <tr>
                    <th>Nama Metode Pembayaran</th>
                    <th>foto metode</th>
                    <th>aksi bre</th>
                </tr>
                @foreach ($metodes as $key=>$value)
                    <tr>
                        <td> {{ $value->metode_pembayaran }}</td>
                        <td>
                            <button class="btn btn-outline-light"> <a href="{{ ('assets/images/'.$value->files) }}">see foto</a></button>
                        </td>
                        <form action= "/bayar/delete/{{ $value->id_metode_pembayaran }}" method="post">
                            @method('delete')
                            @csrf
                        <td><a class="btn btn-outline-success" href="bayar/{{ $value->id_metode_pembayaran }}">Update</a>
                            <button type="submit" class="btn btn-outline-danger">Delete</button></td>
                        </form>
                    </tr>
                @endforeach
              </table>
        </div>
    </div>
</div>
{{-- @foreach ($pakets as $key=>$value)
      <h3>{{ $value->nama_paket }}</h3>
      <p>{{ $value->isi_paket }} Diamond</p>
      <p>Rp.{{ $value->harga_paket }},00</p><br>
@endforeach

<br><br>
@foreach ($metodes as $key=>$value)
      <p>{{ $value->nama_metode_pembayaran }}</p>
@endforeach

<br><br>
@foreach ($jenis_game as $key=>$value)
  <p>{{ $value->nama_game }}</p>
@endforeach --}}

{{-- @yield('formbeli') --}}


    {{-- <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Related Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-01.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-03.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-04.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div> --}}
  @endsection
