  <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a href="<?php echo base_url('auth/login') ?>"><img style="width: 40px; height: 40px;" src="<?php echo base_url() ?>assets/assets/img/me.png"></a>
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><b>Home</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sejarah"><b>Sejarah</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pendaftaran"><b>PPDB</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#galleri"><b>Galleri</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team"><b>Pengurus</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><b>Hubungi</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                         <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
                      </ol>
                      <div class="carousel-inner">
                        <?php foreach($berita as $br) : ?>

                        <div class="carousel-item mt-2 <?php echo $br->aktif ?>">
                          <img style="width: 600px; height: 600px;" src="<?php echo base_url().'assets/upload/'.$br->Foto ?>" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5><font color="black"><?php echo $br->nama ?></font></h5>
                            <div class="dropdown-divider"></div>
                            <p><font color="black"><?php echo $br->keterangan ?></font></p>
                            <a href="<?php echo base_url('admin/tambah_berita/detail_berita/').$br->id ?>" class="btn-primary btn-lg font-weight-bold" role="button">Lihat Berita</a>
                          </div>
                        </div>

                        <?php endforeach; ?>
                      </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
        <!-- Masthead-->
        
        
         <section class="lazy slider" id="sejarah">
                     <?php foreach ($sejarah as $sh) : ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio1-item">
                            <a class="portfolio-link" href="<?php echo base_url('admin/tambah_sejarah/detail/').$sh->id ?>">
                                    <div class="portfolio1-hover">
                                    <div class="portfolio1-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 400px; height: 200px " src="<?php echo base_url().'assets/upload/'.$sh->Foto ?>"/></a>
                            <div class="portfolio-caption">
                                <div class="dropdown-divider"></div>
                                <div class="portfolio-caption-subheading text-muted"  value="<?php echo $sh->tanggal ?>"><?php echo $sh->tanggal ?></div>
                                <div class="dropdown-divider"></div>
                                <div class="portfolio-caption-heading" value="<?php echo $sh->nama ?>"><?php echo $sh->nama ?></div>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>                 
                    <?php endforeach; ?>
        </section>

        <section class="page-section" id="pendaftaran">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pendaftaran</h2>
                    <div class="dropdown-divider"></div>
                    <h3 class="section-subheading text-muted">Ponpes Bahrul Ulum KH.BUSTHOMI</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">SD Negeri 1 Mekarsari</h4>
                        <div class="dropdown-divider"></div>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-laptop fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">SMP Negeri 3 BANJAR</h4>
                        <div class="dropdown-divider"></div>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">MAN 3 Tasikmalaya</h4>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
              <center><div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More Info
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Silahkan Kunjungi Tempat Kami di</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://www.google.co.id/maps/place/Pondok+Pesantren+Bahrul+Ulum+Kh.Busthomi/@-7.3522221,108.2717439,18z/data=!4m5!3m4!1s0x2e6f59b6aab6b3e9:0x2ca9eeb300d4bb99!8m2!3d-7.3518124!4d108.2727766?hl=id">Kp,.cipangsor
                    Rt/rw 04/06
                    Desa. Sindangsari
                    Kec. Bojongasih
                    Kab. Tasikmalaya
                    Provinsi jawa barat</a>
                  </div>
                </div></center>
            </div>
        </section>
        <!-- Portfolio Grid-->
        
        <!-- About-->
        <section class="variable slider" id="galleri">
            <?php foreach($tentang as $br) : ?>
                <div>
                    <img style="width: 300px; height: 300px;" src="<?php echo base_url().'assets/upload/'.$br->Foto ?>">
                </div>
            <?php endforeach; ?>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Ponpes Bahrul Ulum KH.BUSTHOMI</h3>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>assets/assets/img/team/ketua.jpeg" alt="" />
                            <h4>Bpk. Aceng S.Pdi</h4>
                            <p class="text-muted">Ketua Yayasan</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>assets/assets/img/team/sk.jpeg" alt="" />
                            <h4>Irfan sanusi S.Pdi</h4>
                            <p class="text-muted">Sekretaris Yayasan</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        <!-- Clients-->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>assets/assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>assets/assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>assets/assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>assets/assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">HUBUNGI KAMI</h2>
                    <h3 class="section-subheading text-muted">Ponpes Bahrul Ulum KH.BUSTHOMI</h3>
                </div>
                <form id="contactForm" name="sentMessage" method="POST" action="<?php echo base_url('dashboard/kirim_pesan') ?>" novalidate="novalidate">

                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Lengkap *" required="required" data-validation-required-message="Please enter your name." />
                                <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email Aktif Anda *" required="required" data-validation-required-message="Please enter your email address." />
                                <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" name="no_telp" placeholder="No Telp *" required="required" data-validation-required-message="Please enter your phone number." />
                                <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="pesan" name="pesan" placeholder="Masukkan Pesan *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </section>