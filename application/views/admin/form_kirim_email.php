 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fas fa-comment-dots"></i> Form Balas Email</h1>
        </div>

        <div class="card">
        	<div class="card-body">
                <?php foreach($hubungi as $hb) : ?>
                <form method="POST" action="<?php echo base_url('admin/hubungi_kami/kirim_email_aksi') ?>" enctype="multipart/form-data">
            		<div class="row">
            			<div class="col-md-6">
            				<div class="form-group">
            					<label>Email</label>
                                <input type="hidden" name="id" value="<?php echo $hb->id ?>">
            					<input type="text" name="email" value="<?php echo $hb->email ?>" class="form-control" readonly>
            				</div>
            				<div class="form-group">
            					<label>Subject</label>
            					<input type="text" name="subject" class="form-control">
            				</div>
                             <div class="form-group">
                                <label>Pesan</label>
                                <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
            		    </div>
            	    </div>
               </form>
           <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

		