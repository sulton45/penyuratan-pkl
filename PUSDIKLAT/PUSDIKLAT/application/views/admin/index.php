<div class="container-fluid">
	<table class="table table-bordered mt-3">
		<thead>
			<tr>
				<td class="text-center"><strong>Nama Mahasiswa</strong></td>
				<td class="text-center"><strong>Asal Instansi</strong></td>
				<td class="text-center"><strong>Unit Kerja</strong></td>
				<td class="text-center"><strong>Keterangan</strong></td>
				<td class="text-center"><strong>Surat Magang</strong></td>
				<td class="text-center"><strong>Status</strong></td>
				<td class="text-center"><strong>Ubah Status</strong></td>
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
						<a href="<?= base_url("admin/download/") . $mhs['nim']; ?>">
							<?= $mhs['surat_magang']; ?>
						</a>
					</td>
					<td><?= $mhs['status']; ?></td>
					<td>
						<a href="<?= base_url("admin/ubah/") . $mhs['nim']; ?>" class="btn btn-sm">
							<img src="<?= base_url("assets/edit.png"); ?>" width="25">
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
