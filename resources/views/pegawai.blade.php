@extends('layout.main')
@section('content')

  <style>

    form {
    padding: 25px;
    margin: 25px;
    box-shadow: 0 2px 5px #f5f5f5; 
    background: #f5f5f5; 
    }


  </style>


    <form>
        <h1>Pegawai</h1>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gaji">Gaji:</label>
            <input type="text" name="gaji" id="gaji" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pendidikan">Pendidikan:</label>
            <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection