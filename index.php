<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RCN Group - Medicine</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <meta charset="utf-8">
    <link rel="stylesheet" href="data/style.css" type="text/css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/css/ol.css" type="text/css">
    <style>
        .map {
            height: 800px;
            width: 100%;
        }
        

        
        h2 {font: size 25px;}
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">APOTEK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="PolygonUtama.php">Sebaran Apotik</a></li>
          <li><a class="nav-link scrollto" href="#team">Pasukan Tempur</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Apotek Pekanbaru</h1>
          <h2>Sebaran Informasi Pemetaan Apotik di Pekanbaru</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/1.jfif" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/2.jfif" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/3.jfif" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/4.jfif" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/5.jfif" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <h2>Informasi Pemetaan Apotek Pekanbaru</h2>
    <div id="map" class="map"></div>
     <!-- Fitur PopUp -->
     <div id="popup" class="ol-popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
        <div id="popup-content"></div>
    </div>
    <!-- End PopUp -->

    <script type="text/javascript">
        //membuat variabel yang akan ditampilk an di layer
        var layerBanjir = new ol.layer.Vector({
            source: new ol.source.Vector({ //untuk koordinat banjir
                format: new ol.format.GeoJSON(),
                url: 'data/jj.json'
            }),
            style: new ol.style.Style({ //untuk ikon banjir
                image: new ol.style.Icon(({
                    anchor: [0.5, 20],
                    anchorXUnits: 'flaticon',
                    anchorYUnits: 'pixels',
                    src: 'icon/medicine.png'
                }))
            })
        });
        var layerRiau = new ol.layer.Vector({ //untuk daerah riau
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: 'data/polygon_riau.json'
            })
        });

        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                }), layerRiau, layerBanjir 
                //penambahan layer untuk wilayah dan koordinat
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([106.816666,-6.200000]),
                //[longitude,latitude]
                zoom: 10
                //perbesaran peta saat di ditampilkan
            })
        });
    </script>

    <!-- js popup -->
    <script type="text/javascript">
        var container = document.getElementById('popup'),
        content_element = document.getElementById('popup-content'),
        closer= document.getElementById('popup-closer');

        closer.onclick=function(){
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        }
        var overlay= new ol.Overlay({
            element:container,
            autoPan:true,
            offset:[0,-10]
        });
        map.addOverlay(overlay);

        var FullScreen = new ol.control.FullScreen();
        map.addControl(FullScreen);
        map.on('click',function(evt){
            var feature = map.forEachFeatureAtPixel(evt.pixel,
            function(feature,layer){
                return feature;
            });
            if(feature){
              var geometry=feature.getGeometry();
                var coord = geometry.getCoordinates();
                var content ='<h5>Nama BUMN : '+feature.get('NamaBUMN')+'</h5><br/>';
                content +='<h5>Jenis : '+feature.get('Jenis')+' </h5>';
                content +='<h5>Klaster Industri : '+feature.get('KlasterIndustri')+'</h5>';
                content +='<h5>Rating : '+feature.get('Rating')+'</h5>';
                content +='<h5>Website: '+feature.get('Website')+'</h5>';
                content +='<img src="'+feature.get('LinkFoto')+'" class="foto" width="200"  alt=""/>';

                content_element.innerHTML=content;
                overlay.setPosition(coord);
                console.info(feature.getProperties());
            }
        })
    </script>
      <!-- <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MY MAP</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div> -->
  

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Team</h3>
          <p>Berikut orang orang di balik layar dalam terbangunnya sebuah Website Sebaran Informasi Pemetaan di Pekanbaru berbasis Geographic Information System.. SEMOGA BERMANFAAT :\</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/candra.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Candra Wijaya Situngkir</h4>
                <span>Chief Executive Officer</span>
                <p>Memimpin pengembangan jangka pendek &   panjang perusahaan. </p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/rahim2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Rachim Aris</h4>
                <span>Product Manager</span>
                <p>Melakukan riset mengatur strategi dalam hal pengembangan produk sistem</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/nurul.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nurul Khairani Siregar</h4>
                <span>CTO</span>
                <p> mengembangkan kebijakan dan prosedur untuk meningkatkan layanan</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= Frequently  Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pertanyaan Yang Sering Ditemui Seputar Apotik</h2>
          <p>Beberapa pertanyaan yang sering ditemui di kalangan masyarakat mengenai dunia farmasi yang harus diberi informasi yang edukatif. Berikut beberapa diantaranya</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah obat antibiotik harus diminum hingga habis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Antibiotik harus dihabiskan dan dikonsumsi sesuai petunjuk dan resep dokter agar bisa bekerja dengan efektif dalam mengobati penyakit. Bila konsumsi antibiotik dilakukan secara tidak tepat, menyalahi aturan dan dosis, atau tidak dihabiskan, hal ini dapat berbahaya bagi kesehatan Anda.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa yang dimaksud dengan obat generik? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Obat generik adalah obat yang telah habis masa patennya. Sehingga biasanya perusahaan farmasi bersaing untuk memproduksi versi generiknya yakni obat generik tanpa harus membayar royalti
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bolehkah membeli obat tanpa resep dokter? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-  parent=".faq-list">
                <p>
                Obat yang diresepkan dari dokter akan lebih kuat dan lebih ampuh menyembuhkan penyakit karena dikhususkan meredakan gejala penyakit dengan dosis yang juga sudah diukur.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Berikan Saran & Pendapat Anda</h4>
            <p>Demi meningkatkan kualitas layanan sistem, kami mengharapkan respon dari para pengguna mengenai sistem ini</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Kirim  ">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>RCN GROUP</h3>
            <p>
              A109 Umban Sari Street <br>
              Rumbai, Pekanbaru 535022<br>
              Republik Indonesia <br><br>
              <strong>Phone:</strong> 076147803<br>
              <strong>Email:</strong> rcngroup@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>RCN Group</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Rahim Chandra Nurul</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>