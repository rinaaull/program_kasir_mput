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
                            <h3>Halaman Edit Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/detailpenjualan/tambah">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/detailpenjualan/{{ $detailpenjualan->id }}/update" method="post">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Customer</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama_customer"
                                    value="{{ $detailpenjualan->nama_customer }}"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Total</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="total"
                                    id=""
                                    value="{{ $detailpenjualan->total }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal Transaksi</label>
                                <input
                                    type="date"
                                    class="form-control"
                                    name="tanggal_transaksi"
                                    id=""
                                    value="{{ $detailpenjualan->tanggal_transaksi }}"
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection