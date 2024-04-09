@extends('beliML')

@section('formbeli')
<form>
    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Pilih Paket</h2>
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
                              <img src="assets/images/top-game-01.jpg" alt="">
                          </div>
                          <div class="down-content">
                              <span class="category">Adventure</span>
                              <h3>{{ $value->nama_paket }}</h3>
                              <p>{{ $value->isi_paket }} Diamond</p>
                              <p>Rp.{{ $value->harga_paket }},00</p><br>
                      <button type="submit" class="btn btn-outline-secondary">beli</button>
                  </div>
              </div>
          </div>
          @endforeach
      </form>
      </div>
  </div>
</div>
@endsection
