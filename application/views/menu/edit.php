<h2><?php echo $title; ?></h2>   

	<?php echo validation_errors(); ?>   
	<?php echo form_open('menu/edit/'.$tampil_item['nim']); ?>     

<form>
	<h2 align="center">Update</h2>
	<table align="center">         
		<tr>             
			<td><label for="nim">NIM</label></td>             
			<td><input type="input" name="nim" value="<?php echo $tampil_item['nim'] ?>" /></td>         
		</tr>         
		<tr>             
			<td><label for="nama">Nama</label></td>             
			<td><input type="input" name="nama" value="<?php echo $tampil_item['nama'] ?>" /></td>         
		</tr>
		<tr>             
			<td><label for="judul">Judul</label></td>             
			<td><input type="input" name="judul" value="<?php echo $tampil_item['judul'] ?>" /></td>         
		</tr> 
		<tr>             
			<td><label for="pemb">Pembimbing</label></td>             
			<td><input type="input" name="pemb" value="<?php echo $tampil_item['pemb'] ?>" /></td>         
		</tr> 
		<tr>             
			<td></td>             
			<td><input type="submit" name="submit" value="Update" /></td>         
		</tr>     
	</table> 
</form> 