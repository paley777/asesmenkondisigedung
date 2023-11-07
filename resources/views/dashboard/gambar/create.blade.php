@extends('templates.layouts.main')

@section('container')
    <section class="py-5 py-xl-5  mt-5" style="margin-top: 2vw;">
        <div class="container">
            <div class="card text-bg-light mb-3 mt-5">
                <div class="card-body">
                    <a href="/dashboard">
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
                        </svg></a> / Olah Data
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h2 style="color:#24285b;"><b>Foto Penelitian</b></h2>
                </div>
                <hr style="border: 1px solid #24285b;border-radius: 5px;">
                <form class="row g-2" method="post" action="/dashboard/gambar" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 position-relative">
                        <label for="validationCustom01" class="form-label ">Nama Sekolah<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="id_sekolah" required>
                            <option selected value="">Pilih Sekolah</option>
                            @foreach ($sekolahs as $sekolah)
                                <option value="{{ $sekolah->id }}">{{ $sekolah->nama_sekolah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-9 position-relative">
                        <label for="validationCustom01" class="form-label ">Foto Penelitian<span
                                class="text-danger">*</span></label>
                        <input type="file" id="validationCustom01" class="form-control" name="file" accept="image/*"
                            placeholder="Isi Foto Penelitian" onchange="showPreview(event);" id="file-ip-1" required>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="validationCustom01" class="form-label">Preview Thumbnail<span
                                class="text-danger">*</span></label>
                        <div class="preview">
                            <img id="file-ip-1-preview" style="max-width: 150px; height:auto;">
                        </div>
                    </div>
                    <p>
                        (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                    </p>
                    <button class="btn btn-primary" type="submit">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M20 4L3 9.31372L10.5 13.5M20 4L14.5 21L10.5 13.5M20 4L10.5 13.5" stroke="#ffffff"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg> Simpan Data
                    </button>
                </form>
            </div>
    </section>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
