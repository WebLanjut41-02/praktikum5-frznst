<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<table border="0" align="center">
	<tr>
	 <form action="<?php echo base_url()?>/c_mahasiswa/cariWhere" method="POST"><td>
	 	<input type="text" name="search" ></td><td><input type="submit" name="searching" value="Cari"></form></tr>
	 	<tr></tr>
	<th>NIM</th><th>Nama</th><th>Tanggal Lahir</th><th>IPK</th><th>Kelas</th><th colspan="2">Aksi</th>
	<?php
		foreach ($data as $a) {
			# code...?>
			<tr>
				<?php
					echo "<td>$a[nim]</td><td>$a[nama]</td><td>$a[tangggal]</td>
					<td>$a[IPK]</td><td>$a[kelas]</td>";
				?>
				<td><a href='<?php echo base_url()."c_mahasiswa/delete/$a[nim]" ?>'><button>Hapus</button></a></td>
				<td><a href='<?php echo base_url()."c_mahasiswa/update/$a[nim]" ?>'><button>Edit</button></a></td>
			</tr>
	<?php	}
	?>
</table>
<a href='<?php echo base_url()."c_mahasiswa/insertform" ?>'><button>Tambah</button></a>
<center><?php  echo $halaman; ?></center>
</body>
</html>