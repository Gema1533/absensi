@extends('layouts.master')

@section('content')


    <div class="row justify-content-center ">
        <div class="col-md-10 col-md-12">
           
                <div class="card"></div>

                  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary ">
                  <div class="container-fluid">
                    <a class="navbar-brand" >Daftar Siswa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Urutkan berdasarkan</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-target="#menuNavbar" href="#" data-bs-toggle="dropdown" aria-expanded="true" aria-controls="menuNavbar">
                            pilih
                          </a>
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
                        <button class="btn btn-outline-success  ml-2 "  type="submit">Search</button>
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


    <strong>Note : untuk mengakses admin, ganti role database menjadi admin di table users kolom role</strong>

@endsection
