@extends('layouts.masterAdmin')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add new</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kehadiran.index') }}"> Back</a>
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
        
    <form action="{{ route('kehadiran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                    <strong>Nis</strong>
                    <input type="text" name="nis" class="form-control" placeholder="NIS | example : 01927143">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rombel</strong>
                    <select class="form-control" name="rombel">
                        @foreach($rombels as $rombel)
                        <option value="{{$rombel->rombel}}">{{$rombel->rombel}}</option>
                        @endforeach
                    </select>            
                </div>
            </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rayon</strong>
                    <select class="form-control" name="rayon">
                        @foreach($rayons as $rayon)
                        <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>
                        @endforeach
                    </select>            
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pembimbing</strong>
                    <select class="form-control" name="pembimbing">
                        @foreach($rayons as $rayon)
                        <option value="{{$rayon->pembimbing}}">{{$rayon->pembimbing}}</option>
                        @endforeach
                    </select>            
                </div>
            </div>    
              
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan</strong>
                    <input type="radio" name="ket" value="Masuk">Masuk
                    <input type="radio" name="ket" value="Sakit">Sakit
                    <input type="radio" name="ket" value="Izin">Izin
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection