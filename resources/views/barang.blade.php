@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Barang List</h1>
    @if($barangs->isEmpty())
        <p>No data available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>{{ $barang->tanggal->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
