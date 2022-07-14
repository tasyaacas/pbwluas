<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Edit Karyawan</title>
</head>

<body> <br>
    <form action="/karyawan/{{$karyawan->id}}" method="POST" style="margin-left:50px !important;">
        @method('put')
        @csrf
        <h4>Edit Data Karyawan</h4>
        <hr style="width: 25% !important;">

        <div class="mb-3">
            <label for="karyawan" class="form-label">Id Karyawan</label>
            <input type="text" class="form-control" name="pel_id_gol" style="width: 25% !important;"
                value="{{ $karyawan->pel_id_gol }}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Nomor Karyawan</label>
            <input type="text" name="pel_no" class="form-control" style="width: 25% !important;"
                value="{{ $karyawan->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" name="pel_nama" class="form-control" style="width: 25% !important;"
                value="{{ $karyawan->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">No. Telepon/HP</label>
            <input type="text" name="pel_hp" class="form-control" style="width: 25% !important;"
                value="{{ $karyawan->pel_hp}}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Jabatan</label>
            <input type="text" name="pel_jab" class="form-control" style="width: 25% !important;"
                value="{{ $karyawan->pel_jab }}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Gaji</label>
            <input type="number" name="pel_gaji" class="form-control" style="width: 25% !important;"
                value="{{ $karyawan->pel_gaji }}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Id User</label>
            <input type="text" name="pel_id_user" class="form-control" style="width: 25% !important;"
                value="{{ $karyawan->pel_id_user }}">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Status</label>
            <select name="pel_aktif" class="form-control" class="form-control" style="width: 25% !important;">
                <option value="">--Pilih Status--</option>
                <option value="Y" @if($karyawan->pel_aktif == "Y") selected @endif>Aktif</option>
                <option value="N" @if($karyawan->pel_aktif == "N") selected @endif>Non Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Alamat</label>
            <textarea name="pel_alamat" rows="3" class="form-control" class="form-control"
                style="width: 25% !important;">{{ $karyawan->pel_alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Update</button>
    </form>