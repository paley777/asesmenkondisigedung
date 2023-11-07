@extends('templates.layouts.landing')

@section('container')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        .swiper {
            height: 400px;
        }
    </style>
    <section class="py-4 mt-5" style="margin-top: 2vw;">
        <div class="container py-4 py-xl-5 mt-5">
            <div class="row gy-4 gy-md-0">
                <div
                    class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div style="max-width: 500px;">
                        <h1 class="display-6 fw-bold mb-4" data-aos="fade-down">Asesmen Kondisi Bangunan Gedung&nbsp;<span
                                class="underline">Sekolah</span></h1>
                        <p data-aos="fade-right" class="my-4">Situs informasi hasil asesmen kondisi bangunan gedung
                            sekolah
                            dasar di
                            Kecamatan Teluk Segara dan Kecamatan Ratu Samban, Kota Bengkulu, Provinsi Bengkulu.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <svg width="350px" height="350px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M696.2 411.6C498.7 368.3 660.6 94.4 390 117.1s-527.2 645.8-46.8 791.7 727.9-414.9 353-497.2z"
                                    fill="#464BD8"></path>
                                <path d="M391.4 235.6l-98.6 501.9V235.6zM407 235.6L303.8 761l-11-2.2v-21.3l98.6-501.9z"
                                    fill="#2E2E42"></path>
                                <path d="M421.1 235.6l1.4 0.3L318.8 764l-15-3L407 235.6z" fill="#2D2D41"></path>
                                <path
                                    d="M318.831263 764.004291l103.752737-528.002821 15.012903 2.95004L333.844166 766.954332z"
                                    fill="#2D2D40"></path>
                                <path
                                    d="M333.78964 766.951693l103.752737-528.002821L452.55528 241.898912 348.802543 769.901734z"
                                    fill="#2C2C3F"></path>
                                <path
                                    d="M348.846315 769.916588l103.752736-528.002821L467.611954 244.863807 363.859218 772.866629z"
                                    fill="#2B2B3E"></path>
                                <path
                                    d="M363.805673 772.863183l103.752736-528.002821 15.012903 2.95004L378.818576 775.813224z"
                                    fill="#2A2A3D"></path>
                                <path
                                    d="M378.862174 775.829867l103.752736-528.002822 15.012903 2.950041L393.875077 778.779907z"
                                    fill="#2A2A3C"></path>
                                <path
                                    d="M393.820725 778.77548l103.752736-528.002821 15.012903 2.95004L408.833628 781.725521z"
                                    fill="#29293B"></path>
                                <path
                                    d="M408.780083 781.722075l103.752736-528.002822 15.012903 2.950041L423.792986 784.672116z"
                                    fill="#28283A"></path>
                                <path
                                    d="M423.855057 784.589654l103.752737-528.002822 15.012903 2.950041L438.86796 787.539694z"
                                    fill="#282839"></path>
                                <path
                                    d="M438.814416 787.536248l103.752736-528.002821 15.012903 2.95004L453.827319 790.486289z"
                                    fill="#272738"></path>
                                <path
                                    d="M453.871897 790.502125l103.752737-528.002822 15.012903 2.950041L468.8848 793.452165z"
                                    fill="#262637"></path>
                                <path
                                    d="M468.828486 793.449353l103.752736-528.002822 15.012903 2.950041L483.841389 796.399393z"
                                    fill="#252536"></path>
                                <path
                                    d="M483.885968 796.415229l103.752736-528.002822 15.012903 2.950041L498.898871 799.365269z"
                                    fill="#252534"></path>
                                <path
                                    d="M498.844519 799.360842l103.752736-528.002821 15.012903 2.95004L513.857422 802.310883z"
                                    fill="#242433"></path>
                                <path
                                    d="M513.902 802.326719l103.752737-528.002822 15.012903 2.950041L528.914903 805.276759z"
                                    fill="#232332"></path>
                                <path
                                    d="M528.860377 805.274121l103.752737-528.002822 15.012903 2.950041L543.87328 808.224161z"
                                    fill="#222231"></path>
                                <path
                                    d="M543.917052 808.239016l103.752736-528.002822 15.012903 2.950041L558.929955 811.189056z"
                                    fill="#222230"></path>
                                <path
                                    d="M558.875429 811.186418l103.752736-528.002822 15.012903 2.950041L573.888332 814.136458z"
                                    fill="#21212F"></path>
                                <path
                                    d="M573.932911 814.152294l103.752736-528.002822 15.012903 2.950041L588.945814 817.102334z"
                                    fill="#20202E"></path>
                                <path
                                    d="M588.891462 817.097907l103.752736-528.002821 15.012903 2.95004L603.904365 820.047948z"
                                    fill="#20202D"></path>
                                <path
                                    d="M603.947962 820.064591l103.752736-528.002822 15.012903 2.950041L618.960865 823.014631z"
                                    fill="#1F1F2C"></path>
                                <path
                                    d="M618.90732 823.011186l103.752737-528.002822L737.67296 297.958405 633.920223 825.961226z"
                                    fill="#1E1E2B"></path>
                                <path
                                    d="M633.964802 825.977062l103.752736-528.002822L752.730441 300.924281 648.977705 828.927102z"
                                    fill="#1D1D2A"></path>
                                <path d="M752.7 300.8l15 2.9-103.2 525.4h-14.1l-1.5-0.3z" fill="#1D1D29"></path>
                                <path d="M767.7 303.7l11 2.2v21.3l-98.6 501.9h-15.6zM680.1 829.1l98.6-501.9v501.9z"
                                    fill="#1C1C28"></path>
                                <path
                                    d="M646 807.5c-1.6 0-3.2-0.2-4.8-0.5l-307-60.3c-6.4-1.3-12-4.9-15.6-10.4-3.6-5.4-5-12-3.7-18.4l86.6-441c2.3-11.5 12.3-19.8 24-19.8 1.6 0 3.2 0.2 4.8 0.5l307 60.3c13.3 2.6 21.9 15.5 19.3 28.7l-86.6 441c-2.3 11.6-12.4 19.9-24 19.9z"
                                    fill="#FFFFFF"></path>
                                <path
                                    d="M646 807.5c-1.6 0-3.2-0.2-4.8-0.5l-307-60.3c-6.4-1.3-12-4.9-15.6-10.4-3.6-5.4-5-12-3.7-18.4l86.6-441c2.3-11.5 12.3-19.8 24-19.8 1.6 0 3.2 0.2 4.8 0.5l307 60.3c13.3 2.6 21.9 15.5 19.3 28.7l-86.6 441c-2.3 11.6-12.4 19.9-24 19.9z"
                                    fill="#FFFFFF"></path>
                                <path
                                    d="M640.2 793.7c-1.4 0-2.8-0.1-4.2-0.4l-269.8-53c-5.6-1.1-10.5-4.3-13.7-9.1-3.2-4.8-4.4-10.5-3.2-16.2l76.1-387.5c2-10.1 10.8-17.4 21.1-17.4 1.4 0 2.8 0.1 4.2 0.4l269.8 53c11.6 2.3 19.3 13.6 17 25.3l-76.1 387.5c-2.1 10.1-10.9 17.4-21.2 17.4z"
                                    fill="#2AEFC8"></path>
                                <path
                                    d="M674.4 274.5c1.4-2.7 2.6-5.6 3.2-8.8 3.6-17.8-8.1-35.1-25.9-38.6l-90.4-17.8c-17.8-3.5-35.1 8.1-38.6 25.9-0.6 3.1-0.6 6.1-0.4 9.1-24.4-3-45.2 4.5-48.4 21.2l234.2 47.6c3.2-16-11.6-31.6-33.7-38.6z"
                                    fill="#514DDF"></path>
                                <path
                                    d="M708.1 322.1c-0.6 0-1.2-0.1-1.8-0.2l-234.1-47.6c-4.8-1-7.9-5.7-7-10.5 3.6-18.6 22.6-30 48.6-29.1 0.1-0.4 0.1-0.8 0.2-1.3 4.4-22.6 26.5-37.4 49.1-33l90.4 17.8c11 2.2 20.5 8.5 26.7 17.8 6.2 9.3 8.4 20.4 6.2 31.3-0.1 0.6-0.3 1.2-0.4 1.9 21.9 9.9 34.4 27.8 30.9 45.6-0.5 2.3-1.8 4.4-3.8 5.7-1.5 1.1-3.3 1.6-5 1.6z m-220.4-62.8L697.9 302c-3.7-7.7-13.3-14.9-26.2-19-2.5-0.8-4.5-2.7-5.6-5.1-1-2.4-0.9-5.2 0.3-7.5 1.2-2.4 2-4.4 2.4-6.3 1.3-6.3 0-12.6-3.6-17.9-3.6-5.3-9-9-15.3-10.2l-90.4-17.8c-13-2.5-25.5 5.9-28.1 18.9-0.4 1.9-0.4 4-0.2 6.6 0.2 2.7-0.8 5.3-2.7 7.2-1.9 1.9-4.6 2.7-7.3 2.4-14.5-1.9-26.8 0.5-33.5 6z"
                                    fill="#29293A"></path>
                                <path
                                    d="M602 269.5c-8.3-1.6-13.6-9.6-12-17.9 1.6-8.3 9.6-13.6 17.9-12 8.3 1.6 13.6 9.6 12 17.9-1.7 8.3-9.7 13.6-17.9 12z"
                                    fill="#FFFFFF"></path>
                                <path
                                    d="M550.515 420.205l150.843 31.03-2.62 12.734-150.843-31.03zM428.579 445.695l262.8 54.062-2.62 12.734-262.8-54.063zM418.577 494.19l262.8 54.063-2.62 12.734-262.8-54.063zM408.596 542.589l262.8 54.062-2.62 12.734-262.8-54.063zM398.595 591.085l262.8 54.062-2.62 12.734-262.8-54.063zM388.009 642.725l188.651 38.81-2.62 12.733-188.65-38.81z"
                                    fill="#514DDF"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="text-center mt-0" data-aos="flip-up">
                <p class="mb-4" style="font-size: 1.6rem;">Penelitian ini bekerjasama dengan</p>
                <a href="#">
                    <img class="m-3" width="300px" src="images/logo_gray.png"></a>
            </div>
        </div>
    </section>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div
                class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div><img class="rounded img-fluid fit-cover" style="min-height: 300px;"
                        src="assets/img/illustrations/presentation.svg" width="800"></div>
            </div>
            <div class="col">
                <div style="max-width: 450px;">
                    <h3 class="fw-bold pb-md-4">Asesmen&nbsp;<span class="underline">dalam angka</span></h3>
                    <p class="text-muted py-4 py-md-0">Statistik asesmen kondisi bangunan gedung sekolah dalam penelitian
                        ini.</p>
                    <div class="row gy-4 row-cols-2 row-cols-md-2">
                        <div class="col">
                            <div><span class="fs-2 fw-bold text-primary bg-secondary">13</span>
                                <p class="fw-normal text-muted">Sekolah diasesmen</p>
                            </div>
                        </div>
                        <div class="col">
                            <div><span class="fs-2 fw-bold text-primary bg-secondary">2</span>
                                <p class="fw-normal text-muted">Kecamatan asal sekolah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold pb-md-4">Lihat hasil&nbsp;<span class="underline">asesmen</span></h3>
                </div>
                <div class="col-md-6 pt-4">
                    <p class="text-muted mb-4">Klik nama Sekolah Dasar untuk melihat hasil asesmen kondisi bangunan gedung.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                <div class="col-lg-12">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($sekolahs as $sekolah)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            @if ($sekolah->peta->isNotEmpty())
                                                <img src="{{ URL::asset($sekolah->peta->first()->file) }}"
                                                    class="img-fluid" style="width:300px;">
                                            @endif
                                            <h5 class="card-title">{{ $sekolah->nama_sekolah }}</h5>
                                            <p class="card-text">{!! Str::limit($sekolah->data_teknis, 50) !!}</p>
                                            <a href="/asesmen/sekolah/{{ $sekolah->id }}"
                                                class="btn btn-sm btn-warning stretched-link"><svg width="16px"
                                                    height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    fill="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <title></title>
                                                        <g id="Complete">
                                                            <g id="edit">
                                                                <g>
                                                                    <path
                                                                        d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8"
                                                                        fill="none" stroke="#000000"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"></path>
                                                                    <polygon fill="none"
                                                                        points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8"
                                                                        stroke="#000000" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2">
                                                                    </polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg> Lihat Asesmen
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-primary border rounded border-0 border-primary overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold mb-3">Tentang</h2>
                            <p class="mb-4">Lihat latar belakang, tujuan, keanggotaan penelitian serta kontak yang dapat
                                dihubungi.
                            </p>
                            <div class="my-3"><a class="btn btn-secondary me-2 mt-2" role="button"
                                    href="/tentang">Menuju Laman</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img
                            class="w-100 h-100 fit-contain pt-5 pt-md-0"
                            src="assets/img/illustrations/web-development.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 2,
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection
