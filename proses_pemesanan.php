<?php
// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$pembayaran = $_POST['pembayaran'];
$catatan = isset($_POST['catatan']) ? $_POST['catatan'] : "-"; 

// Hitung total harga dengan switch case 
$harga_produk = 0;
switch ($produk) {
    case "Laptop":
        $harga_produk = 7000000;
        break;
    case "Smartphone":
        $harga_produk = 3000000;
        break;
    case "Headset":
        $harga_produk = 500000;
        break;
}

$total_harga = $harga_produk * $jumlah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <style>
     
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

       /
        .confirmation-container {
            background-color: #fff;
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

       
        h2 {
            text-align: center;
            color: #4CAF50;
        }

        
        .detail {
            margin-bottom: 15px;
        }

        .back-button {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            padding: 12px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #1976D2;
        }

        
        @media (max-width: 768px) {
            .confirmation-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="confirmation-container">
    <h2>Konfirmasi Pemesanan</h2>
    <div class="detail">Nama               : <?php echo htmlspecialchars($nama); ?></div>
    <div class="detail">Email              : <?php echo htmlspecialchars($email); ?></div>
    <div class="detail">Nomor Telepon      : <?php echo htmlspecialchars($telepon); ?></div>
    <div class="detail">Alamat Pengiriman  : <?php echo nl2br(htmlspecialchars($alamat)); ?></div>
    <div class="detail">Produk yang Dipesan: <?php echo htmlspecialchars($produk); ?></div>
    <div class="detail">Jumlah             : <?php echo htmlspecialchars($jumlah); ?></div>
    <div class="detail">Metode Pembayaran  : <?php echo htmlspecialchars($pembayaran); ?></div>
    <div class="detail">Catatan Tambahan   : <?php echo htmlspecialchars($catatan); ?></div>
    <div class="detail">Total Harga        : Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></div>

    <a href="tugas.php" class="back-button">Kembali ke Form Pemesanan</a>
</div>

</body>
</html>
