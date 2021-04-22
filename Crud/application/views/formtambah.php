<?php
defined('BASEPATH') or exit('Akses langsung tidak diperbolehkan');
//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-auto">

				<?php
				if (isset($_SESSION['input_sukses'])) {
				?>
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Sukses!</strong> <?php echo $_SESSION['input_sukses']; ?>
					</div>
				<?php
				}
				?>

				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Surat</div>
					<div class="panel-body">
						<!-- <form action="<?php //echo base_url('home/tambahsurat'); 
											?>" method="post" class="form-horizontal"> -->

						<?php echo form_open('home/tambahsurat', ['class' => 'form-horizontal', 'method' => 'post']); ?>


						<div class="form-group">
							<label for="no_surat" class="control-label col-sm-2">Nomor Surat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no_surat" value="<?php echo set_value('no_surat'); ?>">
								<?php echo form_error('no_surat'); ?>
							</div>
						</div>


						<div class="form-group">
							<label for="lampiran" class="control-label col-sm-2">Jumlah Lampiran </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="lampiran" value="<?php echo set_value('lampiran'); ?>">
								<?php echo form_error('lampiran'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="hal_surat" class="control-label col-sm-2">Hal Surat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="hal_surat" value="<?php echo set_value('hal_surat'); ?>">
								<?php echo form_error('hal_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="tglsurat_dibuat" class="control-label col-sm-2">Tanggal Surat Dibuat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tglsurat_dibuat" value="<?php echo set_value('tglsurat_dibuat'); ?>">
								<?php echo form_error('tglsurat_dibuat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="tujuan_surat" class="control-label col-sm-2">Tujuan Surat </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tujuan_surat" value="<?php echo set_value('tujuan_surat'); ?>">
								<?php echo form_error('tujuan_surat'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="no_surat_pemohon" class="control-label col-sm-2">Nomor Surat Pemohon </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no_surat_pemohon" value="<?php echo set_value('no_surat_pemohon'); ?>">
								<?php echo form_error('no_surat_pemohon'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="tglsurat_pemohon" class="control-label col-sm-2">Tanggal Surat Pemohon </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tglsurat_pemohon" value="<?php echo set_value('tglsurat_pemohon'); ?>">
								<?php echo form_error('tglsurat_pemohon'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="masa_magang" class="control-label col-sm-2">Masa Magang </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="masa_magang" value="<?php echo set_value('masa_magang'); ?>">
								<?php echo form_error('masa_magang'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>">
								<?php echo form_error('nama'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="nim" class="control-label col-sm-2">NIM/NIS </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim" value="<?php echo set_value('nim'); ?>">
								<?php echo form_error('nim'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="program_studi" class="control-label col-sm-2">Program Studi </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="program_studi" value="<?php echo set_value('program_studi'); ?>">
								<?php echo form_error('program_studi'); ?>
							</div>
						</div>

						<div class="form-group">
							<div class="btn-form col-sm-12">
								<a href="<?php echo base_url('home/lihatdata'); ?>"><button type="button" class='btn btn-default'>Kembali</button></a>
								<button type="submit" class='btn btn-primary'>Simpan</button>
							</div>
						</div>
						<?php echo form_close(); ?>

					</div>
				</div>

			</div>
		</div>
</section>