 <div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-users"></i> Data Santri</h1>
        </div>

        <a href="<?php echo base_url('admin/data_santri/tambah_santri') ?>" class="btn btn-primary mb-3">Tambah Data Santri</a>
        <table class="table table-hover table-striped table-borderd table-responsive">
        	<thead>
        		<th>No</th>
        		<th>Nama</th>
        		<th>Alamat</th>
        		<th>Tempat, Tanggal Lahir</th>
                <th>Pendidikan</th>
                <th>Asal Sekolah</th>
                <th>No Telp</th>
                <th>Nama Orang Tua</th>
                <th>No Hp</th>
        		<th>Aksi</th>
        	</thead>
        	<tbody>
        		<?php 
        		$no=1;
        		foreach ($santri as $sr) : ?>
                <tr>
        			<td><?php echo $no++ ?></td>
        			<td><?php echo $sr->nama ?></td>
        			<td><?php echo $sr->alamat ?></td>
                    <td><?php echo $sr->ttl ?></td>
                    <td><?php echo $sr->pendidikan ?></td>
                    <td><?php echo $sr->asal_sekolah ?></td>
        			<td><?php echo $sr->no_telp ?></td>
                    <td><?php echo $sr->nama_ortu ?></td>
                    <td><?php echo $sr->no_hp ?></td>
        			<td>
        				<a href="<?php echo base_url('admin/data_santri/detail/').$sr->id ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
        				<a href="<?php echo base_url('admin/data_santri/hapus_santri/').$sr->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        				<a href="<?php echo base_url('admin/data_santri/update_santri/').$sr->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
        			</td>
                </tr>
        		<?php endforeach; ?>
        	</tbody>
        </table>
    </section>
</div>