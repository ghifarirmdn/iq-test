@extends('layouts.main-plp')
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
                            <li class="breadcrumb-item"><a href="/dashboard-plp">Dashboard</a></li>
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
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>No Rapot</th>
                                        <th>IQ</th>
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
                                        <th>Validasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>10301</td>
                                        <td>120</td>
                                        <td>Ghifari</td>
                                        <td>pens</td>
                                        <td>21-23-2023</td>
                                        <td>20-09-2002</td>
                                        <td>130</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1" class="form-check-input" checked>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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