 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-newspaper"></i> Form Berita</h1>
        </div>

        <a href="<?php echo base_url('admin/tambah_berita/form_tambah_berita') ?>" class="btn btn-primary mb-3">Tambah Berita</a>

        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-borderd">
        	<thead>
                <tr>
        		  <th>No</th>
                  <th>Gambar</th>
        		  <th>Nama</th>
        		  <th>Keterangan</th>
                  <th>Deskripsi</th>
        		  <th>Aksi</th>
                </tr>
        	</thead>
        	<tbody>
        		<?php 
        		$no=1;
        		foreach ($berita as $br) : ?>
                    <tr>
        			 <td><?php echo $no++ ?></td>
                     <td>
                        <img width="60px" src="<?php echo base_url().'assets/upload/'.$br->Foto ?>">    

                     </td>
        			 <td><?php echo $br->nama ?></td>
        			 <td><?php echo $br->keterangan ?></td>
                     <td><?php echo $br->deskripsi ?></td>
        			 <td>
        				    <a href="<?php echo base_url('admin/tambah_berita/hapus_berita/').$br->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        			 	    <a href="<?php echo base_url('admin/tambah_berita/update_berita/').$br->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
        			 </td>
                    </tr>
        		<?php endforeach; ?>
        	</tbody>
        </table>
    </section>
</div>