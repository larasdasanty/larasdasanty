<table border="1">
<tr>
<th>NO</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tgl. Lahir</th>
<th>alamat</th>
<th>Gender</th>
<th>Hobi</th>
<th>No. Tlp</th>
<th>Email</th>
<th>Pekerjaan</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "select from biodata");
while($d = mysqli_fetch_array($data))(
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['name']; ?></td>
<td><?php echo $d['tempat_lahir']; ?></td>
<td><?php echo $d['tgl_lahir']; ?></td>
<td><?php echo $d['alamat']; ?></td>
<td><?php echo $d['gender']; ?></td>
<td><?php echo $d['hobi']; ?></td>
<td><?php echo $d['no_tlp']; ?></td>
<td><?php echo $d['Email']; ?></td>
<td><?php echo $d['sekolah']; ?></td>
<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>