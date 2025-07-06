@extends('admin.master')
@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <h1 class="mb-4">Dashboard</h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Data Anak Normal</h5>
                            <p class="card-text">Total: {{$normalCount}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Data Anak Resiko Sedang</h5>
                            <p class="card-text">Total: {{$sedangCount}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Data Anak Resiko Berat</h5>
                            <p class="card-text">Total: {{$beratCount}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection