@extends('layouts.master');
@section('title', 'transaksi');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Transaksi</h3>
                            <a class="btn btn-primary" href="/transaksi/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-reponsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id Penjualan</th>
                                            <th scope="col">Id Menu</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Transaksi as $Transaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->id_penjualan }}</td>
                                            <td>{{ $transaksi->id_menu }}</td>
                                            <td>{{ $transaksi->harga }}</td>
                                            <td>{{ $transaksi->qty }}</td>
                                            <td>{{ $transaksi->sub_total }}</td>
                                            <td><a class="btn btn-danger" href="/transaksi/{{ $transaksi->id }}/delete"
                                                    onclick="return confirm('Yakin mau di hapus ?')">Delete</a>   
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