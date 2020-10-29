@extends('layouts.tamplates')

@section('content')

<!-- Home -->

<div class="home">

    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url({{ asset("images/about.jpg") }})">
                </div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_title">
                                        <h2>Mari Kita Membaca</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_title">
                                        <h2>Mari Kita Membaca</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="owl-item">
                <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_title">
                                        <h2>Mari Kita Membaca</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="home_page_nav">
                    <ul class="d-flex flex-column align-items-end justify-content-end">
                        <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                        <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                        <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
                    </ul>
                </div> --}}
    </div>
</div>

<!-- Search -->

<div class="home_search">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_search_container">
                    <div class="home_search_title">Pencarian Novel </div>
                    <div class="home_search_content">
                        <form action="{{ route('welcome') }}" method="HEAD" class="home_search_form"
                            id="home_search_form">
                            {{ csrf_field() }}
                            <div
                                class="d-flex flex-lg-rowf lex-column align-items-start justify-content-lg-between justify-content-start">
                                <input type="text" class="search_input form-control mr-3" name="cari"
                                    placeholder="telusuri novel" required="required">
                                <button type="submit" class="home_search_button">telusuri</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Destinations -->

<div class="destinations" id="destinations">
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
            <p class="mb-0">{{ session('success') }}</p>
        </div>
        @endif
        <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-book">
                Tambah Buku
            </button>
        </div>
        <div class="row">

            <div class="col text-center">
                <div class="section_subtitle">Buku novel Terbaik </div>
                <div class="section_title">
                    <h2>Novel Terpopuler</h2>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            @foreach ($items as $item)
            <div class="col-3 mt-4 mr-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/image/{{$item->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->judul}}</h5>
                        <p class="card-text">RP.{{$item->harga}}</p>
                        <a href="{{ route('user.buy', ['id'=>$item->kd_brg]) }}" class="btn btn-primary">beli</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add-book" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah buku baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('add_item') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Judul novel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                id="staticEmail" value="{{old('judul')}}">
                            @error('judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{old('harga')}}" id="inputPassword">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Stok" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{old('stok')}}" id="Stok">
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-3 col-form-label">Judul Novel</label>
                        <div class="col-sm-8">
                            <input type="file" id="gambar"
                                class="form-control-file @error('gambar') is-invalid @enderror" name="gambar">
                            @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection