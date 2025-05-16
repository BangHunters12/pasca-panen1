@extends('layouts/admin.admin')

@section('content')
    <div class="container">
        <h2>Product</h2>
        <hr>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id_produk}}</td>
                    <td>{{$product->nama_produk}}</td>
                    <td>{{$product->kategori}}</td>
                    <td>{{$product->harga}}</td>
                    <td>{{$product->stok}}</td>
                    <td>{{$product->satuan}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
