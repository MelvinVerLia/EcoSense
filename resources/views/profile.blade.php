@extends('layout.master')

@section('title', 'Profile')

@section('content')

@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif



<div class="container rounded bg-white mt-5 mb-5" style="height: 700px;">
    <div class="row">
        <div class="col-md-3 border-end">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="100px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                    alt="User Profile">
                <span class="font-weight-bold">{{ $customer->first_name ?? 'first_name' }}</span>
                <span class="text-black-50">{{ $customer->email ?? 'Email' }}</span>

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

                <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">First Name: </label>
                        <label class="labels">{{ $customer->first_name ?? 'First_name' }}</label>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Last Name: </label>
                        <label class="labels">{{ $customer->last_name ?? 'Last_name' }}</label>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Email: </label>
                        <label class="labels">{{ $customer->email ?? 'Email' }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<style>
    body {
        background: url('https://wallpapers.com/images/hd/forest-green-background-g6m2rr1edx45d7kz.jpg') no-repeat center center;
        background-size: cover;
        filter: brightness(0.8);
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 20px;
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
@endsection