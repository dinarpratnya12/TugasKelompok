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
	<!-- action akan dilakukan ke controller merk dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<form action="<?php echo base_url('merk/tambah'); ?>" method="post">
		<div class="form-group row">
			<label for="id_merk" class="col-sm-2 col-form-label">id_merk</label>
			<div class="col-sm-10">
				<input type="text" name="id_merk" class="form-control" id="id_merk" value="" placeholder="id_merk">
				<?php echo form_error('id_merk') ?> <!-- menampilkan error saat rule id_merk gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="nama_merk" class="col-sm-2 col-form-label">nama_merk</label>
			<div class="col-sm-10">
				<input type="text" nama_merk="nama_merk" class="form-control" id="nama_merk" value="" placeholder="nama_merk">
				<?php echo form_error('nama_merk') ?> <!-- menampilkan error saat rule nama_merk gagal -->
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