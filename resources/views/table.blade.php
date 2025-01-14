@extends('layout.app')
@section('content')
<div id="layoutSidenav_content" class="w-screen">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Peserta</th>
                            <th>Asal Sekolah</th>
                            <th>Kelas</th>
                            <th>Naik Ke Sabuk</th>
                            <th>Status Pembayaran</th>
                            <th>No.Hp Orang Tua</th>
                            <th>Izin Menginap</th>
                            <th >Edit</th>
                        </tr>

                    </thead>
                
                
            
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
