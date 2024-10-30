@extends('layouts.master');
@section('title', 'penjualan');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-reponsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Tanggal Transaksi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penjualan as $penjualan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $penjualan->nama_customer }}</td>
                                            <td>{{ $penjualan->total }}</td>
                                            <td>{{ $penjualan->tanggal_transaksi }}</td>
                                            <td><a class="btn btn-warning" href="/detailpenjualan">Lengkapi Transaksi</a>
                                            <td><a class="btn btn-warning" href="/detailpenjualan/{{$penjualan->id}}/struk">Struk</a>
                                            </td>
                            </tr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection