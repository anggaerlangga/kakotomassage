<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
                <?php endif; ?>
                
                <?php 
                    if(isset($error))
                    {
                        echo "ERROR UPLOAD : <br/>";
                        print_r($error);
                        echo "<hr/>";
                    }
                ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/gallery/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/gallery/proses') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="product_id">Product</label>
								<select class="form-control" name="product_id">
								    <option value="001">Mantiko Travel</option>
									<option value="002">Vidtron Multimedia</option>
                                    <option value="003">MGI Academy</option>
                                    <option value="004">UF Enterprise</option>
                                    <option value="005">Kakoto</option>
                                    <option value="006">D'Kapau Nusantara</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('product_id') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Photo (uk. 255 x 230px)</label>
								<input class="form-control-file"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

                           <div class="form-group">
								<label for="name">Photo 2 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

                            <div class="form-group">
								<label for="name">Photo 3 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

                            <div class="form-group">
								<label for="name">Photo 4 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

                            <div class="form-group">
								<label for="name">Photo 5 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

							<div class="form-group">
								<label for="name">Photo 6 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

							<div class="form-group">
								<label for="name">Photo 7 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

							<div class="form-group">
								<label for="name">Photo 8 (uk. 255 x 230px)</label>
								<input class="form-control-file <?php echo form_error('photo') ? 'is-invalid':'' ?>"
								 type="file" name="photo[]" />
								<div class="invalid-feedback">
									<?php echo form_error('photo') ?>
								</div>
                            </div>

							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>