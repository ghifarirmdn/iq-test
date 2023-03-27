@extends('layouts.main-interpreter')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Olah Nilai</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard-interpreter">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Olah Nilai</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Pengelolaan Nilai</h4>
                        <button class="btn btn-primary" onclick="location.href='{{ url('/olah-nilai/tambah-nilai') }}'">Tambah Data</button>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>NAME</th>
                                        <th>Sekolah</th>
                                        <th>Tgl Tes</th>
                                        <th>Tgl Lahir</th>
                                        <th>IQ</th>
                                        <th>T1</th>
                                        <th>T3</th>
                                        <th>T4</th>
                                        <th>T6</th>
                                        <th>E</th>
                                        <th>N</th>
                                        <th>A</th>
                                        <th>C</th>
                                        <th>O</th>
                                        <th>V</th>
                                        <th>A</th>
                                        <th>K</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item['id']}}</td>
                                        <td>{{ $item['name']}}</td>
                                        <td>{{ $item['sekolah']}}</td>
                                        <td>{{ $item['tgl_tes']}}</td>
                                        <td>{{ $item['tgl_lahir']}}</td>
                                        <td>{{ $item['iq']}}</td>
                                        <td>{{ $item['t1']}}</td>
                                        <td>{{ $item['t3']}}</td>
                                        <td>{{ $item['t4']}}</td>
                                        <td>{{ $item['t6']}}</td>
                                        <td>{{ $item['extraversion']}}</td>
                                        <td>{{ $item['neuroticism']}}</td>
                                        <td>{{ $item['agreeableness']}}</td>
                                        <td>{{ $item['conscient']}}</td>
                                        <td>{{ $item['openness']}}</td>
                                        <td>{{ $item['visual']}}</td>
                                        <td>{{ $item['auditory']}}</td>
                                        <td>{{ $item['kinesthetic']}}</td>
                                        <td>
                                            <a href="edit-nilai/{{ $item['id']}}"><i class="fa-solid fa-pen"></i></a>
                                            <a href="/delete/{{ $item['id'] }}"><i class="fa-sharp fa-solid fa-trash"></i></a>    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection