<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Buku</h3>
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
<form class="form-horizontal" method="post" action="<?= base_url('buku/store') ?>">
<?= csrf_field(); ?>
<div class="card-body">
<div class="form-group row">
<label for="kode" class="col-sm-2 col-form-label">Kode</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="kode"
name="kode" placeholder="Kode" value="<?= old('kode'); ?>">
</div>
</div>
<div class="form-group row">
<label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="penulis"
name="penulis" value="<?= old('penulis'); ?>">
</div>
</div>
<div class="form-group row">
<label for="judul" class="col-sm-2 col-form-label">Judul</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="judul"
name="judul" value="<?= old('judul'); ?>">
</div>
</div>
<div class="form-group row">
<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="kategori"
name="kategori" value="<?= old('kategori') ?>" />
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