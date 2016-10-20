<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <!-- Preloader
            ============================================= -->
        <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
        <!-- Header
            ============================================= -->
        <section class="main-header">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#owl-hero"><img src="<?php echo base_url('img/logo/logo.png'); ?>" class="img-responsive" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <ul class="nav navbar-nav">
                                <li><a href="#owl-hero" class="page-scroll">Home</a></li>
                                <li><a href="#welcome" class="page-scroll">About Us</a></li>
                                <li><a href="#portfolio" class="page-scroll">Latest Works</a></li>
                                <li><a href="#team" class="page-scroll">Our Team</a></li>
                                <li><a href="#section-contact" class="page-scroll">Contact</a></li>
                            </ul>
                        </div>
                        <div class="social-media hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/redrocktech.ro/?fref=ts" target="_blank"><img id="facebook_icon" src="<?php echo base_url('img/logo/facebook_logo.png'); ?>"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="owl-hero" class="owl-carousel owl-theme">
                <div class="item" style="background-image: url(<?php echo base_url('img/sliders/Slide.jpg'); ?>)">
                    <div class="caption">
                        <h6>Branding / Design / Creativity</h6>
                        <h1>We Are <span>Red Rock Tech</span></h1>
                        <a class="btn btn-transparent" id="popup-video1" href="video/redrock_video.mp4">Watch Our Video</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(<?php echo base_url('img/sliders/Slide2.jpg'); ?>)">
                    <div class="caption">
                        <h6>Branding / Design / Creativity</h6>
                        <h1>Web & Mobile <span>Applications</span></h1>
                        <a class="btn btn-transparent" id="popup-video2" href="video/redrock_video.mp4">Watch Our Video</a>
                    </div>
                </div>
                <div class="item" style="background-image: url(<?php echo base_url('img/sliders/Slide3.jpg'); ?>)">
                    <div class="caption">
                        <h6>Branding / Design / Creativity</h6>
                        <h1>Creative <span>Design</span></h1>
                        <a class="btn btn-transparent" id="popup-video3" href="video/redrock_video.mp4">Watch Our Video</a>
                    </div>
                </div>
            </div>
        </section>