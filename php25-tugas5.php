<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas PHP 5 - Niomic</title>
	<style>

	</style>
</head>
<body>
	<!-- TUGAS PAGE 1 -->
	<?php 
		$input_false = "false";
		$input_true = "true";
		$input_0 = "0";
		$input_1 ="1";

	 ?>
	<p>Tabel Logika <span style="background-color: #3366ff;">1111</span></p>
	<table border="1">
		<tr>
			<th>Input true</th>
			<th>Input 2</th>
			<th>AND</th>
			<th>OR</th>
		</tr>
		<tr>
			<td><?php echo $input_false ?></td>
			<td><?php echo $input_false ?></td>
			<td><?php echo $input_0 ?></td>
			<td><?php echo $input_0 ?></td>
		</tr>
		<tr>
			<td><?php echo $input_false ?></td>
			<td><?php echo $input_true ?></td>
			<td><?php echo $input_0 ?></td>
			<td><?php echo $input_1 ?></td>
		</tr>
		<tr>
			<td><?php echo $input_true ?></td>
			<td><?php echo $input_false ?></td>
			<td><?php echo $input_0 ?></td>
			<td><?php echo $input_1 ?></td>
		</tr>
		<tr>
			<td><?php echo $input_true ?></td>
			<td><?php echo $input_true ?></td>
			<td><?php echo $input_1 ?></td>
			<td><?php echo $input_1 ?></td>
		</tr>
	</table>
	<br>
	<!-- TUGAS PAGE 2 -->
	<?php 
		$input1e = "Ayo";
		$input2e = "Belajar";
		$input1f = "Bersama";
		$input2f = "Niomic";
		$spasi = " ";
		$hasil1e = $input1e.$spasi.$input2e;
		$hasil2f = $input1f.$spasi.$input2f;
	 ?>
	<h1>Operator String</h1>
	<table border="1">
		<tr align="left">
			<th>Input 1</th>
			<th>Input 2</th>
			<th>Hasil</th>
		</tr>
		<tr>
			<td><?php echo $input1e ?></td>
			<td><?php echo $input2e ?></td>
			<td><?php echo $hasil1e ?></td>
		</tr>
		<tr>
			<td><?php echo $input1f ?></td>
			<td><?php echo $input2f ?></td>
			<td><?php echo $hasil2f ?></td>
		</tr>
	</table>
</body>
</html>


