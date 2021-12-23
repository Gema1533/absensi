@extends('layouts.masterAdmin')
     
@section('content')





    <div class="row justify-content-center ">
        <div class="col-md-10 col-md-12">
           
                <div class="card"></div>

                  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary rounded ">
                  <div class="container-fluid">
                    <a class="navbar-brand" >Cari Pengguna</a>
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














    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Pengguna</h2>
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
            <th>Nama </th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($penggunass as
         $users)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
                 <form action="{{ route('pengguna!.destroy',$users->id) }}" method="POST">
        
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> 
            </td>
        </tr>
        @endforeach
    </table>

    {!! $penggunass->links() !!}
        
@endsection