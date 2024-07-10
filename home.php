<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="Id=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <!---font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <!--head-->
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div class="fas fa-bars" id="menu-btn"></div>

    </section>
    <!--home section--->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg)no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg)no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg)no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>make your tour worthful</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-----services section---->
    <section class="services">

        <h1 class="heading-title">Our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trikking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>

    </section>
    <!--home about section-->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In et reiciendis
                nostrum libero, beatae quasi ipsa ducimus perferendis hic, corrupti
                aut aperiam vel facere, quod officiis expedita doloremque dignissimos ipsam!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A earum quas
                perferendis dolorum cumque itaque quasi recusandae, est laborum iste nemo, eum,
                voluptate ipsum fugiat commodi architecto obcaecati similique autem?

            </p>
            <a href="about.php" class="btn">read more</a>

        </div>
    </section>

    <!----home packaging section------------>
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book_form.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book_form.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book_form.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

    <!-----home offer section-->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ducimus placeat corporis consequuntur quod laboriosam officia, voluptates
                distinctio amet fugiat soluta facilis saepe earum dignissimos modi! Et odio repellendus sequi!</p>
            <a href="book_form.php" class="btn">book now</a>
        </div>
    </section>


















    <!------footer section  -->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book_form.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 7676082627</a>
                <a href="#"><i class="fas fa-phone"></i>+91 9986728063</a>
                <a href="#"><i class="fas fa-envelope"></i>teju13.gangatkar@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>karnataka, India</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>
        <div class="credit">created by<span>Tejaswini</span> | all rights reserved!</div>
    </section>


    <!--swiper js--->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>