@extends('MainLayout')

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-person"></i>
            <a href="{{ route('kategori') }}">Kategori</a>
        </li>
    </ol>
    <!-- Breadcrumb end -->
@endsection
@section('mainContent')
    <div class="card container-fluid py-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="row pb-3">
                <div class="col">
                    <h6 class="mb-4">Tabel Kategori</h6>
                </div>
                <div class="col text-end me-2">
                    <a href="{{ route('kategori.add') }}" class="btn btn-sm btn-primary">Add</a>
                </div>
            </div>

            <div class="table-responsive">
                <table id="basicExampleKategori" class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $key => $item)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $item->NamaKategori }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-lg-end">
                                            <li>
                                                <p class="dropdown-item" href="#">Action</p>
                                            </li>
                                            <li><a href="{{ route('kategori.edit', $item->KategoriID) }}"
                                                    class="dropdown-item">Edit</a>
                                            </li>
                                            <li><a href="{{ route('kategori.delete', $item->KategoriID) }}"
                                                    class="dropdown-item">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
