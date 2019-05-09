@extends('layout')
@section('title')
Tambah
@endsection
@section('content')
<h1>Tambahkan Buku</h1>
<br>
<form method="post" action="{{ action('Post@create') }}"> {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul" name="judul">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Penerbit" name="penerbit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tahun Terbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun Terbit" name="tahun_terbit">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pengarang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Pengarang" name="pengarang">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection