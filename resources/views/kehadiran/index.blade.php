@extends('layouts.masterAdmin')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: black">
                <strong>Absensi Harian</strong></h2>
            </div>

            <div class="pull-right">
                <tr>           
                    <td><a class="btn btn-success" href="{{ route('kehadiran.create') }}">Absen</a></td>
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

<div style="position: fixed " class="mt-1" >  
@if ($message = Session::get('success'))
        <div class="alert btn-success">
            <p>{{ $message }}</p>
        </div>
    @endif
</div>


<div class="mt-1"></div>
 <div class="row mt-5 justify-content-center   " >
        <div class="col-md-10 col-md-12 " >
           
              
                  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary rounded ">
                  <div class="container-fluid ">
                    <a class="navbar-brand" >Cari Siswa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                        

                        <li class="nav-item dropdown">
                          <ul id="menuNavbar" class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </div>
                          </ul>
                        </li>
                      </ul>

                      <form class="d-flex ml-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success  ml-2 "  type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                </nav>
                            
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif              
              </div>     
        </div>
    </div>

  
    <table class="table table-bordered ml-3" style="color: black;">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Pembimbing</th>
            <th>Jam Absen</th>
            <th>Keterangan</th>
            <th>action</th>

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
                <form action="{{ route('kehadiran.destroy',$absen->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('kehadiran.edit',$absen->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button  type="submit" class="btn btn-danger" >Delete</button>
                </form> 
            </td>
        </tr>
        @endforeach
    </table>

    {!! $absens->links() !!}
        
@endsection