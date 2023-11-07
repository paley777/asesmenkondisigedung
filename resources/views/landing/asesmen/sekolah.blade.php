@extends('templates.layouts.landing')

@section('container')
    <style>
        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .full-width-image {
            margin-bottom: 10px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Membuat 3 kolom */
            gap: 5px;
            /* Jarak antar gambar */
        }

        .image-item {
            text-align: center;
            /* Mengatur gambar menjadi tengah */
        }
    </style>
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
                        </svg></a> / <a href="/asesmen">Asesmen</a> / {{ $nama_kec }} / {{ $call }}
                </div>
            </div>
            <h2 style="color:#24285b;"><b>Penilaian Kerusakan Gedung Sekolah</b></h2>
            <hr style="border: 1px solid #24285b;
            border-radius: 5px;">
            <p><b>{{ $call }}</b></p>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active" data-bs-toggle="tab">Data Teknis Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" class="nav-link" data-bs-toggle="tab">Tabel Tingkat Kerusakan</a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages" class="nav-link" data-bs-toggle="tab">Pemetaan 3D</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home">
                            <h5 class="card-title">Data Teknis Sekolah</h5>
                            <p class="card-text">{!! $sekolah->data_teknis !!}</p>
                            @php
                                $gambarSekolah = $sekolah->gambar;
                                $count = $gambarSekolah->count();
                            @endphp

                            @if ($count > 0)
                                @for ($i = 0; $i < $count; $i += 3)
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    @for ($j = $i; $j < $count && $j < $i + 3; $j++)
                                                        <div class="col-md-4">
                                                            <img src="{{ URL::asset($gambarSekolah[$j]->file) }}"
                                                                class="img-fluid">
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                          
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h5 class="card-title">Tabel Tingkat Kerusakan</h5>
                            <div class="table-responsive">
                                <p class="card-text">{!! $sekolah->tabel !!}</p>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="messages">
                            <h5 class="card-title">Pemetaan 3D</h5>
                            <div class="image-container">
                                @if ($sekolah->peta->isNotEmpty())
                                    <img src="{{ URL::asset($sekolah->peta->first()->file) }}" class="img-fluid"
                                        width="800">
                                @endif
                                @if ($sekolah->peta->count() > 1)
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    @php
                                                        $petaCount = $sekolah->peta->count();
                                                        $startIndex = 1;
                                                    @endphp
                                                    @for ($i = 0; $i < $petaCount && $startIndex < $petaCount; $i++)
                                                        <div class="col-md-4 g-2">
                                                            <img src="{{ URL::asset($sekolah->peta[$startIndex]->file) }}"
                                                                class="img-fluid">
                                                            @php $startIndex++; @endphp
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
@endsection
