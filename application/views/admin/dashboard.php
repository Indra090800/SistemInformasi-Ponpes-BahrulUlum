      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><i class="fa fa-home"></i> Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                 
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $admin ?>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Berita</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $berita ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Galleri</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $about ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Santri</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $santri ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="card">
                <div class="card-header">
                  <h4>Pesan Users</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <?php foreach($hubungi as $hb) : ?>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/avatar/avatar-1.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right text-primary">Now</div>
                        <div class="media-title" value="<?php echo $hb->nama ?>"><?php echo $hb->nama ?></div>
                        <span class="text-small text-muted" value="<?php echo $hb->pesan ?>"><?php echo $hb->pesan ?></span>
                      </div>
                    </li>
                  <?php endforeach; ?>
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="<?php echo base_url('admin/hubungi_kami') ?>" class="btn btn-primary btn-lg btn-round">
                      View All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
   