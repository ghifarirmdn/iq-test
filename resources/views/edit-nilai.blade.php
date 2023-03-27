@extends('layouts.main-interpreter')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Nilai</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard-interpreter">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Nilai</li>
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
                        <h4 class="card-title">Masukkan Data</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ url('update', $jsonfile['id']) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">ID</label>
                                            <input value="{{ $jsonfile['id'] }}" type="text" class="form-control" id="id" placeholder="Masukkan Nama" name="id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input value="{{ $jsonfile['name'] }}" type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sekolah">Sekolah</label>
                                            <input value="{{ $jsonfile['sekolah'] }}" type="text" class="form-control" id="sekolah" placeholder="Masukkan Sekolah" name="sekolah">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl-tes">Tanggal Tes</label>
                                            <input value="{{ $jsonfile['tgl_tes'] }}" type="text" class="form-control" id="tgl-tes" placeholder="Masukkan Tanggal Tes" name="tgl_tes">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl-lahir">Tanggal Lahir</label>
                                            <input value="{{ $jsonfile['tgl_lahir'] }}" type="text" class="form-control" id="tgl-lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="iq">IQ</label>
                                            <input value="{{ $jsonfile['iq'] }}" type="text" class="form-control" id="iq" placeholder="Masukkan IQ" name="iq">
                                        </div>
                                    </div>
                                    <h6 class="card-title">TIKI</h6>
                                    <div class="col-md-3 mb-4">
                                        <h6>T1</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="t1" name="t1">
                                                <option selected>{{ $jsonfile['t1'] }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <h6>T3</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="t3" name="t3">
                                                <option selected>{{ $jsonfile['t3'] }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <h6>T4</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="t4" name="t4">
                                                <option selected>{{ $jsonfile['t4'] }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <h6>T6</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="t6" name="t6">
                                                <option selected>{{ $jsonfile['t6'] }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <h6 class="card-title">BIG FIVE</h6>

                                    <div class="row justify-content-center">
                                        <div class="col-md-2 mb-4">
                                            <h6>E</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="extraversion" name="extraversion">
                                                    <option selected>{{ $jsonfile['extraversion'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 mb-4">
                                            <h6>N</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="neuroticism" name="neuroticism">
                                                    <option selected>{{ $jsonfile['id'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 mb-4">
                                            <h6>A</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="agreeableness" name="agreeableness">
                                                    <option selected>{{ $jsonfile['agreeableness'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 mb-4">
                                            <h6>C</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="conscient" name="conscient">
                                                    <option selected>{{ $jsonfile['conscient'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-2 mb-4">
                                            <h6>O</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="openness" name="openness">
                                                    <option selected>{{ $jsonfile['openness'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <h6 class="card-title">MB</h6>
                                    <div class="col-md-4 mb-4">
                                        <h6>V</h6>
                                        <fieldset class="form-group">
                                                <select class="form-select" id="visual" name="visual">
                                                    <option selected>{{ $jsonfile['visual'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6>A</h6>
                                        <fieldset class="form-group">
                                                <select class="form-select" id="auditory" name="auditory">
                                                    <option selected>{{ $jsonfile['auditory'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <h6>K</h6>
                                        <fieldset class="form-group">
                                                <select class="form-select" id="kinesthetic" name="kinesthetic">
                                                    <option selected>{{ $jsonfile['kinesthetic'] }}</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </fieldset>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end pt-5">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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