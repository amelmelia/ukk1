@extends('template.master')

@section('judul')
    <h1>Index siswa</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">Data Siswa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="student/create" class="btn btn-primary">
          <i class="fas fa-plus"></i>
           Tambah
        </a>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>nisn</th>
          <th>nis</th>
          <th>nama</th>
          <th>alamat</th>
          <th>no_tlp</th>
          <th>kelas_id</th>
          <th>spps_id</th>
        </tr>
        </thead>
        <tbody>
          @forelse($siswas as $siswas)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $siswas->nama }}</td>
          <td>{{ $siswas->alamat }}</td>
          <td>{{ $siswas->tlp }}</td>
          <td>
          <form action="{{ route ('siswa.destroy', [$siswas->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="siswa/{{$siswas->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="siswa/{{$siswas->id}}/edit">Edit</a>
            @csrf
            @method('DELETE')
           <input type="submit" class="btn btn-danger" value="Delete">
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <!-- /.card-body -->
  
@endsection

@push('scripts')
<script src="{{ asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
     $('#data-siswa').DataSiswa();
        
      $('#example2').DataSiswa({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endpush