@extends('posyandu.app')

@section('content')

 <h1>Data Ibu Hamil</h1>
 <a href="{{url('/posyandu/create')}}" class="btn btn-success">Tambah Data</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>No</th>
         <th>Nama Ibu</th>
         <th>Alamat</th>
         <th>No HP</th>
         <th>Pekerjaan</th>
         <th colspan="3">Aksi</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($ibu as $ibus)
         <tr>
             <td>{{ $ibus->no }}</td>
             <td>{{ $ibus->nama_lengkap }}</td>
             <td>{{ $ibus->alamat_lengkap }}</td>
             <td>{{ $ibus->no_hp }}</td>
             <td>{{ $ibus->pekerjaan }}</td>
             <td><a href="{{url('posyandu',$ibus->no)}}" class="btn btn-primary">Lihat</a></td>
             <td><a href="{{route('posyandu.edit',$ibus->no)}}" class="btn btn-warning">Perbarui</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['posyandu.destroy', $ibus->no]]) !!}
             {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection