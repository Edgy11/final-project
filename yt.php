<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="yt.css">
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

    <!-- Main Content -->
    <div class="container">
        <h1 class="text-center my-4">YouTube Video Search</h1>
        <div class="search-container">
            <input type="text" id="searchInput" class="form-control w-50 d-inline-block" placeholder="Search YouTube videos">
            <button id="searchBtn" class="btn btn-primary">Search</button>
        </div>
        <div class="row mt-4" id="videoResults"></div>
    </div>

    <!-- Script -->
    <script>
        const API_KEY = "AIzaSyARfCxYWuhoPaGFq6WWlsZnLLF2J2laGKc";
        const SEARCH_URL = "https://www.googleapis.com/youtube/v3/search";

        document.getElementById('searchBtn').addEventListener('click', () => {
            const query = document.getElementById('searchInput').value.trim();
            if (query) {
                fetchVideos(query);
            }
        });

        async function fetchVideos(query) {
            const url = `${SEARCH_URL}?part=snippet&type=video&maxResults=9&q=${encodeURIComponent(query)}&key=${API_KEY}`;
            try {
                const response = await fetch(url);
                const data = await response.json();
                displayVideos(data.items);
            } catch (error) {
                console.error("Error fetching videos:", error);
            }
        }

        function displayVideos(videos) {
            const videoResults = document.getElementById('videoResults');
            videoResults.innerHTML = ""; // Clear previous results

            videos.forEach(video => {
                const { videoId } = video.id;
                const { title, thumbnails, description } = video.snippet;
                const card = `
                    <div class="col-md-4">
                        <div class="card video-card">
                            <img src="${thumbnails.high.url}" alt="${title}">
                            <div class="card-body">
                                <h5 class="card-title">${title}</h5>
                                <p class="card-text">${description || "No description available."}</p>
                                <a href="https://www.youtube.com/watch?v=${videoId}" class="btn btn-danger" target="_blank">Watch on YouTube</a>
                            </div>
                        </div>
                    </div>
                `;
                videoResults.innerHTML += card;
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
