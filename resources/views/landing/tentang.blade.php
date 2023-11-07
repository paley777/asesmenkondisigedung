@extends('templates.layouts.landing')

@section('container')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <section class="py-5 py-xl-5  mt-5" style="margin-top: 2vw;">
        <div class="container">
            <div class="card text-bg-light mb-3 mt-5">
                <div class="card-body">
                    <a href="/">
                        <svg fill="#000000" width="18px" height="18px" viewBox="-4.5 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>home</title>
                                <path
                                    d="M19.469 12.594l3.625 3.313c0.438 0.406 0.313 0.719-0.281 0.719h-2.719v8.656c0 0.594-0.5 1.125-1.094 1.125h-4.719v-6.063c0-0.594-0.531-1.125-1.125-1.125h-2.969c-0.594 0-1.125 0.531-1.125 1.125v6.063h-4.719c-0.594 0-1.125-0.531-1.125-1.125v-8.656h-2.688c-0.594 0-0.719-0.313-0.281-0.719l10.594-9.625c0.438-0.406 1.188-0.406 1.656 0l2.406 2.156v-1.719c0-0.594 0.531-1.125 1.125-1.125h2.344c0.594 0 1.094 0.531 1.094 1.125v5.875z">
                                </path>
                            </g>
                        </svg></a> / Tentang
                </div>
            </div>
            <h2 style="color:#24285b;"><b>Tentang</b></h2>
            <hr style="border: 1px solid #24285b;
            border-radius: 5px;">
            <table class="table table-primary table-striped">
                <tr>
                    <td style="width: 20%;">Nama Tim Penelitian</td>
                    <td>:</td>
                    <td>Tim Penelitian Asesmen Kondisi Bangunan Gedung</td>
                </tr>
                <tr>
                    <td>Afiliasi</td>
                    <td>:</td>
                    <td>Fakultas Teknik, Universitas Bengkulu</td>
                </tr>
                <tr>
                    <td>Latar Belakang</td>
                    <td>:</td>
                    <td>Pemeliharaan bangunan gedung adalah aspek kritis dalam memastikan berfungsinya sarana dan prasarana
                        pada suatu gedung.</td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td>Tim penelitian ini didirikan dengan tujuan utama untuk mengkaji dan memahami kondisi fisik dan
                        fungsional bangunan gedung. Kami berkomitmen untuk menyediakan informasi yang akurat dan relevan
                        untuk pemeliharaan, perbaikan, dan pengembangan bangunan gedung, serta memastikan keselamatan dan
                        kenyamanan pengguna bangunan.</td>
                </tr>
                <tr>
                    <td style="width: 20%;">Keanggotaan</td>
                    <td>:</td>
                    <td>
                        <ul>
                            <li>Ir. Annisa Fitria Edriani, S.T, M.EngSt - Dosen Fakultas Teknik – Universitas Bengkulu</li>
                            <li>Ir. Fepy Supriani, S.T, M.T - Dosen Fakultas Teknik – Universitas Bengkulu</li>
                            <li>Putri Novana Anugrah, S.T – Alumnus Teknik Sipil – Universitas Bengkulu</li>
                            <li>Abdul Hamid - Mahasiswa Teknik Sipil – Universitas Bengkulu</li>
                            <li>Sella Oktaviani - Mahasiswa Teknik Sipil – Universitas Bengkulu</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@endsection
