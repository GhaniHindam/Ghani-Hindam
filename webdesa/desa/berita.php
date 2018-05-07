<?php
  require'proses_berita.php';
  $artikel = query("SELECT * FROM artikel");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Artikel</title>
    <style media="screen">
      body{
        background-size: cover;
        background-image: url('img/bis.jpg');
      }
      .box{
        position: relative;
        z-index: 1;
        background: rgba(0, 0,0 ,0.4);
        margin: 0 auto 50px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }
      .artikel{
        max-width: 100%;s
        padding: 15px;
        text-align: justify;
		color: white;
      }

      .header{
        max-height: 200px;
        background: rgb(0, 59, 100);
      }
      .header::after{
        clear: both;
        content: '';
        display: block;
      }
      .profil{
        width: 20%;
        float:left;
        font-size: 1em;
        text-align: center;
        line-height: 40px;
        color: white;
      }

.profil> a{
  padding-left: 2%;
  color:white;
  text-decoration: none;
}

.profil > a:hover{
  text-decoration: underline;
  color:white;
  transform: scale(1.2);
}

.boxx {
  position: relative;
  z-index: 1;
  background: rgb(0, 59, 100);
  max-width: 150px;
  margin: 0 auto 50px;
  padding: 15px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.boxx > a{
  color: white;
  text-decoration: none;
}

.boxx button{
  background: rgb(50,100,50);
  border: 0px;
  color: white;
}

.boxxx > a{
  background: rgb(50,100,50);
  border: 0px;
  color: white;
  text-decoration: none;
  padding: 2% 10% 2% 10% ;
  text-align: center;
}

.boxxxx{padding-left: 42.5%;
  padding-bottom: 5%
}

.table{
  background: rgb(0, 59, 100);
  margin: 0 auto 50px;
  border-color: black;
  width: 375px;
  color: white;
}

.table button{
  background: rgb(45, 95, 45);
  color: white;
  border: 0px;
  font-size:15px;
  font-family:italic bold;
  padding: 10px 25px 10px 25px;
}

.table > a {
  padding: 10px;
  color: white;
  text-decoration: none;
}

form:hover {
  transition: 0.5s;
  cursor: pointer;
}
button:hover{
  transition: 0.5s;
  cursor: pointer;
}
    </style>
  </head>
  <body>
    <div class="header">
      <div class="profil">
        <h1>Daftar Artikel</h1>
        <a href="home.php">Home</a>
      </div>
    </div>
    <br><br><br>
    <?php foreach ($artikel as $row ) :?>
      <div class="box">
        <h3 style="color:white;"><?= $row['judul']; ?></h3>
        <div class="artikel">
        <?php
          if (isset($_POST["submit"])) {
            echo "Penulis Artikel : "; echo  $row["penulis"]; echo "<br><br>";
            echo "Isi Artikel : "; echo "<br>"; echo$row["isi"];
          }
         ?>
          <br><br>
          <a href="deletee.php?id=<?= $row["id"]?>" style="text-align:center; text-decoration:none; color:rgb(0, 92, 230);">Delete</a>
       </div>
      </div>
    <?php endforeach;  ?>
    <div class="table">
<style media="screen">
  button{

  }
</style>

      <form class="" action="" method="post">
          <button type="submit" name="submit" style="background:rgb(0, 59, 100);border: 0px;color: white;" ><h4>Tampilkan artikel</h4></button>



          <a href="ulang.php"
          style="color:white; text-align:left; padding:; text-decoration:none; font-size:15px; font-family:italic;">
          Sembunyikan</a>



          <a href="Tambah_berita.php"
           style="color:white;  padding:10px 40px 10px 40px; text-decoration:none; font-size:15px; font-family:italic;">
           Update
         </a>

       </form>
    </div>
  </body>
</html>
