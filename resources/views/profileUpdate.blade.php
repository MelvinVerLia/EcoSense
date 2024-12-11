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
                <span class="font-weight-bold">first name</span>
                <span class="text-black-50">email.com</span>
                <div class="mt-5 d-flex flex-column gap-2">
                    <a href="{{route('profile.logout')}}" class="btn rounded mb-2" style="background-color: black; color:white">Logout Account</a>
                    <a href="#" class="btn btn-danger rounded">Delete Account</a>
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
                    <div class="col-md-6">
                        <label class="labels">First Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Last Name</label>
                        <input type="text" class="form-control" placeholder="last name" value="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">Email</label>
                        <input type="text" class="form-control" placeholder="email" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Old Password</label>
                        <input type="text" class="form-control" placeholder="old password" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">New Password</label>
                        <input type="text" class="form-control" placeholder="new password" value="">
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
                    <button class="btn btn-success rounded type=" style="width: 175px;">
                        Update
                    </button>
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
        font-size: 12px;
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