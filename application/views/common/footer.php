  <!-- Javascript -->
  <script src="<?php echo base_url('assets/jquery/jquery.slim.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- Slick Carousel -->
  <script src="<?php echo base_url('vendor/slick/slick.min.js')?>"></script>
  <script src="<?php echo base_url('vendor/slick/slick-animation.min.js')?>"></script>
  <!-- Color box -->
  <script src="<?php echo base_url('vendor/colorbox/jquery.colorbox.js')?>"></script>
  <!-- shuffle -->
  <script src="<?php echo base_url('vendor/shuffle/shuffle.min.js')?>"></script>
  <script src="<?php echo base_url('vendor/aos/aos.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/smoothscroller.js') ?>"></script>


<div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="about-foot">
            <div class="title">
              <h4>TENTANG KAMI</h4>
            </div>
            <div class="logo">
              <img src="<?php echo base_url('assets/img/logo-footer.png')?>">
            </div>
            <div class="desc">
              <h4>PT Mantiko Group Indonesia</h4>
              <p>adalah salah satu holding company yang didirikan oleh Fedri Ramadhani, SST, M.Par sejak tahun 2020.
                Mantiko Group Indonesia memayungi beberapa unit usaha yang bergerah di bidang Travel Agent, Event Organizer, Restoran, Catering,
                Sentra Refleksi dan Massage, Dekorasi Wedding, Penyewaan Videotron dan Sekolah Seni.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-d=md-4">
          <div class="working-foot">
            <div class="title">
              <h4>JAM OPERASIONAL</h4>
            </div>
            <div class="desc">
              <p>Kami siap melayani anda baik secara online maupun offline. Kami siap melayani anda ditempat kami </p>
              <ul>
                <li>Monday - Friday   :   08:00 - 17:00 PM</li>
                <li>Saturday          :   08:00 - 12:00 PM</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-d=md-4">
          <div class="service-foot">
            <div class="title">
              <h4>PRODUK</h4>
            </div>
            <div class="desc">
              <ul>
                <li><a href="<?php echo base_url('/collection/product/STEEL') ?>">Mantiko Travel & Mice</a></li>
                <li><a href="<?php echo base_url('/collection/product/CNP') ?>">Kakoto Refleksi</a></li>
                <li><a href="<?php echo base_url('/collection/product/UNP') ?>">MGI Academy</a></li>
                <li><a href="<?php echo base_url('/collection/product/WF') ?>">Vidtron Multimedia</a></li>
                <li><a href="<?php echo base_url('/collection/product/HBEAM') ?>">UF Enterprise WO</a></li>
                <li><a href="<?php echo base_url('/collection/product/HOLLOW') ?>">D'Kapau Nusantara Resto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="copyright">
          &copy;2023 <span>PT Mantiko Group Indonesia</span>. All Rights Reserved
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Footer -->

<script>
  $('.thumbnail').click(function(){
    $('.modal-body').empty();
    $($(this).parents('div').html()).appendTo('.modal-body');
    $('#modal').modal({show:true});
});

$('#modal').on('show.bs.modal', function () {
    $('.col-4,.row .thumbnail').addClass('blur');
});

$('#modal').on('hide.bs.modal', function () {
    $('.col-4,.row .thumbnail').removeClass('blur');
});

</script>