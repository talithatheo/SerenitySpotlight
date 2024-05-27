<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Awareness Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Serenity.</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="article.html">Articles</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="community.html">Community</a></li>
                <li><a href="merchandise.html">Merchandise</a></li>
            </ul>
            <div class="auth">
                <a href="login.html"><i class="fas fa-sign-in-alt"></i>Sign In</a>
                <a href="register.html"><i class="fas fa-user-plus"></i>Sign Up</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="slideshow-container">
            <div class="slideshow">
                <img class="slideshow-img" src="assets/1.jpg" alt="Slide 1">
                <img class="slideshow-img" src="assets/2.jpg" alt="Slide 2">
                <img class="slideshow-img" src="assets/3.jpg" alt="Slide 3">
            </div>
            <div class="left-slide">
                <img src="3.jpg" alt="Left Slide 1">
            </div>
            <div class="right-slide">
                <img src="2.jpg" alt="Right Slide 1">
            </div>
        </div>
        <section id="home">
            <h2>Hi, There! Welcome to Serenity Spotlight</h2>
            <p>Discover peace and support at Serenity Spotlight, where your mental health is our top priority. We are committed to providing resources, information, and a community that helps you find balance in life. Together, we can achieve better emotional and mental well-being.</p>
        </section>
        <div class="grid-container">
            <section id="article" class="grid-item">
                <img src="LogoArticles.png" alt="Logo 1">
                <h2>Articles</h2>
                <p>From expert advice to personal stories, each piece is crafted to inspire, inform, and empower you towards better well-being. Explore, learn, and grow with Serenity Spotlight.</p>
            </section>
            <section id="about" class="grid-item">
                <img src="LogoAbout.png" alt="Logo 2">
                <h2>About</h2>
                <p>Whether you're seeking guidance, inspiration, or a sense of connection, Serenity Spotlight is here to help you navigate your mental health journey with compassion and understanding.</p>
            </section>
            <section id="community" class="grid-item">
                <img src="LogoCommunity.png" alt="Logo 3">
                <h2>Community</h2>
                <p>Together, we foster a welcoming environment that promotes healing, growth, and a sense of belonging. Whether you're looking to share your story or find solace in others, the Serenity Spotlight community is here for you.</p>
            </section>
            <section id="merchandise" class="grid-item">
                <img src="LogoMerchandise.png" alt="Logo 4">
                <h2>Merchandise</h2>
                <p>From comfortable apparel to motivational accessories, our merchandise is crafted to provide comfort, encouragement, and a sense of community. Shop now and wear your commitment to mental wellness with pride.</p>
            </section>
        </div>
        <div class="video-carousel">
            <div class="video-slide active">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-carousel-controls">
                <button id="prevBtn" onclick="prevSlide()">&#10094;</button>
                <button id="nextBtn" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h1>Serenity.</h1>
                <p>Your mental health matters.</p>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: info@serenity.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Address: 123 Serenity Lane, Peace City, PC 12345</p>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Mental Health Awareness. All rights reserved.</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
