@extends('layouts.masterAdmin')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mapels.index') }}"> Back</a>
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
        
    <form action="{{ route('mapels.update',$mapel->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Mapel</strong>
                    <input type="text" name="nama_mapel" class="form-control" placeholder="Mapel | Example : B. Indonesia" value="{{$mapel->nama_mapel}}">
                </div>
                <div class="form-group">
                    <strong>Kelas Mapel</strong>
                    <input type="text" name="kelas_mapel" class="form-control" placeholder="Kelas Mapel | Example : X/XI/XII" value="{{$mapel->kelas_mapel}}">
                </div>
                <div class="form-group">
                    <strong>guru Mapel</strong>
                    <input type="text" name="guru_mapel" class="form-control" placeholder="Kelas Mapel | Example : X/XI/XII" value="{{$mapel->guru_mapel}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection