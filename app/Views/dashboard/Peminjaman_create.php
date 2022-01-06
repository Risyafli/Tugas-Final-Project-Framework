<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Buku Yang Ingin Dipinjam</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<?php if (!empty(session()->getFlashdata('error'))) : ?>
<div class="alert alert-light alert-dismissible fade show"
role="alert">
<h4 class="alert-heading">Periksa Entrian Form</h4>
</hr />
<?php echo session()->getFlashdata('error'); ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>
<form class="form-horizontal" method="post" action="<?= base_url('Peminjaman/store') ?>">
<?= csrf_field(); ?>
<div class="card-body">
<div class="form-group row">
<label for="Kode_Buku" class="col-sm-2 col-form-label">Kode Buku</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="Kode_Buku"
name="Kode_Buku" placeholder="Kode_Buku" value="<?= old('Kode_Buku'); ?>">
</div>
</div>
<div class="form-group row">
<label for="NIM" class="col-sm-2 col-form-label">NIM</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="NIM"
name="NIM" value="<?= old('NIM'); ?>">
</div>
</div>
<div class="form-group row">
<label for="Nama" class="col-sm-2 col-form-label">Nama</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="Nama"
name="Nama" value="<?= old('Nama'); ?>">
</div>
</div>
<div class="form-group row">
<label for="Nama_Buku" class="col-sm-2 col-form-label">Nama Buku</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="Nama_Buku"
name="Nama_Buku" value="<?= old('Nama_Buku') ?>" />
</div>
</div>
<div class="form-group row">
<label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="no_telp"
name="no_telp" value="<?= old('no_telp') ?>" />
</div>
</div>
<div class="form-group row">
<label for="email" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="email"
name="email" value="<?= old('email') ?>" />
</div>
</div>
</div>
<!-- /.card-body -->
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
<!-- /.card-footer -->
</form>
</div>
<!-- /.card -->
</div>
<?= $this->endSection('content'); ?>