<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div id="banner-area" class="banner-area">
  <img src="<?php echo base_url('assets/img/banner-maniko.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                      <li class="breadcrumb-item"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">MANTIKO TRAVEL & MICE</li>
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
        <img src="<?php echo base_url('assets/img/maniko-deskripsi.png') ?>" class="img-responsive">
      </div>
      <?php 
          foreach ($about as $about): ?>
      <div class="col-sm-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="logo">
          <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive">     
        </div>
        <p ><?php echo $about->description ?></p>
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
        <h1>MANTIKO TRAVEL & MICE SERVICES</h1>
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
                        <img src="<?php echo base_url('assets/img/sewamobil.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>Tiket Tour & Transportasi</h3>
                        <p>Kami menyediakan berbagai paket tour untuk berbagai kebutuhan, seperti incentive tour, Study Tour, Family Tour, Private Tour, Honey-moon Tour, dan paket tour lainnya, baik di destinasi alam, sejarah dan budaya dan permintaan khusus lain.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/seminarkit.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>Seminar Kit</h3>
                        <p>Seminar kit adalah souvenir yang diberikan oleh suatu event, sebagai kenang-kenangan yang dapat membuat audiens mengingat kembali event tersebut</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/booth.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>Booth Pameran</h3>
                        <p>Mantiko menyewakan berbagai macam pilihan booth pameran, Dengan berbagai ukuran. 
                          Selain itu booth yang kami sewakan juga dapat dibuat dan di design custom sesuai keinginan konsumen, hal ini tentu akan membuat produk yang dipamerankan akan lebih menarik dan menjual.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div> 

            <div class="carousel-item">
              <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/event_venue.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>HOTEL & VENUE</h3>
                        <p>Mantiko telah bekerja sama dengan lebih dari 500 Hotel dan venue event di Indonesia, Client kami tidak perlu menghubungi venue satu persatu untuk mendapatkan harga dan kualitas terbaik, Karena Mantiko siap memberikan banyak pilihan tempat menginap dan venue acara sesuai dengan budget client. 
                          Selain itu dengan melakukan pemesanan hotel/event venue di kami, client juga berhak mendapatkan benefit khusus dan bonus bonus menarik lainya.</p>
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