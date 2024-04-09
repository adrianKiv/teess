@extends('layouts.main')
@section('container')

{{-- @if (session()->has('success'))
    <p class="alert alert-success">beli berhasil</p>
@endif   --}}
{{-- @if(session()->has('success'))
toastr.option = {
    "closeButton":true,
    "progressBar":true
}
toastr.success("{{ session('success') }}")
@endif --}}
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Mobile Legend</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/mllogo1.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>Shark Shop</h4>
          <span class="price">Best voucher game site</span>
          <p>Mobile Legends: Bang Bang adalah permainan video seluler ber-genre multiplayer online battle arena (MOBA) yang dikembangkan dan diterbitkan oleh Moonton, anak perusahaan dari ByteDance.
            Dirilis pada tahun 2016, game ini semakin populer di seluruh dunia, terutama di wilayah Asia Tenggara, dan sejak itu telah melampaui 1 miliar kali unduhan, dengan puncak pemain bulanan sebanyak 100 juta. Pada tahun 2021, "Mobile Legends: Bang Bang" mencapai pendapatan kotor sepanjang masa sebesar US$1 miliar dengan 44 persen pendapatannya berasal dari luar Asia, menjadikannya gim seluler teratas dari genre-nya dengan daya tarik paling global.</p>
        </div>
      </div>
    </div>
  </div>

  <form method="POST" action="/MLbeli" class="signin-form">
    @csrf
    @php
        $array = collect(['jenis_games' => ['id_jenis_game' => '1']]);
        $nilai = $array['jenis_games']['id_jenis_game'];
    @endphp

    <input type="hidden" name="jenis_game" value="{{ $nilai }}">

    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Paket Kami</h2>
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
                              <img src="https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/50orless_MLBB_Diamonds.png" alt="">
                            </div>
                            <div class="down-content">
                                <h3>{{ $value->nama_paket }}</h3>
                                <p>{{ $value->isi_paket }} Diamond</p>
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
                    <h2>Pilih pembayaran</h2>
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
                          <img src={{ 'assets/images/'.$value->files }} alt="">
                      </div>
                      <div class="down-content">
                          <p>{{ $value->metode_pembayaran }}</p>
                         {{-- <input type="radio" name="metode_pembayaran" class="btn btn-outline-secondary">beli</input> --}}
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
                    <label class="form-label">email :</label>
                    <input type="email" class="" name="email" placeholder="" required>
                </center>
            </div>
            <div class="form-group">
                <center>
                    <label class="form-label">id game :</label>
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
<script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
