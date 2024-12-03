<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Navbar Styling */
      header {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px 0;
        color: white;
        width: 100%; /* Ensure the navbar stretches across the full width */
        position: fixed; /* Fixes the navbar to the top of the page */
        top: 0;
        left: 0;
        z-index: 1000; /* Ensures it stays on top of other content */
      }

      .main-nav {
        text-align: center;
      }

      .main-nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: inline-block; /* Keeps the items centered */
      }

      .main-nav ul li {
        display: inline-block;
        margin: 0 15px;
      }

      .main-nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
      }

      .main-nav ul li a:hover {
        color: #ffc107; /* Yellow hover effect */
      }

      .main-nav ul li a i {
        margin-right: 8px; /* Space between icon and text */
      }

      /* Add margin to content to avoid overlap with the navbar */
      .container {
        margin-top: 80px; /* Adjust for fixed navbar height */
      }
    </style>
  </head>
  <body>
 
    <header>
    
      <div class="main-nav">
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
          <li><a href="about.php"><i class="fa fa-info"></i>About</a></li>
          <li><a href="book.php"><i class="fa fa-search"></i>Book Finder</a></li>
          <li><a href="worldnews.php"><i class="fa fa-pencil"></i>News</a></li>
          <li><a href="contact.php"><i class="fa fa-envelope"></i>Contact Us</a></li>
          <li><a href="yt.php"><i class="fa fa-video"></i> YouTube</a></li>
        </ul>
      </div>
      
    </header>

    <!-- Back Button -->
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Bacolod City</div>
            <div class="text-two">Negros Occidental</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+0929 352 8298</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">godfred@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p class="description">
            We’d love to hear from you! Whether you have a question, feedback, or need assistance, our team is here to help. Please don’t hesitate to reach out to us using the contact details below or by filling out the contact form.
            <br><br>
            Email: godfred@gmail.com <br>
            Phone: 0929 352 8298 <br>
            Office Hours: Monday - Friday, 9:00 AM - 5:00 PM
            <br><br>
            Alternatively, you can fill out the form below, and we’ll get back to you as soon as possible.
            <br><br>
            Thank you for getting in touch with us!
          </p>
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Enter your name">
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email">
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Enter your message"></textarea>
            </div>
            <div class="button">
              <input type="button" value="Send Now" onclick="showPopup()">
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Popup -->
    <div id="popup" class="popup">
      <div class="popup-content">
        <p>Thank you for your message! We'll get back to you shortly.</p>
        <button onclick="closePopup()">Close</button>
      </div>
    </div>

    <script>
      // Function to show the popup
      function showPopup() {
        document.getElementById("popup").style.display = "flex";
      }

      // Function to close the popup
      function closePopup() {
        document.getElementById("popup").style.display = "none";
      }

      // Function to go back to the previous page
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>
