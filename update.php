<?php
include "config.php";
include "header.php";

require_once "config.php";
$id_personal = $_GET['id_personal'];

$query = mysqli_query($mysqli, "SELECT * FROM personal WHERE id_personal = '$id_personal'") or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Edit Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon' />
</head>

<body>
	<div class="judul">
		<h2>aplikasi data pelanggan</h2>
	</div>

	<br />

	<!-- <a href="index.php"> -->
	<form action="proses_edit.php" method="post">

		<table>
			<tr>
				<td>Harga</td>
				<td>
					<input type="hidden" name="id_personal" value="<?php echo $data['id_personal'] ?>">
					<input type="text" name="harga" value="<?php echo $data['harga'] ?>" required>
				</td>
			</tr>
			<tr>
				<td>Tanggal keluar</td>
				<td><input type="date" name="masuk" value="<?php echo $data['masuk'] ?>" required></td>
			</tr>

		</table>
	</form>
</body>

</html>
<?php
include "footer.php";
?>