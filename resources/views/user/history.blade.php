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
              <th scope="col">Kode Transaksi</th>
              <th scope="col">Nama Buku</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
              <th scope="col">Total</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
            $id = 1
            @endphp
            @foreach ($data as $key=> $item)
            <tr>
              <td>{{ $id++ }}</td>
              <td>
                {{ $item->kd_transaksi }}
              </td>
              <td>{{ $item->barang->judul }}</td>
              <td>{{ $item->jumlah }}</td>
              <td>{{ $item->barang->harga }}</td>
              <td>{{ $item->jumlah * $item->barang->harga }}</td>
              <td>{{ $item->created_at->format('d-m-Y') }}</td>
              <td>
                <a href="{{ route('user.hapus', ['id'=>$key]) }}" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Delete
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection