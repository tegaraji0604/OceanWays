<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="sidebar">
    <ul>
        <h2>=Dashboard=</h2>
        <li><a href="index.php">Home</a></li>
        <li><a href="transaction.php">Pemesanan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="content">
    <h2>Welcome to My Dashboard</h2>
    <div class="widgets">
        <div class="widget">
            <h3>Status</h3>
            <p>Total Pengguna: 150</p>
            <p>Total Pesanan: 345</p>
            <p>Pesanan Yang Tertunda: 23</p>
        </div>
        <div class="widget">
            <h3>Cuaca Terkini</h3>
            <p>Location: Surabaya</p>
            <p>Temperature: 38°C</p>
            <p>Condition: Berawan</p>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Simulate fetching weather data
    const weatherWidget = document.querySelector('.widget:nth-child(2)');
    const weatherData = {
        location: 'Surabaya',
        temperature: '38°C',
        condition: 'Berawan '
    };
    
    weatherWidget.querySelector('p:nth-child(2)').textContent = `Lokasi: ${weatherData.location}`;
    weatherWidget.querySelector('p:nth-child(3)').textContent = `Temperatur: ${weatherData.temperature}`;
    weatherWidget.querySelector('p:nth-child(4)').textContent = `Kondisi: ${weatherData.condition}`;
});
</script>

</body>
</html>
