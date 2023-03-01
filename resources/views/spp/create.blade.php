@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Spp</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('spp.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="number" value="{{ old('tahun') }}" name="tahun" class="form-control" id="exampleInputEmail1" placeholder="Enter Tahun">
                  </div>
                    @error('tahun')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nominal</label>
                    <input type="number" value="{{ old('nominal') }}" name="nominal" class="form-control" id="exampleInputPassword1" placeholder="Enter Nominal">
                </div>
                    @error('nominal')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection