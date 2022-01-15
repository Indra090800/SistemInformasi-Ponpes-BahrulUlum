 <div class="main-content">

<nav aria-label="breadcrumb">
    <?php foreach($detail as $dr) : ?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Sejarah</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $dr->nama ?></li>
  </ol>
  <?php endforeach; ?>   
</nav>

   

<style type="text/css">
    .row{
        margin-top: 10px;
        margin-bottom: 20px;
        margin-left: 50px;
        margin-right: 65px;
    }
</style>

<div class="row">
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
        <?php foreach ($sejarah as $sh) : ?>
      <ul class="list-group list-group-flush">
        <a href="<?php echo base_url('admin/tambah_sejarah/detail/').$sh->id ?>"><li class="list-group-item" value="<?php echo $sh->nama ?>"><?php echo $sh->nama ?></li></a>
      </ul>
        <?php endforeach; ?>
    </div>
  </div>
  <div class="col-sm-8">
     <?php foreach($detail as $dr) : ?>
    <div class="row">
         
            <div class="row m-5">
                <div class="col-md-20">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                        <center><h2 class="text-uppercase" value="<?php echo $dr->nama ?>"><?php echo $dr->nama ?></h2></center>
                        <img class="img-fluid d-block mx-auto" width="300px" height="300px" src="<?php echo base_url().'assets/upload/'.$dr->Foto ?>" alt="" />
                        <center><b><p class="item-intro text-muted" value="<?php echo $dr->tanggal ?>"><?php echo $dr->tanggal ?></p></b></center>
                        <p><b><font size="5">Ponpes BU - </font></b><?php echo $dr->keterangan ?></p>
                        
                        </div>
                </div>
            </div>
    
    <?php endforeach; ?>    
    </div>
</div>