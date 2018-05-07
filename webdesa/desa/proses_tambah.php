<?php
// mengkoneksikan ke Databases
$conn = mysqli_connect("localhost", "root", "", "webdesa");

function tambah($post){
  global $conn;
  $judul = htmlspecialchars($post["judul"]);
  $isi = htmlspecialchars($post["isi"]);

  // query insert data
  $query = "INSERT INTO artikel
              VALUES
              ('','$judul', '$isi','')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
  }

  function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pengguna WHERE id = $id");
    return mysqli_affected_rows($conn);
  }


 ?>
