 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Berita</h1>
        </div>

        <div class="card">
        	<div class="card-body">
                <?php echo  form_open_multipart('admin/tambah_berita/tambah_berita_aksi'); ?>
            		<div class="row">
            			<div class="col-md-6">
            				<div class="form-group">
            					<label>Nama berita</label>
            					<input type="text" name="nama" class="form-control">
                                <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
            				</div>
            				<div class="form-group">
            					<label>Keterangan</label>
            					<input type="text" name="keterangan" class="form-control">
                                <?php echo form_error('keterangan','<div class="text-small text-danger">','</div>') ?>
            				</div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea type="input" name="deskripsi" class="form-control"></textarea>
                                <?php echo form_error('deskripsi','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="Foto" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="submit" class="btn btn-danger">Reset</button>
            		    </div>
            	    </div>
               <?php echo form_close(); ?>
            </div>
        </div>
    </section>
</div>