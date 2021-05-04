<div class="container-fluid">
	<table class="table table-bordered mt-3">
		<thead>
			<tr>
				<td class="text-center"><strong>Nama Mahasiswa</strong></td>
				<td class="text-center"><strong>Asal Instansi</strong></td>
				<td class="text-center"><strong>Judul Penelitian</strong></td>
				<td class="text-center"><strong>Abstrak</strong></td>
				<td class="text-center"><strong>Detil</strong></td>
			</tr>
		</thead> 
		<tbody>
			<?php foreach ($penelitian as $p) : ?>
				<tr>
					<td><?= $p['nama']; ?></td>
					<td><?= $p['instansi'];?></td>
					<td><?= $p['judul'];?></td>
					<td><?= $p['abstrak'];?></td>
					<td>
						<a href="<?= base_url("root/detilPenelitian/") . $p['id_penelitian'];?>" class="btn btn-sm">
							<img src="<?= base_url("assets/loupe.png");?>" width="25">
						</a>
						<a href="#">
							<img src="<?= base_url("assets/printer.png");?>" width="25">
						</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
