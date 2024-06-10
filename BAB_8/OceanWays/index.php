<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OceanWays - Home</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .carousel-container {
            overflow: hidden;
            width: 100%;
            position: relative;
        }
        
        .carousel-content {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        
        .carousel-item {
            flex: 0 0 auto;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php" id="dashboardLink">Dashboard</a></li>
                    <li><a href="login.php" id="loginLink">Login</a></li>
                    <li><a href="register.php" id="registerLink">Register</a></li>
                    <li><a href="transaction.php" id="transactionLink">Pemesanan</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="carousel-container">
            <div class="carousel-content" id="carouselContent">
                <div class="carousel-item">
                    <img src="kapal.jpg" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="kapal1.jpg" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="kapal2.jpg" alt="Image 3">
                </div>
            </div>
        </section>
        <section>
            <h2>Tentang Kami</h2>
            <p>Selamat datang di situs web yang didedikasikan untuk membantu perjalanan anda! Di sini, Anda akan menemukan pengalaman terbaik dengan berfokus pada kepuasan pelanggan.</p>
        </section>
        <section>
            <h2>Layanan</h2>
            <p>OceanWays menyediakan berbagai layanan untuk membantu Anda dalam perjalanan Anda. Mulailah jelajahi situs web kami hari ini dan temukan bagaimana Anda dapat membawa hubungan pelanggan Anda ke tingkat yang lebih tinggi!.</p>
            <p>Temukan cara terbaik untuk perjalanan anda.</p>
            <ul id="routesList">
                <li>Surabaya - Makassar</li>
                <li>Banyuwangi - Bali</li>
                <li>Lombok - Sumbawa</li>
                <li>Surabaya - Balikpapan</li>
            </ul>
            <br>
            <p>Kepuasan Anda Adalah Prioritas Kami :) </p>
        </section>
        <section>
            <h2>Kontak</h2>
            <p>Silakan hubungi kami melalui email di <a href="mailto:info@OceanWays.com" id="mailLink">info@OceanWays.com</a> atau melalui telepon di 123-456-7890.</p>
        </section>
    </main>
   

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var carouselContent = document.getElementById("carouselContent");
            var carouselItems = document.querySelectorAll(".carousel-item");
            var currentIndex = 0;
            var totalItems = carouselItems.length;
            var itemWidth = carouselItems[0].clientWidth;

            function slideNext() {
                if (currentIndex < totalItems - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                carouselContent.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }

            function slidePrevious() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalItems - 1;
                }
                carouselContent.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            }

            setInterval(slideNext, 3000); 
        });
    </script>
     <script>
        
        document.addEventListener("DOMContentLoaded", function() {
            
            var dashboardLink = document.getElementById("mailLink");
            dashboardLink.addEventListener("click", function(event) {
                event.preventDefault(); 
                alert("Mail telah di klik");
            });
            
            
        });
    </script>
</body>
</html>
