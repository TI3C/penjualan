<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Checkout</title>
		<link rel="stylesheet" href="">
	</head>

	<body>
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Jumlah Barang</th>
					<th>Harga Barang Satuan</th>
					<th>Total Harga Barang</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$no=1;
					$keranjang = $this->cart->contents();
					foreach ($keranjang as $key) {
					echo "	
					<tr>
						<td>$no</td>
						<td>".$key['id']."</td>
						<td>".$key['name']."</td>
						<td>".$key['qty']."</td>
						<td>".$key['price']."</td>
						<td>".$key['total_harga']."</td>
					</tr>
						";
					$no++;	
					}
				?>
			</tbody>
		</table>
		<a href="<?php echo base_url().'barang/clear_cart' ?>" class="btn btn-custom btn-sm masuk">RESET</a>
		<a href="<?php echo base_url().'barang/beli_barang' ?>" class="btn btn-custom btn-sm masuk" name="proses_beli">BELI</a>
	</body>
</html>

