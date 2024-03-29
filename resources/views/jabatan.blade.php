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
  <h1>Jabatan</h1>
    <div class="form-group">
        <label for="nama">Nama Jabatan:</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection