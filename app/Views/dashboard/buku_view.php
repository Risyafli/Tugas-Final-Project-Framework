<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
<!-- general form elements -->
<section class="content">
<div class="container-fluid">
<div class="row">
<!-- /.card-header -->
<!-- form start -->
<div class="col-md-3">
<!-- Profile Image -->
<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="profile-user-img img-fluid img-circle"
src="../../dist/img/metode-penelitian-kualitatif-afrizal.PNG" alt="User profile picture">
</div>
<h3 class="profile-username text-center"><?= $buku->kode; ?></h3>
<p class="text-muted text-center"><?= $buku->penulis; ?><br><?= $buku->judul; ?></p>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<div class="col-md-9">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">About Books</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<strong><i class="fas fa-book mr-1"></i>Data Buku</strong>
<p class="text-muted"><?= $buku->judul; ?> kategori Buku ini adalah Pendidikan</p>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
<!-- /.card -->
</div>
</div>
<?= $this->endSection('content'); ?>