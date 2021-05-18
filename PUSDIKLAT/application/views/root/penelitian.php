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
				<td class="text-center"><strong>Judul Penelitian</strong></td>
				<td class="text-center"><strong>Abstrak</strong></td>
				<td class="text-center" colspan="3"><strong>Aksi</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($penelitian as $p) : ?>
				<tr>
					<td><?= $p['nama']; ?></td>
					<td><?= $p['instansi']; ?></td>
					<td><?= $p['judul']; ?></td>
					<td><?= $p['abstrak']; ?></td>
					<td>
						<a href="<?= base_url("root/detilPenelitian/") . $p['id_penelitian']; ?>" class="btn btn-sm">
							<img src="<?= base_url("assets/loupe.png"); ?>" width="25" data-toggle="tooltip" title="Detail Data Mahasiswa">
						</a>
					</td>
					<td>
						<a href="<?= base_url("root/buatSuratPenelitian/") . $p['id_penelitian']; ?>">
							<img src="<?= base_url("assets/email.png"); ?>" width="25" data-toggle="tooltip" title="Buat Data Surat">
						</a>
					</td>

					<td>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<img src="<?= base_url("assets/printer.png"); ?>" width="25" data-toggle="tooltip" title="Print Surat">
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title w-100" id="exampleModalLabel" style="text-align:center">Pilih Jenis Surat</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<a class="btn btn-primary w-100" href="<?= base_url("root/pdf2/") . $p['id_penelitian']; ?>" target="_blank" role="button">Surat Untuk Pemohon</a>
										<a class="btn btn-secondary w-100" href="<?= base_url("root/pdf3/") . $p['id_penelitian']; ?>" target="_blank" role="button">Surat Untuk Kepala Pusat</a>
									</div>

								</div>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>