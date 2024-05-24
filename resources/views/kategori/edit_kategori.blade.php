@extends('MainLayout')

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-person"></i>
            <a href="{{ route('kategori') }}">Kategori</a>
        </li>
        <li class="breadcrumb-item breadcrumb-active" aria-current="page">Edit</li>
    </ol>
    <!-- Breadcrumb end -->
@endsection

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-house"></i>
            <a href="{{ route('kategori') }}">Kategori</a>
        </li>
        <li class="breadcrumb-item breadcrumb-active" aria-current="page">Edit</li>
    </ol>
    <!-- Breadcrumb end -->
@endsection

@section('mainContent')
    <div class="container-fluid py-4 px-4">
        <div class="card">
            <div class="card-body">
                <div class="rounded h-100 p-4">
                    <form action="{{ route('kategori.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3 col-1">
                            <input type="hidden" class="form-control" name="KategoriID" value="{{ $data->KategoriID }}">
                        </div>

                        <div class="mb-3 col-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="NamaKategori"
                                value="{{ $data->NamaKategori }}">
                            <small>
                                @error('NamaKategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <button type="submit" class="btn btn-primary" value="update">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
