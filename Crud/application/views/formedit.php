<?php
defined('BASEPATH') or exit('Akses langsung tidak diperbolehkan');
//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-auto">

				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Surat</div>
					<div class="panel-body">
						<!-- <form action="<?php //echo base_url('home/tambahsurat'); 
											?>" method="post" class="form-horizontal"> -->

						<?php echo form_open('home/updatesurat/' . $db->id_surat, ['class' => 'form-horizontal', 'method' => 'post']); ?>
						<div class="form-group <?php echo (form_error('id_surat') != '') ? 'has-error has-feedback' : '' ?>">
							<label for="id_surat" class="control-label col-sm-2">ID Surat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="id_surat" value="<?php echo set_value('id_surat', $db->id_surat); ?>" readonly>
								<?php echo (form_error('id_surat') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
								<?php echo form_error('id_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="no_surat" class="control-label col-sm-2">Nomor Surat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no_surat" value="<?php echo set_value('no_surat', $db->no_surat); ?>">
								<?php echo form_error('no_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="lampiran" class="control-label col-sm-2">Jumlah Lampiran </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="lampiran" value="<?php echo set_value('lampiran', $db->lampiran); ?>">
								<?php echo form_error('lampiran'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="hal_surat" class="control-label col-sm-2">Hal Surat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="hal_surat" value="<?php echo set_value('hal_surat', $db->hal_surat); ?>">
								<?php echo form_error('hal_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="tglsurat_dibuat" class="control-label col-sm-2">Tanggal Surat Dibuat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tglsurat_dibuat" value="<?php echo set_value('tglsurat_dibuat', $db->tglsurat_dibuat); ?>">
								<?php echo form_error('tglsurat_dibuat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="kepada_surat" class="control-label col-sm-2">Kepada </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="kepada_surat" value="<?php echo set_value('kepada_surat', $db->kepada_surat); ?>">
								<?php echo form_error('kepada_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="institusi_surat" class="control-label col-sm-2">Institusi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="institusi_surat" value="<?php echo set_value('institusi_surat', $db->institusi_surat); ?>">
								<?php echo form_error('institusi_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="daerah_surat" class="control-label col-sm-2">Tujuan Daerah </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="daerah_surat" value="<?php echo set_value('daerah_surat', $db->daerah_surat); ?>">
								<?php echo form_error('daerah_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="no_surat_pemohon" class="control-label col-sm-2">Nomor Surat Pemohon</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no_surat_pemohon" value="<?php echo set_value('no_surat_pemohon', $db->no_surat_pemohon); ?>">
								<?php echo form_error('no_surat_pemohon'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="jenis_siswa" class="control-label col-sm-2">Jenis Siswa</label>
							<div class="col-sm-10">
								<select type="text" class="form-control" name="jenis_siswa" value="<?php echo set_value('jenis_siswa', $db->jenis_siswa); ?>">
									<option value="<?php echo set_value('jenis_siswa', $db->jenis_siswa); ?>"><?php echo set_value('jenis_siswa', $db->jenis_siswa); ?></option>
									<?php if ($db->jenis_siswa == "Mahasiswa") {
										echo '<option value="Siswa">Siswa</option>';
									} else {
										echo '<option value="Mahasiswa">MahaSiswa</option>';
									}
									?>">
								</select>
								<?php echo form_error('jenis_siswa'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="tglsurat_pemohon" class="control-label col-sm-2">Tanggal Surat Pemohon</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tglsurat_pemohon" value="<?php echo set_value('tglsurat_pemohon', $db->tglsurat_pemohon); ?>">
								<?php echo form_error('tglsurat_pemohon'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="masa_magang" class="control-label col-sm-2">Masa Magang </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="masa_magang" value="<?php echo set_value('masa_magang', $db->masa_magang); ?>">
								<?php echo form_error('masa_magang'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $db->nama); ?>">
								<?php echo form_error('nama'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="nim" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim" value="<?php echo set_value('nim', $db->nim); ?>">
								<?php echo form_error('nim'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="program_studi" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi" value="<?php echo set_value('program_studi', $db->program_studi); ?>">
								<?php echo form_error('program_studi'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="nama2" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama2" value="<?php echo set_value('nama', $db->nama2); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nim2" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim2" value="<?php echo set_value('nim', $db->nim2); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="program_studi2" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi2" value="<?php echo set_value('program_studi', $db->program_studi2); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nama3" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama3" value="<?php echo set_value('nama', $db->nama3); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nim3" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim3" value="<?php echo set_value('nim', $db->nim3); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="program_studi3" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi3" value="<?php echo set_value('program_studi', $db->program_studi3); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nama4" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama4" value="<?php echo set_value('nama', $db->nama4); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nim4" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim4" value="<?php echo set_value('nim', $db->nim4); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="program_studi4" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi4" value="<?php echo set_value('program_studi', $db->program_studi4); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nama5" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama5" value="<?php echo set_value('nama', $db->nama5); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nim5" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim5" value="<?php echo set_value('nim', $db->nim5); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="program_studi5" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi5" value="<?php echo set_value('program_studi', $db->program_studi5); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nama6" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama6" value="<?php echo set_value('nama', $db->nama6); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="nim6" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim6" value="<?php echo set_value('nim', $db->nim6); ?>">

							</div>
						</div>

						<div class="form-group">
							<label for="program_studi6" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi6" value="<?php echo set_value('program_studi', $db->program_studi6); ?>">

							</div>
						</div>




						<div class="form-group">
							<div class="btn-form col-sm-12">
								<a href="<?php echo base_url('home/lihatdata'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
								<button type="submit" class='btn btn-primary'>Simpan</button>
							</div>
						</div>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>