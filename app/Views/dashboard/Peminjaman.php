<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">

<?php if (!empty(session()->getFlashdata('message'))) : ?>
<div class="alert alert-success alert-dismissible fade show"
role="alert">
<?php echo session()->getFlashdata('message'); ?>

<button type="button" class="close" data-dismiss="alert" aria-
label="Close">

<span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>

<a href="<?= base_url('/Peminjaman/create'); ?>" class="btn btn-
primary">Pinjam</a>

<hr />
<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Kode Buku</th>
<th>NIM</th>
<th>Nama</th>
<th>Nama Buku</th>
<th>No telp</th>
<th>email</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach ($Peminjaman as $row) {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row->Kode_Buku; ?></td>
<td><?= $row->NIM; ?></td>
<td><?= $row->Nama; ?></td>
<td><?= $row->Nama_Buku; ?></td>
<td><?= $row->no_telp; ?></td>
<td><?= $row->email; ?></td>
<td>
<a title="Delete" href="<?=
base_url("peminjaman/delete/$row->Kode_Buku") ?>" class="btn btn-danger"
onclick="return confirm('Apakah Anda yakin ingin mengembalikan buku?')">Kembalikan</a>
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