<center>
	<?php echo validation_errors(); ?>
	<?php echo form_open('tampil/input'); ?>
	<h2>Form Input</h2>
	<p>Nim: <input type="text" name="nim"></p>
	<p>Nama: <input type="text" name="nama"></p>
	<p>Judul: <input type="text" name="judul"></p>
	<p>Pembimbing: <input type="text" name="pemb"></p>
	<p><input type="submit" name="submit" value="Simpan"></p>
</center>