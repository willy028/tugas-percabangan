<html>
<table>
<form method="post" action="tp.php">
	<tr>
		<td>Masukkan Total Penggunaan air</td>
		<td><input type="text" name="guna"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="proses" value="HITUNG" /></td>
	</tr>
</table>
</html>

<?php

if(isset($_POST["proses"])){
	$guna = $_POST["guna"];
	if($guna<=30){
		$biaya = $guna * 150;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}elseif($guna<=60){
		$biaya = ($guna-30) * 170 + 4500;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}elseif($guna<=90){
		$biaya = ($guna-60) * 210 + 4500 + 5100;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}else{
		$biaya = ($guna-90) * 250 + 4500 + 5100 + 5250; 
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}		
}


?>