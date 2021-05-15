<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Data Mahasiswa</div>
				<div class="card-body">
					<form action="<?= base_url("admin/ubahStatus"); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">
						<div class="form-group">
							<label for="nama">Nama Mahasiswa</label>
							<p class="form-control"><?= $mahasiswa['nama']; ?></p>
						</div>
						<div class="form-group">
							<label for="instansi">Asal Instansi</label>
							<p class="form-control"><?= $mahasiswa['instansi']; ?></p>
						</div>
						<div class="form-group">
							<label for="unit">Unit Kerja</label>
							<p class="form-control"><?= $mahasiswa['unit']; ?></p>
						</div>
						<div class="form-group">
							<label for="status">Status Magang</label>
							<select class="form-select" name="status" id="status">
								<?php foreach ($status as $status) : ?>
									<?php if ($status == $mahasiswa['status']) : ?>
										<option value="<?= $status; ?>" selected><?= $status; ?></option>
									<?php else : ?>
										<option value="<?= $status; ?>"><?= $status; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan Status</label>
							<textarea class="form-control" name="keterangan" id="floatingTextarea2" style="height: 100px"><?= $mahasiswa['keterangan']; ?></textarea>
						</div>
						<button href="<?= base_url("admin/index/"); ?>" class="btn btn-secondary mt-3">Kembali</button>
						<button type="submit" name="" class="btn btn-primary mt-3 float-end">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>