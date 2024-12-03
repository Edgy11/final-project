<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="news.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH2N2HKjWqC0CE9EGU3BUpM5zBRk7tYYc9QVVsdqCFsM95B59N6N6JgWiXLUMfZgvrHjLBfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <title>News Search</title>
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

    <!-- Search Bar -->
    <div class="search-container">
        <div>
            <h1>Search for News</h1>
            <form class="d-flex justify-content-center">
                <input class="form-control me-2 w-50" type="text" id="newsQuery" placeholder="Enter a keyword...">
                <button class="btn btn-warning" type="button" id="searchBtn"><i class="fas fa-search"></i> Search</button>
            </form>
        </div>
    </div>

    <!-- News Results -->
    <div class="container news-results" id="newsResults">
        
        <div class="row" id="newsDetails"></div>
    </div>

    <script>
        // Variables
        const searchBtn = document.getElementById("searchBtn");
        const newsQuery = document.getElementById("newsQuery");
        const newsDetails = document.getElementById("newsDetails");

        // API Key and Base URL
        const API_KEY = "60429a254fe245eeaaee753f345163f9";
        const SEARCH_NEWS = "https://newsapi.org/v2/everything?q=";

        // Search Button Click Event
        searchBtn.addEventListener("click", () => {
            if (newsQuery.value.trim()) {
                const searchUrl = `${SEARCH_NEWS}${encodeURIComponent(newsQuery.value)}&apiKey=${API_KEY}`;
                fetchNews(searchUrl);
            }
        });

        // Fetch News
        async function fetchNews(url) {
            try {
                const response = await fetch(url);
                if (!response.ok) throw new Error("Network response was not ok");
                const data = await response.json();
                displayNews(data.articles);
            } catch (error) {
                console.error("Fetching news failed:", error);
                newsDetails.innerHTML = "<h5 class='text-danger'>Failed to load news. Please try again.</h5>";
            }
        }

        // Display News
        function displayNews(articles) {
            newsDetails.innerHTML = ""; // Clear previous results
            if (articles.length === 0) {
                newsDetails.innerHTML = "<h5>No news found. Try a different keyword.</h5>";
                return;
            }
            articles.forEach((article) => {
                const { title, description, urlToImage, publishedAt, url } = article;
                const card = `
                    <div class="col-md-4 my-3">
                        <div class="card news-card">
                            <img src="${urlToImage || 'https://via.placeholder.com/150'}" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title">${title}</h5>
                                <p class="card-text">${description || "No description available."}</p>
                                <a href="${url}" class="btn btn-primary" target="_blank">Read More</a>
                                <p class="text-muted mt-2"><i class="far fa-calendar-alt"></i> ${new Date(publishedAt).toLocaleDateString()}</p>
                            </div>
                        </div>
                    </div>`;
                newsDetails.innerHTML += card;
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
