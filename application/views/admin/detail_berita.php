 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Detail Berita</h1>
        </div>
    </section>

    <?php foreach($detail as $dr) : ?>
        <div class="card">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo base_url().'assets/upload/'.$dr->Foto ?>">  
                    </div>
                    <div class="col-md-5">
                          
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>    
</div>