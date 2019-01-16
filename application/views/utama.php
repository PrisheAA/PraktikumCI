<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
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
  margin-left: -38px;
  margin-top: -760px;
}

    </style>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/utama.css">
  </head>
  <body>
    
    <div class="box">
    <p>
      
      <br> <center><b>Sejarah Tarian</b><br><br>
        <img style= "width: 500px; " src="<?=base_url()?>asset/ngkrun.png" alt=""></center>
    <br>
    <br>
    
      Indonesia merupakan Negara dengan beraneka ragam macam budaya. Kebudayaan daerah tercermin dalam berbagai aspek kehidupan masyarakat di seluruh daerah di Indonesia. Setiap daerah memilki ciri khas kebudayaan yang berbeda, Salah satu bentuk ciri khas kebudayaan setiap daerah di wujudkan dengan tari khas kebudayaan masing-masing setiap daerah. Dengan musik dan gerak menciptakan sebuah tarian yang menceritakan kekayaan dan keanekaragaman bangsa Indonesia . Kami kali ini akan membahas tentang perkembang Tari Traditional di Indonesia. Setiap tarian menceritakan kisah yang telah mereka alami. Terjadinya penciptaan tarian pada awalnya dilandasi oleh beberapa hal di antaranya :
    <br>
    </p>

      1. Terjadi pada acara adat atau ritual keagamaan
      <br>
      2. Ritual Penyembuhan
      <br>
      3. Pesta rakyat / panen yang melimpah
      <br>
      4. Cerita cinta pada zaman terdahulu
      <br>
      5. Permainan Rakyat

  <!-- header -->
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

    </div>
  </body>
</html>
