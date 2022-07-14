<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tambah Karyawan</title>
</head>

<body> <br>
    <form action="/karyawan/store" method="POST" style="margin-left:50px !important;">
        @csrf
        <h4>Tambah Data Karyawan</h4>
        <hr style="width: 25% !important;">

        <div class="mb-3">
            <label for="karyawan" class="form-label">Id Karyawan</label>
            <input type="text" class="form-control" name="pel_id_gol" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Nomor Karyawan</label>
            <input type="text" name="pel_no" class="form-control" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" name="pel_nama" class="form-control" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">No. Telepon/HP</label>
            <input type="text" name="pel_hp" class="form-control" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Jabatan</label>
            <input type="text" name="pel_jab" class="form-control" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Gaji</label>
            <input type="number" name="pel_gaji" class="form-control" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Id User</label>
            <input type="text" name="pel_id_user" class="form-control" style="width: 25% !important;">
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Status</label>
            <select name="pel_aktif" class="form-control" class="form-control" style="width: 25% !important;">
                <option value="">--Pilih Status--</option>
                <option value="Y">Aktif</option>
                <option value="N">Non Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="karyawan" class="form-label">Alamat</label>
            <textarea name="pel_alamat" rows="3" class="form-control" class="form-control"
                style="width: 25% !important;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </form>
    <br> <br>
</body>

</html>