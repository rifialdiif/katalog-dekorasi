@extends('MainLayout')

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-person"></i>
            <a href="{{ route('produk') }}">Produk</a>
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
            <a href="{{ route('produk') }}">Produk</a>
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
                    <form action="{{ route('produk.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="mb-3 col-1">
                            <input type="hidden" class="form-control" name="ProdukID" value="{{ $data->ProdukID }}">
                        </div>

                        <div class="mb-3 col-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="NamaProduk" value="{{ $data->NamaProduk }}">
                            <small>
                                @error('NamaProduk')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="Deskripsi" value="{{ $data->Deskripsi }}">
                            <small>
                                @error('Deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="Harga" value="{{ $data->Harga }}">
                            <small>
                                @error('Harga')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        {{-- <div class="mb-3 col-4">
                            <label class="form-label">Foto</label>
                            <input class="form-control" type="file" name="Gambar" id="insertGambar">
                            <img src="" alt="" id="previewImage"
                                style="max-width: 100%; max-height: 200px;">
                        </div> --}}

                        <div class="mb-3 col-4">
                            <label class="form-label">Foto</label>
                            <input type="hidden" name="imgPath" value="{{ $data->Gambar }}">
                            <input class="form-control" type="file" name="Gambar" id="fotoInput">
                            <img src="{{ $data->Gambar ? asset('storage/' . $data->Gambar) : '' }}" alt=""
                                id="previewImage" style="max-width: 100%; max-height: 200px;">
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Admin</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="AdminID">
                                <option selected disabled>--PILIH ADMIN--</option>
                                @foreach ($admin as $key => $item)
                                    <option value="{{ $item->AdminID }}" @if (old('AdminID', $data->AdminID) === $item->AdminID) selected @endif>
                                        {{ $item->Username }}</option>
                                @endforeach
                            </select>
                            <small>
                                @error('AdminID')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="KategoriID">
                                <option selected disabled>--PILIH KATEGORI--</option>
                                @foreach ($kategori as $key => $item)
                                    <option value="{{ $item->KategoriID }}"
                                        @if (old('KategoriID', $data->KategoriID) === $item->KategoriID) selected @endif>
                                        {{ $item->NamaKategori }}
                                    </option>
                                @endforeach
                            </select>
                            <small>
                                @error('KategoriID')
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
    <script>
        document.getElementById('fotoInput').addEventListener('change', function(event) {
            const previewImage = document.getElementById('previewImage');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                }

                reader.readAsDataURL(file);
            } else {
                previewImage.src = ''; // Clear the preview if no file is selected
            }
        });
    </script>
@endsection
