<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
        <?php
        wp_head();
        ?>
</head>

<body>
    <header>
        <article class="top-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand text-light text-wrap" href="#">Urgent : Awesome Template For Charity &
                        Non-profit
                        Site.</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top-navi"
                        aria-controls="top-navi" aria-expanded="false" aria-label="Toggle navigation">
                        
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="top-navi">
                        <ul class="navbar-nav mr-auto">

                            <li class="social-li nav-item"><a href="https://www.youtube.com/" target="_blank"><i class="bi bi-youtube icn"></i></a></li>
                            <li class="social-li nav-item"><a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram icn"></i></a>
                            </li>
                            <li class="social-li nav-item"><a href="https://www.twitter.com/" target="_blank"><i class="bi bi-twitter icn"></i></a>
                            </li>
                            <li class="social-li nav-item"><a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook icn"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </article>
        <article class="top-nav-contact my-2">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <?php
                if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                    ?></a>
                    <div class="collapse navbar-collapse justify-content-end" id="contact-navi">
                        <ul class="navbar-nav mr-auto">
                            <li class="social-li nav-item"><a href="#contact"><i
                                        class="bi bi-envelope contact-li"></i></a></li>
                            <li class="social-li nav-item pad-right"><a href="mailto:info@ngoocharity.com" class="no-line">
                                    <span class="contact-info-main text-dark">Mail : </span>
                                    <p class="contact-info-cl">info@ngoocharity.com</p>
                                </a></li>
                            <li class="social-li nav-item"><a href="#contact"><i
                                        class="bi bi-telephone-fill contact-li"></i></a></li>
                            <li class="social-li nav-item pad-right"><a href="tel:+698542145" class="no-line">
                                    <span class="contact-info-main text-dark">Phone : </span>
                                    <p class="contact-info-cl">+698542145</p>
                                </a></li>
                            <li class="social-li nav-item"><a href="#contact"><button class="button-orange">DONATE
                                        NOW</button></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </article>
        <article class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navi"
                        aria-controls="main-navi" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main-navi">

                     <?php
                     
                     wp_nav_menu(
                     array(
                         'menu' => 'primary',
                         'container' => '',
                         'name' => 'primary',
                         'items_wrap' => '<ul id="" class="navbar-nav mr-auto">%3$s</ul>' ,
                     )

                     );
                     
                     ?>
                    </div>
                </nav>
            </div>
        </article>
    </header>