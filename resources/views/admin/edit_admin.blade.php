@extends('MainLayout')

@section('breadcrumbs')
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-person"></i>
            <a href="{{ route('admin') }}">Admin</a>
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
            <a href="{{ route('admin') }}">Admin</a>
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
                    <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3 col-1">
                            <input type="hidden" class="form-control" name="AdminID" value="{{ $data->AdminID }}">
                        </div>

                        <div class="mb-3 col-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="Username" value="{{ $data->Username }}">
                            <small>
                                @error('Username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="Email" value="{{ $data->Email }}">
                            <small>
                                @error('Email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                        </div>

                        {{-- <div class="mb-3 col-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" value="{{ $data->Password }}">
                            <small>
                                @error('Password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </small>
                            <input type="hidden" name="Password" value="{{ $data->Password }}">
                        </div> --}}

                        <button type="submit" class="btn btn-primary" value="update">Update</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
