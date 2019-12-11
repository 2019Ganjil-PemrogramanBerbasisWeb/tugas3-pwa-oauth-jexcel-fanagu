 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mlaku.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Mlaku.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="places.php" class="nav-link">Destinasi Wisata</a></li>
            <li class="nav-item"><a href="hotel.php" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="Tour Guide.php" class="nav-link">Tour Guide</a></li> 
            <?php
              session_start();
              // Check if the user is already logged in, if yes then redirect him to welcome page
              if (isset($_SESSION["status"]) && $_SESSION["status"] =='login') {
                  echo  "<li class='nav-item'><a href='logout.php' class='nav-link'>Log out</a></li>";
              } else echo  "<li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>";
            ?> 
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Wonderful <br>Indonesia</h1>

            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Memudahkan Liburan Anda</p>
          </div>
        </div>
      </div>
    </div>

 <section class="ftco-section justify-content-end ftco-search">
      <div class="container-wrap ml-auto">
        <div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Home</a> 
            </div>
          </div>
          <div class="col-md-12 tab-wrap"> 
            <div class="tab-content p-4 px-5" id="v-pills-tabContent"> 
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="hoteljogja.html" class="search-destination">
                  <div class="row"> 
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label for="#">Location</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="text" class="form-control" placeholder="Where">
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <input type="submit" value="Search" class="form-control btn btn-primary">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Paket Wisata</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Bromo, Malang</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <span>10 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">300ribu-an</span>


                  </div>
                </div>
                <p>Gunung Bromo terkenal sebagai obyek wisata utama di jaw Timur. Bromo memiliki udara yang dingin dan kita dapat menikmati golden sunrise di puncak seruni, berpetualang diKawah Bromo, Pura luhur, Pasir Berbisik, padan savana dan bukit teletubies</p>
                <p class="days"><span>1 days 1 nights</span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Malang, Indonesia</span>
                  <span class="ml-auto"><a href="#">Visit</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination d-md-flex flex-column-reverse">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Karimunjawa</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">450ribu-an</span>
                  </div>
                </div>
                <p>Surga tersembunyi di selat Jawa, Karimun Jawa memberikan keindahan pemandangan laut dan pulau yang membentuk keindahan baik ketika matahari terbit atau matahari terbenam.</p>
                <p class="days"><span>2 days 1 nights</span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Jepara, Indonesia</span>
                  <span class="ml-auto"><a href="#">Visit</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Raja Ampat</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <span>10 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">8,900 juta/pax</span>
                  </div>
                </div>
                <p>Surga petualangan dunia di Ujung Papua, Lautan lepas dengan pulau-pulau karang yang tersusun rapih dan Langit yang biru berpadu dengan indahnya riak ombak menyisir setiap pasir putih di tepian pantai.</p>
                <p class="days"><span>3 days 2 nights</span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Papua, Indonesia</span>
                  <span class="ml-auto"><a href="#">Visit</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination d-md-flex flex-column-reverse">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Jimbaran</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">2,775 juta/pax</span>
                  </div>
                </div>
                <p>Jimbaran memiliki pemandangan indah dan eksotis</p>
                <p class="days"><span>4 days 3 nights</span></p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Bali, Indonesia</span>
                  <span class="ml-auto"><a href="#">Visit</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Visit Location</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <a href="yogyakarta.php" class="destination-entry img" style="background-image: url(images/visit1.jpg);">
              <div class="text text-center">
                <h3>Yogyakarta</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="malang.php" class="destination-entry img" style="background-image: url(images/visit2.jpg);">
              <div class="text text-center">
                <h3>Malang</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="bali.php" class="destination-entry img" style="background-image: url(images/visit3.gif);">
              <div class="text text-center">
                <h3>Bali</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><strong>Destinasi Populer</strong></h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="tamansari.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destinasi1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="tamansari.php">Taman Sari</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price per-price">5.000<br><small>/orang</small></span>
                  </div>
                </div>
                <p>Jaman dulu Taman Sari Jogja merupakan tempat rekreasi dan meditasi keluarga kerajaan Yogyakarta. Pesona Istana Taman Sari terletak pada keindahan arsitekturnya yang kuno dan pemandangan yang indah.</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Yogyakarta</span>
                  <span class="ml-auto"><a href="tamansari.html">Open Now</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination d-md-flex flex-column-reverse">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destinasi2.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Kalibiru, Kulonprogo</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price per-price">10.000<br><small>/orang</small></span>
                  </div>
                </div>
                <p>Tempat ini banyak dikunjungi karena pemandangan alamnya yang indah, dengan berbagai spot foto yang unik</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Yogyakarta</span>
                  <span class="ml-auto"><a href="#">Open Now</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destinasi3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">The Lodge Maribaya</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price per-price">35.000<br><small>/orang</small></span>
                  </div>
                </div>
                <p>Di tempat wisata ini Anda bisa menikmati keindahan dan udara yang sejuk, jauh dari pencemaran. Anda juga bisa berfoto selfie di Rumah Pohon dan Mountain Swing (ayunan).</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Bandung</span>
                  <span class="ml-auto"><a href="#">Open Now</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination d-md-flex flex-column-reverse">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destinasi4.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Wakatobi Resort</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>8 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price per-price">471.000<br><small>/orang</small></span>
                  </div>
                </div>
                <p>Wakatobi Resort adalah salah satu lokasi terbaik yang juga wajib untuk disambangi, apalagi oleh para penyelam. Terletak di area pantai yang memesona dan asri Pulau Onchmobaa-Tomia yang ada di Kepulauan Wakatobi, terdapat rumah karang yang sangat oke</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Wakatobi</span>
                  <span class="ml-auto"><a href="#">Open Now</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destinasi5.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-link"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">Labuan Bajo</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <span>10 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price per-price">100.000<br><small>/orang</small></span>
                  </div>
                </div>
                <p>Tempat wisata di Labuan Bajo Flores menyimpan banyak daya tarik yang mampu menghipnotis siapa saja yang mengunjunginya.</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Flores</span>
                  <span class="ml-auto"><a href="#">Open Now</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Our satisfied user says</h2>
            <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <span>10 Rating</span>
            </p>
            <p>138 Ulasan</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/suzy.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i> 
                    </p>
                    <p class="name">Hana G</p>
                    <span class="position">Website ini sangat memudahkan pengguna saat berlibur</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i> 
                    </p>
                    <p class="name">Faza Murtadho</p>
                    <span class="position">Website ini memiliki fitur yang lengkap dan bermanfaat</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i> 
                    </p>
                    <p class="name">Arsenic W</p>
                    <span class="position">Dengan Website ini, saya bisa mengetahui destinasi wisata yang sedang populer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i> 
                    </p>
                    <p class="name">Mark Z</p>
                    <span class="position">Website ini sangat membantu para traveler</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i> 
                    </p>
                    <p class="name">Agung Mulyono</p>
                    <span class="position">Dengan Website ini, saya bisa mengetahui destinasi wisata yang sedang populer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h3 class="mb-4">Yuk Kenalkan Destinasi Wisata Daerahmu !</h3>
            <h4>melalui Website Mlaku.id</h4>
          </div>
        </div>
      </div>
          <div class="col-md-12 tab-wrap"> 
            <div class="tab-content p-4 px-5" id="v-pills-tabContent"> 
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="upload.html" class="search-destination">
                  <div class="row"> 
                    <div class="col-md align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <h5>Upload File</h5>
                          <input type="submit" value="Upload" class="form-control btn btn-primary">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form action="uploads/index.php" class="search-destination">
                  <div class="row"> 
                    <div class="col-md align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <h5>List File & Downlod</h5>
                          <input type="submit" value="List & Download" class="form-control btn btn-primary">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mlaku.id</h2>
              <p>Memudahkan Liburan Anda</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          </div> 
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Surabya, Indonesia</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">0355 332750</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mlaku@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
 
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html> 