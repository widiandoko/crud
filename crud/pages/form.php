<?php
	include 'model.php';
    $model = new Model();
 	$insert = $model->insert();

?>

<form action="" method="post">
	<div class="">
		<label>Nama</label>
		<input class="bg-slate-900" type="text" name="nama">
	</div>
	<div class="">
		<label>NIM</label>
		<input class="bg-slate-900" type="number" name="nim">
	</div>
	<div>
		<button type="submit" name="submit">kirim</button>
	</div>
</form>