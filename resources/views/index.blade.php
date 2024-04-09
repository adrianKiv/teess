@extends('layouts.main')

  @section('container')

  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to Shark Shop</h6>
            <h2>TONS OF DISCOUNT EVERYDAY</h2>
            <p>Best site in the world, to fulfill your needs in buying some of the best promo code or redeem code. <br> everyday we give discount and more good events like free promo code or redeem code for tons of games.</p>
            <!-- <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Search Now</button>
              </form>
            </div> -->
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/sharkaaa.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/dpad.svg" alt="" style="max-width: 44px;">
              </div>
              <h4>Game shop</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/playstation.svg" alt="" style="max-width: 44px;">
              </div>
              <h4>PlayStation</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/steam.svg" alt="" style="max-width: 44px;">
              </div>
              <h4>Steam</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/xbox.svg" alt="" style="max-width: 44px;">
              </div>
              <h4>Xbox</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Games</h6>
            <h2>Our Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="MLbeli"><img src="assets/images/mllogo1.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MOBA</span>
              <h4>Mobile Legend</h4>
              <a href="MLbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="PUBGMbeli"><img src="assets/images/pubgmlogo1.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Battle Ground</span>
              <h4>PUBG Mobile</h4>
              <a href="PUBGMbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="DOTA2beli"><img src="assets/images/dotalogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MOBA</span>
              <h4>Dota 2</h4>
              <a href="DOTA2beli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="thumb">
                <a href="Valobeli"><img src="assets/images/valorantlogo2.png" alt=""></a>
              </div>
              <div class="down-content">
                <span class="category">FPS</span>
                <h4>Valorant</h4>
                <a href="Valobeli"><i class="fa fa-shopping-bag"></i></a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="Apexbeli"><img src="assets/images/apexlogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Battle Ground</span>
              <h4>Apex</h4>
              <a href="Apexbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="StarRailbeli"><img src="assets/images/starraillogo1.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MMORPG</span>
              <h4>Honkai Star Rail</h4>
              <a href="StarRailbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="Genshinbeli"><img src="assets/images/genshinlogo2.png" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">MMORPG</span>
              <h4>Genshin Impact</h4>
              <a href="Genshinbeli"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="thumb">
                <a href="LOLbeli"><img src="assets/images/lollogo2.png" alt=""></a>
              </div>
              <div class="down-content">
                <span class="category">Moba</span>
                <h4>League Of Legend</h4>
                <a href="LOLbeli"><i class="fa fa-shopping-bag"></i></a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Coming soon Game</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop"><img src="assets/images/top-game-01.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Warframe</h4>
                <a href="shop">more/buy</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop"><img src="assets/images/fortnite.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Battle Ground</span>
                <h4>FORTNITE</h4>
                <a href="shop">more/buy</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop"><img src="assets/images/freefire.png" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Battle ground</span>
                <h4>FREE FIRE</h4>
                <a href="shop">more/buy</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop"><img src="assets/images/top-game-04.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>The sims 4</h4>
                <a href="shop">more/buy</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop"><img src="assets/images/top-game-05.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Lostark</h4>
                <a href="shop">more/buy</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="shop"><img src="assets/images/top-game-06.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Destiny 2</h4>
                <a href="shop">more/buy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item" style="background-image: url('assets/images/backround/bg1.jpg')">
            <h4>MOBA</h4>
            <div class="thumb">
              <a href="MLbeli"><img src="assets/images/mllogo1a.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item" style="background-image: url('assets/images/backround/bg1.jpg')">
            <h4>MMORPG</h4>
            <div class="thumb">
              <a href="Genshinbeli"><img src="assets/images/genshinlogo1.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item" style="background-image: url('assets/images/backround/bg1.jpg')">
            <h4>FPS</h4>
            <div class="thumb">
              <a href="Valobeli"><img src="assets/images/valorantlogo1.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item" style="background-image: url('assets/images/backround/bg1.jpg')">
            <h4>Battle Ground</h4>
            <div class="thumb">
              <a href="PUBGMbeli"><img src="assets/images/pubgmlogo1a.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
