@extends('layouts.main-plp')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Jadwal</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard-plp">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Jadwal</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambahkan Jadwal</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Client</label>
                                            <input type="text" class="form-control" id="client" placeholder="Masukkan Client" name="client">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Banyak Tes</label>
                                            <input type="text" class="form-control" id="banyak-tes" placeholder="Masukkan Banyak Tes" name="banyak-tes">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Tanggal Tes</label>
                                            <input type="date" class="form-control" id="tgl-tes" placeholder="Masukkan Nama" name="tgl-tes">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end pt-5">
                                        <a href="/olah-nilai"><button type="submit" class="btn btn-primary">Submit</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection