<center><h2>Table</h2></center>
<table align="center" border='1' cellpadding='4'>
	<tr>
		<td><strong>Nim</strong></td>
		<td><strong>Nama</strong></td>
		<td><strong>Judul</strong></td>
		<td><strong>Pembimbing</strong></td>
		</tr>
		<?php foreach ($tampil as $tampil_item): ?> 
		<tr>
			<td><?php echo $tampil_item['nim']; ?></td>
			<td><?php echo $tampil_item['nama']; ?></td>
			<td><?php echo $tampil_item['judul']; ?></td>
			<td><?php echo $tampil_item['pemb']; ?></td>
			<td><a href="<?php echo site_url('menu/edit/'.$tampil_item['nim']); ?>">Edit</a> | <a href="<?php echo site_url('menu/delete_news/'.$tampil_item['nim']); ?>" onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td></td>
		</tr>
		<?php endforeach;?>
	</table> 