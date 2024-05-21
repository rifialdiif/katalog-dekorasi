@extends('MainLayout')

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-person"></i>
            <a href="{{ route('admin') }}">Admin</a>
        </li>
    </ol>
    <!-- Breadcrumb end -->
@endsection
@section('mainContent')
    <div class="card container-fluid py-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <div class="row pb-3">
                <div class="col">
                    <h6 class="mb-4">Tabel Admin</h6>
                </div>
                <div class="col text-end me-2">
                    <a href="{{ route('admin.add') }}" class="btn btn-sm btn-primary">Add</a>
                </div>
            </div>

            <div class="table-responsive">
                <table id="basicExampleUser" class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $key => $item)
                            <tr>
                                <td class="text-center">{{ $key }}</td>
                                <td>{{ $item->AdminID }}</td>
                                <td>{{ $item->Username }}</td>
                                <td>{{ $item->Email }}</td>
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
                                            <li><a href="{{ route('admin.edit', $item->AdminID) }}"
                                                    class="dropdown-item">Edit</a>
                                            </li>
                                            <li><a href="{{ route('admin.delete', $item->AdminID) }}"
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
