 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-envelope"></i> Form Pesan</h1>
        </div>

        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-borderd">
        	<thead>
                <tr>
        		  <th width="20px">No</th>
                  <th>Nama</th>
        		  <th>Email</th>
        		  <th>No Telp</th>
                  <th>Pesan</th>
                  <th>Aksi</th>
                </tr>
        	</thead>
        	<tbody>
        		<?php 
        		$no=1;
        		foreach ($hubungi as $br) : ?>
                    <tr>
        			 <td><?php echo $no++ ?></td>
                     <td><?php echo $br->nama ?></td>
        			 <td><?php echo $br->email ?></td>
                     <td><?php echo $br->no_telp ?></td>
                     <td><?php echo $br->pesan ?></td>
        			 <td>
        				    <a href="<?php echo base_url('admin/hubungi_kami/hapus/').$br->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/hubungi_kami/kirim_email/').$br->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-comment-dots"></i></a>
        			 </td>
                    </tr>
        		<?php endforeach; ?>
        	</tbody>
        </table>
    </section>
</div>