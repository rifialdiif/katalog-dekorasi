@extends('MainLayout')

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-person"></i>
            <a href="{{ route('produk') }}">Produk</a>
        </li>
        <li class="breadcrumb-item breadcrumb-active" aria-current="page">Add</li>
    </ol>
    <!-- Breadcrumb end -->
@endsection

@section('mainContent')
    <div class="container-fluid py-4 px-4">
        <div class="card">
            <div class="card-body">
                <div class="rounded h-100 p-4">
                    <form action="{{ route('produk.save') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="mb-3 col-4">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="NamaProduk">
                            <small>
                                @error('NamaProduk')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="Deskripsi">
                            <small>
                                @error('Deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="Harga">
                            <small>
                                @error('Harga')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Foto</label>
                            <input class="form-control" type="file" name="Gambar" id="fotoInput">
                            <img src="{{ asset('theme/images/default.jpg') }}" alt="" id="previewImage"
                                style="max-width: 100%; max-height: 200px;">
                        </div>

                        <div class="mb-3 col-3">
                            <label class="form-label">Admin</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="AdminID">
                                <option selected disabled>--PILIH ADMIN--</option>
                                @foreach ($admin as $key => $item)
                                    <option value="{{ $item->AdminID }}">{{ $item->Username }}</option>
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
                                    <option value="{{ $item->KategoriID }}">{{ $item->NamaKategori }}
                                    </option>
                                @endforeach
                            </select>
                            <small>
                                @error('KategoriID')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <button type="submit" class="btn btn-primary" value="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Listen for the file input change event
            $('#fotoInput').on('change', function(e) {
                // Get the selected file
                var file = e.target.files[0];

                // Check if a file is selected
                if (file) {
                    // Create a FileReader object
                    var reader = new FileReader();

                    // Set a callback function to execute when the image is loaded
                    reader.onload = function(e) {
                        // Set the image source with the preview data URL
                        $('#previewImage').attr('src', e.target.result);
                    };

                    // Read the file as a Data URL (base64-encoded image)
                    reader.readAsDataURL(file);
                } else {
                    // If no file is selected, clear the image source
                    $('#previewImage').attr('src', '');
                }
            });
        });
    </script>
@endsection
