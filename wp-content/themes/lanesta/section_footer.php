<?php
?>
<section class="slide-section footer">
                <div class="container">
                    <div class="footer__flex">
                        <div class="footer__left">
                            <div class="footer__logo">
                                <img src="<?php echo  get_template_directory_uri().'/assets/img/logo-black.png' ?>" alt="logo">
                            </div>
                            <div class="footer__subscribe">

                                    <?php  echo do_shortcode('[contact-form-7 id="57" title="Email"]');?>

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
                               <!-- <ul>
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
            </section>