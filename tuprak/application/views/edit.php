<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<form action="<?php echo base_url()?>c_mahasiswa/edits" method="POST">
	<input type="text" name="nim" value="<?php echo $nim;?>"><br>
	<input type="text" name="nama" value="<?php echo $nama;?>"><br>
	<input type="text" name="tangggal" value="<?php echo $tangggal;?>"><br>
	<input type="text" name="IPK" value="<?php echo $IPK;?>"> <br>
	<input type="text" name="kelas" value="<?php echo $kelas;?>"><br>
	<input type="submit" name="submit" value="submit">

</form>
</body>
</html>