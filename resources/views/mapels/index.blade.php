@extends('layouts.masterAdmin')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: black">
                <strong>Data Mapel</strong></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mapels.create') }}">Tambahkan Mepel</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Mapel</th>
            <th>kelas Mapel</th>
            <th>Guru Mapel</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mapels as $mapel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mapel->nama_mapel}}</td>
            <td>{{ $mapel->kelas_mapel}}</td>
            <td>{{ $mapel->guru_mapel}}</td>
            <td>
                <form action="{{ route('mapels.destroy',$mapel->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('mapels.edit',$mapel->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $mapels->links() !!}
        
@endsection