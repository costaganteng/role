@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa; /* Warna latar belakang yang ringan */
    }

    .container {
        margin-top: 30px; /* Jarak atas untuk kontainer */
    }

    .card {
        border: 1px solid #dee2e6; /* Border ringan di sekitar kartu */
        border-radius: 0.5rem; /* Sudut yang membulat */
    }

    .card-header {
        background-color: #007bff; /* Warna primer untuk header */
        color: white; /* Warna teks putih */
        font-size: 1.25rem; /* Ukuran font lebih besar untuk header */
    }

    .card-body {
        padding: 20px; /* Padding untuk isi kartu */
    }

    .alert {
        margin-bottom: 20px; /* Jarak di bawah alert */
    }

    .alert-success {
        background-color: #d4edda; /* Latar belakang hijau muda untuk sukses */
        color: #155724; /* Teks hijau tua */
        border-color: #c3e6cb; /* Warna border untuk alert */
    }

    /* Penyesuaian responsif */
    @media (max-width: 768px) {
        .card {
            margin: 15px; /* Margin untuk layar kecil */
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
