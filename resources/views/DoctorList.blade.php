<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- CSS untuk gaya dan tata letak -->
    <style>
        /* CSS untuk tata letak dan gaya */
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
            text-align: center;
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
            color: rgb(245, 186, 252);
            border-bottom: 1px solid #e1ebf7;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        p {
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 50px;
            background-color: #eed4f2;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative; /* For positioning the image */
        }
        .contact-info h2 {
            text-align: center;
            margin-bottom: 5px;
            color: #000000;
        }
        .contact-info p {
            margin-bottom: 10px;
        }
        .highlight {
            color: #000000;
        }
        .highlight2 {
            color: #4698fb;
        }
        .button {
            display: inline-block;
            background-color: #adc0ef;
            color: #000000;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            position: relative; /* Added for z-index usage */
            z-index: 1; /* Ensures the button is above the image */
        }
        .button:hover {
            background-color: #6e829d;
            color: rgb(255, 255, 255);
        }
        .about-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* Penyesuaian gaya untuk bagian "Our Team of Mental Health Professionals" */
        .doctor-info {
            margin-left: 0; /* Menghapus margin kiri */
            text-align: center;
        }
        .doctor-image {
            display: block;
            margin: 0 auto 10px;
            border-radius: 10px; /* Mengubah bentuk menjadi kotak */
            width: 200px;
            height: 200px;
            object-fit: cover;
            box-shadow: 0px 4px 6px rgba(232, 187, 241, 0.1);
        }
        .doctor-info strong {
            color: #333;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .doctor-info p {
            margin-bottom: 10px;
            color: #666;
            text-align: justify; /* Menambahkan properti text-align: justify */
        }
        /* Menghilangkan tanda bintik hitam */
        ul {
            list-style-type: none;
            padding: 0;
        }
        .button {
            display: inline-block;
            background-color: #de0404;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            position: relative; /* Added for z-index usage */
            z-index: 1; /* Ensures the button is above the image */
        }
        .button:hover {
            background-color: #4cf275;
            color: rgb(0, 0, 0);
        }

        /* Added style for the image */
        .about-image {
            position: absolute; /* Absolute positioning */
            top: 0; /* Aligns the top of the image with the top of the parent */
            right: 0; /* Aligns the right of the image with the right of the parent */
            width: 100%; /* Makes the image span the full width */
            height: 100%; /* Makes the image span the full height */
            object-fit: cover; /* Ensures the image covers the area without distortion */
            opacity: 0.2; /* Adjusts the transparency */
            z-index: 0; /* Places the image behind other content */
            border-radius: 10px; /* Add border radius for a rounded appearance */
        }
    </style>
