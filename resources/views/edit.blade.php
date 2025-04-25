<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.2s ease;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a.back {
            display: inline-block;
            margin-top: 15px;
            text-align: center;
            color: #666;
            text-decoration: none;
        }

        a.back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Edit Barang</h1>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="kode">Kode Barang:</label>
        <input type="text" name="kode" id="kode" value="{{ $barang->kode }}" required>

        <label for="nama">Nama Barang:</label>
        <input type="text" name="nama" id="nama" value="{{ $barang->nama }}" required>

        <label for="harga">Harga Barang:</label>
        <input type="number" name="harga" id="harga" value="{{ $barang->harga }}" required>

        <label for="stok">Stok Barang:</label>
        <input type="number" name="stok" id="stok" value="{{ $barang->stok }}" required>

        <button type="submit">Update Barang</button>
    </form>

    <div style="text-align:center">
        <a class="back" href="{{ url('/barang') }}">← Kembali ke Daftar Barang</a>
    </div>

</body>
</html>
