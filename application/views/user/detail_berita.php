 <div class="main-content">

    <?php foreach($detail as $dr) : ?>
    <div class="row">
         <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-ml-3">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                <center><h2 class="text-uppercase" value="<?php echo $dr->nama ?>"><?php echo $dr->nama ?></h2></center>
                                <center><img class="img-fluid d-block mx-auto" width="500px" height="500px" src="<?php echo base_url().'assets/upload/'.$dr->Foto ?>" alt="" /></center>
                                <center><b><p class="item-intro text-muted" value="<?php echo $dr->keterangan ?>"><?php echo $dr->keterangan ?></p></b></center>
                                <p style="text-align: left;"><b><font size="5">Suara Santri - </font></b><?php echo $dr->deskripsi ?></p>
                                
                            <center><a href="<?php echo base_url('dashboard') ?>"><button class="btn btn-primary" type="button"><i class="fas fa-times mr-1"></i>Kembali</button></a></center>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php endforeach; ?>    
</div>

<style type="text/css">
    .row{
        margin-top: 10px;
        margin-bottom: 20px;
        margin-left: 50px;
        margin-right: 65px;
    }
</style>