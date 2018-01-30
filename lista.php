<?php

	function um($n) {
		$cont = 0;

		for ($i = 1; $i <= $n; $i++) {
			if ($n % $i == 0) {
				$cont++;
			}
		}

		if ($cont <= 2 && $n != 2) {
			echo "$n é primo!";
		}

		else if ($n == 2) {
			echo "2 é primo!";
		}

		else {
			echo "$n não é primo!";
		}
	}

	$n = rand(1, 50);
	echo um($n);



	function dois($base, $expo) {
		echo "<br><br>".$base;
		echo "<br>".$expo. "<br>";
		echo pow($base, $expo);
	}

	$base = rand(1, 10);
	$expo = rand(1, 10);
	echo dois($base, $expo);



	function tres($texto, $cor, $tamanho) {
		echo "<br><br>".$texto;
		echo "<br>".$cor;
		echo "<br>".$tamanho."<br>";
		echo "<font color=\"".$cor."\" size=\"".$tamanho."\">".$texto."</font><br><br>";
	}

	echo tres('Hello', 'blue', 30);



	function quatro($arr) {
		$contpar = 0;
		$contimpar = 0;
		for ($i = 0; $i < 7; $i++) {
			for ($j = 0; $j < 7; $j++) {
				if ($arr[$i][$j] % 2 == 0) {
					$contpar++;
				}
				else {
					$contimpar++;
				}
			}
		}
		if ($contpar > $contimpar) {
			echo "<br>A maioria é par.<br>";
		}
		else if ($contpar == $contimpar) {
			echo "<br>Quantidade de ímpares e pares é igual.<br>";
		}
		else {
			echo "<br>A maioria é ímpar.<br>";
		}
	}

	$arr = array();
			/*for ($i = 0; $i < 7; $i++) {
				for ($j = 0; $j < 7; $j++) {
					echo $arr[$i][$j] = rand (0, 10);
			}*/

		echo "<table border = 1>";
		for ($i = 0; $i < 7; $i++) {
			echo "<tr>";
			for ($j = 0; $j < 7; $j++) {
				echo "<td width='25px' eight='50px'>";
				echo $arr[$i][$j] = rand (0, 10);
				echo "</td>";
		}
	echo "</tr>";
	}
	echo "</table>";

	quatro($arr);



	function cinco($n) {

		echo "<br>".$n;
		$total = 1;
		for ($i =  $n; $n > 1 ; $n --) {
			$total = $total * $n;
		}

		echo " - Fatorial é " .$total; 
	}
	echo cinco(5);
?>