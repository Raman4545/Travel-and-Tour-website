<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">travelSINGH.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->
    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide swiper-slide-active" style="background:url(./slider-background-1.jpg) no-repeat">
                    <div class="content">
                        <span class="span">explore,discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide swiper-slide-active" style="background:url(./slider-background-2.jpg) no-repeat">
                    <div class="content">
                        <span class="span">explore,discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide swiper-slide-active" style="background:url(./slider-background-3.jpg) no-repeat">
                    <div class="content">
                        <span class="span">explore,discover, travel</span>
                        <h3>make your worth while</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- home section ends -->


    <!-- services section starts here -->
    <section class="services">
        <h1 class="heading-title">
            our services
        </h1>
        <div class="box-container">
            <div class="box">
                <img src="./travel.png" alt="icon">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="./location.png" alt="icon">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="./bonfire.png" alt="icon">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="./offroad.png" alt="icon">
                <h3>offroading </h3>
            </div>
            <div class="box">
                <img src="./bonfire (1).png" alt="icon">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends here -->

    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="./home-about-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>
                about us

            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam possimus, placeat velit a distinctio voluptates qui explicabo obcaecati ad, est mollitia. Ut quas eligendi obcaecati quod adipisci! Deserunt, maxime ullam!</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>



    <!-- home about section ends -->
    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">
            our packages
        </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="package-bg-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia tenetur beatae perferendis quibusdam aliquam, iste porro facere totam inventore sunt nulla et modi incidunt ullam dicta voluptate, doloremque fugiat minus!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="package-bg-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia tenetur beatae perferendis quibusdam aliquam, iste porro facere totam inventore sunt nulla et modi incidunt ullam dicta voluptate, doloremque fugiat minus!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>


            <div class="box">
                <div class="image">
                    <img src="package-bg-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia tenetur beatae perferendis quibusdam aliquam, iste porro facere totam inventore sunt nulla et modi incidunt ullam dicta voluptate, doloremque fugiat minus!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>

        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>


    <!-- homw packages section ends -->


    <!-- home offer section starts here -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque optio excepturi beatae aut iusto tempora aspernatur voluptatem ratione. Suscipit sequi, voluptas omnis corporis aspernatur nisi non quasi? Molestias, delectus dolorum!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends here -->






    <!-- FOOTER SECTION STARTS -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-angle-phone"></i>+123-456-7890</a>
                <a href="#"> <i class="fas fa-angle-phone"></i>+123-456-3333</a>
                <a href="#"> <i class="fas fa-angle-envelope"></i>shaikhanas@gmail.com</a>
                <a href="#"> <i class="fas fa-angle-map"></i>mumbai, India- 400104</a>


            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"> facebook</i></a>
                <a href="#"><i class="fab fa-twitter"> twitter</i></a>
                <a href="#"><i class="fab fa-instagram"> instagram</i></a>
                <a href="#"><i class="fab fa-linkedin"> linkedin</i></a>
            </div>
        </div>

        <div class="credit">created by <span>Ramanpreet</span> | all rights reserved !</div>
    </section>
    <!-- footer section ends -->

    <!-- custom swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>