<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Produk</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 0;
        }


        .form-container {
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


        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            margin-top: 20px;
        }

      
        input[type="text"], input[type="email"], input[type="tel"], input[type="number"], textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus, input[type="number"]:focus, textarea:focus, select:focus {
            border-color: #4CAF50;
        }

        input[type="submit"], input[type="reset"] {
            width: 48%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
        }

        input[type="reset"] {
            background-color: #f44336;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="reset"]:hover {
            background-color: #e53935;
        }

    
        .button-container {
            display: flex;
            justify-content: space-between;
        }


        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            input[type="submit"], input[type="reset"] {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Form Pemesanan Produk Online</h2>
        <form action="proses_pemesanan.php" method="POST">
            <!-- Input Nama Lengkap -->
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <!-- Input Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Input Nomor Telepon dengan Pembatasan Angka -->
            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon" pattern="[0-9]{10,13}" 
                   title="Masukkan nomor telepon yang valid (10-13 angka)" required>

            <!-- Input Alamat Pengiriman -->
            <label for="alamat">Alamat Pengiriman:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <!-- Pilihan Produk -->
            <label for="produk">Pilih Produk:</label>
            <select id="produk" name="produk" required>
                <option value="Laptop">Laptop</option>
                <option value="Smartphone">Smartphone</option>
                <option value="Headset">Headset</option>
            </select>

            <!-- Input Jumlah Produk -->
            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" min="1" required>

            <!-- Metode Pembayaran -->
            <label for="pembayaran">Metode Pembayaran:</label>
            <select id="pembayaran" name="pembayaran" required>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="COD">Cash on Delivery (COD)</option>
            </select>

            <!-- Catatan Tambahan (Opsional) -->
            <label for="catatan">Catatan Tambahan (Opsional):</label>
            <textarea id="catatan" name="catatan" placeholder="Instruksi khusus terkait pesanan"></textarea>

            <!-- Tombol Submit dan Reset -->
            <div class="button-container">
                <input type="submit" value="Pesan Sekarang">
                <input type="reset" value="Reset Form">
            </div>
        </form>
    </div>

</body>
</html>
