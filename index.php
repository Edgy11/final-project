


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfoTeq Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
   
<body>
    <!-- Header -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="logo">Info<span>Teq</span></h1>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="about.php"><i class="fa fa-info-circle"></i> About</a></li>
                    <li><a href="book.php"><i class="fa fa-book"></i> Book Finder</a></li>
                    <li><a href="worldnews.php"><i class="fa fa-newspaper"></i> News</a></li>
                    <li><a href="yt.php"><i class="fa fa-play-circle"></i> YouTube</a></li>
                    <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Us</a></li>
                </ul>
            </nav>
        </div>
        
    </header>
    <header class="custom-navbar">

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Welcome to InfoTeq</h1>
            <p>InfoTeq is your ultimate hub for information, designed to keep you informed and inspired. Whether you're exploring global news updates, watching trending YouTube videos, or diving into a curated collection of books, InfoTeq has you covered. With an intuitive interface and personalized content recommendations, discovering valuable information has never been this effortless and enjoyable.</p>
            <a href="about.php" class="btn btn-primary">Learn More</a>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="container">
            <h2>Our Features</h2>
            <div class="row">
                <div class="col-md-4 feature-box">
                    <img src="images/book.png" alt="Book Finder">
                    <h3>Book Finder</h3>
                    <p>Discover a world of books curated just for you.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <img src="images/news.png" alt="News">
                    <h3>Updated News</h3>
                    <p>Stay up-to-date with the latest global updates.</p>
                </div>
                <div class="col-md-4 feature-box">
                    <img src="images/yt.png" alt="YouTube">
                    <h3>YouTube Videos</h3>
                    <p>Catch trending videos, all in one place.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Get the latest updates delivered straight to your inbox.</p>
            <form action="subscribe.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Contact Us</a>
            </div>
            <p>&copy; 2024 InfoTeq. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'});"><i class="fa fa-arrow-up"></i></button>
</body>
</html>
