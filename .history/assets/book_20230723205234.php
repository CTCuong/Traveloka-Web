<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <!--swiper css-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css file link -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <div class="heading" style="background: url(/assets/image/Footer/low-angle-nature-night-time.jpg) no-repeat;">
        <h1>book us</h1>
    </div>

    <!--book section starts-->

    <section class="booking">

        <h1 class="heading-title">book your trip</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>    
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>    
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="number">
                </div>    
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>    
            </div>

            < class="flex">
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>    

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>   

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
            </div>
            
            <div class="flex">
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>  
            </div>
            
            <input type="submit" value="submit" class="btn" name ="send">
        </form>
    </section>
    <!--book section ends-->


    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contract info</h3>
                <a href="#"><i class="fas fa-phone"></i> +84 098-326-789 </a>
                <a href="#"><i class="fas fa-phone"></i> +84 023-908-7865 </a>
                <a href="#"><i class="fas fa-envelope"></i> travekhanas@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> HaNoi, VietNam   </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-telegram"></i> telegram </a>
            </div>

        </div>

        <div class="credit"> created by <span>mr. Cao Tran Cuong</span> | all rights reserved! </div>
    </section>
    <!-- footer section ends -->
    
    <!--swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- js file link --> 
    <script src="/assets/js/scrip.js"></script>
</body>
</html>