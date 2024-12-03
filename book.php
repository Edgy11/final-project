<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Finder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="book.css">
</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
        <h1 class="logo">I n f o <span>T e q</span></h1>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="about.php"><i class="fa fa-info"></i> About</a></li>
                    <li><a href="book.php"><i class="fa fa-search"></i> Book Finder</a></li>
                    <li><a href="worldnews.php"><i class="fa fa-pencil"></i> News</a></li>
                    <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact Us</a></li>
                    <li><a href="yt.php"><i class="fa fa-video"></i> YouTube</a></li>
                </ul>
            </nav>
        </div>
    </header>

    

    <!-- Search Bar Section -->
    <div class="search-container">
        <h2>Search for Books</h2>
        <input type="text" id="search-box" class="form-control" placeholder="Search Books..." />
        <button id="search-btn" class="btn btn-primary">Search</button>
    </div>

    <!-- Book List Section -->
    <div class="container book-list" id="book-list">
        
        <div id="list-output" class="row"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            var apiKey = "AIzaSyAtLBt5pAZM8CWqLLb5kYePFc6lowit59c";
            var bookUrl = "https://www.googleapis.com/books/v1/volumes?q=";
            var placeHldr = '<img src="https://via.placeholder.com/150">';

            $("#search-btn").click(function () {
                var searchData = $("#search-box").val();
                $("#list-output").empty(); // Clear previous results
                if (searchData.trim() === "") {
                    alert("Please enter a search term!");
                } else {
                    $.ajax({
                        url: bookUrl + searchData + "&key=" + apiKey,
                        dataType: "json",
                        success: function (response) {
                            if (response.totalItems === 0) {
                                alert("No results found. Please try again.");
                            } else {
                                $(".book-list").show();
                                displayResults(response);
                            }
                        },
                        error: function () {
                            alert("Something went wrong. Please try again.");
                        }
                    });
                }
            });

            function displayResults(response) {
                var outputList = $("#list-output");
                response.items.forEach(function (item, index) {
                    var title = item.volumeInfo.title || "No Title";
                    var author = item.volumeInfo.authors ? item.volumeInfo.authors.join(", ") : "Unknown Author";
                    var publisher = item.volumeInfo.publisher || "Unknown Publisher";
                    var bookLink = item.volumeInfo.previewLink || "#";
                    var bookImg = item.volumeInfo.imageLinks ? item.volumeInfo.imageLinks.thumbnail : placeHldr;

                    var bookCard = `
                        <div class="col-md-4 book-card">
                            <div class="card">
                                <img src="${bookImg}" class="card-img-top" alt="${title}">
                                <div class="card-body">
                                    <h5 class="card-title">${title}</h5>
                                    <p class="card-text">Author: ${author}</p>
                                    <p class="card-text">Publisher: ${publisher}</p>
                                    <a href="${bookLink}" class="btn btn-secondary" target="_blank">Read Book</a>
                                </div>
                            </div>
                        </div>
                    `;
                    outputList.append(bookCard);
                });
            }
        });

        // Get the navbar
const navbar = document.querySelector("header");

// Store the initial position of the navbar
let navbarPosition = navbar.offsetTop;

// Add event listener for scroll
window.addEventListener('scroll', () => {
    if (window.pageYOffset > navbarPosition) {
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
});

        

    </script>
</body>

</html>
