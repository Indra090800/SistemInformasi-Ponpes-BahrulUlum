 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Berita</h1>
        </div>

        <div class="card">
        	<div class="card-body">
                <?php foreach($berita as  $br): ?>
                <form method="POST" action="<?php echo base_url('admin/tambah_berita/update_berita_aksi') ?>" enctype="multipart/form-data">
            		<div class="row">
            			<div class="col-md-6">
            				<div class="form-group">
            					<label>Nama berita</label>
                                <input type="hidden" name="id" value="<?php echo $br->id ?>">
            					<input type="text" name="nama" value="<?php echo $br->nama ?>" class="form-control">
                                <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
            				</div>
            				<div class="form-group">
            					<label>Keterangan</label>
            					<input type="text" value="<?php echo $br->keterangan ?>" name="keterangan" class="form-control">
                                <?php echo form_error('keterangan','<div class="text-small text-danger">','</div>') ?>
            				</div>
                             <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea type="text" value="<?php echo $br->deskripsi ?>" name="deskripsi" class="form-control"><?php echo $br->deskripsi ?></textarea>
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
               </form>
           <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>