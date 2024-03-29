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
    <h1>Pendidikan</h1>
    <div class="form-group">
        <label for="tingkat">Tingkat Pendidikan:</label>
        <select name="tingkat" id="tingkat" class="form-control" required>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA/SMK">SMA/SMK</option>
            <option value="Diploma">Diploma</option>
            <option value="Sarjana">Sarjana</option>
            <option value="Magister">Magister</option>
            <option value="Doktor">Doktor</option>
        </select>
    </div>

    <div class="form-group">
        <label for="institusi">Institusi:</label>
        <input type="text" name="institusi" id="institusi" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tahun_masuk">Tahun Masuk:</label>
        <input type="text" name="tahun_masuk" id="tahun_masuk" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tahun_lulus">Tahun Lulus:</label>
        <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection