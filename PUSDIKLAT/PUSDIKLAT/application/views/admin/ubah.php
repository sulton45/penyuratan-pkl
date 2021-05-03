<div class="container-fluid">
	<table class="table table-bordered mt-3">
		<form action="<?= base_url("admin/ubahStatus"); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">
		<thead>
			<tr>
				<td class="text-center"><strong>Nama Mahasiswa</strong></td>
				<td class="text-center"><strong>Asal Instansi</strong></td>
				<td class="text-center"><strong>Unit Kerja</strong></td>
				<td class="text-center"><strong>Keterangan</strong></td>
				<td class="text-center"><strong>Surat</strong></td>
				<td class="text-center"><strong>Status</strong></td>
			</tr>
		</thead> 
		<tbody>
			
				<tr>
					<td><?= $mahasiswa['nama']; ?></td>
					<td><?= $mahasiswa['instansi']; ?></td>
					<td><?= $mahasiswa['unit']; ?></td>
					<td><?= $mahasiswa['ketentuan']; ?></td>
					<td><?= $mahasiswa['surat_magang'];?></td>
					<td>
						<div class="form-group">
						<label for="status">
							<select class="form-select" name="status">
								<option>---PILIH---</option>
								<option value="Terima">Terima</option>
								<option value="Tolak">Tolak</option>
							</select>
						</label>
					</div>
					</td>
				</tr>
		</tbody>
	</table>
	<button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Simpan</button>
	</form>
</div>
