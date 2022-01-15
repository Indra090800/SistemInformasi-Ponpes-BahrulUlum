 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Santri</h1>
        </div>
    
        <div class="card">
        	<div class="card-body">
                <?php foreach($santri as $sr) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_santri/update_santri_aksi') ?>">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-group">
        					<label>Nama Santri</label>
                            <input type="hidden" name="id" value="<?php echo $sr->id ?>">
        					<input type="text" name="nama" class="form-control" value="<?php echo $sr->nama ?>">
                            <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Alamat Santri</label>
        					<textarea type="input" name="alamat" class="form-control" value="<?php echo $sr->alamat ?>"><?php echo $sr->alamat ?></textarea>
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Tempat, Tanggal Lahir</label>
        					<input type="text" name="ttl" class="form-control" value="<?php echo $sr->ttl ?>">
                            <?php echo form_error('ttl','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Pendidikan terakhir</label>
        					<select name="pendidikan" class="form-control">
        						<option value="<?php echo $sr->pendidikan ?>"><?php echo $sr->pendidikan ?></option>
        						<option value="SD Sederajat">SD Sederajat</option>
        						<option value="SMP Sederajat">SMP Sederajat</option>
        						<option value="SMA/MA Sederajat">SMA/MA Sederajat</option>
        					</select>
        				</div>
        				<div class="form-group">
        					<label>Asal Sekolah</label>
        					<input type="text" name="asal_sekolah" class="form-control" value="<?php echo $sr->asal_sekolah ?>">
                            <?php echo form_error('asal_sekolah','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>No Telepon</label>
        					<input type="text" name="no_telp" class="form-control" value="<?php echo $sr->no_telp ?>">
                            <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>Nama Orang Tua</label>
        					<input type="text" name="nama_ortu" class="form-control" value="<?php echo $sr->nama_ortu ?>">
                            <?php echo form_error('nama_ortu','<div class="text-small text-danger">','</div>') ?>
        				</div>
        				<div class="form-group">
        					<label>No Hp Orang Tua Santri</label>
        					<input type="text" name="no_hp" class="form-control" value="<?php echo $sr->no_hp ?>">
                            <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>') ?>
        				</div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-danger">Reset</button>
        			</div>
        		</div>
                </form>
            <?php endforeach; ?>
        	</div>
        </div>
    </section>
</div>