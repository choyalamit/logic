<?php $n=5; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Peramind Logic</title>
<style>

.box{
	float:left; 
	width:22%;
	margin:10px;
	border:solid 2px #FF0000;
	padding:5px;
	min-height:250px;
	
}
.box-third{
	float:left; 
	width:71.5%;
	margin:10px;
	border:solid 2px #FF0000;
	padding:5px;
	min-height:250px;
	
}
.box-half{
	float:left; 
	width:47%;
	margin:10px;
	border:solid 2px #FF0000;
	padding:5px;
	min-height:250px;
	
}
</style>
</head>
<body>
<div class="box-container">
	<div class="box">
	<h2>simple Traingle</h2>
	<?php
	
	for($i=1;$i<=$n;$i++){
		for($k=$i;$k>0;$k--){
			echo "&nbsp;*&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
	<div class="box">
	<h2>Simple traingle with reverse</h2>
	<?php
	for($i=1;$i<=$n;$i++){
		for($k=$i;$k>0;$k--){
			echo "&nbsp;*&nbsp;";
		}
		echo "<br/>";
	}
	for($i=$n-1;$i>0;$i--){
		for($k=$i;$k>0;$k--){
			echo "&nbsp;*&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
	<div class="box">
	<h2>Mirror view of first:-</h2>
	<?php
	for($i=1;$i<=$n;$i++){
		for($j=0;$j<=$n-$i;$j++){
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "*&nbsp;&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
	<div class="box">
	<h2>2. Mirror view second:</h2>
	<?php
	for($i=1;$i<=$n;$i++){
		for($j=0;$j<=$n-$i;$j++){
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "*&nbsp;&nbsp;";
		}
		echo "<br/>";
	}
	for($i=$n-1;$i>0;$i--){
		for($j=0;$j<=$n-$i;$j++){
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "*&nbsp;&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
</div>
<div class="box-container">
	<div class="box">
	<h2>Star Traingle [Pyramind]</h2>
	<?php
	echo "<pre>";
	for($i=1;$i<=$n;$i++){
		for($j=0;$j<$n-$i;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "&nbsp;*&nbsp;";
		}
		echo "<br/>";
	}
	echo "</pre>";
	?>
	</div>
	<div class="box">
	<h2>Second Traingle</h2>
	<?php
	for($i=1;$i<=$n;$i++){
		for($j=0;$j<$n-$i;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "&nbsp;*&nbsp;";
		}
		echo "<br/>";
	}
	for($i=$n-1;$i>0;$i--){
		for($j=0;$j<$n-$i;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "&nbsp;*&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
	<div class="box">
	<h2>Traingle With Numbers:-</h2>
	<?php
	for($i=1;$i<=$n;$i++){
		for($j=0;$j<=$n-$i;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "&nbsp;".$i."&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
	<div class="box">
	<h2>2. Traingle With Numbers:-</h2>
	<?php
	for($i=1;$i<=$n;$i++){
		for($j=0;$j<=$n-$i;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "&nbsp;".$i."&nbsp;";
		}
		echo "<br/>";
	}
	for($i=$n-1;$i>0;$i--){
		for($j=0;$j<=$n-$i;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=$i;$k>0;$k--){
			echo "&nbsp;".$i."&nbsp;";
		}
		echo "<br/>";
	}
	?>
	</div>
</div>


<div class="box-container">
	<div class="box">
	<h2>Alphabet Paramedic Series</h2>
	<?php 
	$letters = range('A', 'Z');
	for($i=0; $i<$n; $i++){ 
		for($j=$n; $j>$i; $j--){
			echo $letters[$i];
		}
		echo "<br>";
	}
	
	?>
	</div>
	<div class="box-third">
	<h2>Numeric Pyramid Series and also can print the sum of every row</h2>
	<p>We can print a numeric pyramid series and also can print the sum of every row using php code. For this we need two ‘for’ loops to print the series. First ‘for’ loop is used for rows and second "for" loop is used for numbers in a row. We use ‘if’ conditions to add a ‘+’ sign between the numbers also some variables to store the sum of a row.</p>
	<?php 
	$k = 1; $sum = 0;
	for($i=1;$i<=$n;$i++){
		for($j=1;$j<=$i;$j++){
			if ($j>$k){
				echo "+";
			}
			echo $j;
		}
		$sum =$sum + $j-1;
		echo " = ".$sum;
		echo "<br />";
	}
	?>
	</div>
	
</div>



<div class="box-container">
  <div class="box-half">
	<h2>HOW TO MAKE A NUMERIC POLYGON IN PHP ?</h2>
	<?php
	$m=1; $n=5; $z=5;
	for($i=1; $i<=$n; $i++) {
		for($j=$i; $j<=$n-1; $j++) {
		   echo "&nbsp;&nbsp;&nbsp;";
		}
		for($k=1; $k<=$m; $k++)  {
			echo $k ."&nbsp";
		}
		for($c=$m; $c>1; $c--) {
			echo $c-1 ."&nbsp";
		}
		echo "<br>";
		$m++;
	}
	
	?>
	</div>
	<div class="box-half">
	<h2>PHP CODE NUMERIC POLYGON WITH ODD NUMBERS</h2>
	
	</div>
	
</div>


<div class="box-container">
  <div class="box-half">
	<h2>HOW TO MAKE A NUMERIC POLYGON SHOWS ONLY ONE AND A PLUS SIGN WITH NUMBERS.</h2>
	
	</div>
	<div class="box-half">
	<h2>HOW TO PRINT A TRIANGULAR PATTERN IN PHP</h2>
	
	</div>
	
</div>
</body>
</html>
