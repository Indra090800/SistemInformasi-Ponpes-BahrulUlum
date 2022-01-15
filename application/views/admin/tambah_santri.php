 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Santri</h1>
        </div>
    
        <div class="card">
        	<div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_santri/tambah_santri_aksi') ?>">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-group">
        					<label>Nama Santri</label>
        					<input type="text" name="nama" class="form-control">
                            <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Alamat Santri</label>
        					<input type="text" name="alamat" class="form-control">
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Tempat, Tanggal Lahir</label>
        					<input type="text" name="ttl" class="form-control">
                            <?php echo form_error('ttl','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Pendidikan terakhir</label>
        					<select name="pendidikan" class="form-control">
        						<option value="">--PILIH--</option>
        						<option value="SD Sederajat">SD Sederajat</option>
        						<option value="SMP Sederajat">SMP Sederajat</option>
        						<option value="SMA/MA Sederajat">SMA/MA Sederajat</option>
        					</select>
        				</div>
        				<div class="form-group">
        					<label>Asal Sekolah</label>
        					<input type="text" name="asal_sekolah" class="form-control">
                            <?php echo form_error('asal_sekolah','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>No Telepon</label>
        					<input type="text" name="no_telp" class="form-control">
                            <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Nama Orang Tua</label>
        					<input type="text" name="nama_ortu" class="form-control">
                            <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>No Hp Orang Tua Santri</label>
        					<input type="text" name="no_hp" class="form-control">
                            <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>') ?>
        				</div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-danger">Reset</button>
        			</div>
        		</div>
                </form>
        	</div>
        </div>
    </section>
</div>