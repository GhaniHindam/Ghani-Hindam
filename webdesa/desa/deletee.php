<?php

$conn = mysqli_connect("localhost", "root", "", "webdesa");

$id = $_GET["id"];

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");
  return mysqli_affected_rows($conn);
}


if ( hapus($id) > 0 ) {
  echo "
  <script>
    alert('Berita Berhasil Dihapus!!!');
    document.location.href= 'berita.php';
  </script>
  ";
}else {
  echo "
  <script>
    alert('Mohon Cek Lagi');
    document.location.href='berita.php';
  </script>
  ";
  }


 ?>
