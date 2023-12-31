<link href="<?php echo base_url('assets/css/detail-product.css') ?>" rel="stylesheet">
<section class="detail-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1><?php echo $product->title ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="image-product">
                    <img src="<?php echo site_url('/upload/product/'.$product->project_id) ?>" class="img-responsive">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="desc-product">
                    <p><?php echo $product->description ?></p>
                </div>
            </div>
        </div>
    </div>
</section>