@extends('layout.master')

@section('title', 'Profile')

@section('content')

<div class="container rounded bg-white mt-5 mb-5" style="height: 700px;">
    <div class="row">
        <div class="col-md-3 border-end">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="100px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                    alt="User Profile">
                <span class="font-weight-bold">{{ session('customer')['first_name'] ?? 'first_name' }}</span>
                <span class="text-black-50">{{ session('customer')['email'] ?? 'email' }}</span>
                <div class="mt-5 d-flex flex-column gap-2">
                    <a href="{{route('profile.logout')}}" class="btn rounded mb-2"
                        style="background-color: black; color:white">Logout Account</a>

                    <form action="{{ route('profile.delete') }}" method="POST">
                        @csrf
                        @method('POST')
                        <a href="#" class="btn btn-danger rounded" data-bs-toggle="modal"
                            data-bs-target="#deleteAccountModal">Delete Account</a>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteAccountModalLabel">Confirm Account Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form id="deleteAccountForm" action="{{ route('profile.delete') }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-center align-items-center mb-3 mt-5" style="gap:10rem;">
                    <a href="{{route('profile')}}" class="btn btn-success rounded" style="width: 175px;">Your
                        Profile</a>
                    <a href="{{route('profileUpdate')}}" class="btn btn-success rounded" style="width: 175px;">Update
                        Profile</a>
                </div>

                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @if(session('error'))
                        <div class="alert alert-error">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                value="{{ session('customer')['first_name'] ?? '' }}">
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                value="{{ session('customer')['last_name'] ?? '' }}">
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                value="{{ session('customer')['email'] ?? '' }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Old Password</label>
                            <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                            @error('old_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="labels">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="New Password">
                            @error('new_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm New Password">
                        </div>
                    </div>

                    <div class="upload-photo-container">
                        <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                            alt="Profile" class="profile-photo me-2">
                        <a href="#" class="btn btn-success btn-sm rounded font-weight-bold">
                            Upload Photo
                        </a>
                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-success rounded" type="submit" style="width: 175px;">Update
                            Profile</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<style>
    body {
        background: url('{{ asset('images/forest.png') }}') no-repeat center center;
        background-size: cover;
    }

    .form-control:focus {
        box-shadow: none;
        border-color:rgb(59, 153, 75)
    }

    .labels {
        font-size: 12px;
        margin: 0;
    }

    .profile-photo {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .upload-photo-container {
        display: inline-flex;
        align-items: center;
        padding-top: 10px;
        border-radius: 50px;
    }
</style>



@endsection