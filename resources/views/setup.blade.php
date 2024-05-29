@extends('layouts.layout')

@section('content')
    @section('css', 'css/auth.css')
    @section('title', 'SPCanteen - Login')
    <div class="container">
        <div class="setup-form">
            <form id="profileForm" action="/setup" method="POST" enctype="multipart/form-data">
                <div class="info">
                    <h1>WELCOME</h1>
                </div>
                <div class="form-setup">
                    <div class="form">
                        @csrf
                        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewProfilePicture(this);" style="display: none;">
                    </div>
                    <div class="profile-picture">
                        <img id="avatar" src="images/default.png">
                        <label id="pfp" for="profilePicture">
                            <div class="camera-icon-bg">
                                <i class="fas fa-camera cam"></i>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="upload-txt">
                    <p>Upload Your Profile</p>
                </div>
                <div class="option">
                    <input type="checkbox" id="status_student" name="status" value="1">
                    <label for="status_student" style="margin-right:50px;">CHECK IF DONE!</label>
                </div>
                <div class="note">
                    <p>If done setting up your account,<br>
                        please click the button below to continue.</p>
                </div>
                <div class="submit-btn">
                    <input type="submit" class="btn" value="CONTINUE">
                </div>
            </form>
        </div>
    </div>
@endsection