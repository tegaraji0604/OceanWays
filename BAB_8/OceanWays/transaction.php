<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemesanan Tiket</title>
<link rel="stylesheet" href="transaction.css">
<style>
    /* CSS untuk notifikasi */
    #notification {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        display: none;
    }

    /* CSS untuk tombol unduh laporan */
    #download_pdf {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    #download_pdf:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
    <!-- Notifikasi -->
    <div id="notification"></div>

    <h2>Form Pemesanan Tiket</h2>
    <form id="form_transaksi">
        <nav>
            <a href="index.php">Home&nbsp;</a>
            <a href="login.php">Login&nbsp;</a>
            <a href="register.php">Register</a>
        </nav>
        <label for="nama_penumpang">Nama Penumpang:</label><br>
        <input type="text" id="nama_penumpang" name="nama_penumpang" required><br>
        <label for="rute">Rute Perjalanan:</label><br>
        <select id="rute" name="rute" required>
            <option value="Surabaya - Makassar">Surabaya - Makassar</option>
            <option value="Banyuwangi - Bali">Banyuwangi - Bali</option>
            <option value="Bali - Lombok">Bali - Lombok</option>
            <option value="Lombok - Sumbawa">Lombok - Sumbawa</option>
            <option value="Surabaya - Balikpapan">Surabaya - Balikpapan</option>
        </select><br>
        <label for="harga">Harga Tiket:</label><br>
        <select id="harga" name="harga" required>
            <option value="Ekonomi">Ekonomi - RP.250.000</option>
            <option value="Eksekutif">Eksekutif - RP.500.000</option>
            <option value="Bisnis">Bisnis - RP.750.000</option>
        </select><br>
        <label for="jumlah">Jumlah Tiket:</label><br>
        <input type="number" id="jumlah" name="jumlah" required><br><br>
        <button type="submit">Tambah Transaksi</button>
    </form>

    <h2>Daftar Transaksi</h2>
    <button id="download_pdf" onclick="generatePDF()">Unduh Laporan PDF</button>
    <table id="daftar_transaksi">
        <thead>
            <tr>
                <th>Nama Penumpang</th>
                <th>Rute Perjalanan</th>
                <th>Harga Tiket</th>
                <th>Jumlah Tiket</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Include jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.21/jspdf.plugin.autotable.min.js"></script>
    <script>
        document.getElementById("form_transaksi").addEventListener("submit", function(event) {
            event.preventDefault();
            var namaPenumpang = document.getElementById("nama_penumpang").value;
            var rutePerjalanan = document.getElementById("rute").value;
            var hargaTiket = document.getElementById("harga").value;
            var jumlahTiket = document.getElementById("jumlah").value;
            tambahTransaksi(namaPenumpang, rutePerjalanan, hargaTiket, jumlahTiket);
            document.getElementById("form_transaksi").reset();
            showNotification("Transaksi berhasil ditambahkan!");
        });

        function tambahTransaksi(nama, rute, harga, jumlah) {
            var table = document.getElementById("daftar_transaksi").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            cell1.innerHTML = nama;
            cell2.innerHTML = rute;
            cell3.innerHTML = harga;
            cell4.innerHTML = jumlah;
            cell5.innerHTML = '<button onclick="hapusTransaksi(this)">Hapus</button>';
        }

        function hapusTransaksi(row) {
            var i = row.parentNode.parentNode.rowIndex;
            document.getElementById("daftar_transaksi").deleteRow(i);
        }

        function showNotification(message) {
            var notification = document.getElementById("notification");
            notification.textContent = message;
            notification.style.display = "block";
            setTimeout(function() {
                notification.style.display = "none";
            }, 2000); // Notifikasi akan hilang setelah 2 detik
        }

        async function generatePDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.text("Daftar Transaksi", 14, 10);
            doc.autoTable({
                head: [['Nama Penumpang', 'Rute Perjalanan', 'Harga Tiket', 'Jumlah Tiket']],
                body: Array.from(document.querySelectorAll('#daftar_transaksi tbody tr')).map(row => 
                    Array.from(row.cells).slice(0, 4).map(cell => cell.innerText)
                ),
                startY: 20,
                theme: 'grid'
            });

            doc.save("daftar_transaksi.pdf");
        }
    </script>
</body>
</html>
