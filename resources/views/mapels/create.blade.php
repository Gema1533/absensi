@extends('layouts.masterAdmin')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add new</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('mapels.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('mapels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama mapel</strong>
                    <input type="text" name="nama_mapel" class="form-control" placeholder="Mapel | Example : B. Indonesia">
                </div>
                <div class="form-group">
                    <strong>Kelas mapel</strong>
                    <input type="text" name="kelas_mapel" class="form-control" placeholder="Kelas Mapel | Example : X/XI/XII">
                </div>
                <div class="form-group">
                    <strong>Guru mapel</strong>
                    <input type="text" name="guru_mapel" class="form-control" placeholder="Guru Mapel | Example : Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection