<!DOCTYPE html>
<html lang="">

<?php include('style.php') ?>

<body class="loaded color-option">
<div class="loader">
    <div class="preloader">
        <div class="bg mesh_loader"></div>
        <svg class="circles" viewbox="0 0 500 200">
            <g id="first">
                <path fill="none" stroke-linecap="round" stroke-width="0.5" stroke="#fff" stroke-dasharray="400,400" d="M100 60 A1 1 0 0 1 400 140
           A1 1 0 0 1 100 60"/>
                <text id="percentage" class="circ-text" text-anchor="middle" x="250" y="100" font-size="21px"
                      fill="#fff">Loading ...
                </text>
                <!--                    <text id="verse" text-anchor="middle" font-size="12px" fill="#fff" x="250" y="290">"And We have not sent you but as a mercy to the worlds"</text>-->
            </g>
        </svg>
    </div>
</div>
<div id="wrapper" class="main-wrap">
    <?php include('header.php') ?>

    <div class="kode_sab_banner_wrap them_overlay header-style-1">
        <div class="banner">
            <div class="banner-content">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6">
                            <ul class="list-inline">
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li><p>Women in islam</p></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-section bg-img no-pad">
        <img class="top-right-test" src="img/art_c.png">
        <img class="bottom-left-test" src="img/art_c.png">
        <div class="container custome-row">
            <div class="row">
                <div class="col-xs-12">

                    <div class="title animated wow fadeInUp" data-wow-delay="1" data-wow-duration="0.5s"
                         style="    display: inline-block; float: none; "><span class="left line">

                        </span>
                        <p>Women</p>
                        <h1>Women <br>in islam </h1> <span class="right line">
                        <object id="pbuh01" type="image/svg+xml" data="img/pbuh.svg" __idm_frm__="1394"></object>
                        </span></div>
                </div>
            </div>
            <div class="">
                <div class="row ">
                    <div class="col-md-10">
                        <div class="characters-text-box ">

                            <p class="animated wow fadeInUp" data-wow-delay="0.8" data-wow-duration="0.8s">
                                Before the advent of Islam, women had no civil rights. Arabs used to give preference to
                                male babies over female ones to the extent that many fathers used to bury their female
                                babies or children alive.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="all-sections work-section home2-work-section">
            <div class="container">
                <div class="individual-section">
                    <div class="individual-single-section about-area section-padding wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="section-content">
                                    <div class="section-title">
                                        <h1>Mordern, Creative <br> Perfect Design.</h1>
                                    </div>
                                    <p>We bring the beauty and excitement of global bazaars to you. Our selection is always changing, and, like favorite mementos from your life, each item has a story worth sharing. From Balinese baskets, pottery from Portugal and collectibles from Africa to scrolled artwork inspired by Spanish artifacts - each store is a treasure trove.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-main-div">
                <div class="section-image" STYLE="    background: rgba(0, 0, 0, 0) url(img/section-img1.jpg) no-repeat scroll center center / cover;"></div>
            </div>
        </div>
        <div class="space-100"></div>



    </div>
    <?php include('footer.php') ?>
    <script>

    </script>
    <script type="text/javascript" src='js/functions.js'></script>
    <script>
        $('html,body').animate({
            scrollTop: $(window.location.hash).offset()
        });
    </script>

</body>

</html>