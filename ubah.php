<?php 

	require 'fungsi.php';
	require 'bootstrap.html';


	//ambil data di url
	$id = $_GET["id"];
	
	// query berdasarkan id
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di update
		if ( ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UPDATE DATA</title>
		<style type="text/css">
		body{
		      background-image: url("https://p4.wallpaperbetter.com/wallpaper/922/821/102/purple-is-my-color-wallpaper-preview.jpg");
		      background-repeat: no-repeat;
		      background-size: cover;
		    }

		.kotakluar{
			margin: 100px 300px 60px 300px;
		    padding: 30px;
		    background-image: url("https://cdn.kincir.com/2/Jkfo2nht-9TeGWUKoOCMktGk4JkyYaSuwkKXkQk-ymQ/transform/rs:fill:764:400/src/production/2019-08/10dc8a12098a15e8a8ebcd3cc3a12e928851dee7.jpg");
		    background-repeat: no-repeat;
		    background-size: cover;
		    border-radius: 20px;
		}

		h2{

		    text-align: center;
		    font-family: montserrat;
		    font-size: 2em;
		    font-style: italic;
		    font-variant: small-caps;
		}

		form{
			margin-left: 370px;
			margin-right: -1100px;
			font-size: 20px;
			opacity: 100%;
		}

		button{
			margin-left: 140px;
		}

		input{
			border-radius: 30px;
		}
	</style>
</head>
<body>


		<div class="kotakluar">
          <div style="background-color:#F5F5F5; opacity: 80%;">
              
            <h2 class="title">Update Data Mahasiswa</h2>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
			<input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
                                
            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="nama">Nama : </label>
                        <input class="form-control" type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>"> <br>
                    </div>
                </div>
            </div>
                                
            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="nim">NIM : </label>
                        <input class="form-control" type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>"> <br>
                    </div>
                </div>
            </div>
                                
            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="email">Email : </label>
                        <input class="form-control" type="text" name="email" id="email" required value="<?= $mhs["email"] ?>"> <br>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="jurusan">Prodi : </label>
                        <input class="form-control" type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>"> <br>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="col-2">
                    <div class="input-group">
                        <label for="gambar">Gambar : </label>
                        <img src="img/<?= $mhs['gambar']; ?>">
                        <input class="form-control" type="file" name="gambar" id="gambar"> <br>
                    </div>
                </div>
            </div>

            <br>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
            <br>

          </div>
        </div>


</body>
</html>