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
	<form action="<?php echo base_url('detail_transaksi/ubah/'.$getData['order_id']); ?>" method="post">
		<div class="form-group row">
			<label for="order_id" class="col-sm-2 col-form-label">Id_order</label>
			<div class="col-sm-10">
				<input type="text" name="order_id" class="form-control" id="order_id"  value="<?php echo $getData['order_id'] ?>" placeholder="order_id">
				<?php echo form_error('order_id') ?> <!-- menampilkan error saat rule order_id gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label">username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="username"  value="<?php echo $getData['username'] ?>" placeholder="username">
				<?php echo form_error('username') ?> <!-- menampilkan error saat rule username gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="id_barang" class="col-sm-2 col-form-label">id_barang</label>
			<div class="col-sm-10">
				<input type="text" name="id_barang" class="form-control" id="id_barang"  value="<?php echo $getData['id_barang'] ?>" placeholder="id_barang">
				<?php echo form_error('id_barang') ?> <!-- menampilkan error saat rule id_barang gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="merk" class="col-sm-2 col-form-label">merk</label>
			<div class="col-sm-10">
				<input type="text" name="merk" class="form-control" id="merk"  value="<?php echo $getData['merk'] ?>" placeholder="merk">
				<?php echo form_error('merk') ?> <!-- menampilkan error saat rule merk gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="harga" class="col-sm-2 col-form-label">harga</label>
			<div class="col-sm-10">
				<input type="text" name="harga" class="form-control" id="harga"  value="<?php echo $getData['harga'] ?>" placeholder="harga">
				<?php echo form_error('harga') ?> <!-- menampilkan error saat rule harga gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
			<div class="col-sm-10">
				<input type="text" name="jumlah" class="form-control" id="jumlah"  value="<?php echo $getData['jumlah'] ?>" placeholder="jumlah">
				<?php echo form_error('jumlah') ?> <!-- menampilkan error saat rule jumlah gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="status" class="col-sm-2 col-form-label">status</label>
			<div class="col-sm-10">
				<input type="text" name="status" class="form-control" id="status"  value="<?php echo $getData['status'] ?>" placeholder="status">
				<?php echo form_error('status') ?> <!-- menampilkan error saat rule status gagal -->
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