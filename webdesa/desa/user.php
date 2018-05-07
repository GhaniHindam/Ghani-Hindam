<?php
$conn = mysqli_connect("localhost", "root", "", "webdesa");
function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
$user = query("SELECT * FROM pengguna")
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Daftar User</title>
     <style media="screen">
       .tabel{
         text-align: center;
         margin: 20px;
         margin-left: auto;
         margin-right: auto;
       }
       td{
         background:rgb(0, 92, 230);
       }
       .header{
         max-height: 200px;
         background: rgb(0, 59, 100);
         color: white;
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

     </style>
   </head>
   <body>
     <div class="header">
       <div class="profil">
         <h1>Daftar User</h1>
         <a href="home.php">Home</a>
         </div>
     </div>
    <div class="tabel">
     <table border="0" cellpadding="20" cellspacing="0" style="width:100%">
       <tr style="background:rgb(129, 176, 198);color:black;">
         <th>No</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Password</th>
         <th>Action</th>
       </tr>
       <?php $i=1 ?>
       <?php foreach ($user as $key ) :?>
       <tr>
         <td><?= $i++; ?></td>
         <td><?= $key["Nama"]?></td>
         <td><?= $key["Email"]?></td>
         <td><?= $key["Password"]?></td>
         <td><a href="delete.php?id=<?= $key["ID"]?>">delete</a></td>
       </tr>
     <?php endforeach; ?>
     </table>
    </div>
    <p style="font-size:8pt;opacity:0.5;margin:10px 0;text-align:left">&copy; Ghani Hindam - <?php echo Date('Y') ?> All Rights Reserved</p>
   </body>
 </html>
