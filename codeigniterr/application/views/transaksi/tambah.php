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
	<!-- action akan dilakukan ke controller transaksi dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	<form action="<?php echo base_url('transaksi/tambah'); ?>" method="post">
		<div class="form-group row">
			<label for="id_transaksi" class="col-sm-2 col-form-label">id_transaksi</label>
			<div class="col-sm-10">
				<input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="" placeholder="id_transaksi">
				<?php echo form_error('id_transaksi') ?> <!-- menampilkan error saat rule id_transaksi gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="id_pelanggan" class="col-sm-2 col-form-label">id_pelanggan</label>
			<div class="col-sm-10">
				<input type="text" name="id_pelanggan" class="form-control" id="id_pelanggan" value="" placeholder="id_pelanggan">
				<?php echo form_error('id_pelanggan') ?> <!-- menampilkan error saat rule id_pelanggan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="order_id" class="col-sm-2 col-form-label">order_id</label>
			<div class="col-sm-10">
				<input type="text" name="order_id" class="form-control" id="order_id" value="" placeholder="order_id">
				<?php echo form_error('order_id') ?> <!-- menampilkan error saat rule order_id gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="message" class="col-sm-2 col-form-label">message</label>
			<div class="col-sm-10">
				<input type="text" name="message" class="form-control" id="message" value="" placeholder="message">
				<?php echo form_error('message') ?> <!-- menampilkan error saat rule message gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="tgl_kirim" class="col-sm-2 col-form-label">tgl_kirim</label>
			<div class="col-sm-10">
				<input type="text" name="tgl_kirim" class="form-control" id="tgl_kirim" value="" placeholder="tgl_kirim">
				<?php echo form_error('tgl_kirim') ?> <!-- menampilkan error saat rule tgl_kirim gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="tgl_terima" class="col-sm-2 col-form-label">tgl_terima</label>
			<div class="col-sm-10">
				<input type="text" name="tgl_terima" class="form-control" id="tgl_terima" value="" placeholder="tgl_terima">
				<?php echo form_error('tgl_terima') ?> <!-- menampilkan error saat rule tgl_terima gagal -->
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