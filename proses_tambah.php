<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $jb=$_POST['jb'];

    $sql="INSERT INTO bantuan_blt(nama,jb) VALUES ('$nama','$jb')";
    $query=mysqli_query($koneksi,$sql);
}else{
    ("akses dilarang");
}
?>