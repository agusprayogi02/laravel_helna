@extends('layouts.tamplates')

@section('content')

<div class="destinations" id="destinations">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h4>Form Edit Item</h4>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.update',['id'=>$items->kd_brg]) }}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label h6">Judul novel</label>
            <div class="col-sm-8">
              <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="staticEmail"
                value="{{ $items->judul }}">
              @error('judul')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label h6">Harga</label>
            <div class="col-sm-8">
              <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                value="{{ $items->harga }}" id="inputPassword">
              @error('harga')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="Stok" class="col-sm-3 col-form-label h6">Stok</label>
            <div class="col-sm-8">
              <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                value="{{ $items->stok }}" id="Stok">
              @error('stok')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label h6">Cover Novel</label>
            <div class="col-sm-8">
              <input type="file" id="gambar" class="form-control-file @error('gambar') is-invalid @enderror"
                name="gambar">
              @error('gambar')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="text-right">
            <a href="{{ route('home') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection