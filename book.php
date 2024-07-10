<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="Id=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

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

    <div class="heading" style="background:url(images/heading-img-3.jpg)no-repeat">
        <h1>Book Now</h1>
    </div>

    <!---booking section start--->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputbox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputbox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputbox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputbox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>



    <!--footer section  -->
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