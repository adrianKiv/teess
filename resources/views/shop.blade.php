  @extends('layouts.main')

  @section('container')

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".moba">MOBA</a>
        </li>
        <li>
          <a href="#!" data-filter=".rpg">MMORPG</a>
        </li>
        <li>
          <a href="#!" data-filter=".bg">BATTLE GROUND</a>
        </li>
        <li>
            <a href="#!" data-filter=".fps">FPS</a>
        </li>
      </ul>
      <div class="row trending-box">
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 moba">
          <div class="item">
            <div class="thumb">
              <a href="MLbeli"><img src="assets/images/mllogo1.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MOBA</span>
              <h4>MOBILE LEGEND</h4>
              <a href="MLbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 bg">
          <div class="item">
            <div class="thumb">
              <a href="PUBGMbeli"><img src="assets/images/pubgmlogo1.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">BATTLE GROUND</span>
              <h4>PUBG MOBILE</h4>
              <a href="PUBGMbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 moba">
          <div class="item">
            <div class="thumb">
              <a href="DOTA2beli"><img src="assets/images/dotalogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MOBA</span>
              <h4>DOTA 2</h4>
              <a href="DOTA2beli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 fps">
          <div class="item">
            <div class="thumb">
              <a href="Valobeli"><img src="assets/images/valorantlogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">FPS</span>
              <h4>VALORANT</h4>
              <a href="Valobeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 bg">
          <div class="item">
            <div class="thumb">
              <a href="Apexbeli"><img src="assets/images/apexlogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">BATTLE GROUND</span>
              <h4>APEX LEGEND</h4>
              <a href="Apexbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rpg">
          <div class="item">
            <div class="thumb">
              <a href="StarRailbeli"><img src="assets/images/starraillogo1.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MMORPG</span>
              <h4>HONKAI STAR RAIL</h4>
              <a href="StarRailbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 rpg">
          <div class="item">
            <div class="thumb">
              <a href="Genshinbeli"><img src="assets/images/genshinlogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MMORPG</span>
              <h4>GENSHIN IMPACT</h4>
              <a href="Genshinbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 moba">
          <div class="item">
            <div class="thumb">
              <a href="LOLbeli"><img src="assets/images/lollogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MOBA</span>
              <h4>LEGUE OF LEGEND</h4>
              <a href="LOLbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
  @endsection
