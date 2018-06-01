<!-- 
1. Ganti nama_controller 'Admin'
2. Ganti Column Table tampilan dan array
 -->
<?php $this->load->view('/header') ?>
<?php $this->load->view('/navbar') ?>
<main role="main" class="container">
	<h1>Admin</h1>
	<a href="<?php echo base_url().'Admin/tambah' ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>Admin_id</th>
				<th>Nama_admin</th>
				<th>Username</th>
				<th>Password</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $value) 
			{

			 ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['admin_id'] ?></td>
					<td><?php echo $value['nama_admin'] ?></td>
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['password'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Admin/ubah/'.$value['admin_id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Admin/hapus/'.$value['admin_id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('/footer') ?>