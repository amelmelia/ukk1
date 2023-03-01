@extends('template.master')

@section('judul')
    <h1>Edit Data</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/petugas/{{ $petugas->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="input_nisn">Nama</label>
                    <input type="text" name="nama_petugas" class="form-control" id="inputnisn" value="{{ $petugas->nama_petugas }}" require>
                  </div>
                  <div class="form-group">
                    <label for="input_nisn">Username</label>
                    <input type="text" name="username" class="form-control" id="inputnisn" value="{{ $petugas->username }}" require>
                  </div>
                  <div class="form-group">
                    <label for="input_nisn">Level</label>
                    <select  type="text" name="level" class="form-control" id="inputnisn" require >
                        <option value="{{ $petugas->level }}" >{{ $petugas->level }}</option>
                        <option value="{{ $petugas->level }}" >petugas</option>
                        <option value="{{ $petugas->level }}" >admin</option>
                    </select>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
@endsection