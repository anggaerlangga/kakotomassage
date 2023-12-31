<?php $this->load->helper('url'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta property="og:url"           content="<?php echo base_url() ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Galactica Jaya Raya - Distributor Besi Beton dan Bahan Bangunan" />
    <meta property="og:description"   content="<?php echo $article->meta ?>" />
    <meta property="og:image"         content="<?php echo base_url('upload/homepage/'.$article->image) ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/animate-css/animate.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('vendor/slick/slick.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('vendor/slick/slick-theme.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('vendor/colorbox/colorbox.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('vendor/aos/aos.css') ?>">
    <link href="<?php echo base_url('assets/css/header.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/article.css') ?>">
    <title>Galactica Jaya Raya - Distributor Besi Beton dan Bahan Bangunan</title>
</head>
<body>
    <div class="container"> 
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo site_url('/home') ?>">
                    <img src="<?php echo base_url('assets/img/galactica-logo.png')?>" /> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('/home') ?>">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/home#about') ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/home#product') ?>">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/home#article') ?>">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/home#partner') ?>">Partner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>

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

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="post">
                        <div class="title">
                            <h1><?php echo $article->title ?></h1>
                        </div>
                        <div class="content-body">
                            <div class="img">
                                <img src="<?php echo base_url('upload/homepage/'.$article->image) ?>" class="img-responsive">
                            </div>
                            <div class="desc">
                                <p><?php echo $article->description ?></p>
                            </div>
                            <div class="shared-group">
                                <h4>Bagikan Tautan ini</h4>
                                <ul>
                                    <li><a href="https://api.whatsapp.com/send?text=<?php echo $article->title ?>+<?php echo site_url('/article/getDetail/'.$article->article_id) ?>"
        data-action="share/whatsapp/share" data-url="<?php echo base_url() ?>" data-title="<?php echo $article->title ?>"><img src="<?php echo base_url('assets/img/whatsapp.png') ?>"></a></li>
                                    <!-- <li><a href="#"><img src="<?php echo base_url('assets/img/instagram.png') ?>"></a></li> -->
                                    <li class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small">
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/img/mail.png') ?>"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sidebar sidebar-right">
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Recent Post</h3>
                            <?php foreach ($article_all as $article_all): ?>
                            <ul class="list-unstyled">
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="<?php echo base_url('upload/homepage/'.$article_all->image)?>"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="<?php echo $article_all->article_id ?>"><?php echo $article_all->title ?></a>
                                    </h4>
                                </div>
                            </li>
                            </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="float:right;">
                <div class="whatsapp">
                    <a href="https://wa.me/6281281268286?text=Hi+!+Apakah+barang+yang+dijual+di+Website+Galactica+tersedia+?">
                        <img src="<?php echo base_url('assets/img/Asset 26.png') ?>" class="img-responsive" />
                    </a>
                </div>
            </div>
        </div>
    </section> 
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="8GsYEZZy"></script>
</body> 
</html>