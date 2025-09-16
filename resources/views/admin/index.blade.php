@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Dashboard</h1>

        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-bg-primary h-100">
                    <div class="card-body">
                        <h5 class="card-title">Data Anak Normal</h5>
                        <p class="card-text">Total: {{ $normalCount }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-bg-success h-100">
                    <div class="card-body">
                        <h5 class="card-title">Data Anak Resiko Sedang</h5>
                        <p class="card-text">Total: {{ $sedangCount }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-bg-warning h-100">
                    <div class="card-body">
                        <h5 class="card-title">Data Anak Resiko Berat</h5>
                        <p class="card-text">Total: {{ $beratCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection