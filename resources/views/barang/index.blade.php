@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h2>{{ $pageTitle }}</h2>

        <div class="card">
            <div class="card-header">
                <a href="{{ route('barangs.create') }}" class="btn btn-dark btn-sm"><i class=" bi-plus-circle"></i>
                    Tambah Barang</a>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Deskripsi Barang</th>
                                <th>Satuan Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->harga_barang }}</td>
                                    <td>{{ $barang->deskripsi_barang }}</td>
                                    <td>{{ $barang->satuan->nama_satuan}}</td>
                                    <td>@include('barang.actions')</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
