<?php
try {

  $db = new mysqli ("localhost", "root" , "", "contact_me");

} catch (Exception  $exc) {
  echo $esc->getTraceAsString();
}
  if (isset($_POST ['nama']) && isset($_POST ['email']) && isset($_POST ['phone']) &&        isset($_POST ['message']))  
  {
      $nama= $_POST ['nama'];
      $email= $_POST ['email'];
      $phone= $_POST ['phone'];
      $message= $_POST ['message'];

  

   $is_insert = $db->query("INSERT INTO `hubungi_saya`(`nama`, `email`, `phone`, `message`) VALUES ('$nama','$email','$phone','$message')");
    
    if ($is_insert == TRUE){
      echo "<h2>terimakasih, tealah memberi informasi </h2>";
      exit() ;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Portfolio Muhammad iqbal</title>
    

  </head>

  <body id="home" class="scrollspy">

    <!-- navbar -->
    <div class="navbar-fixed">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="https://www.instagram.com/wulan.ksm/">one</a></li>
        <li><a href="https://id.wikipedia.org/wiki/Petualangan">two</a></li>
        <li class="divider"></li>
        <li><a href="https://id.wikipedia.org/wiki/Persija_Jakarta">three</a></li>
      </ul>
      <nav class="blue darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">iqbal</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about">keahlian</a></li>
              <li><a href="#clients">pengalaman kerja</a></li>
              <li><a href="#services">riwayat pendidikan</a></li>
              <li><a href="#portfolio">dokumentasi pengalaman organisasi</a></li>
              <li><a href="#contact">hubungi</a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">kesukaan<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">About Us</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact me</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/9.png">
          <div class="caption left-align">
            <h3>terimakasih telah berkunjung</h3>
            <h5 class="light grey-text text-lighten-3">semoga hari mu menyenangkan dari biasanya</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/1.png">
          <div class="caption right-align">
            <h3></h3>
            <h5 class="light black-text text-lighten-3">ini adalah daftar riwayat hidup saya</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/6.png">
          <div class="caption center-align">
            <h3></h3>
            <h5 class="light blue-text text-lighten-3">saya sedang mencari pekerjaan bisakah anda membantu saya</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- About Us -->
    <section id="about" class="about scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="center light grey-text text-darken-3">Keahlian</h3>
          <div class="col m6 light">
            <h5>PENGENALAN DIRI</h5>
            <p>Hai, Perkenalkan nama saya Muhammad Iqbal , TTL: Jakarta, 25/Maret/2000, Saya adalah seorang mahasiswa UMT Dengan jurusan Teknik informatika, dan saya memiliki keahliaan khusus seperti membuat website, membuat aplikasi sederhana , it suport ,desain graphis, microsoft, Saya sedang mencari pengalaman baru atau pekerjaan, saya siap bekerja di seluruh bagian yang di perlukan tidak harus dengan background keahlian saya. dibalik itu semua saya juga bisa bekerja team  </p>
          </div>
          <div class="col m6 light">
            <p>WEB PROGRAMING</p>
            <div class="progress">
                <div class="determinate blue" style="width: 95%"></div>
            </div>
            <p>MICROSOFT</p>
            <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
            </div>
            <p>JARINGAN KOMPUTER</p>
            <div class="progress">
                <div class="determinate blue" style="width: 90%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/slider/4.png"></div>

      <div class="container clients">
        <h3 class="center light white-text">partime</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/pt.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/btn.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/grab.png">
          </div>
        </div>
      </div>
    </div>


    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-3">Riwayat Pendidikan</h3>
          <div class="col m3 s9">
            <div class="card-panel center">
              <img src="img/pendidikan/sd.png" width="150" >
              <h5>SEKOLAH DASAR</h5>
              <BR>
              <p>SDN 04 DURI PULO , Jln. Setia Kawan III No. 25. Kel. Duri Pulo. Kec. Gambir. Jakarta Pusat<br> TAHUN 2005-2011</p>
            </div>
          </div>
          <div class="col m3 s9">
            <div class="card-panel center">
              <img src="img/pendidikan/smp.png" width="150">
              <h5>SEKOLAH MENENGAH PERTAMA</h5>
              <p>TEKNOLOGI PILAR BANGSA ,Jln.Raya Mauk KM 08 Sulang Sepatan. Kel. Karet Kec. Sepatan , Kab. Tangerang, <br> TAHUN 2011-2014</p>
          </div>
          </div>
          <div class="col m3 s9">
            <div class="card-panel center">
               <img src="img/pendidikan/snk.png" width="150">
              <h5>SEKOLAH MENENGAH KEJUARAN</h5>
              <p>SMKN 2 KAB.TANGERANG,Jln. Raya Mauk Km.12 Sepatan, Kabupaten Tangerang, <br> TAHUN 2014-2017</p>
            </div>
          </div>
                    <div class="col m3 s9">
            <div class="card-panel center">
               <img src="img/pendidikan/umt.png" width="150">
              <h5>SARJANA SATU </h5>
              <p>UNIVERSITAS MUHAMMADIYAH TANGERANG , Jl.Perintis Kemerdekaan 1 No.33 Cikokol Tangerang , Banten <br> TAHUN 2017-2021</p>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">dokumenatasi</h3>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/21.png" width="200px" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/30.png" width="200px" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/31.png" width="220px" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/24.png"  width="200px" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/25.png"  width="200px" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/26.png"  width="190px"  class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/22.png"  width="200px" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/23.png"  width="230px"  class="responsive-img materialboxed">
          </div>
        </div>
      </div>
    </section>


    <!-- contact us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">Contact me</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel blue darken-2 center white-text">
              <i class="material-icons">email</i>
              <h5>Contact</h5>
              <p>iqbalek2503@gmail.com</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h4>alamat tinggal</h4></li>
              <li class="collection-item">Grand Permata Sepatan </li>
              <li class="collection-item">Blok C no 21 rt 01/10, pisangan jaya, sepatan </li>
              <li class="collection-item">Kab. Tangerang, Banten, Indonesia</li>
            </ul>
          </div>

          <div class="col m7 s12">
            <form method="POST" action="">
              <div class="card-panel">
                <h5>silakan isi formulir ini </h5>
                <div class="input-field">
                  <input type="text" name="nama" id="name" required class="validate">
                  <label for="name">Nama</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone">
                  <label for="phone">no hp</label>
                </div>
                <div class="input-field">
                  <textarea name="message" id="message" class="materialize-textarea"></textarea>
                  <label for="message">komentar</label>
                </div>
                <button type="submit" value="submit request" class="btn blue darken-2">kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="blue darken-2 white-text center">
      <p class="flow-text">I'm looking for a job</p>
    </footer>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll, {
        scrollOffset: 50
      });

      const dropdown = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(dropdown);

    </script>
  </body>
</html>