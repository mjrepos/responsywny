<?php
/**
 * The template for displaying the footer.
 *
 */
?>

 <!-- FOOTER CENTER WITH REALIZATION
================================================== -->
    <footer id="footer-center-realization" role="contentinfo">
        <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="copyright">Wszelkie prawa zastrzeżone <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>">www.szybkikontakt.pl</a> <span class="ln">|</span></div>
                    <div class="realization">Realizacja: <a target="_blank" href="http://www.szybkikontakt.pl/">www.szybkikontakt.pl</a> <span class="ln">|</span></div>
                    <div class="cookies"><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>polityka-cookies.pdf">Polityka Cookies</a></div>
                </div>
            </div>
        </div>
    </footer>                

 <!-- SCROLL TO TOP WRAPPER
================================================== -->
<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
        <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
    </span>
</div>


    <script type="text/javascript">
$(function(){
 
    $(document).on( 'scroll', function(){
 
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
 
    $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
<?php wp_footer(); ?>
</body>
</html>