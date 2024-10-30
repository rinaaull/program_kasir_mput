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
                            <h3>Halaman Tambah Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/detailpenjualan/tambah">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/detailpenjualan/simpan" method="post">
                                @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">No</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="no"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Id Penjualan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="id_penjualan"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">ID Menu</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="id_menu"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="harga"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Qty</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="qty"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Sub Total</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="sub_total"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection