
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Navbar example</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
	<h1>detail_transaksi</h1>
	<a href="<?php echo base_url('detail_transaksi/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>Order_id</th>
				<th>Username</th>
				<th>Id_barang</th>
				<th>Merk</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['order_id'] ?></td>
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['id_barang'] ?></td>
					<td><?php echo $value['merk'] ?></td>
					<td><?php echo $value['harga'] ?></td>
					<td><?php echo $value['jumlah'] ?></td>
					<td><?php echo $value['status'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('detail_transaksi/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('detail_transaksi/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>