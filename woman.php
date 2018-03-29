<!DOCTYPE html>
<html lang="">

<?php include('style.php') ?>

<body class="loaded">
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

                    <div class="title animated wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s"
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
                    <div class="col-md-12">
                        <div class="characters-text-box ">

                            <div class="heading-left animate showFromLeft" data-animate="showFromLeft"
                                 data-delay="0.3">
                                <h2 class=" font-20 ">Women Rights

                                </h2>
                            </div>

                            <p class="animated wow fadeInLeft" data-animate="showFromDown" data-delay="3.3">
                                Before the advent of Islam, women had no civil rights. Arabs used to give preference to
                                male babies over female ones to the extent that many fathers used to bury their female
                                babies or children alive.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="no-pad wow fadeIn bg-extra-dark-gray">
            <div class="container-fluid no-pad  custome-row">
                <div class="row equalize sm-equalize-auto no-margin">
                    <div class="col-md-6 col-sm-12 col-xs-12 position-relative sm-height-550px xs-height-350px cover-background wow slideInLeft" data-wow-duration="900ms" style="background-image: url('img/flower1.jpg'); height: 500px;">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 display-table wow slideInRight last-paragraph-no-margin" data-wow-duration="900ms">
                        <div class="display-table-cell vertical-align-middle padding-fifteen-all sm-padding-ten-all xs-no-padding-lr sm-text-center">
                            <h5 class="alt-font text-light-gray">There is no passion to be found playing small - in settling for a <strong>life that is less</strong> than the one you are capable of living.</h5>
                            <p class="text-justify xs-text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. <strong class="text-decoration-underline text-medium-gray">All the lorem ipsum generators on the internet tend</strong> to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                            <p class="text-justify xs-text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a <strong class="text-medium-gray text-decoration-underline">galley of type and scrambled</strong> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like aldus pagemaker including versions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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