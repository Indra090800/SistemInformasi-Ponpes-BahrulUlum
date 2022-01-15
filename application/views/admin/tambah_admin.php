 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-user"></i> Form Admin</h1>
        </div>

        <a href="<?php echo base_url('admin/tambah_admin/form_tambah_admin') ?>" class="btn btn-primary mb-3">Tambah Admin</a>

        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-borderd">
        	<thead>
                <tr>
        		  <th>No</th>
        		  <th>Nama</th>
        		  <th>Username</th>
                  <th>Password</th>
                  <th>Role ID</th>
                  <th>Foto</th>
        		  <th>Aksi</th>
                </tr>
        	</thead>
        	<tbody>
        		<?php 
        		$no=1;
        		foreach ($admin as $br) : ?>
                    <tr>
        			 <td><?php echo $no++ ?></td>
        			 <td><?php echo $br->nama ?></td>
        			 <td><?php echo $br->username ?></td>
                     <td><?php echo $br->password ?></td>
                     <td><?php echo $br->role_id ?></td>
                     <td>
                        <img width="60px" src="<?php echo base_url().'assets/upload/'.$br->Foto ?>">    

                     </td>
        			 <td>
        				    <a href="<?php echo base_url('admin/tambah_admin/hapus/').$br->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        			 	    <a href="<?php echo base_url('admin/tambah_admin/update/').$br->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
        			 </td>
                    </tr>
        		<?php endforeach; ?>
        	</tbody>
        </table>
    </section>
</div>