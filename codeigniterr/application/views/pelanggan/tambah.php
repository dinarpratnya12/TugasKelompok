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
	<?php echo form_open_multipart("Pelanggan/tambah"); ?>
	<?php echo validation_errors();?>
		<div class="form-group row">
			<label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama_pelanggan</label>
			<div class="col-sm-10">
				<input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" value="" placeholder="nama_pelanggan">
				</div>
		</div>
		<div class="form-group row">
			<label for="pass_pelanggan" class="col-sm-2 col-form-label">Sandi</label>
			<div class="col-sm-10">
				<input type="password" name="pass_pelanggan" class="form-control"  placeholder="Password">
				</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="email" value="" placeholder="email">
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat" value="" placeholder="alamat">
			</div>
		</div>
		<div class="form-group row">
			<label for="nomor_tlp" class="col-sm-2 col-form-label">Nomor_tlp</label>
			<div class="col-sm-10">
				<input type="text" name="nomor_tlp" class="form-control" id="nomor_tlp" value="" placeholder="nomor_tlp">
			</div>
		</div>
		<div class="form-group row">
			<label for="role" class="col-sm-2 col-form-label">Role</label>
			<div class="col-sm-10">
				<select name="role" class="form-control">
						<option value="admin"><?= 'Admin' ?></option>
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

<?php $this->load->view('footer') ?>
