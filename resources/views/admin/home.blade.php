@extends('admin.skeleton.master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Halo, <span class="text-capitalize">{{ Auth::user()->name }}</span></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">

            <div class="col-12">
                @if (session('error'))
                    <div class="alert alert-warning fade show" role="alert">
                        {!! session('error') !!}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header px-md-4 px-sm-1">

                        <div class="col-md-12 border-radius-10 bg-center bg-no-repeat bg-cover" data-background="{{ url('img/bg-9.jpg') }}">
                            <header class="fancy-title">
                                <h1 class="text-center text-white visible-lg visible-md">Selamat Datang di <br>Digital Creative
                                    Entrepreneurs!
                                </h1>
                                <h2 class="text-center text-white visible-sm visible-xs">Selamat Datang di <br>Digital Creative
                                    Entrepreneurs!
                                </h2>

                                <div class="col-md-3 offset-4 align-items-center text-center visible-md"
                                    style="display: flex !important">
                                    <div class="col-md-4 bb-fade-white-025 mx-4 visible-lg visible-md"
                                        style="border-color: red; border-width:4px"></div>
                                    <div class="col-md-2 bb-fade-white-025 mx-2 visible-lg visible-md"
                                        style="border-color: red; border-width:4px"></div>
                                    <div class="col-md-4 bb-fade-white-025 mx-4 visible-lg visible-md"
                                        style="border-color: red; border-width:4px"></div>
                                </div>
                            </header>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="col-md-12 text-center text-dark py-2">
                            <h2 class="">Silahkan pilih program kami yang ingin kamu ikuti</h2>
                        </div>
                        <div class="d-flex col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <article class="article article-style-b text-center text-dark">

                                    <div class="article-header" style="border-radius: 10px 10px 0 0">
                                        <div class="article-image" data-background="{{ url('img/img-head-0.jpg') }}">
                                        </div>
                                    </div>

                                    <div class="article-details" style="background: #f2f2f2">
                                        <header>
                                            <h4>Public Webinar</h4>
                                        </header>

                                        <h6 class="text-center">Menyajikan topik menarik seputar UMKM!</h6>
                                        <div class="article-cta text-center mt-20">
                                            <button
                                                class="btn btn-primary circle font-weight-bold pr-5 pl-5 registWebinar"
                                                id="registWebinar">Daftar <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </div>

                                    </div>

                                </article>
                            </div>

                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <article class="article article-style-b text-center text-dark">

                                    <div class="article-header" style="border-radius: 10px 10px 0 0">
                                        <div class="article-image" data-background="{{ url('img/img-head-0.jpg') }}">
                                        </div>
                                    </div>

                                    <div class="article-details" style="background: #f2f2f2">
                                        <header>
                                            <h4>E-Learning</h4>
                                        </header>

                                        <h6 class="text-center">Pelajari modul seputar UMKM dan ikuti tesnya!</h6>
                                        <div class="article-cta text-center mt-20">
                                            <a href="#" class="btn btn-primary circle font-weight-bold pr-5 pl-5"
                                                id="registWebinar">Mulai <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>

                                    </div>

                                </article>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


@endsection

@section('css-assets')
@endsection

@section('js-assets')
@endsection
