<?php
include "koneksi.php";
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$hobi=$_POST['hobi'];
$no_tlp=$_POST['no_tlp'];
$email=$_POST['email'];
$sekolah=$_POST['sekolah'];
$aksi=mysqli_query($koneksi, "insert into biodata (id,nama,tempat_lahir,tgl_lahir,alamat,gender,hobi,no_tlp,email,sekolah) VALUE
('','$nama','$tempat_lahir','$tgl_lahir','$alamat','$gender','$hobi','$no_tlp','$email','$sekolah')");
if($aksi){
echo "SELAMAT DATA ANDA BERHASIL";
}else{
echo mysqli_error($aksi)."Ada yang salah";
}
?>