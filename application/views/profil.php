<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil Admin</title>
    <style>
    
ul {
  float: right;
  list-style: none;
  margin: 14px;
  }

li {
  width: 100px;
  text-align: left;
  padding: 30px 0;
  }

ul li {
  display: inline-block;
  }

ul li a {
  text-decoration: none;
  color: blanchedalmond;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.6s ease;
  font-family: sans-serif;
  }

ul li a:hover {
  background-color: tomato;
  color: black;
  border: 2px solid tomato;
  border-radius: 40px;
  transition-duration: 0.5s;
 }

#logo {
  width: 120px;
  float: left;
  height: auto;
  }

.atas a {
  max-width: 120px;
  margin: auto;
  text-decoration: none;
  color: black;
  float: right;
  padding: 5px;
  font-family: sans-serif;
  font-size: 20px;

}
.atas a:hover {
  color: black;
  transition: 0.5s;
  background-color: white;
}
.atas {
  list-style: none;
  background: pink;
  position: fixed;
  width: 100%;
  overflow: hidden;
  margin-left: -8px;
  margin-top: -800px;
}

    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/profil.css">
  </head>
  <body style="background:linear-gradient(#800000, #F08080, #FFE4E1 );text-align:center;">
    <br/>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
  <div class="box">
    <img style="width:200px;border-radius:10%;" src="<?=base_url()?>asset/profil.png" alt="">
    <h1>Prishe Annadjar Ardatilla</h1>
    <h5>Pelajar = Web Developer</h5>
    <p> IG : <a href="https://www.instagram.com/prishee.aa/?hl=en">@Prishee.aa</a></p>
    <p>Silahkan Kunjungi profil saya dan jangan lupa follow</p>
    <p>Hubungi Kontak Saya : 082302314384</p>
  </div>
  <header class="ob">
    <div class="atas">
      <div id="logo">
        <img style="width: 100px;margin-left: 10px;float: left; margin-top: 15px;"
      src="<?=base_url()?>asset/logo.png" alt="">
    </div>
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
  </body>
</html>
