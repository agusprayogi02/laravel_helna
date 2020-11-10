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
              <th scope="col">Pembeli</th>
              <th scope="col">Nama Buku</th>
              <th scope="col">Harga</th>
              <th scope="col">Total</th>
              <th scope="col">Alamat</th>
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
                {{ $item->user->name }}
              </td>
              <td>{{ $item->barang->judul }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->harga * $item->jumlah }}</td>
              <td>{{ $item->alamat }}</td>
              <td>
                <a href="{{ route('admin.delete', ['id'=>$item->nomor]) }}" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Cancel
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