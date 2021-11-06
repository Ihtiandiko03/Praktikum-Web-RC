<?php

	function operasi($a, $b, $tanda){
		$hasil = 0;

		if($tanda == '+'){
			$hasil = $a + $b;
		}
		elseif ($tanda == '-') {
			$hasil = $a-$b;
		}
		elseif ($tanda == '*'){
			$hasil = $a * $b;
		}
		elseif($tanda == '/'){
			$hasil = $a / $b;
		}
		elseif($tanda == '%'){
			$hasil = $a % $b;
		}


	return $hasil;
	}




	if ( isset($_POST["submit"]) ) {
		$operator = ['+', '-', '*', '/','%'];
		$angka1 = $_POST['bil1'];
		$angka2 = $_POST['bil2'];

		for ($i=0; $i <5 ; $i++) { 
			if($operator[$i] == '+'){$penjumlahan =operasi($angka1, $angka2, $operator[$i]);}
			elseif($operator[$i] == '-'){$pengurangan =operasi($angka1, $angka2, $operator[$i]);}
			elseif($operator[$i] == '*'){$perkalian =operasi($angka1, $angka2, $operator[$i]);}
			elseif($operator[$i] == '/'){$pembagian =operasi($angka1, $angka2, $operator[$i]);}
			elseif($operator[$i] == '%'){$modulus = operasi($angka1, $angka2, $operator[$i]);}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kalkulator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style type="text/css">

		div {
		  padding: 15px;
		  border-radius: 30px; 
		  border: 3pt solid grey;
		}

		.div1 {
		  background: #2196F3;
		  float : left;
		  margin-top: 10px;
		  margin-left: 10px;
		}

		.div2 {
		  background: #F44336;
		  float : right;
		  margin-top: 10px;
		  margin-right: 10px;
		}

		.div3 {
		  background: #9EFFE3;
		  float : left;
		  margin-left: 10px;
		  padding-right: 30px;
		  padding-left: 30px;
		}

		.div4 {
		  background: #F39EFF;
		  float : right;
		  margin-right: 10px;
		  padding-right: 30px;
		  padding-left: 30px;
		}

		.div5{
		  background: #F6FF9E;
		  text-align: center;
		  margin-left: 600px;
		  margin-right: 600px;
		}

		.div7{
			background: lightblue;
			text-align: center;
			margin-left: 600px;
			margin-right: 600px;
		}

		.mb-3{
			margin-left: 40px;
			margin-right: 40px;
		}

		body{
			background-color: #F0F0F0;
			font-family: Montserrat;
		    font-style: italic;
		    font-variant: small-caps;
		}
	</style>
</head>
<body>

	<div class="div1">
		<p style="font-weight:bold;">PENJUMLAHAN</p>
	 	<p>Operator : +</p>
	 	<p>Hasil : <?php if(isset($penjumlahan)){echo $penjumlahan;}else{echo 0;}; ?></p>
	</div>

	<div class="div2">
		<p style="font-weight:bold;">PENGURANGAN</p>
	 	<p>Operator : -</p>
	 	<p>Hasil : <?php if(isset($pengurangan)){echo $pengurangan;}else{echo 0;}; ?></p>
	</div>


	<br><br><br><br><br><br><br><br><br>

	<div class="div7">
	 	<form action="" method="post">
		  <div class="mb-3">
		    <label for="bil1" class="form-label">Bilangan 1</label>
		    <input type="number" class="form-control" name="bil1" id="bil1" aria-describedby="emailHelp">
		  </div>
		  <div class="mb-3">
		    <label for="bil2" class="form-label">Bilangan 2</label>
		    <input type="number" class="form-control" name="bil2" id="bil2">
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-primary">Hasil</button>
		</form>
	</div>
	<br><br>

 	<div class="div3">
 		<p style="font-weight:bold;">PERKALIAN</p>
	 	<p>Operator : *</p>
	 	<p>Hasil : <?php if(isset($perkalian)){echo $perkalian;}else{echo 0;}; ?></p>
 	</div>

	<div class="div4">
		<p style="font-weight:bold;">PEMBAGIAN</p>
	 	<p>Operator : /</p>
	 	<p>Hasil : <?php if(isset($pembagian)){echo $pembagian;}else{echo 0;}; ?></p>
	</div>
	<br><br><br><br><br><br><br><br>
	<div class="div5">
		<p style="font-weight:bold;">MODULUS</p>
	 	<p>Operator : %</p>
	 	<p>Hasil : <?php if(isset($modulus)){echo $modulus;}else{echo 0;}; ?></p>
	</div>

</body>
</html>