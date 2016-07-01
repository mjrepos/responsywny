<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.content-caption').bxSlider({
            mode: 'fade',
            auto: true,
            pause: 4500,
            controls: true,
            autoControls: false,
            pager: true,
        });
    });
</script>
</head>
<body <?php body_class(); ?>>

 <!-- LOGO CENTER
================================================== -->
    <header class="logo-center" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="bglogo">
                    <div class="logo">
                        <a href="<?php echo home_url( '/' ); ?>" class="logo-link"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" class="logo-img"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

 <!-- NAVIGATION CENTER
================================================== -->
    <header id="navigation-center" role="banner">
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="main-nav">
                    <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                     <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav>
                </div>
                 </div>
            </div>
        </div>
    </header>

  <!-- FULL WIDTH SLIDER WITH CAPTION
================================================== -->
  <section id="fullwidth-slider">
        <div class="container-fluid clearfix">
            <div class="row">
                <div id="main-caption">
                    <ul class="content-caption">
                        <li><img src="<?php bloginfo('template_directory'); ?>/images/s1.png" alt="slide1"><div class="container clearfix">
                        <div class="caption-left">
                            <div class="entry-title">
                            Responsive 2.0 - Modułowe Rozwiązanie
                            </div>
                            <div class="diver"></div>
                            <div class="entry-content">Trudno dziś wyobrazić sobie profesjonalnie działającą firmę, która nie posiada strony internetowej. Prawidłowo wykonana strona stała się nierozłącznym elementem tworzenia wizerunku firmy.</div>
                            <div class="read"><a href="#" class="read-more">Czytaj Dalej...</a></div>
                        </div></div>
                        </li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/images/s2.png" alt="slide2">
                        <div class="caption-center">
                            <div class="entry-title">
                            Co Proponujemy? Twoich Nowych Klientów!
                            </div>
                            <div class="diver"></div>
                            <div class="entry-content">Świadcząc kompleksowe usługi w zakresie tworzenia stron www łączymy nowatorski wygląd z funkcjonalnością wykorzystując przy tym aktualne standardy.</div>
                            <div class="read"><a href="#" class="read-more">Czytaj Dalej...</a></div>
                        </div>
                        </li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/images/s3.png" alt="slide3"><div class="container clearfix">
                        <div class="caption-right">
                          <div class="entry-title">
                            Internet - Największe Źródło produktów i Usług!
                            </div>
                            <div class="diver"></div>
                            <div class="entry-content">Nie trudno zauważyć, że nasza gospodarka przenosi się do sieci. Zasady jednak pozostają te same, im łatwiej Cię znaleźć tym więcej masz klientów. Pozycjonowanie stron internetowych, najczęściej zwane SEO (Search Enginge Optimization) polega na świadomym osiągnięciu wysokich pozycji strony www w wyszukiwarce dzięki wybranym frazom (słowa kluczowe).</div>
                            <div class="read"><a href="#" class="read-more">Czytaj Dalej...</a></div>
                        </div></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
