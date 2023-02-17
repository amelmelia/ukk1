@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/siswa" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NISN</label>
                    <input type="number" value="{{ old('nisn') }}" name="nisn" class="form-control" id="input nisn" placeholder="Silahkan Masukan Nisn">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIS</label>
                    <input type="number" value="{{ old('nis') }}" name="nis" class="form-control" id="input nis" placeholder="Silahkan Masukan Nis">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" value="{{ old('nama') }}" name="nama" class="form-control" id="input nama" placeholder="Silahkan Masukan Nama">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" value="{{ old('alamat') }}" name="alamat" class="form-control" id="input alamat" placeholder="Silahkan Masukan Alamat">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No_Telp</label>
                    <input type="number" value="{{ old('no_telp') }}" name="no_telp" class="form-control" id="input no telp" placeholder="Enter No Telp">
                </div>
                  <div class="form-group">
                  <label>Nama Kelas</label>
                <select class="form-control" name="kelas_id" id="kelas_id">
                 <option disable selected> --Silahkan Pilih Kelas-- </option>
                 <option value="XII">XII RPL 1</option>
                 <option value="XII">XII RPL 2</option>
                 <option value="XII">XII RPL 3</option>
                </select>
                  </div>
                  <div class="form-group">
                  <label>Jumlah Nominal</label>
                <select class="form-control" name="spps_id" id="spps_id">
                 <option disabled selected>Silahkan Pilih Nominal</option>
                 <option value="2jt">2000000</option>
                 <option value="3jt">300000</option>
                 <option value="4jt">4000000</option>
                 </select>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection