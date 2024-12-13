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
                <span class="font-weight-bold">{{ session('customer')['first_name'] ?? 'first_name' }}</span>
                <span class="text-black-50">{{ session('customer')['email'] ?? 'Email' }}</span>

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
                        <label class="labels">{{ session('customer')['first_name'] ?? 'First Name' }}</label>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Last Name: </label>
                        <label class="labels">{{ session('customer')['last_name'] ?? 'Last Name' }}</label>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Email: </label>
                        <label class="labels">{{ session('customer')['email'] ?? 'Email' }}</label>
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
        background: rgb(99, 39, 120)
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
        /* Makes the image circular */
        object-fit: cover;
        /* Ensures the image fits within the circle */
    }

    .upload-photo-container {
        display: inline-flex;
        align-items: center;
        padding-top: 10px;
        border-radius: 50px;
        /* Rounded container */
    }
</style>



@endsection