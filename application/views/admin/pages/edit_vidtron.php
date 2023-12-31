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
                        <a href="<?php echo site_url('admin/pages/vidtron') ?>"><i class="fa fa-arrow-circle-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="lang">Language</label>
                                <select class="form-control" name="lang" value="<?php echo $pages->lang ?>">
                                    <option value="ID">ID</option>
								    <option value="EN">English</option>
								</select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('lang') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subpage">Subpage</label>
                                <select class="form-control" name="subpage" value="<?php echo $pages->subpage ?>">
                                    <option value="ABT">ABOUT VIDTRON</option>
								    <option value="PRD">PRODUCT VIDTRON</option>
                                    <option value="TIM">TIM VIDTRON</option>
								</select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('subpage') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
                                    type="text" name="title" placeholder="Title" value="<?php echo $pages->title ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('title') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input class="form-control <?php echo form_error('subtitle') ? 'is-invalid':'' ?>"
                                    type="text" name="subtitle" placeholder="Title" value="<?php echo $pages->subtitle ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('subtitle') ?>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                                    rows="4" cols="50" name="description" value="<?php echo $pages->description ?>"><?php echo $pages->description ?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('description') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description2">Description 2</label>
                                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                                    rows="4" cols="50" name="description2" id="description2" value="<?php echo $pages->description2 ?>"><?php echo $pages->description2 ?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('description2') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input class="form-control <?php echo form_error('meta_title') ? 'is-invalid':'' ?>"
                                    type="text" name="meta_title" placeholder="Meta Title" value="<?php echo $pages->meta_title ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('meta_title') ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <input class="form-control <?php echo form_error('meta_description') ? 'is-invalid':'' ?>"
                                    type="text" name="meta_description" placeholder="Meta Desription" value="<?php echo $pages->meta_description ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('meta_description') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input class="form-control <?php echo form_error('url') ? 'is-invalid':'' ?>"
                                    type="text" name="url" placeholder="URL" value="<?php echo $pages->URL ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('url') ?>
                                </div>
                            </div>

                            <div class="form-group">
								<label for="image">Image</label>
								<input class="form-control <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
                                 <input type="hidden" name="old_image" value="<?php echo $pages->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

                            <input type="hidden" name="page_id" value="<?php echo $pages->page_id ?>" />
                            <input type="hidden" name="product_id" value="002">
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
    </script>
    <script>
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