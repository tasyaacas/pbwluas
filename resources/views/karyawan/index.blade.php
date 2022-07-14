@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Karyawan</title>
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Karyawan') }}</div>

                <div class="card-body">
                    <a href="/karyawan/create" class="btn btn-success mb-2">Tambah Karyawan</a>
                    <table class="table table-hover">
                        <tr>
                            <th>Nomor Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>No. Telepon/HP</th>
                            <th>Gaji</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($karyawan as $p)
                        <tr>
                            <td>{{ $p->pel_no }}</td>
                            <td>{{ $p->pel_nama }}</td>
                            <td>{{ $p->pel_jab }}</td>
                            <td>{{ $p->pel_hp }}</td>
                            <td>{{ $p->pel_gaji }}</td>
                            <td style="text-align:center !important;">{{ $p->pel_aktif }}</td>
                            <td><a href="/karyawan/{{$p->id}}/edit" class="btn btn-primary  mb-2"
                                    style="width:70px !important;">Edit</a>
                                <form action="/karyawan/{{$p->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Hapus" class="btn btn-danger  mb-2">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection