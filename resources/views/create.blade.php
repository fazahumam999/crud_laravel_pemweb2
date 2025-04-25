<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #444;
        }

        form {
            background: white;
            padding: 25px;
            max-width: 500px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            width: 100%;
            background: #007BFF;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Tambah Barang Baru</h1>

    <form action="{{ route('barang.store') }}" method="POST">
    @csrf
    
    <label for="kode">Kode Barang</label>
    <input type="text" id="kode" name="kode" required>

    <label for="nama">Nama Barang</label>
    <input type="text" id="nama" name="nama" required>

    <label for="harga">Harga</label>
    <input type="number" id="harga" name="harga" required>

    <label for="stok">Stok</label>
    <input type="number" id="stok" name="stok" required>

    <button type="submit">Simpan Barang</button>
</form>

</body>
</html>
