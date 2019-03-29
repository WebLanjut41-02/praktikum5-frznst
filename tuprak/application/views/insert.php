<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<form action="<?php echo base_url()?>c_mahasiswa/insert" method="POST">
	NIM <input type="text" name="nim" ><br>
	Nama <input type="text" name="nama" ><br>
	Tanggal<input type="text" name="tangggal" ><br>
	IPK <input type="text" name="IPK" > <br>
	Kelas <input type="text" name="kelas" ><br>
	<input type="submit" name="submit" value="submit">

</form>
</body>
</html>