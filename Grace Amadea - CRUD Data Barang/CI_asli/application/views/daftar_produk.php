<form>
<a href="<?php echo site_url ('produk/tambah_produk');?>" class="btn btn-primary"><i class="glypichon-plus"></i>Tambah</a>
	<table border="1">
		<tr class="asd">
			<td><strong>No</strong></td>
			<td><strong>Kode Produk</strong></td>
			<td><strong>Nama Produk</strong></td>
			<td><strong>Warna</strong></td>
			<td><strong>Stok</strong></td>
			<td><strong>Picture</strong></td>
            <td><strong>aksi</strong></td>
		</tr>
			<?php 
				if(!empty($view)){
					$no=1;
				foreach($view as $data){ ?>
			
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['kode_produk'];?></td>
				<td><?php echo $data['nama_produk'];?></td>
				<td><?php echo $data['warna'];?></td>
				<td><?php echo $data['stok'];?></td>
				<td><?php echo $data['picture'];?></td>
				<td><a href=produk/edit_produk/<?=$data['kode_produk']?>>Edit</a> | <a href="<?=base_url()?>index.php/produk/edit_produk/<?=$data['kode_produk']?>">Delete</a> </td>
				
			</tr>
			<?php
				$no++;
			}
			
				}
				else
				{?>
					<tr>
					<td colspan ="5" align="center">Data Kosong</td>
					</tr>
				<?php
				}
				?>
				
	
	</table>
</form>