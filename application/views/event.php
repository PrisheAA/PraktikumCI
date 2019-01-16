<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event</title>
    <style>
    .box{
  margin: 30px 30px 30px;
  background-color: #F5F5F5;
  font-family: monospace;
  font-style: italic;
  font-size: 5mm;
  background-color: cadetblue;
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
  margin-left: -175px;
  margin-top: -1300px;
}

    </style>
  </head>
  <div class="box">
  <body style="margin: 175px; font-family: monospace; font-style: italic; font-size: 5mm;
  background:linear-gradient(#800000, #F08080, #FFE4E1 );text-align:center;">
  <!-- header -->
 
  <img style="width:500px;" src="<?=base_url()?>asset/gandrung.png" alt="">
  <p><b>Festival Gandrung Sewu 2018 Banyuwangi</b></p>
  <p>Banyuwangi di Jawa Timur dijadwalkan mengadakan pameran tari kolosal Festival Gandrung Sewu pada tanggal 20 Oktober 2018.
    Banyuwangi dikenal sebagai kota Gandrung, dengan hubungan tari yang mendalam dengan kota Jawa Timur.
    Secara resmi maskot kota ini sejak tahun 2002, Gandrung adalah bentuk seni asli dari Banyuwangi.
   <p>Dalam dialek lokal, gandrung berarti cinta yang mendalam, dipukul dengan seseorang atau semacamnya.
     Bagi masyarakat Banyuwangi, yang sebagian besar adalah petani, objek kasih sayang mereka adalah Dewi Sri dan tariannya merupakan ungkapan rasa syukurnyapada hasil panen yang diperoleh.
     Rasa hormat ini menanamkan keinginan masyarakat setempat - dikenal sebagai Blambangan untuk kerajaan tradisional daerah ini - untuk mengembangkan dan melestarikan tarian.
     Dalam melanjutkan pelestarian warisan tarian tersebut, sebanyak 1.314 penari Gandrung dan pendukung mereka menari di pantai Boom di Banyuwangi untuk acara Gandrung Sewu.
     Acara Gandrung Sewu bukan hanya pertunjukan tari kolosal yang melibatkan ribuan orang, tapi juga berfungsi untuk mengkonsolidasikan apresiasi budaya di antara banyak kelompok yang berbeda.
     Peserta tari  akan dipilih dari SMP dan SMA di Giri, Wongsorejo, Kalipuro dan Glagah di Banyuwangi.</p>
   <p>Festival tari massal ini mendapat dukungan penuh dari Kementerian Pariwisata karena dianggap sebagai salah satu acara puncak Banyuwangi yang melibatkan banyak peserta.
     Pada tahun 2012, festival tari massal tersebut mendapat penghargaan dari Museum Rekor Indonesia (MURI) sebagai acara dengan jumlah penari terbanyak, dengan total 1.047.
     Warga sangat antusias mengikuti festival ini karena rasa keterlibatan mereka dalam mengekspos seni dan budaya daerah mulai tumbuh.
     Tarian Gandrung yang didominasi dengan orkestrasi khusus merupakan salah satu seni tradisional Banyuwangi dan menjadi ciri khas Banyuwangi.
     Jadi, di setiap acara Banyuwangi selalu memiliki nama kesamaan dengan Gandrung. Sebenarnya, Banyuwangi sering disebut Gandrung City dan di hampir setiap sudut Banyuwangi,
     kita bisa menemukan patung tarian Gandrung. Gandrung sering tampil di banyak acara, seperti; pernikahan, Pethik Laut (upacara kelautan), acara sunat, ulang tahun, dan acara lainnya.
    "Jumlah peserta harus meningkat tahun ini. Saya harap Festival Gandrung Sewu akan memecahkan rekor lain di MURI sehingga kota ini bisa menarik lebih banyak wisatawan," kata Esthy Reko Astuti,
     Deputi pembangunan pariwisata di Kementerian Pariwisata.
     Menteri Pariwisata Arief Yahya mengatakan, kementerian akan terus mendorong Banyuwangi sebagai sarang wisata asing,
     dengan mengatakan bahwa "ritual tradisional yang unik seperti Gandrung Sewu dan cocok sebagai salah satu tempat wisata terbaik di Banyuwangi."</p>
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
