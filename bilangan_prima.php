<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bilangan Prima</title>
	<style type="text/css">
		body{
			background-color: #D0D0D0;
			font-family: Montserrat;
		    font-style: italic;
		    font-variant: small-caps;
		}
		.flex-container {
		  display: flex;

		}

		.flex-container > div {  
		  width: 1000px;
		  text-align: center;
		  font-size: 30px;
		}

		footer{
			text-align: center;
			background-color: #C4FCFF;
			padding: 17px;
		}
	</style>
</head>
<body>

	<div class="flex-container">
	  <div style="background-color:#B7FBFF; line-height: 400px;"><h4>Bilangan Prima 1-50</h4></div>

	  <div style="background-color:#A2FAFF;">
	  		<p>
				<?php 

					function cekprima(){
						for($i=1;$i<=50;$i++){ 
					        $a = 0; 
					        for($j=1;$j<=$i;$j++){ 
					            if($i % $j == 0){ 
					                $a++; 
					            }
					        }
					        if($a == 2){ 
					         echo $i." <br>" ;
						    }
						}
					}
					

				    $prima = cekprima();
				?>

			</p>
	  </div>
	</div>
	<footer style="font-size: 22px;">
		<p>Ihtiandiko Wicaksono</p>
		<p>NIM.119140118</p>
		<p>Pemrograman Web RC</p>
	</footer>

</body>
</html>