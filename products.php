﻿<?php define('Access', TRUE);?>

<!DOCTYPE html>
<html lang="en-MU">
<head>
    <meta charset="utf-8">
    <title>MALAKO | PRODUCTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== CSS FILE ==========-->
    <link rel="stylesheet" type="text/css" href="Sanjana.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--========== BOXICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<!--___________________________________________________________________________-->

<body>
    <?php $page = 'products';?>
    <!--========== HEADER ==========-->

    <!--Start Navigation Bar-->
    <?php include './Includes/MobileNavBar.php';;?>
    <!--End Navigation Bar-->


    <!--Start Navigation Bar @media 1200px-->
    <?php include './Includes/PcNavBar.php';?>
    <!--End Navigation Bar @media 1200px-->

    <!--Start Wave Image-->
    <div class="wave-image-group">
        <div class="wave-image footer-wave">
            <img src="Assets/images/1.index/NavBar_WavePink.png">
        </div>
    </div>
    <!--End Wave Image-->
    <!--___________________________________________________________________________-->
    
    <main class="1-main">

        <!--========== OFFER 1 ==========-->

        <section class="offer section offer__top">
            <div class="offer__bg2 offer__1bg">
                <div class="offer__data ">
                    <h2 class="offer__title">50% OFF ON ALL CAKES!!!</h2>
                    <p class="offer__description">1st - 31st DECEMBER 2020<br />HURRY UP, DON'T MISS YOUR CHANCE!!!</p>

                    <a href="#" class="button button__round">SHOP NOW</a>
                </div>
            </div>
        </section>

        <!--Start Wave Flip Image-->
        <div class="">
            <div class="">
                <img src="Assets/images/1.index/NavBar_WavePinkFlip.png">
            </div>
        </div>
        <!--End Wave Flip Image-->

        <!--========== FEATURED PRODUCTS ==========-->
        <section class="featured section" id="featured">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            <a href="#" class="section-all">View All</a>

            <div class="featured__container bd-grid">
                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <div class=""><a href="#"><i class='bx bxs-cart-add bx-tada-hover featured__new_cart'></i></a></div>
                        <img src="Assets\images\products\Cupcake_pic.png" alt="" class="featured__img" />
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Vanilla cupcake with whipped cream  </h3>
                        <span class="featured__price">Rs 25</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <div class=""><a href="#"><i class='bx bxs-cart-add bx-tada-hover featured__new_cart'></i></a></div>
                        <img src="Assets\images\products\red_velvet_cupcake_pic.png" alt="" class="featured__img" />
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Red Velvet cupcake with creamcheese frosting  </h3>
                        <span class="featured__price">Rs 25</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <div class=""><a href="#"><i class='bx bxs-cart-add bx-tada-hover featured__new_cart'></i></a></div>
                        <img src="Assets\images\products\cookies_pic.png" alt="" class="featured__img" />
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Chocolate chip cookies </h3>
                        <span class="featured__price">Rs 15 / piece</span>
                    </div>
                </div>


                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <div class=""><a href="#"><i class='bx bxs-cart-add bx-tada-hover featured__new_cart'></i></a></div>
                        <img src="Assets\images\products\croissants_pic.jpg" alt="" class="featured__img" />
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Freshly baked croissants </h3>
                        <span class="featured__price">Rs 20 / piece</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <div class=""><a href="#"><i class='bx bxs-cart-add bx-tada-hover featured__new_cart'></i></a></div>
                        <img src="Assets\images\products\donut_on_plate_pic.jpg" alt="" class="featured__img" />
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Donut with sugar glaze </h3>
                        <span class="featured__price">Rs 60 / piece</span>
                    </div>
                </div>

                <div class="featured__products">
                    <div class="featured__box">
                        <div class="featured__new">NEW</div>
                        <div class=""><a href="#"><i class='bx bxs-cart-add bx-tada-hover featured__new_cart'></i></a></div>
                        <img src="Assets\images\products\macaron_box_pic.jpg" alt="" class="featured__img" />
                    </div>

                    <div class="featured__data">
                        <h3 class="featured__name">Macaron box x 20 pieces with 6 flavours  </h3>
                        <span class="featured__price">Rs 650</span>
                    </div>
                </div>

            </div>
        </section>


        <!--========== OFFER 2 ==========-->

        <section class="offer section">
            <div class="offer__bg">
                <div class="offer__data">
                    <h2 class="offer__title">Special Offer</h2>
                    <p class="offer__description">Extreme Christmas Sales this month only!</p>

                    <a href="#" class="button button__round">SHOP NOW</a>
                </div>
            </div>
        </section>

        <!--========== NEW ARRIVALS ==========-->
        <section class="new section" id="new">
            <h2 class="section-title">FRESHLY OUT OF THE OVEN</h2>
            <a href="#" class="section-all">View All</a>

            <div class="new__container bd-grid">
                <div class="new__box">
                    <img src="Assets\images\1.index\Cake_1.jpg" class="new__img" />

                    <div class="new__link">
                        <a href="#" class="button"> VIEW PRODUCT</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="Assets\images\1.index\Cake_2.jpg" class="new__img" />

                    <div class="new__link">
                        <a href="#" class="button"> VIEW PRODUCT</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="Assets\images\1.index\Cake_3.jpg" class="new__img" />

                    <div class="new__link">
                        <a href="#" class="button"> VIEW PRODUCT</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="Assets\images\1.index\Cake_4.jpg" class="new__img" />

                    <div class="new__link">
                        <a href="#" class="button"> VIEW PRODUCT</a>
                    </div>
                </div>
                <div class="new__box">
                    <img src="Assets\images\products\cupcake_bg.jpg" class="new__img" />

                    <div class="new__link">
                        <a href="#" class="button"> VIEW PRODUCT</a>
                    </div>
                </div>

                <div class="new__box">
                    <img src="Assets\images\1.index\Cake_5.jpg" class="new__img" />

                    <div class="new__link">
                        <a href="#" class="button"> VIEW PRODUCT</a>
                    </div>
                </div>
            </div>
        </section>

        <!--========== NEWSLETTER ==========-->
        <section class="newsletter section" id="subscribed">
            <div class="newsletter__container bd-grid">
                <div class="newsletter__subscribe">
                    <h2 class="section-title">OUR NEWSLETTER</h2>
                    <p class="newsletter__description">Be the first to get informed about our best deals!</p>

                    <form action="" class="newsletter__form">
                        <input type="email" class="newsletter__input" placeholder="Enter your email" />
                        <a href="#" class="button">SUBSCRIBE</a>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <!--___________________________________________________________________________-->
    <!--========== FOOTER ==========-->
    <!--Start Footer-->
    <footer class="footer-group">

        <div class="footer">

            <div class="logo">
                <span class="logo-name">MALAKO</span>
            </div>

            <div class="social-media">
                <span class="facebook">
                    <a href=#><i class="fab fa-facebook-square"></i></a>
                </span>
                <span class="twitter">
                    <a href=#><i class="fab fa-twitter-square"></i></a>
                </span>
                <span class="instagram">
                    <a href=#><i class="fab fa-instagram-square"></i></a>
                </span>
                <span class="pinterest">
                    <a href=#><i class="fab fa-pinterest-square"></i></a>
                </span>
            </div>

            <hr size="2px" width="80%" color="white">
            <hr size="2px" width="80%" color="white">

            <div class="contact-links">
                <span class="phone"><i class="fas fa-phone-square-alt"></i> 5758 XXXX</span>
                <span class="address">Patisserie Malako At Jerningham and Royal Street</span>
            </div>

            <div class="legal-links">
                <span class="privacy-policy"><b><a href=#>PRIVACY POLICY</a></b></span>
                <span class="term-of-use"><b><a href=#>TERMS OF USE</a></b></span>
            </div>

            <div class="copyright">
                <span class="copyright-text">&#169; 2020 Design by Atish & Sanjana</span>
            </div>

        </div>

    </footer>
    <!--End Footer-->
    <!--========== BOTTOM-MENU-PHONE ==========-->
    <!-- Start Bottom Nav -->
    <div class="bottom-nav-group">
        <nav class="bottom-nav">
            <a href="login.html" class="bottom-nav-link">
                <i class="fas fa-user bottom-nav-icon"></i>
                <span class="bottom-nav-text">Account</span>
            </a>
            <a href="#" class="bottom-nav-link">
                <i class="fas fa-search"></i>
                <span class="bottom-nav-text">Search</span>
            </a>
            <a href="#" class="bottom-nav-link">
                <i class="fas fa-shopping-cart"></i>
                <span class="bottom-nav-text">My Cart</span>
            </a>
        </nav>
    </div>
    <!-- End Bottom Nav -->

    <!--___________________________________________________________________________-->


    <!--========== JAVASCRIPT ==========-->
    <script src="Javascript\main.js"></script>
</body>
</html>