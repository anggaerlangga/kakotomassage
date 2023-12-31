<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div id="banner-area" class="banner-area">
  <img src="<?php echo base_url('assets/img/banner-kako.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                      <li class="breadcrumb-item"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">KAKOTO REFLEXOLOGY & MASSAGE</li>
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
        <img src="<?php echo base_url('assets/img/kakoto_profile.jpg') ?>" class="img-responsive">
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
        <h1>REFLEXOLOGY & MASSAGE</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#blogCarousel" data-slide-to="1"></li>
            <li data-target="#blogCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel Inner -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/refleksi.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>REFLEKSI</h3>
                        <p>Pijat refleksi merupakan salah satu teknik pengobatan tradisional yang berasal dari Tiongkok dan Mesir. 
                          Berbeda dengan metode pijat atau urut biasa, pijat refleksi berfokus pada titik tertentu di bagian tubuh, seperti kaki, tangan, dan telinga.
                          Ahli pengobatan tradisional meyakini bahwa titik-titik tersebut berhubungan dengan semua saraf organ internal di tubuh, sehingga dapat mendeteksi sekaligus mengobati berbagai penyakit.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/body_massage.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>FULL BODY MASSAGE</h3>
                        <p>Body massage atau melakukan pijatan pada tubuh adalah kata yang paling menggairahkan, karena itu membuat tubuh menjadi rileks, nyaman dan menyegarkan.
                        Salah satu cara alami untuk mengurangi stres dan rasa sakit dengan pijat memberikan kenyamanan mental dan fisik, selain itu dapat meningkatkan sirkulasi darah, meningkatkan kekebalan tubuh, Meremjakan indra, membantu tidur dan istirahat anda lebih nyenyak.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/thai_massage.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>THAI MASSAGE</h3>
                        <p>Thai massage dinilai efektif dalam membantu pemulihan otot yang mengalami cedera, nyeri, atau kaku saat bergerak. 
                          Sejumlah penelitian juga membuktikan manfaat ini pada penderita radang sendi lutut dan osteoartritis lutut.
                          Sedikit berbeda dengan pijat pada umumnya yang mengharuskan Anda diam berbaring tengkurap, pijatan Thai massage akan membuat Anda ikut bergerak aktif bergonta-ganti posisi. 
                          Bahkan badan Anda mungkin juga ditarik ke sana-sini oleh terapis pijat. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/totok_wajah.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>TOTOK WAJAH</h3>
                        <p>Totok wajah merupakan metode pengobatan dengan memberikan tekanan di titik-titik tertentu pada wajah. 
                          Praktik yang juga disebut acupressure ini bisa melancarkan aliran darah dan meredakan ketegangan, sehingga bisa memberikan manfaat baik untuk kesehatan dan kecantikan, seperti mengurangi stress, mengatasi sakit kepala, mengatasi Mata lelah, Memperbaiki Gejala Bell’s Palsy, dan lain sebagainya.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/lulur.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>LULUR</h3>
                        <p>Lulur atau body scrub juga bertujuan untuk membuka pori-pori sehingga kulit menjadi lebih cerah dan putih. Manfaat lain yang dapat diperoleh dari proses luluran adalah mengencangkan kulit, menghilangkan penyakit kulit, menghilangkan bau badan dan menenangkan syaraf dan pikiran</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/hot_stone.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>HOT STONE</h3>
                        <p>Pijat hot stone termasuk metode yang efektif untuk menghilangkan kepenatan pikiran. Beberapa penelitian telah membuktikan bahwa pijatan mengurangi stres dan kecemasan sekaligus meningkatkan kesehatan jantung.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/bekam.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>BEKAM</h3>
                        <p>Terapi bekam merupakan salah satu pengobatan alternatif dari Timur Tengah dan Tiongkok yang telah dipraktikkan sejak ribuan tahun silam. Jenis terapi ini sering kali digunakan untuk meredakan rasa sakit di bagian tubuh tertentu.
Terapi bekam dilakukan menggunakan cangkir khusus yang dapat menghasilkan tekanan, sehingga mampu menarik kulit dan mengeluarkan racun atau darah kotor. Cangkir tersebut biasanya diletakkan di bagian tubuh tertentu, seperti punggung, perut, lengan, bokong, atau kaki. terapi ini dapat mengatasi beberapa penyakit lokal atau sistematik</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/kerik.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>KOP/KERIK</h3>
                        <p>Pengobatan alternatif untuk mengusir masuk angin ini dilakukan dengan cara mengerok logam ke permukaan kulit punggung yang telah dilumuri balsem atau minyak terlebih dahulu.
Tidak hanya membantu mengusir masuk angin, kerik juga mempunyai beberapa manfaat yang dapat meredakan gejala beberapa penyakit seperti sakit kepala, Pembengkakan payudara, gejala sindrom perimenoupause, nyeri leher dan lain lain.</p>
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

<section class="price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>DAFTAR HARGA</h1>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
          <?php
            foreach ($price as $price): ?>
              <div class="menu" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                  <div class="col-sm-12">
                      <img src="<?php echo base_url('upload/homepage/'.$price->image) ?>" class="img-responsive">
                  </div>
              </div>
            <?php endforeach; ?>
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