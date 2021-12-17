<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lanesta
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer__flex">
            <div class="footer__left">
                <div class="footer__logo">
                    <img src="<?php echo  get_template_directory_uri().'/assets/img/logo-black.png' ?>" alt="logo">
                </div>
                <div class="footer__subscribe">
                    <form action="">
                        <input type="text" placeholder="EMAIL">
                        <button type="submit"><img src="<?php echo get_template_directory_uri().'/assets/img/arrow-right.svg' ?>" alt=""></button>
                    </form>
                </div>
                <p class="footer__form-description">Sign up for newsletter, discounts or good commercial offers</p>
            </div>
            <div class="footer__right">
                <div class="footer__menu">
                    <h3>MENU</h3>
                    <?php
                    wp_nav_menu([
                        'menu'=>'header_menu',
                        'container'=>false,
                    ])
                    ?>

                    <!--                    <ul>
                        <li><a href="./about-us.html">About Us</a></li>
                        <li><a href="./collectios.html">Collections</a></li>
                        <li><a href="">Video</a></li>
                        <li><a href="">blog</a></li>
                        <li><a href="">Where i can buy</a></li>
                        <li><strong><a href="">Partnership</a></strong></li>
                    </ul>-->
                </div>
                <div class="footer__contact">
                    <h3>CONTACT</h3>
                    <p>Lublin, Poland
                        ul. 3 Maja 7/2, 20-078<br>
                        <br>Opening hours:
                        from 10 to 18.</p><br>
                    <a href="tel:+48507564856" class="footer__contact-number">+48 507 564 856</a>
                </div>
                <div class="footer__social">
                    <h3>Social</h3>
                    <ul class="footer__social-list">
                        <li class="footer__social-item"><a href="">instagram</a></li>
                        <li class="footer__social-item"><a href="">facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0nrzFUl4JGCsL7jX7T5U6F9HBkxDGADU&callback=initMap&v=weekly"
        async
></script>
<?php wp_footer(); ?>

</body>
</html>
