<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Tambah Admin</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/tambah_admin/tambah_admin_aksi') ?>">
                  <div class="form-group">
                    <div class="form-group>
                      <label for="frist_name">Nama Lengkap</label>
                      <input id="frist_name" type="text" class="form-control" name="nama" autofocus>
                      <input type="hidden" name="role_id" value="1">
                      <?php echo form_error('nama','<div class="text-danger small">','</div>') ?>
                    </div>
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" class="form-control" name="username">
                    <?php echo form_error('username','<div class="text-danger small">','</div>') ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <?php echo form_error('password','<div class="text-danger small">','</div>') ?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Tambah
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="simple-footer">
              Copyright &copy; Yayasan AL-QOMAR CIPANGSOR 2020
            </div>
        </div>
      </div>
    </section>
  </div>

