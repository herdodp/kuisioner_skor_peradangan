<!DOCTYPE html>
<html>
<head>
<title>Form HTML</title>
</head>
<body>
<form action="proses.php" method="get">
<p>Jenis Kelamin</p>

<table>
	<tr>
		<td>
			<p><input type='radio' name='jenis_kelamin1' value='pria' />Pria</p>
			<p><input type='radio' name='jenis_kelamin2' value='perempuan' />Perempuan</p>
		</td>
	</tr>
</table>

<input type='submit' name='tombol' value='Kirim' />
</form>
</body>
</html>