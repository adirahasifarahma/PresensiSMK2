@extends('layouts.app')
@section('title', 'guru')
@section('content')
    @include('components.sidebar')
    <div style="padding: 20px">
        <div class="label">
            <div class="text-wrapper" style="color: #17A2B8">Data Guru</div>
        </div>
        <div class="ps-1 pt-0.5 justify-content-end align-items-center">
            <div class="col-md-25 row justify-content-center align-items-center">
                <div class="px-1 py-px bg-teal rounded-3 shadow col-xxl-12 row">
                    <div class="col-xxl-0 align-items-center d-flex">
                        <p class="text-dark fs-6 fw-medium font-family-Poppins m-0 px-3 py-2">No.</p>
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-2 m-0 px-3 py-2">Kode Guru</p>
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-2  m-0 px-3 py-2">Nama Lengkap</p>
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-1 m-0 px-3 py-2">TTL</p>
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-7 m-0 px-3 py-2">Jenis Kelamin</p>
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-6 m-0 px-3 py-2">Agama</p>
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-2 m-0 px-3 py-2">NIP</p>                
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-4 m-0 px-3 py-2">NUPTK</p>                        
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-3 m-0 px-3 py-2">Alamat</p>                      
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-5 m-0 px-3 py-2">No Telpon</p>                        
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-7 m-0 px-3 py-2">Email Sekolah</p>                      
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-7 m-0 px-3 py-2">Email Pribadi</p>                       
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-4 m-0 px-3 py-2">Division</p>                      
                        <p class="text-dark fs-6 fw-medium font-family-Poppins col-7 m-0 px-3 py-2">Action</p>
                    </div>
        </div>
    </div>
    
@endsection
