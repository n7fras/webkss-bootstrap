@extends('layout.app')

@section('content')
<div id="layoutSidenav_content" >
    <main class="">
        <div class="container-fluid ">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Peserta UKT</li>
            </ol>
            <div class="row justify-content-center">
                <!-- Kartu Total Peserta -->
                <div class="card-container" style="width: 300px; margin-right: 30px; margin-left: 50px;">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Peserta</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <h3 class="text-center fs-1">200</h3>
                        </div>
                    </div>
                </div>
            
                <!-- Kartu Laki-Laki -->
                <div class="card-container" style="width: 300px; margin-right: 30px;">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">Laki-Laki</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <h3 class="text-center fs-1">200</h3>
                        </div>
                    </div>
                </div>
                {{-- Kartu Perempuan --}}
                <div class="card-container" style="width: 300px;">
                    <div class="card  bg-danger text-white mb-4">
                        <div class="card-body">Perempuan</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <h3 class="text-center fs-1">200</h3>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         <div class="container-fluid px-4">
            <h1 class="mt-4">Peserta UKT</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Unit</li>
            </ol>
            
            <div class="row justify-content-center">
                <!-- Kartu Total Peserta -->
                <div class="card-container" style="width: 300px; margin-right: 30px; margin-left: 50px;">
                    <div class="card bg-green-500 text-white mb-4">
                        <div class="card-body">MI At-Taubah</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <h3 class="text-center fs-1">200</h3>
                        </div>
                    </div>
                </div>
            
                <!-- Kartu Laki-Laki -->
                <div class="card-container" style="width: 300px; margin-right: 30px;">
                    <div class="card bg-indigo-800 text-white mb-4">
                        <div class="card-body">MI  Az-Zuhriah</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <h3 class="text-center fs-1">200</h3>
                        </div>
                    </div>
                </div>
                {{-- Kartu Perempuan --}}
                <div class="card-container" style="width: 300px;">
                    <div class="card  bg-sky-900 text-white mb-4">
                        <div class="card-body">MI Nurul Anwar</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <h3 class="text-center fs-1">200</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </main>
    
</div>

@endsection

