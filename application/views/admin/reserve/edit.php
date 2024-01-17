<?php $this->load->view("admin/_partials/head.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Side Bar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("admin/_partials/navbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Edit Content in Section</h1>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
				<?php endif; ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/reserve') ?>"><i class="fa fa-arrow-circle-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="schedule_date">Schedule Date</label>
                                <input class="form-control <?php echo form_error('schedule_date') ? 'is-invalid':'' ?>"
                                    type="date" name="schedule_date" value="<?php echo $reserve->schedule_date ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('schedule_date') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="time">Jam</label>
                                <input class="form-control <?php echo form_error('time') ? 'is-invalid':'' ?>"
                                    type="text" name="time" placeholder="Jam" value="<?php echo $reserve->time ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('time') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                                    type="text" name="name" placeholder="Nama Lengkap" value="<?php echo $reserve->name ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('name') ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="mobile_phone">Mobile Phone</label>
                                <input class="form-control <?php echo form_error('mobile_phone') ? 'is-invalid':'' ?>"
                                    type="text" name="mobile_phone" placeholder="Mobile Phone" value="<?php echo $reserve->mobile_phone ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('mobile_phone') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="treatment">Treatment</label>
                                <input class="form-control <?php echo form_error('treatment') ? 'is-invalid':'' ?>"
                                    type="text" name="treatment" placeholder="Treatmen" value="<?php echo $reserve->treatment ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('treatment') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="therapist">Therapist</label>
                                    <select class="form-control" name="therapist" id="therapist">
                                        <option value="<?php echo $reserve->therapist ?>"><?php echo $reserve->therapist ?></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>                                
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="reserve_id" value="<?php echo $reserve->reserve_id ?>" />
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                
                        </form>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/tiny/tinymice.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/tiny/tinymice.jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

    <script>
      $('textarea#description').tinymce({
        height: 500,
        menubar: false,
        plugins: [
           'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
           'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
           'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'
      });

      $('textarea#description2').tinymce({
        height: 500,
        menubar: false,
        plugins: [
           'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
           'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
           'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'
      });
    </script>

</body>

</html>