<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        thead {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9f7ff;
        }
        
    </style>
</head>
<body>
    <h1>Daftar Barang</h1>

    <a href="{{ route('barang.create') }}" style="
    display: inline-block;
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    margin-bottom: 20px;
">+ Tambah Barang</a>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->kode }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>
                        <a href="{{ route('barang', $barang->id) }}" style="padding: 5px 10px; background-color: #4CAF50; color:white; border: radius 4px; text-decoration:none;">Edit</a>

                        <form action="{{ route('barang', $barang->id) }}" methods="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')" style="padding: 5px 10px; background-color: #f44336; color: white; border-radius: none;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center; color: #999;">Tidak ada data barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
