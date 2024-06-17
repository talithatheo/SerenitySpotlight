<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity Community</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #E1EBF7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #8BADD9;
            color: #ffffff;
            padding: 10px 20px;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #EED4F7;
        }

        .community-section {
            margin-top: 80px;
            padding: 150px;
            text-align: center;
        }

        .community-section h2 {
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            color: #8BADD9;
            font-size: 50px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #EED4F7;
        }

        .video-container {
            margin-top: 20px;
        }

        .video-container iframe {
            margin-bottom: 20px;
        }

        footer {
            background-color: #ADC0EF;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Serenity.</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="article.html">Articles</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="merchandise.html">Community</a></li>
            </ul>
        </nav>
    </header>
    <main class="community-section" id="community">
        <h2>Join Our Community</h2>
        <div class="social-links">
            <a href="https://discord.com/invite/wACprHvC" target="_blank"><i class="fab fa-discord"></i></a>
            <a href="https://www.instagram.com/rayleyzz?igsh=ZGY5bmVtMnY0cW92" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VCp2tIBP7t8?si=YCxDrbI3JwazwARU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MvSkn9svGGw?si=krtYHNQ2llhjlGDF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_50igeHW7vw?si=xmWwjNSC6yQ9OXN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jkS6glRPD_o?si=qgUwZu9XftTSmCEs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Serenity Community. All rights reserved.</p>
    </footer>
</body>
</html>
