@extends('layouts.master');
@section('title', 'detailpenjualan');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Detail Penjualan </h3>
                            <a class="btn btn-primary" href="/detailpenjualan/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-reponsive">
                                <table class="table table-bordered table-striped" id="datatable">
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
                                        @foreach($detailpenjualan as $detailpenjualan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $detailpenjualan->id_penjualan }}</td>
                                            <td>{{ $detailpenjualan->id_menu }}</td>
                                            <td>{{ $detailpenjualan->harga }}</td>
                                            <td>{{ $detailpenjualan->qty }}</td>
                                            <td>{{ $detailpenjualan->sub_total }}</td>
                                            <td><a class="btn btn-danger" href="/detailpenjualan/{{ $detailpenjualan->id }}/delete"
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