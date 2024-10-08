@extends('layout.app')
@section('content')
<div id="layoutSidenav_content" class="w-screen">
    <main>
        <div class="container-fluid">
            <!-- Judul Form -->
            <a href="{{ route('home') }}" class="text-gray-500 text-xl ml-4 mb-4 inline-block mt-8">← Kembali</a>
            <h2 class="text-2xl font-bold mb-5">Pendaftaran</h2>

            <!-- Card Form -->
            <div class="card bg-white p-4 ml-8 mr-8">
                <!-- Form -->
                <form action="" method="POST" class="space-y-6">
                    <div class="flex flex-wrap -mx-4"> <!-- Flex container -->
                        <div class="w-1/2 px-4"> <!-- Kolom kiri -->
                            <div class="relative mb-4">
                                <label for="nama" class="form-label font-semibold">Nama Peserta</label>
                                <input type="text" class="form-control w-full" id="nama" placeholder="Nama Peserta" required>
                            </div>

                            <div class="relative mb-4">
                                <label for="asalsekolah" class="form-label font-semibold">Asal Sekolah</label>
                                <select class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300" id="asalsekolah" required>
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="MIAT">MIAT</option>
                                    <option value="MINA">MINA</option>
                                    <option value="MIAZ">MIAZ</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="relative mb-4">
                                <label for="kelas" class="form-label font-semibold">Kelas</label>
                                <select class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300 " id="kelas" required>
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>

                            <div class="relative mb-4">
                                <label for="email" class="form-label font-semibold">Jenis Kelamin</label>
                                <select class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300" id="email" required>
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Laki-Laki</option>
                                    <option value="Wanita">Perempuan</option>
                                    
                                </select>
                            </div>
                            <div class="relative mb-4">
                                <label for="kelas" class="form-label font-semibold">Izin menginap</label>
                                <select class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300 " id="kelas" required>
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="3">Ya</option>
                                    <option value="4">Tidak</option>
                                 
                                </select>
                            </div>
                        </div>

                        <div class="w-1/2 px-4"> <!-- Kolom kanan -->
                            <div class="relative mb-4">
                                <label for="nohp" class="form-label font-semibold">Nomor HP Orang Tua/Wali</label>
                                <input type="text" name="nohp" placeholder="No. Handphone" class="form-control w-full" id="nohp" >
                            </div>

                            <div class="relative mb-4">
                                <label for="status" class="form-label font-semibold">Status Peserta</label>
                                <select class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300" id="status" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="Reguler">Reguler</option>
                                    <option value="YTP">YTP</option>
                                    <option value="ANG">ANG</option>
                                </select>
                            </div>

                            <div class="relative mb-4">
                                <label for="payment" class="form-label font-semibold ">Nominal Bayar</label>
                                <input type="number" class="form-control w-full" id="payment" required>
                            </div>

                            <div class="relative mb-4">
                                <label for="statuspayment" class="form-label font-semibold ">Status Pembayaran</label>
                                <select name="statuspayment" id="statuspayment" class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300">
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </div>
                            <div class="relative mb-4">
                                <label for="kelas" class="form-label font-semibold">Naik ke sabuk</label>
                                <select class="form-control w-full bg-gray-200 appearance-none px-4 py-2 border border-gray-300 " id="kelas" required>
                                    <option value="" disabled selected>Pilih Sabuk</option>
                                    <option value="3">Kuning</option>
                                    <option value="4">Hijau</option>
                                    <option value="5">Oren</option>
                                    <option value="6">Oren Kujang 1</option>
                                    <option value="7">Oren Kujang 2</option>
                                    <option value="8">Silver</option>
                                    <option value="9">Silver Kujang 1</option>
                                </select>
                            </div>
                         
                        </div>
                        
                    </div>

                    

                    <!-- Tombol Simpan -->
                    <div class="w-full text-center mt-6">
                        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded w-full font-bold">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
