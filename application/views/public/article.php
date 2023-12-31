<link href="<?php echo base_url('assets/css/article.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">ARTIKEL</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">HOME</a></li>
                      <li class="breadcrumb-item active" aria-current="page">ARTIKEL</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section class="article-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
            <?php foreach ($article as $article): ?>
                <div class="media">
                    <img class="mr-3" src="<?php echo base_url('upload/homepage/'.$article->image) ?>" alt="">
                        <div class="media-body">
                            <h5 class="mt-0"><?php echo $article->title ?></h5>
                            <p><?php echo substr("$article->description", 0,100) ?></p>
                            <a href="<?php echo site_url('/article/getDetail/'.$article->article_id) ?>" role="button" class="btn btn-outline-primary">Selengkapnya</a>
                        </div>
                </div>
            <?php endforeach; ?>
            </div>
            <!-- <div class="col-sm-4">
                <div class="sidebar sidebar-right">
                    <div class="widget">
                        <h3 class="widget-title">Kategori</h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Tips</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>