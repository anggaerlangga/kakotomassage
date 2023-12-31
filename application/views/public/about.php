<link href="<?php echo base_url('assets/css/about.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1 class="banner-title">ABOUT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ABOUT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">FOUNDER STORY</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section class="about-founder" id="about-founder">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>FOUNDER STORY</h1>
                <hr>
            </div>
        </div>
        <div class="founder-area">
        <?php
            foreach ($founder as $founder): ?>
            <div class="row">
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="founder-img">
                        <img src="<?php echo base_url('upload/homepage/'.$founder->image) ?>" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <p><?php echo $founder->description ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p><?php echo $founder->description2 ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="about-structure" id="about-structure">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h2>STRUKTUR</h2>
                <h1>STRUKTUR ORGANISASI</h1>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
        <?php
            foreach ($structure as $structure): ?>
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="avatar">
                    <img src="<?php echo base_url('upload/homepage/'.$structure->image) ?>" class="img-responsive">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="csr" id="csr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h2>CSR</h2>
                <h1>CORPORATE SOCIAL RESPONSIBILITY</h1>
                <hr>
            </div>
        </div>
        <div class="row">
        <?php
            foreach ($csr as $csr): ?>
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="csr-collection">
                    <img src="<?php echo base_url('upload/homepage/'.$csr->image) ?>" class="img-responsive">
                    <h4></h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>