<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
<img src="<?php echo base_url('assets/img/banner-uf.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" aria-current="page">UF ENTERPRISE</li>
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
        <img src="<?php echo base_url('assets/img/uf-deskripsi.png') ?>" class="img-responsive">
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
        <h1>UF ENTERPRISE</h1>
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
                        <img src="<?php echo base_url('assets/img/wedding_organizer.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>WEDDING ORGANIZER</h3>
                        <p>Sudah menjadi kebutuhan dan trend saat ini, pernikahan tak perlu repot dan di handle oleh para wedding planner yang ahli di bidangnya, Pengantin cukup sampaikan apa keinginan dan kebutuhannya, Team WO kami siap membantu dari prosesi awal hingga resepsi selesai. Team WO  Tentu akan memudahkan tanggung jawab pengantin bersama keluarganya.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/decoration.jpeg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>DEKORASI</h3>
                        <p>Dekorasi wedding adalah penentu sebuah acara resepsi tanpa mewah dan berkesan, Kami siap menyajikan berbagai pilihan dekorasi sesuai keinginan pengantin, Seperti Pilihan Warna, Pilihan Bunga, Hingga ke pilihan design.
                        Dekorasi tersedia di berbagai jenis Resepsi, seperti dekorasi Resepsi Adat, Nasional, Chinese, Hingga Internasional bertema outdoor. Semua akan di konsep sesuai kebutuhan dan budget pengantin.
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
            // foreach ($product->result() as $row) {
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
        // foreach ($product->result() as $row) {
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