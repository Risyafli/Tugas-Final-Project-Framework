<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">
<?php if (!empty(session()->getFlashdata('message'))) : ?>
<div class="alert alert-success alert-dismissible fade show"
role="alert">
<?php echo session()->getFlashdata('message'); ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>
<a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary">Tambah</a>
<hr />
<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Kode</th>
<th>Penulis</th>
<th>Judul</th>
<th>Kategori</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach ($buku as $row) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row->kode; ?></td>
<td><?= $row->penulis; ?></td>
<td><?= $row->judul; ?></td>
<td><?= $row->kategori; ?></td>
<td>
<a title="View" href="<?= base_url("buku/view/$row->kode"); ?>" class="btn btn-info">view</a>
<a title="Edit" href="<?= base_url("buku/edit/$row->kode"); ?>" class="btn btn-info">Edit</a>
<a title="Delete" href="<?= base_url("buku/delete/$row->kode") ?>" class="btn btn-danger"
onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>