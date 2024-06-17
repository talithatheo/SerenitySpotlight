<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Call</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif, serif, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d8d7f6;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding-top: 50px;
        }
        header {
            background-color: #adc0ef;
            color: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 30px;
            font-weight: bold;
            color: #fff;
            margin-left: 20px;
        }
        header nav {
            margin-right: 20px;
        }
        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        header nav ul li {
            margin-left: 20px;
        }
        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        header nav ul li a:hover {
            color: rgb(0, 0, 0);
            border-bottom: 1px solid #e1ebf7;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            position: relative;
            z-index: 1;
        }
        p {
            margin-bottom: 20px;
        }
        .emergency-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .emergency-section h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .emergency-section p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .contact-number {
            font-size: 24px;
            font-weight: bold;
            color: #ff0000;
            margin-bottom: 10px;
        }
        .button {
            display: inline-block;
            background-color: #adc0ef;
            color: #000000;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            margin-right: 10px;
            position: relative;
            z-index: 1;
        }
        .button:hover {
            background-color: #6e829d;
            color: rgb(255, 255, 255);
        }
        .logo-left {
            width: 150px;
            height: auto;
            margin-right: 20px;
        }
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
        }
        .emergency-image {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            opacity: 0.2;
            z-index: 0;
        }
        .logo-left, .logo-right {
            width: 100px;
            height: auto;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }
        .logo-left {
            left: 20px;
        }
        .logo-right {
            right: 20px;
        }
        select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
    </style>
    <script>
        function showEmergencyNumber() {
            const area = document.getElementById('area-select').value;
            const numberDiv = document.getElementById('emergency-number');
            let numbers = [];
            switch(area) {
                case 'jakarta':
                    numbers = ['021-500-454', '021-123-456'];
                    break;
                case 'bandung':
                    numbers = ['022-700-123', '022-456-789'];
                    break;
                case 'surabaya':
                    numbers = ['031-600-789', '031-654-321'];
                    break;
                default:
                    numbers = ['119', '110'];
                    break;
            }
            numberDiv.innerHTML = numbers.map(number => `<a href="tel:${number}" class="contact-number">${number}</a>`).join('<br>');
        }
    </script>
</head>
<body>
    <header>
        <div class="logo">Serenity.</div>
        <nav>
            <ul>
                <li><a href="index.html"><b>Home</b></a></li>
                <li><a href="merchandise.html"><b>Merchandise</b></a></li>
                <li><a href="articles.html"><b>Articles</b></a></li>
                <li><a href="komunitas.html"><b>Community</b></a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <div class="emergency-section">
            <img src="BG2.png" alt="Background Image" class="emergency-image">
            <div class="logo-container">
                <img src="SS4.png" alt="Left Logo" class="logo-left">
                <h1>Emergency Call</h1>
                <img src="SS3.png" alt="Right Logo" class="logo-right">
            </div>
            <h2>If you or someone you know is in immediate danger,</h2>
            <h2>please call emergency services immediately!</h2>
            <p>Select your area:</p>
            <select id="area-select" onchange="showEmergencyNumber()">
                <option value="default">Default</option>
                <option value="jakarta">Jakarta</option>
                <option value="bandung">Bandung</option>
                <option value="surabaya">Surabaya</option>
            </select>
            <div id="emergency-number"></div>
            <p>&copy; 2024 Serenity Spotlight</p>
        </div>
    </div>
</body>
</html>