</head>
<body>
    <header>
        <!-- Logo -->
        <div class="logo">Serenity.</div>
        <!-- Navigasi -->
        <nav>
            <ul>
                <li><a href="index.html" style="font-size: 15px;"><b>Home</b></a></li>
                <li><a href="article.html" style="font-size: 15px;"><b>Articles</b></a></li>
                <li><a href="about.html" style="font-size: 15px;"><b>About</b></a></li>
                <li><a href="komunitas.html" style="font-size: 15px;"><b>Community</b></a></li>
                <li><a href="merchandise.html" style="font-size: 15px;"><b>Merchandise</b></a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <!-- Bagian "Our Team of Mental Health Professionals" -->
        <div class="about-section">
            <div class="doctor-info">
            <h2>Our Team of Mental Health Professionals</h2>
            </div>
            <ul>
                <!-- Informasi tentang dokter -->
                <li>
                    <div class="doctor-info">
                        <img src="Dinda.jpg" alt="Dr. Anggita Rachmadinda Putri, Dp.KJ(K)" class="doctor-image">
                        <strong>Dr. Anggita Rachmadinda Putri, Sp.KJ(K)</strong><br>
                        <p>Seorang dokter jiwa atau psikiatri yang aktif melayani pasien RSU Al-Irsyad (Surabaya) dan RS Siti Khodijah Sepanjang (Sidoarjo). Beliau juga memiliki Praktik Pribadi, tepatnya di Jl. Sutorejo Utara X No.N-17, Dukuh Sutorejo, Mulyorejo, Surabaya. Dr. Anggita Rachmadinda Putri Dp.KJ(K) mendapatkan gelar spesialisnya setelah menamatkan pendidikan di Universitas Airlangga pada tahun 1981 dan 1993. Beliau memiliki pengalaman yang sangat lama, yaitu 40 tahun. </p>
                        <p>Email: <span class="highlight2"> anggita@gmail.com</span> _ Phone: <span class="highlight2">+62 857-4578-6669</span></p>
                    </div>
                </li>
                <li>
                    <div class="doctor-info">
                        <img src="Talitha.jpg" alt="Dr. Talitha Theodora Nurhaendy, Sp.KJ(K)" class="doctor-image">
                        <strong>Dr. Talitha Theodora Nurhaendy, Sp.KJ(K)</strong><br>
                        <p>Seorang dokter jiwa atau psikiatri yang aktif melayani pasien di RS Universitas Airlangga, Surabaya. Selain itu beliau juga menjadi Staf Pengajar Psikiatri Anak dan Remaja di Fakultas Kedokteran Universitas Airlangga. Dr. Talitha Theodora Nurhaendyh Sp.KJ(K) mendapatkan gelar spesialisnya setelah menyelesaikan pendidikan di Universitas Airlangga pada tahun 2009 dan 2016. Beliau telah memiliki pengalaman selama 13 tahun. </p>
                        <p>Email: <span class="highlight2"> talitha@gmail.com</span> _ Phone: <span class="highlight2">+62 812-7675-5706</span></p>
                    </div>
                </li>
                <li>
                    <div class="doctor-info">
                        <img src="Felin.jpg" alt="Dr. Greflyn Felinstya Salhuteru, Sp.KJ" class="doctor-image">
                        <strong>Dr. Greflyn Felinstya Salhuteru, Sp.KJ</strong><br>
                        <p>Seorang dokter jiwa dan psikiatri yang aktif melayani pasien di Klinik Utama Nusantara Media, Surabaya. Beliau juga aktif menjadi pembicara tentang kesehatan mental di webinar ataupun di media sosial pribadinya. Dr. Greflyn Felinstya Salhuteru Sp.KJ mendapatkan gelar dokternya setelah menamatkan pendidikan di Universitas Syiah Kuala (2012) dan Universitas Airlangga (2020). Beliau telah memiliki pengalaman selama 10 tahun. </p>
                        <p>Email: <span class="highlight2">greflyn04@gmail.com</span> _ Phone: <span class="highlight2">+62 822-1109-5474</span></p>
                    </div>
                </li>
                <li>
                    <div class="doctor-info">
                        <img src="Rehan.jpg" alt="dr. Rayhan Mochammad, Sp.A" class="doctor-image">
                        <strong>dr. Rayhan Mochammad, Sp.A</strong><br>
                        <p>dr. Rayhan Mochammad, Sp.A adalah seorang Dokter Anak yang berpraktik di RS PKU Muhammadiyah Surabaya. Beliau dapat membantu layanan konsultasi kesehatan anak menyeluruh. dr. Rayhan Mochammad telah menamatkan studi Spesialis Anak di Universitas Hasanuddin. Beliau juga merupakan anggota dari organisasi Ikatan Dokter Indonesia (IDI) dan Ikatan Dokter Anak Indonesia (IDAI). </p>
                        <p>Email: <span class="highlight2">rayhanmoch@gmail.com</span> _ Phone: <span class="highlight2">+62 819-3343-3423</span></p>
                    </div>
                </li>
                <li>
                    <div class="doctor-info">
                        <img src="Philip.jpg" alt="dr. Philipus Pelea Hela Bani, Sp.A(K)" class="doctor-image">
                        <strong>dr. Philipus Pelea Hela Bani, Sp.A(K)</strong><br>
                        <p>dr. Philipus Pelea Hela Bani, Sp.A (K) merupakan seorang Dokter Spesialis Anak yang tergabung dalam anggota Ikatan Dokter Indonesia (IDI) dan Ikatan Dokter Anak Indonesia (IDAI). Menamatkan pendidikan Spesialis Anak di Fakultas Kedokteran, Universitas Airlangga. Adapun layanan yang diberikan beliau meliputi Konsultasi kesehatan anak menyeluruh.</p>
                        <p>Email: <span class="highlight2">philipus@gmail.com</span> _ Phone: <span class="highlight2">+62 822-3728-7379</span></p>
                    </div>
                </li>
            </ul>
        <!-- Informasi Kontak -->
        <div class="contact-info">
            <h2>Contact Information</h2>
                <div class="contact-details">
                    <p>Email: <span class="highlight">SerenitySplt@gmail.com</span></p>
                    <p>Phone: <span class="highlight">+62812345678900</span></p>
                    <a href="EmergencyCall.html" class="button"><b>Need a friend right now?</b></a>
                    <p>&copy; 2024 Serenity Spotlight</p>
                </div>
                <!-- Added image inside contact-info -->
                <img src="About.png" alt="About Image" class="about-image">
        </div>
    </div>
</body>
</html>
