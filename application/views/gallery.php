<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <style>
      .judul{
        margin-bottom: 51px;
        font-size: larger;
        margin-top: 35px;
      }
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
  margin-left: -52px;
  margin-top: -1150px;
}
      
    </style>
  </head>
  <body style="margin: 52px; font-family:'century gothic', sans-serif; background:linear-gradient(#800000, #F08080, #FFE4E1 ); text-align: center;">
  <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <p class="judul"><b>Jenis Tarian di Indonesia</b> </p>
    <img style="width: 400px;margin-right: 671px;" src="<?=base_url()?>asset/1.png" alt="">
    <p style="margin-top: -120px;margin-left: 291px;">Tari Gending Sriwijaya</p>
    <img style="width: 400px;margin-left: 613px;margin-top:120px;" src="<?=base_url()?>asset/2.png" alt="">
    <p style="margin-top: -150px;margin-right: 319px;">Tari Gambyong</p>
    <img style="width: 400px;margin-right: 671px;margin-top:150px;" src="<?=base_url()?>asset/3.png" alt="">
    <p style="margin-top: -180px;margin-left: 291px;">Tari Gantar</p>
    <img style="width: 400px;margin-left: 613px;margin-top:166px;" src="<?=base_url()?>asset/4.png" alt="">
    <p style="margin-top: -200px;margin-right: 319px;">Tari Pakarena</p>

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
