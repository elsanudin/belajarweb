<?php
include "../koneksi.php";
$id=$_GET['id'];
$hasil = $pdo->exec("DELETE from tbbarang where id = '".$id."'");


if($hasil){echo "data berhasil dihapus <meta http-equiv='refresh' content='1;url=index.php?page=menubarang'/>";
} else{
echo "data gagal dihapus";
}
?>