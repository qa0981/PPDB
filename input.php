<!DOCTYPE html>
<html>
<head>
	<title>Latihan Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1692870487" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
</head>
<body>
	<script src="./dist/js/demo-theme.min.js?1692870487"></script>
	<div class="judul">		
		<h2>Materi Mobile</h2>
		<h3>Universitas Duta Bangsa</h3>
	</div>


	<h3>Input Data Baru</h3>
	<form action="APIsaveData.php" method="post">		
		<table>
			<tr>
				<td>Nomor Registrasi</td>
				<td><input type="text" name="no_reg" required></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_mhs" required></td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select class="form-select" aria-label="Default select example" name="jenis_kelamin">
						<option selected>Laki - Laki</option>
						<option value="1">Perempuan</option>
					</select>
				</td>				
			</tr>	
			<tr>
				<td>Jenis Pendaftaran</td>
				<td><input type="text" name="bidikmisi" required></td>					
			</tr>	
			<tr>
				<td>Asal Sekolah</td>
				<td>
				<select class="form-select" name="asal_sekolah" required>
                <option value="">Asal Sekolah</option>
					<?php
					include "koneksi.php";
					$query = "SELECT * FROM sekolah";
					$result = mysqli_query($koneksi, $query);
					while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="'.$row['id_sekolah'].'">'.$row['nama_sekolah'].'</option>';
					}
					?>
                </select>
				</td>					
			</tr>
			<tr>
				<td>Pilihan 1</td>
				<td><input type="text" name="pilihan1" required></td>					
			</tr>
			<tr>
				<td>Pilihan 2</td>
				<td><input type="text" name="pilihan2" required></td>					
			</tr>
			<tr>
				<td>Rangking Sekolah</td>
				<td><input type="text" name="rank_sekolah" required></td>					
			</tr>
			<tr>
				<td>Nilai UN</td>
				<td><input type="text" name="nilai_un" required></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>	
</body>
</html>