@extends('layouts.main')
@section('container')
    <div class="page-heading header-text">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h3>DOTA 2</h3>
            </div>
        </div>
        </div>
    </div>
    <div class="single-product section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="left-image">
                <img src="assets/images/dotalogo1.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <h4>DOTA 2</h4>
              <span class="price">MOBA</span>
              <p>Dota 2 is a 2013 multiplayer online battle arena video game by Valve. The game is a sequel to Defense of the Ancients, a community-created mod for Blizzard Entertainment's Warcraft III: Reign of Chaos.</p>
            </div>
          </div>
        </div>
    </div>

    <form method="POST" action="/DOTA2beli" class="signin-form">
        @csrf
        @php
            $array = collect(['jenis_games' => ['id_jenis_game' => '3']]);
            $nilai = $array['jenis_games']['id_jenis_game'];
        @endphp

        <input type="hidden" name="jenis_game" value="{{ $nilai }}">

        <div class="section most-played">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>Paket Yang Tersedia</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="main-button">
                            <a href="shop.php">View All</a>
                        </div> --}}
                    </div>
                    @foreach ($pakets as $key=>$value)
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/shards.png" alt="">
                              </div>
                              <div class="down-content">
                                  <h3>{{ $value->nama_paket }}</h3>
                                  <p>{{ $value->isi_paket }} Shards</p>
                                  <p>Rp.{{ $value->harga_paket }},00</p>
                                  {{-- <input type="radio" name="jenis_paket" class="btn btn-outline-secondary">beli</input> --}}
                              </div>
                          </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="section most-played">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>Pilih Pembayaran</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="main-button">
                            <a href="shop.php">View All</a>
                        </div> --}}
                    </div>
                    @foreach ($metodes as $key=>$value)
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ 'assets/images/'. $value->files }}" alt="">
                            </div>
                            <div class="down-content">
                                <p>{{ $value->metode_pembayaran }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br><br><br><br>

        <div class="section most-played">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>Form Beli</h2>
                            </div>
                        </div>
                        <center>
                            <table width = "600" border="0" cellspacing = "1" cellpadding = "2" style="margin-left: 20%">
                              <tr>
                                <td width="140"> Email :</td>
                                <td>
                                  <input type="email" class="" name="email" placeholder="" required>
                                </td>
                              </tr>
                              <tr>
                                <td width="140"> ID in-game :</td>
                                <td>
                                  <input type="text" class="" name="id_game" placeholder="" required>
                                </td>
                              </tr>
                              <tr>
                                <td width="140"> pilih paket :</td>
                                <td>
                                  <select name="jenis_paket" id="" class="form-select" aria-label="Default select example" style="width: 30%">
                                      @foreach ($pakets as $key=>$value)
                                      <option value="{{ $value->id_jenis_paket }}">{{ $value->nama_paket }}</option>
                                      @endforeach
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td width="140"> Pilih metode pembayaran :</td>
                                <td>
                                  <select name="metode_pembayaran" id="" class="form-select" aria-label="Default select example" style="width: 30%">
                                    @foreach ($metodes as $key=>$value)
                                    <option value="{{ $value->id_metode_pembayaran }}">{{ $value->metode_pembayaran }}</option>
                                    @endforeach
                                  </select>
                                </td>
                              </tr>
                            </table>
                          </center>
                        <div class="col-lg-6">
                            {{-- <div class="main-button">
                                <a href="shop.php">View All</a>
                            </div> --}}
                        </div>
                        {{-- <div class="form-group">
                            <center>
                                <label class="form-label">email</label><br>
                                <input type="email" class="" name="email" placeholder="" required>
                            </center>
                        </div>
                        <div class="form-group">
                            <center>
                                <label class="form-label">id game</label><br>
                                <input type="text" class="" name="id_game" placeholder="" required>
                            </center>
                        </div>
                        <div class="form-grup">
                            <center>
                                <label for="" class="form-label">pilih paket</label>
                                <select name="jenis_paket" id="" class="form-select" aria-label="Default select example" style="width: 30%">
                                    @foreach ($pakets as $key=>$value)
                                    <option value="{{ $value->id_jenis_paket }}">{{ $value->nama_paket }}</option>
                                    @endforeach
                                </select>
                            </center>
                        </div>

                        <div class="form-grup">
                            <center>
                                <label for="" class="form-label">pilih metode pembayaran  </label>
                                <select name="metode_pembayaran" id="" class="form-select" aria-label="Default select example" style="width: 30%">
                                    @foreach ($metodes as $key=>$value)
                                    <option value="{{ $value->id_metode_pembayaran }}">{{ $value->metode_pembayaran }}</option>
                                    @endforeach
                                </select>
                            </center> --}}
                        </div><br><br>
                        <center><button type="submit" style="width:20%" class="btn btn-outline-dark">beli</button></center>
                </div>
            </div>
        </div>
    </form>
@endsection
