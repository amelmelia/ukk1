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
              <form action="/spp/{{ $spps->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Tahun</label>
                    <input type="number" name="tahun" class="form-control" id="inputTahun" placeholder="Enter Tahun" value="{{ $spps->tahun }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Nominal</label>
                    <input type="number" name="nominal" class="form-control" id="inputNominal" placeholder="Enter Nominal"  value="{{ $spps->nominal }}" require>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>

                </div>
              </form>
            </div>
@endsection