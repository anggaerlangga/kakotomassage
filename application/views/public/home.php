<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="title">
                    <h1 style="color:#6cbc99;"><?php echo $about->title ?></h1>
                    <h1><?php echo $about->subtitle ?></h1>
                    <hr>
                </div>
                <p><?php echo $about->description ?></p>
                <!-- <div class="btn-group">
                    <a href="/about" class="btn btn-primary">Read More</a>
                </div> -->
            </div>
            <div class="col-sm-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive" />
            </div>
        </div>
        <div class="row" style="float:right;">
            <div class="whatsapp">
                <a href="https://wa.me/6281320002094?text=Hi+!+Saya+ingin+bertanya+mengenai+service+Kakoto+Massage+yang+diinformasikan+di+Website?">
                    <img src="<?php echo base_url('assets/img/Asset 26.png') ?>" class="img-responsive" />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sectwo" id="product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Our Services</h1>
                <h4>We Provide various services that you can choose according to your needs</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($service as $service): ?>
                    <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo base_url('upload/images/'.$service->image) ?>" alt="" class="img-responsive">
                                <div class="card-title">
                                    <h3><?php echo $service->service_name ?></h3>
                                </div>
                                <div class="price">
                                    <p><?php echo $service->harga ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 

<section class="secfive" id="secfive">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Promo</h1>
                <h4>Get attractive promos from us</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($promo as $promo): ?>
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="thumbnail-img">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url('upload/promo/'.$promo->image) ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="secsix" id="secsix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Reservation</h1>
                <h4>Let's arrange your schedule for booking</h4>
                <hr>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card-body"> 
                    <form enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">Date :</label>
                                    <input type="date" class="form-control" name="schedule_date" id="schedule_date">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="time">Time :</label>
                                    <input type="text" class="form-control" name="time" id="time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name :</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Mobile Phone :</label>
                                    <input type="text" class="form-control" name="mobile_phone" id="mobile_phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="treatment">Treatment :</label>
                                    <select class="form-control" name="treatment" id="treatment">
                                        <option value="BEKAM">BEKAM</option>
                                        <option value="KOP">KOP / KERIK</option>
                                        <option value="LULUR">LULUR</option>
                                        <option value="FBM">FULL BODY MASSAGE</option>
                                        <option value="REFLEKSI">REFLEKSI</option>
                                        <option value="THAI">THAI MASSAGE</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="treatment" id="treatment"> -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Therapist :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="male" id="male" value="male">
                                    <label for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="female" id="female" value="female">
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="button-group">
                                <button class="btn btn-outline-primary" type="submit" id="btn_save">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secseven" id="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Gallery</h1>
                <h4>Our photo collection is for your reference</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($gallery as $gallery): ?>
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="thumbnail-img">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo base_url('upload/gallery/'.$gallery->image) ?>">
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="seceight" id="testimoni">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Testimony</h1>
                <h4>What is their assessment after coming to our place?</h4>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
                <div class="carousel-inner">
                
                    <?php 
                        foreach ($testimoni as $key => $value) {
                            $active = ($key == 0) ? 'active' : '';
                            echo '<div class="carousel-item ' . $active . '">
                                  <img class="rounded-circle shadow-1-strong mb-4" src="' . base_url().'upload/images/' . $value->image . '">
                                  <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <h5 class="mb-3">' . $value->testi_name . '</h5>
                                        <p class="text-muted">' . $value->description . '</p>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?> 

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> 
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="color:#6cbc99;"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="color:#6cbc99;"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="secnine">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Contact us</h1>
                <h4>You can find out location in the following information</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.740854074006!2d106.79152027498998!3d-6.165448693821804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f75389e33ad9%3A0x7ebf7bcc48d871fd!2sKAKOTO%20REFLEKSI%20%26%20MASSAGE%20Cab.%20Grogol!5e0!3m2!1sen!2sid!4v1705512529977!5m2!1sen!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                <div class="contact">
                    <ul>
                        <li><img src="<?php echo base_url('assets/img/place.png')?>">Jl. Dr. Muwardi III, No.45B, RT02/RW03, Grogol Petamburan, Jakarta Barat</li>
                        <li><img src="<?php echo base_url('assets/img/whatsapp.png')?>">0813-2000-2094</li>
                        <li><img src="<?php echo base_url('assets/img/instagram.png')?>">kakotorefleksi.jkt</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("public/sukses.php") ?>

</body>


<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }


    $(document).ready(function(){
        $('#btn_save').on('click',function(){
            var schedule_date = $('#schedule_date').val();
            var time = $('#time').val();
            var name = $('#name').val();
            var mobile_phone = $('#mobile_phone').val();
            var treatment = $('#treatment').val();
            var therapist = '';

            if (document.getElementById('male').checked) {
                 therapist = document.getElementById('male').value;
            }

            if (document.getElementById('female').checked) {
                 therapist = document.getElementById('female').value;
            }

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('reserve/save')?>",
                dataType : "JSON",
                data : {schedule_date:schedule_date, time:time, name:name, mobile_phone:mobile_phone, treatment:treatment, therapist:therapist},
                success: function(data){
                    console.log(data);
                    if(data == true){
                        // cekData();
                        sweetAlert("Successfully!", "You have successfull to submit your reservation, Our Team will contact you soon", "success");
                    }

                }
            });
                return false;
        });

        function sukses(){
            $('#suksesModal').modal();
        }
            
    });
</script>