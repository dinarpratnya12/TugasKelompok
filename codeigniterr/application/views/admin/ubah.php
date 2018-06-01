<!-- 
1. Ganti form action
2. Ganti Input Form
 -->
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	
	<h1>Data Pribadi</h1>
	<!-- load header -->
	<!-- action akan dilakukan ke controller Users dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<?php foreach ($admin as $getData) { ?>

	<form action="<?php echo base_url().'admin/updateadmin'; ?>" method="post">
		<div class="form-group row">
			<label for="Nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
			<div class="col-sm-10">
				<input type="hidden" name="admin_id" class="form-control" id="admin_id"  value="<?php echo $getData->admin_id ?>">
				<input type="text" name="nama_admin" class="form-control" id="nama_admin"  value="<?php echo $getData->nama_admin ?>" placeholder="Nama Admin">
				<?php echo form_error('nama_admin') ?> <!-- menampilkan error saat rule full_name gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="password"  value="<?php echo $getData->password ?>" placeholder="password">
				<?php echo form_error('password') ?> <!-- menampilkan error saat rule password gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-success" value="Ubah">
		</div>
	</form>
	<?php
}
?>
	<!-- load footer -->
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>