@extends('templates.layouts.main')

@section('container')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
            <h2 style="color:#24285b;"><b>Data Teknis Sekolah</b></h2>
            <hr style="border: 1px solid #24285b;
        border-radius: 5px;">
            <div class="table-responsive p-4">
                <table id="example1" class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">No.</th>
                            <th class="cell">Nama Kecamatan</th>
                            <th class="cell">Nama Sekolah</th>
                            <th class="cell">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sekolahs as $key => $sekolah)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sekolah->nama_kec }}</td>
                                <td>{{ $sekolah->nama_sekolah }}</td>
                                <td>
                                    <a href="/dashboard/sekolah/{{ $sekolah->id }}/edit"
                                        class="btn btn-sm btn-warning"><svg width="16px" height="16px"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title></title>
                                                <g id="Complete">
                                                    <g id="edit">
                                                        <g>
                                                            <path
                                                                d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8"
                                                                fill="none" stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"></path>
                                                            <polygon fill="none"
                                                                points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8"
                                                                stroke="#000000" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"></polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg> Ubah Data
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!--//table-responsive-->
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
