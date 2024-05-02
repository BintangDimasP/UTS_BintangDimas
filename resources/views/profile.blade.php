@extends('layout.app')
@section('content')
    <div class="container-sm mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>{{ $pageTitle }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mt-4">
                                <p class="card-text">Nama : Bintang Dimas Prawira Satya</p>
                                <p class="card-text">Tempat/Tgl lahir : Surabaya, 14-03-2004</p>
                                <p class="card-text">Jenis Kelamin : Laki-laki</p>
                                <p class="card-text">Alamat : JL. Muhammmad 28</p>
                                <p class="card-text">Agama  : Islam</p>
                                <p class="card-text">Status : Mahasiswa</p>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ Vite::asset('/resources/image/ktm.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
