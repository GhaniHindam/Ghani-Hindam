<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <style media="screen">
    body{
      margin: 0px;
      padding: 0px;
	  background-size: cover;
      background-image: url('img/bis.jpg');  
    }
    .header{
      height: 100px;
      background: rgb(0, 59, 100);
    }
    .Menu{
      position: relative;
      z-index: 1;
      background: rgb(0, 59, 100);
      margin: 0 auto 50px;
      width: 360px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
	
    .jarak{
      padding-top: 50px;
    }

    .tulisan{
	  background: rgba(0, 0,0 ,0.4);
      text-align: center;
	  color: white;
   	  padding: 10px 100px 10px 100px;
    }
    
    </style>
  </head>
  <body>
    <div class="header">
      <h1 style="text-align:center; padding-top:10px; color:white;">HOME</h1>
      <a href="logout.php" style="padding-left:10px; color:white;">Sign Out</a>
    </div><br><br><br>
    <div class="tulisan">
      <h1>SELAMAT DATANG DI WEBSITE DESA WINONG</h1>
	  <h2 style="padding:5px;color:white;">Desa kecil yang penuh kenangan & kearifan lokal</h2>
    </div>
    <div class="jarak">
      <div class="Menu">
        <a href="berita.php" style="color:white; text-decoration:none;">Daftar Artikel</a>
      </div>
    </div>
    <div class="Menu">
      <a href="user.php" style="color:white; text-decoration:none;">Daftar User</a>
    </div>
    <p style="font-size:8pt;color:white;opacity:0.5;margin:10px 0;text-align:left">&copy; Ghani Hindam - <?php echo Date('Y') ?> All Rights Reserved</p>
  </body>
</html>
