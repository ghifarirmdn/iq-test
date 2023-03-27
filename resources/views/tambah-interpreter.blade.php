@extends('layouts.main-admin')
@section('container')
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Menambahkan Interpreter</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/interpreter">Interpreter</a></li>
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
                        <h4 class="card-title">Tambahkan Interpreter</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-12 d-flex justify-content-end pt-5">
                                <button type="submit" class="btn btn-primary" onclick="location.href='{{ url('/interpreter') }}'">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection