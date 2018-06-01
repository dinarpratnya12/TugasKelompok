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
	<!-- action akan dilakukan ke controller product dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<form action="<?php echo base_url('pelanggan/ubah/'.$getData['id_pelanggan']); ?>" method="post">
		<div class="form-group row">
			<label for="id_pelanggan" class="col-sm-2 col-form-label">id_pelanggan</label>
			<div class="col-sm-10">
				<input type="text" name="id_pelanggan" class="form-control" id="id_pelanggan"  value="<?php echo $getData['id_pelanggan'] ?>" placeholder="id_pelanggan">
				<?php echo form_error('id_pelanggan') ?> <!-- menampilkan error saat rule id_pelanggan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="nama_pelanggan" class="col-sm-2 col-form-label">nama_pelanggan</label>
			<div class="col-sm-10">
				<input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan"  value="<?php echo $getData['nama_pelanggan'] ?>" placeholder="nama_pelanggan">
				<?php echo form_error('nama_pelanggan') ?> <!-- menampilkan error saat rule nama_pelanggan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="pass_pelanggan" class="col-sm-2 col-form-label">pass_pelanggan</label>
			<div class="col-sm-10">
				<input type="text" name="pass_pelanggan" class="form-control" id="pass_pelanggan"  value="<?php echo $getData['pass_pelanggan'] ?>" placeholder="pass_pelanggan">
				<?php echo form_error('pass_pelanggan') ?> <!-- menampilkan error saat rule pass_pelanggan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="email"  value="<?php echo $getData['email'] ?>" placeholder="email">
				<?php echo form_error('email') ?> <!-- menampilkan error saat rule email gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="alamatl" class="col-sm-2 col-form-label">alamatl</label>
			<div class="col-sm-10">
				<input type="text" name="alamatl" class="form-control" id="alamatl"  value="<?php echo $getData['alamatl'] ?>" placeholder="alamatl">
				<?php echo form_error('alamatl') ?> <!-- menampilkan error saat rule email gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="nomor_tlp" class="col-sm-2 col-form-label">nomor_tlp</label>
			<div class="col-sm-10">
				<input type="text" name="nomor_tlp" class="form-control" id="nomor_tlp"  value="<?php echo $getData['nomor_tlp'] ?>" placeholder="nomor_tlp">
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
				<script>$("select[name='fk_id_category']").val('<?php echo $getData['fk_id_category'] ?>')</script>
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-success" value="Ubah">
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