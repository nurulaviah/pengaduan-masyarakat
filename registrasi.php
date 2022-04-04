
<div class="card" style="padding: 50px; width: 40%; margin: 0 auto; margin-top: 10%;">
<h3 style="text-align: center;" class="orange-text">Registrasi</h3>
<form method="POST">
				<div class="input_field">
					<label for="nik">NIK</label>
					<input id="nik" type="number" name="nik">
				</div>
				<div class="input_field">
					<label for="nama">Nama</label>
					<input id="nama" type="text" name="nama">
				</div>
				<div class="input_field">
					<label for="username">Username</label>		
					<input id="username" type="text" name="username">
				</div>
                <div class="input_field">
					<label for="password">Password</label>		
					<input id="password" type="password" name="password">
				</div>
				<div class="input_field">
					<label for="telp">Telp</label>
					<input id="telp" type="number" name="telp">
				</div>
				<div class="input_field">
					<input type="submit" name="register" value="Simpan" class="btn right">
				</div>
			</form>
</div>
<?php 
	if(isset($_POST['register'])){
		$password = md5($_POST['password']);

					$query=mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['username']."','".$password."','".$_POST['telp']."')");
					if($query){
						echo "<script>alert('Data Tesimpan. Silahkan Login')</script>";
						echo "<script>location='location:index.php?p=login';</script>";
					}

	}
 ?>