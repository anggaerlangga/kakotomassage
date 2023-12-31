<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
  <img src="<?php echo base_url('assets/img/kapau-banner.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                      <li class="breadcrumb-item"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">D'KAPAU NUSANTARA</li>
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
        <img src="<?php echo base_url('assets/img/kapau-desk.png') ?>" class="img-responsive">
      </div>
      <?php
          foreach ($about as $about): ?>
      <div class="col-sm-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="logo">
          <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive">     
        </div>
        <p><?php echo $about->description ?></p>
      </div>
      <div class="col-sm-12">
        <p><?php echo $about->description2 ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="product">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>PRODUK & LAYANAN</h2>
        <h1>D'KAPAU NUSANTARA</h1>
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
                        <img src="<?php echo base_url('assets/img/lunch_box.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>LUNCH / DINNER BOX</h3>
                        <p>Seiring banyaknya pemesanan dari customer kini kami menyediakan lunch / dinner box bisa untuk pemesanan dalam jumlah banyak seperti untuk kegiatan workshop, seminar dan acara sosial lainnya</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/catering.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>BUFFEE / PRASMANAN</h3>
                        <p>Kami menawarkan buffee / prasmanan untuk kegiatan workshop, seminar, acara pernikahan, dll.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/dessert.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>SNACK BOX</h3>
                        <p>Kami menyediakan snack box bisa untuk pemesanan dalam jumlah banyak seperti untuk kegiatan workshop, seminar dan acara sosial lainnya.</p>
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
              <h4 class="title"><a href="#"><?php echo $gallery->title ?></a></h4>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div> 
  </div>
</section>