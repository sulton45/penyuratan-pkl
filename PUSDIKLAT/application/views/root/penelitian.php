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
				<td class="text-center" colspan="4"><strong>Aksi</strong></td>
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
						<div class="dropdown show">
							<a class="btn btn-light dropdown-toggle" href="<?= base_url("root/pdf2/") . $p['id_penelitian']; ?>" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?= base_url("assets/printer.png"); ?>" width="25" data-toggle="tooltip" title="Print Surat">
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url("root/pdf2/") . $p['id_penelitian']; ?>" class="btn btn-sm" target="_blank">Pemohon</a>
								<a class="dropdown-item" href="<?= base_url("root/pdf3/") . $p['id_penelitian']; ?>" class="btn btn-sm" target="_blank">Kepala Pusat</a>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>