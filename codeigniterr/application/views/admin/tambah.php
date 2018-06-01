<!-- 
1. form action 
2. Ganti Input form sesuai table
 -->
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<h1>Table</h1>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<?php echo form_open_multipart("admin/aksitambah"); ?>


		<div class="form-group row">
			<label for="full_name" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama_admin" class="form-control" id="nama_admin" value="" placeholder="Name">
				<?php echo form_error('nama_admin') ?> <!-- menampilkan error saat rule full_name gagal -->
			</div>
		</div>

		<div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="username value="" placeholder="username">
				<?php echo form_error('username') ?> <!-- menampilkan error saat rule username gagal -->
			</div>
		</div>

		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="password" value="" placeholder="password">
				<?php echo form_error('password') ?> <!-- menampilkan error saat rule password gagal -->
			</div>
		</div>

		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah">
		</div>
	 
	 <?php echo form_close(); ?>
	<!-- load footer -->


</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>