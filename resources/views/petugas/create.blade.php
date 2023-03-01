@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/petugas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="input_nisn">Username</label>
                    <input type="text" name="username" class="form-control"  placeholder="Silahkan Masukan Nisn">
                  </div>
                  <div class="form-group">
                    <label for="input_nis">Password</label>
                    <input type="text" name="password" class="form-control" id="input_nis" placeholder="Silahkan Masukan Nis">
                </div>
                  <div class="form-group">
                    <label for="input_nama">Nama_Petugas</label>
                    <input type="text"  name="nama_petugas" class="form-control" id="input_nama" placeholder="Silahkan Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="text"  name="password" class="form-control" id="password" placeholder="Silahkan Masukan Password">
                </div>
                  <div class="form-group">
                  <label>Nama level</label>
                <select class="form-control" name="level" id="level">
                    <option disable selected> -- Pilih level-- </option>
                    <option>Petugas</option>
                </select>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>   
              </form>
            </div>
            <!-- /.card -->
@endsection