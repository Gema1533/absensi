@extends('layouts.masterPengguna')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: black">
                <strong>Absensi Harian</strong></h2>
            </div>

            <div class="pull-right">
                <tr>           
                    <td><a class="btn btn-success" href="{{ route('absens.create') }}">Absen</a></td>
                    <td>
                         <a class="btn btn-primary"  href="#" data-toggle="collapse" data-target="#collapseTwwo" aria-expanded="true" aria-controls="collapseTwo">
                          <span>Lihat Data Berdasarkan</span>
                        </a>
                        <div id="collapseTwwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                          <div class=" py-2 rounded">  
                            <a class="btn btn-danger" href="{{ url('#') }}">Rombel</a>  
                            <a class="btn btn-danger" href="{{ url('#') }}">Rayon</a>  
                            <a class="btn btn-danger" href="{{ url('#') }}">Hari > Rombel</a>  
                            <a class="btn btn-danger" href="{{ url('#') }}">Hari > Rayon</a>  
                          </div>
                    </td>
                </tr>       
            </div>

        </div>
    </div>
    <br>
 

     
    <table class="table table-bordered" style="color: black">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Pembimbing</th>
            <th>Jam Absen</th>
            <th>Keterangan</th>

        </tr>
        @foreach ($absens as $absen)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $absen->nis }}</td>
            <td>{{ $absen->nama }}</td>
            <td>{{ $absen->rombel }}</td>
            <td>{{ $absen->rayon }}</td>
            <td>{{ $absen->pembimbing }}</td>
            <td>{{ $absen->created_at }}</td>
            <td>{{ $absen->ket }}</td>
            <td>
               <!--- <form action="{{ route('absens.destroy',$absen->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('absens.edit',$absen->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> !--->
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $absens->links() !!}
        
@endsection