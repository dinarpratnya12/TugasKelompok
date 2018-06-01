
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Navbar example</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
	<h1>Pelanggan</h1>
	<a href="<?php echo base_url('pelanggan/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>


	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>ID Pelanggan</th>
				<th>Nama Pelanggan</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?= $value->id_pelanggan ?></td>
					<td><?= $value->nama_pelanggan ?></td>
					<td><?= $value->email ?></td>
					<td><?= $value->alamat ?></td>
					<td><?= $value->nomor_tlp ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?= base_url('pelanggan/ubah/'.$value->id_pelanggan) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?= base_url('pelanggan/hapus/'.$value->id_pelanggan) ?>" class="btn btn-sm btn-danger">Hapus</a>
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
