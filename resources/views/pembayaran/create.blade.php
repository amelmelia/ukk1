@extends('template.master')

@section('judul')
    <h1>Tambah Pembayaran</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
              <form action="{{ route('pembayaran.store', $siswas->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input_nis">NamaSiswa</label>
                    <input type="tex" class="form-control" id="inputnis" value="{{$siswas->nama }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="input_nis">tgl_bayar</label>
                    <input type="date" name="tgl_bayar" class="form-control" id="inputnis">
                  </div>
                  <div class="form-group">
                  <label>Bulan bayar</label>
                <select class="form-control" name="bulan_bayar" id="bulan_dibayar" >
                    <option disabled selected>-Pilih bulan-</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="mei">Mei</option>
                    <option value="juni">Juni</option>
                 </select>
                  </div>
                   <div class="form-group">
                  <label>Tahun Pembayaran</label>
                <select class="form-control" name="tahun_dibayar" id="kelas_id" >
                    <option disable selected> --Silahkan Pilih Tahun-- </option>
                  @forelse( $spps as $spp)
                    <option value="{{ $spp->tahun }}">{{ $spp->tahun }}</option>
                  @empty
                    <option value="" disabled>Data Masih Kosong</option>
                  @endforelse
                </select>
                  
                  </div>
                  <div class="form-group">
                    <label for="inputno_telp">jumlah dibayar</label>
                    <input type="number" name="jumlah_dibayar" class="form-control" id="inputno_telp">
                  </div>
                 
                 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              </form>
            </div>
@endsection