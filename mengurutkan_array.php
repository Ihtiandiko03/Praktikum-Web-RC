<?php
	
	function susun_array(array $var, $count){
		for ($i = 0; $i < $count; $i++) {
		    for ($j = $i + 1; $j < $count; $j++) {
		        if ($var[$i] > $var[$j]) {
		            $temp = $var[$i];
		            $var[$i] = $var[$j];
		            $var[$j] = $temp;
		        }
		    }
		}
		return $var;
	}
	

	$data_acak = ["Larine", "Aduh", "Qifuat", "Toda", "Anevi", "Samid","Kifuat"];

	$count = count($data_acak);

	$data_sebelumdiacak = $data_acak;

	$data_urut = susun_array($data_acak, $count);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Urut Array</title>
	<style type="text/css">
		.flex-container {
			display: flex;
			border : 5pt solid darkgrey;
			text-align: center;
			margin-left: 300px;
			margin-right: 444px;
			margin-top: 350px;

		}

		.flex-container > h3,p{
			border : 1pt solid white;
			padding: 40px;
			font-family: Montserrat;
		    font-style: italic;
		    font-variant: small-caps;
			
		}

			

	</style>
</head>
<body>
	
	<div class="flex-container">
	  <div style="background-color:#A2FFE4;">
	  		<h3 style="font-family: Montserrat; font-style: italic; font-variant: small-caps;">Data sebelum diurut</h3>
			<p><?php  
				for ($i=0; $i <$count ; $i++) { 
					if($i == $count-1){
						echo "$data_acak[$i]";
					}
					else{
						echo "$data_acak[$i], ";
					}
				}

			?></p>
	  </div>
	  <div style="background-color:#BAFFEB;">
	  		<h3 style="font-family: Montserrat; font-style: italic; font-variant: small-caps;">Data setelah diacak</h3>
			<p><?php  
				for ($i=0; $i <$count ; $i++) { 
					if($i == $count-1){
						echo "$data_urut[$i]";
					}
					else{
						echo "$data_urut[$i], ";
					}
				}

			?></p>
	  </div>
	</div>
	
</body>
</html>