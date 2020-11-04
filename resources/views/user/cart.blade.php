@extends('layouts.tamplates')

@section('content')

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

        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
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

        <div class=" card mt-5" style="width: 30rem">
            <div class="card-header">
                <h5>Transaksi</h5>
            </div>
            <div class="card-body">
                <table style="width: 100%">
                    <form action="{{ route('user.beli') }}" method="post">
                        @csrf
                        <tr style="margin: 30px;">
                            <th>
                                <h6>Total</h6>
                            </th>
                            <th style="width: 30px"></th>
                            <th>
                                <h6>{{ $total }}</h6>
                            </th>
                        </tr>
                        <tr style="margin: 30px;">
                            <th>
                                <h5>Alamat</h5>
                            </th>
                            <th style="width: 30px"></th>
                            <th><input type="text" name="alamat" class="form-control" required></th>
                        </tr>
                        <tr style="margin: 30px;">
                            <th><img src="https://bri.co.id/o/bri-corporate-theme/images/logo.png" style="width: 150px;"
                                    alt=""></th>
                            <th style="width: 30px"></th>
                            <th>
                                <h6>0872-0211-1208-9121</h6>
                            </th>
                        </tr>
                        <tr style="margin: 30px;">
                            <th colspan="3" class="text-right"><button class="btn btn-primary"
                                    type="submit">Bayar</button></th>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection