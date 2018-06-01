9<?php $this->load->view('header') ?>
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
	<?php echo form_open_multipart("Pelanggan/tambah"); ?>
	<?php echo validation_errors();?>
		<div class="form-group row">
			<label for="id_pelanggan" class="col-sm-2 col-form-label">Id_Pelanggan</label>
			<div class="col-sm-10">
				<input type="text" name="id_pelanggan" class="form-control" id_pelanggan="id_pelanggan" value="" placeholder="id_pelanggan">
				<?php echo form_error('id_pelanggan') ?> <!-- menampilkan error saat rule id_pelanggan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama_pelanggan</label>
			<div class="col-sm-10">
				<input type="text" nama_pelanggan="nama_pelanggan" class="form-control" id="nama_pelanggan" value="" placeholder="nama_pelanggan">
				<?php echo form_error('nama_pelanggan') ?> <!-- menampilkan error saat rule nama_pelanggan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="email" value="" placeholder="email">
				<?php echo form_error('email') ?> <!-- menampilkan error saat rule email gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat" value="" placeholder="alamat">
				<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule alamat gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="nomor_tlp" class="col-sm-2 col-form-label">Nomor_tlp</label>
			<div class="col-sm-10">
				<input type="text" name="nomor_tlp" class="form-control" id="nomor_tlp" value="" placeholder="nomor_tlp">
				<?php echo form_error('nomor_tlp') ?> <!-- menampilkan error saat rule nomor_tlp gagal -->
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
			<input type="submit" name="submit" class="btn btn-primary" value="Tambah">
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