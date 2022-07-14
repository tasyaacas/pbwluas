@extends('layouts.app')

<style>
    img {
        width: 40%;
        margin-left: 30%;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('APLIKASI DATA KARYAWAN') }} </div>

                <div class="card-body">
                    {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png"
                        alt="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png"
                        srcset="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png">
                    --}}
                    <img src="https://www.clipartkey.com/mpngs/m/235-2352654_gambar-karyawan-kartun.png" alt="karyawan"
                        srcset="https://www.clipartkey.com/mpngs/m/235-2352654_gambar-karyawan-kartun.png">
                    <marquee behavior="" direction="">Selamat Datang Di Aplikasi Karyawan | &copy; Tasya Annisa
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection