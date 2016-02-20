<?php get_header(); ?>

<?
//get_portfolio_on_main();

//get_services_on_main();

//print apply_filters( 'taxonomy-images-list-the-terms', '' );
//die;
show_portfolio_on_main();
?>

<header data-id="1">
    <div class="header-content">
        <div class="header-content-inner">
            <img src="img/everybody_needs.png" class="img-responsive center-block img_heading" alt="">
        </div>
    </div>
</header>

<div id="arrow_down"></div>
<section class="no-padding" id="services" data-id="2">
    <div class="container-fluid">
        <div class="row no-gutter">
            <!--todo class name-->
            <div class="col-lg-12 text-center padding-top-btn-20 letter-spacing_ hidden-xs">corporative pocket services</div>
            <div class="col-xs-4">
                <a href="#" class="service-box">
                    <img src="img/service/service1.png" class="img-responsive center-block" alt="">
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="service-box">
                    <img src="img/service/service2.png" class="img-responsive center-block" alt="">
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="service-box">
                    <img src="img/service/service3.png" class="img-responsive center-block" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<?php echo show_portfolio_on_main(); ?>

<?php get_footer(); ?>
