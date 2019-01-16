<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
  </head>
  <body style="background: linear-gradient(#800000, #F08080, #FFE4E1 );">
  <!--TAMPILAN-->
  <div class="show">
  <!--HEADER-->
  <header class="ob">
    <div class="atas">
      <div id="logo"><img style="width: 100px;margin-left: 10px;float: left; margin-top: 15px;"
      src="<?=base_url()?>asset/logo.png" alt=""></div>
        <nav>
          <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <img style="width: 100px;margin-left: 100px;float: center; margin-top: 15px;
    "src="<?=base_url()?>asset/all.png" alt="">
    </div>
    <h1 align="center" style="color:blue;text-align: center;font-size: 10.3mm;
    margin-top:97px;margin-left: 12px;font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?>
    <br> Berperilaku seperti <?= $jenis_kelamin?></h1>
    <p style="font-size: 18px;margin-left: 56px;margin-top: 39px; color:black;">Tahukah kamu ?
      <br>
      <br>
        Tari merupakan gerakan-gerakan yang dilakukan oleh manusia sebagai ungkapan perasaan dan jiwa seseorang.
      Lebih lanjut jenis kesenian tradisional ini kemudian diiringi dengan tabuhan alat musik serta lagu sebagai pendukungnya.
      Dengan kata lain Tari adalah gerakan tubuh yang dilakukan secara berirama pada waktu dan tempat tertentu sebagai wujud dari
      ungkapan perasaan maupun fikiran seseorang, kelompok, maupun masyarakat.
      <br>
        Jadi, Kesenian tari merupakan sebuah kesenian yang digunakan atau dilakukan sebagai wujud ungkapan perasaan maupun pikiran seseorang.
      Dari pengertian di atas pula tentu dapat kita ketahui bahwa tidak setiap gerakan dapat disebut sebagai tari,
      akan tetapi jenis gerakan berirama sesuai dengan konsep yang telah ada serta dilakukan secara sadar oleh
      seseorang maupun sekelompok orang
    </p>


  </body>
</html>
