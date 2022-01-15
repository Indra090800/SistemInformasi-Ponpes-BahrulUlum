 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-table"></i> Form Galleri</h1>
        </div>

        <a href="<?php echo base_url('admin/tentang/form_tambah_tentang') ?>" class="btn btn-primary mb-3">Tambah</a>

        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-borderd">
        	<thead>
                <tr>
        		  <th>No</th>
                  <th>Gambar</th>
        		  <th>Keterangan</th>
        		  <th>Aksi</th>
                </tr>
        	</thead>
        	<tbody>
        		<?php 
        		$no=1;
        		foreach ($tentang as $br) : ?>
                    <tr>
        			 <td><?php echo $no++ ?></td>
                     <td>
                        <img width="60px" src="<?php echo base_url().'assets/upload/'.$br->Foto ?>">    
                     </td>
        			 <td><?php echo $br->keterangan ?></td>
        			 <td>
        				    <a href="<?php echo base_url('admin/tentang/hapus_tentang/').$br->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        			 </td>
                    </tr>
        		<?php endforeach; ?>
        	</tbody>
        </table>
    </section>
</div>