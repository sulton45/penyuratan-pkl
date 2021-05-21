<?php if ($this->session->flashdata('flashMessage') == TRUE) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<p>
			<?php echo $this->session->flashdata('flashMessage'); ?>
		</p>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>

<div class="container-fluid mt-3">
	<div class="row d-flex flex-row-reverse">
		<div class="col-4">
			<form action="" method="post" class="d-flex">
				<div class="input-group">
					<input type="search" class="form-control rounded me-2" name="keyword" id="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
					<button type="submit" class="btn btn-outline-dark rounded">Search</button>
				</div>
			</form>
		</div>
	</div>
	<table class="table table-bordered mt-3">
		<thead>
			<tr>
				<td class="text-center"><strong>Nama Mahasiswa</strong></td>
				<td class="text-center"><strong>Asal Instansi</strong></td>
				<td class="text-center"><strong>Unit Kerja</strong></td>
				<td class="text-center"><strong>Keterangan</strong></td>
				<td class="text-center"><strong>Surat Magang</strong></td>
				<td class="text-center"><strong>Status</strong></td>
				<td class="text-center" colspan="2"><strong>Aksi</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($mahasiswa as $mhs) : ?>
				<tr>
					<td><?= $mhs['nama']; ?></td>
					<td><?= $mhs['instansi']; ?></td>
					<td><?= $mhs['unit']; ?></td>
					<td><?= $mhs['ketentuan']; ?></td>
					<td>
						<a href="<?= base_url("admin/getSuratMagang/") . $mhs['nim']; ?>">
							<?= $mhs['surat_magang']; ?>
						</a>
					</td>
					<td><?= $mhs['status']; ?></td>
					<td>
						<a href="<?= base_url("admin/detil2/") . $mhs['nim']; ?>" class="btn btn-sm">
							<img src="<?= base_url("assets/loupe.png");?>" width="25" data-toggle="tooltip" title="Detil Data Mahasiswa">
						</a>
					</td>
					<td>
						<a href="<?= base_url("admin/ubah/") . $mhs['nim']; ?>" class="btn btn-sm">
							<img src="<?= base_url("assets/edit.png"); ?>" width="25" data-toggle="tooltip" title="Ubah Data Mahasiswa">
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
