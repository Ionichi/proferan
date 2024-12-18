@extends('templates.main')
@section('title')
    Dashboard    
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 justify-content-center align-items-center">
                <div class="authentication-bg">
                    <div class="mt-5 mb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122"
                                            height="122" viewBox="0 0 122 122">
                                            <defs>
                                                <path id="gear"
                                                    d="M72,52.4v-8.8l-5.4-0.9c-0.4-1.5-1-2.9-1.7-4.1l3.2-4.4l-6.2-6.3L57.4,31c-1.3-0.7-2.7-1.3-4.1-1.7L52.4,24h-8.8l-0.9,5.4  c-1.5,0.4-2.8,1-4.1,1.7L34.2,28l-6.3,6.2l3.2,4.4c-0.7,1.3-1.3,2.7-1.7,4.2L24,43.6v8.8l5.4,0.9c0.4,1.5,1,2.8,1.7,4.1l-3.2,4.5  l6.2,6.2l4.5-3.2c1.3,0.7,2.7,1.3,4.2,1.7l0.9,5.3h8.8l0.9-5.4c1.4-0.4,2.8-1,4.1-1.7l4.5,3.2l6.2-6.2l-3.2-4.5  c0.7-1.3,1.3-2.6,1.7-4.1L72,52.4z M48,57.2c-5.1,0-9.2-4.1-9.2-9.2c0-5.1,4.2-9.2,9.2-9.2s9.2,4.1,9.2,9.2S53.1,57.2,48,57.2z" />
                                            </defs>
                                            <g transform="scale(0.77)">
                                                <use xlink:href="#gear" fill="#5b69bc">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="0 48 48" to="360 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                            <g transform="scale(0.6) translate(83 13)">
                                                <use xlink:href="#gear" fill="#10c469">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="360 48 48" to="0 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                            <g transform="scale(0.435) translate(37 139)">
                                                <use xlink:href="#gear" fill="#f9c851">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="360 48 48" to="0 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                            <g transform="scale(0.935) translate(36 39)">
                                                <use xlink:href="#gear" fill="#ff8acc">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="0 48 48" to="360 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                        </svg> --}}
                                        @php
                                            $pengguna = App\Models\User::count();
                                            $berita = App\Models\Berita::count();
                                        @endphp
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="card-body">
                                                        <img src="{{ asset('assets/images/user_list.svg') }}" class="card-img-top" style="width: 50%;" alt="User list">
                                                            <h2 class="card-title mt-2">Total Pengguna</h2>
                                                            <h1 class="card-text">{{ $pengguna }}</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card"><div class="d-flex justify-content-center">
                                                    <div class="card-body">
                                                    <img src="{{ asset('assets/images/news.svg') }}" class="card-img-top" style="width: 50%;" alt="Berita">
                                                        <h2 class="card-title mt-2">Total Berita</h2>
                                                        <h1 class="card-text">{{ $berita }}</h1>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!--Morris Chart-->
    {{-- <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script> --}}

    <!-- Dashboard init js-->
    {{-- <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}
@endsection