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

<div class="destinations" id="destinations">
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $id = 1
                @endphp
                @foreach ($shop as $key=> $item)
                <tr>
                    <td>{{ $id++ }}</td>
                    <td style="width: 150px;">
                        <img class="card-img-top" src="/image/{{$item['gambar']}}" alt="{{ $key }}">
                    </td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['jumlah'] }}</td>
                    <td>{{ $item['harga'] }}</td>
                    <td>{{ $item['jumlah'] * $item['harga'] }}</td>
                    <td>
                        <a href="{{ route('user.cancel', ['id'=>$key]) }}" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Cancel
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection