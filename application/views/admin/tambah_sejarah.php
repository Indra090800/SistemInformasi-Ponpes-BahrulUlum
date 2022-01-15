 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-file-alt"></i> Form Sejarah</h1>
        </div>

        <a href="<?php echo base_url('admin/tambah_sejarah/form_tambah') ?>" class="btn btn-primary mb-3">Tambah Sejarah</a>

        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-borderd">
        	<thead>
                <tr>
        		  <th>No</th>
                  <th>Gambar</th>
        		  <th>Nama</th>
        		  <th>Keterangan</th>
                  <th>Tanggal</th>
        		  <th>Aksi</th>
                </tr>
        	</thead>
        	<tbody>
        		<?php 
        		$no=1;
        		foreach ($sejarah as $sh) : ?>
                    <tr>
        			 <td><?php echo $no++ ?></td>
                     <td>
                        <img width="60px" src="<?php echo base_url().'assets/upload/'.$sh->Foto ?>">    

                     </td>
        			 <td><?php echo $sh->nama ?></td>
        			 <td><?php echo $sh->keterangan ?></td>
                     <td><?php echo $sh->tanggal ?></td>
        			 <td>
        				    <a href="<?php echo base_url('admin/tambah_sejarah/hapus_sejarah/').$sh->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        			 	    <a href="<?php echo base_url('admin/tambah_sejarah/update_sejarah/').$sh->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
        			 </td>
                    </tr>
        		<?php endforeach; ?>
        	</tbody>
        </table>
    </section>
</div>