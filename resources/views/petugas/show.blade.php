@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputnama_petugas">Nama Petugas</label>
                    <input type="text" class="form-control"  value="{{ $petugas->nama_petugas }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="" class="form-control"  value="{{ $petugas->username }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="Level">Level</label>
                    <input type="" class="form-control"  value="{{ $petugas->level}}" disabled>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/petugas">Back</a>
                </div>
              </form>
            </div>
@endsection