<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Navbar example</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
	<h1>Table</h1>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<form action="<?php echo base_url('leptop/tambah'); ?>" method="post">
		<div class="form-group row">
			<label for="id_leptop" class="col-sm-2 col-form-label">id_leptop</label>
			<div class="col-sm-10">
				<input type="text" name="id_leptop" class="form-control" id="id_leptop" value="" placeholder="id_leptop">
				<?php echo form_error('id_leptop') ?> <!-- menampilkan error saat rule id_leptop gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="id_merk" class="col-sm-2 col-form-label">id_merk</label>
			<div class="col-sm-10">
				<input type="text" name="id_merk" class="form-control" id="id_merk" value="" placeholder="id_merk">
				<?php echo form_error('id_merk') ?> <!-- menampilkan error saat rule id_merk gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="info" class="col-sm-2 col-form-label">info</label>
			<div class="col-sm-10">
				<input type="text" name="info" class="form-control" id="info" value="" placeholder="info">
				<?php echo form_error('info') ?> <!-- menampilkan error saat rule info gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="harga" class="col-sm-2 col-form-label">harga</label>
			<div class="col-sm-10">
				<input type="text" name="harga" class="form-control" id="harga" value="" placeholder="harga">
				<?php echo form_error('harga') ?> <!-- menampilkan error saat rule harga gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="stok" class="col-sm-2 col-form-label">stok</label>
			<div class="col-sm-10">
				<input type="text" name="stok" class="form-control" id="stok" value="" placeholder="stok">
				<?php echo form_error('stok') ?> <!-- menampilkan error saat rule stok gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="foto" class="col-sm-2 col-form-label">foto</label>
			<div class="col-sm-10">
				<input type="text" name="foto" class="form-control" id="foto" value="" placeholder="foto">
				<?php echo form_error('foto') ?> <!-- menampilkan error saat rule foto gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="fk_id_category" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-10">
				<select name="fk_id_category" id="fk_id_category" class="form-control">
					<?php foreach ($getCategory as $value): ?>
						<option value="<?php echo $value['id_category'] ?>"><?= $value['name_category'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="Tambah">
		</div>
	</form>
	<!-- load footer -->


</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>