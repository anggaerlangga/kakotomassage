<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
<img src="<?php echo base_url('assets/img/baner-abou.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">VIDTRON MULTIMEDIA</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


<section class="about-mantiko" id="about-mantiko">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <img src="<?php echo base_url('assets/img/vidron-desk.png') ?>" class="img-responsive">
      </div>
      <?php 
          foreach ($about as $about): ?>
      <div class="col-sm-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="logo">
          <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive">     
        </div>
        <p><?php echo $about->description ?></p>
      </div>
      <?php endforeach; ?>
      <div class="col-sm-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <p><?php echo $about->description2 ?></p>
      </div>
    </div>
  </div>
</section>

<section class="product">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>PRODUK & LAYANAN</h2>
        <h1>VIDTRON MULTIMEDIA INDOTAMA</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#blogCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Carousel Inner -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/virtual_meeting.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>VIRTUAL MEETING</h3>
                        <p>Kegiatan pertemuan yang dibuat secara online dan dibantu dengan berbagai meeting tools yang lengkap dengan crew yang profesional. Kami akan membuat kegiatan diskusi, seminar, teleconfrence dan meeting</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/photobooth.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>PHOTO VIDEOBOTH</h3>
                        <p>Kami menyediakan berbagai jenis photoboth, mulai dari backdrop photoboth, photoboth custom, spin 360 dan videobooth.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/lighting.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>LIGHTING</h3>
                        <p>Jenis - jenis pencahayaan yang kamu miliki dapat menerangi dan menyorot objek utama di panggung. Dan warna-warni dari lighting yang kami punya akan menghiasi panggung dan menjadikan suatu event menjadi menarik</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/soundsystem.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>SOUNDSYTEM</h3>
                        <p>Kami menggunakan Alat / Device untuk Sound dengan Merk yang sudah Terpercaya dan memiliki Team yang sudah Berpengalaman Lebih dari 10 Tahun dan Bidang Event, Sound, dll.
                        Dilengkapi dengan Alat dan Operator yang berpengalaman sehingga menghasilkan Sound yang Terbaik. Disamping itu tersedia Paket Sound System dengan beberapa pilihan untuk menyesuaikan kebutuhan.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/stage.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>STAGE</h3>
                        <p>Kami menyediakan berbagai ukuran modul untuk panggung event indoor dan juga Beragam ukuran panggung outdoot berupa Rigging Stage.
                        Panggung kami bersifat portable dan mudah di bongkar pasang, hadir dengan harga yang ekonomis serta ukuran yang flexible sesuai kebutuhan client.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- End of carousel inner -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="team">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>TIM KAMI</h2>
        <hr>
      </div>
    </div>
    <div class="row justify-content-center">
    <?php
        foreach ($tim as $tim): ?>
      <div class="col-sm-4">
        <div class="avatar" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
          <img src="<?php echo base_url('upload/homepage/'.$tim->image) ?>" class="img-responsive">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<section class="galeri" id="galeri">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>GALERI</h2>
        <h1>Galeri Kegiatan Kami</h1>
        <hr>
      </div>
    </div> 
    <div class="row">
    <?php
        foreach ($gallery as $gallery): ?>
      <div class="col-sm-3">
        <div class="thumbnail" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
          <div class="thumbnail-img">
            <a href="#">
              <img class="img-responsive" src="<?php echo base_url('upload/image/'.$gallery->photo) ?>">
            </a>
            <div class="thumbnail-body">
              <h4 class="title"><a href="#"></a></h4>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div> 
  </div>
</section>