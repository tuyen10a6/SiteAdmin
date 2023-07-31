@extends('web.layout.layout')

@section('content')
    <div class="content-header">
        <h1>Thông tin tài khoản</h1>
    </div>
    <div class="content">
        <div class="row m-0">
            <div class="col-8">
                <div class="personal-information content_left">
                    {{--<ul class="nav nav-tabs filter-group" id="myTab" role="tablist">--}}
                        {{--<li class="nav-item active" role="presentation">--}}
                            {{--<a class="nav-link active"  href="{{route('profile')}}" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane">--}}
                                {{--Cấu hình--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item" role="presentation">--}}
                            {{--<a class="nav-link" href="{{route('profile')}}" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane">--}}
                                {{--Pixel--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="home-tab-pane" role="tabpanel" tabindex="0">
                            <div class="configuration">

                                <form action="" method="post" class="information-form general-form">
                                    @include('web.layout.alert')
                                    @csrf
                                    <div class="row">
                                        <div class="user-block text-center col-12">
                                            <input accept="image/*" id="uploadProfilePicture" type="file" style="display: none;">
                                            <label for="uploadProfilePicture">
                                                <img src="{{asset('web/images/Content-Holder.png')}}" alt=""/>
                                                <img class="upload-thumb" src="{{asset('web/images/camera.svg')}}" alt="">
                                            </label>

                                        </div>

                                        <div class="form-group col-12">
                                            <label for="name">Tên hiển thị</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}"/>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="phone">Số điện thoại</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}"/>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}"/>
                                        </div>
                                        <div class="form-group col-12">
                                            <button class="btn">Lưu thông tin</button>
                                        </div>
                                        {{--<div class="form-group col-6">--}}
                                            {{--<input type="text" class="form-control input-group-icon" id="facebook" name="facebook" placeholder="đường dẫn Facebook..." required/>--}}
                                            {{--<span class="icon">--}}
                                                {{--<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                    {{--<g clip-path="url(#clip0_558_52887)">--}}
                                                        {{--<path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z" fill="#1877F2"/>--}}
                                                        {{--<path d="M13.8926 12.8906L14.3359 10H11.5625V8.125C11.5625 7.33418 11.95 6.5625 13.1922 6.5625H14.4531V4.10156C14.4531 4.10156 13.3088 3.90625 12.2146 3.90625C9.93047 3.90625 8.4375 5.29063 8.4375 7.79688V10H5.89844V12.8906H8.4375V19.8785C9.47287 20.0405 10.5271 20.0405 11.5625 19.8785V12.8906H13.8926Z" fill="white"/>--}}
                                                    {{--</g>--}}
                                                    {{--<defs>--}}
                                                        {{--<clipPath id="clip0_558_52887">--}}
                                                            {{--<rect width="20" height="20" fill="white"/>--}}
                                                        {{--</clipPath>--}}
                                                    {{--</defs>--}}
                                                {{--</svg>--}}
                                            {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group col-6">--}}
                                            {{--<input type="text" class="form-control input-group-icon" id="title" name="tiktok"  placeholder="đường dẫn Tiktok..." required/>--}}
                                            {{--<span class="icon">--}}
                                                {{--<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                    {{--<path d="M14.3135 7.21964C15.5996 8.14228 17.1752 8.68515 18.8769 8.68515V5.39892C18.5548 5.39899 18.2336 5.36529 17.9186 5.2983V7.88502C16.217 7.88502 14.6416 7.34216 13.3552 6.41958V13.1258C13.3552 16.4806 10.6452 19.2 7.30257 19.2C6.05534 19.2 4.89609 18.8216 3.93311 18.1726C5.0322 19.3004 6.56497 20.0001 8.26071 20.0001C11.6036 20.0001 14.3137 17.2807 14.3137 13.9257V7.21964H14.3135ZM15.4957 3.90424C14.8385 3.1836 14.4069 2.25231 14.3135 1.22273V0.800049H13.4054C13.6339 2.10865 14.4137 3.22664 15.4957 3.90424ZM6.04735 15.5983C5.68012 15.115 5.48167 14.5239 5.48255 13.9161C5.48255 12.3818 6.72206 11.1377 8.25127 11.1377C8.53627 11.1376 8.81955 11.1814 9.09115 11.2679V7.90822C8.77375 7.86457 8.45342 7.84604 8.13322 7.85283V10.4678C7.86142 10.3814 7.578 10.3374 7.29293 10.3377C5.76372 10.3377 4.52428 11.5816 4.52428 13.1162C4.52428 14.2012 5.14383 15.1406 6.04735 15.5983Z"--}}
                                                            {{--fill="#FF004F"/>--}}
                                                    {{--<path d="M13.3554 6.41952C14.6419 7.34209 16.2172 7.88496 17.9188 7.88496V5.29823C16.969 5.0952 16.1281 4.59708 15.4959 3.90424C14.4138 3.22657 13.6342 2.10858 13.4056 0.800049H11.0201V13.9256C11.0147 15.4558 9.77728 16.6948 8.25135 16.6948C7.35214 16.6948 6.55329 16.2646 6.04735 15.5983C5.14391 15.1406 4.52436 14.2012 4.52436 13.1163C4.52436 11.5818 5.7638 10.3378 7.29301 10.3378C7.586 10.3378 7.8684 10.3835 8.13329 10.4679V7.8529C4.84934 7.92099 2.20825 10.6138 2.20825 13.9257C2.20825 15.5789 2.86594 17.0776 3.93339 18.1727C4.89637 18.8216 6.05562 19.2001 7.30285 19.2001C10.6456 19.2001 13.3555 16.4805 13.3555 13.1258V6.41952H13.3554Z"--}}
                                                            {{--fill="#101828"/>--}}
                                                    {{--<path d="M17.9188 5.29817V4.59874C17.0623 4.60004 16.2226 4.35932 15.496 3.90411C16.1392 4.61089 16.9863 5.09822 17.9188 5.29817ZM13.4056 0.799986C13.3838 0.674926 13.367 0.549042 13.3554 0.422678V0H10.0617V13.1257C10.0564 14.6556 8.8191 15.8946 7.29303 15.8946C6.845 15.8946 6.42199 15.7879 6.04737 15.5983C6.55331 16.2645 7.35216 16.6946 8.25137 16.6946C9.77717 16.6946 11.0148 15.4558 11.0201 13.9256V0.799986H13.4056ZM8.13345 7.85284V7.10824C7.85823 7.07049 7.58076 7.05155 7.30294 7.05169C3.95993 7.05162 1.25 9.77116 1.25 13.1257C1.25 15.2288 2.31505 17.0822 3.93347 18.1725C2.86603 17.0775 2.20834 15.5787 2.20834 13.9255C2.20834 10.6138 4.84936 7.92093 8.13345 7.85284Z"--}}
                                                            {{--fill="#00F2EA"/>--}}
                                                {{--</svg>--}}
                                            {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group col-6">--}}
                                            {{--<input type="text" class="form-control input-group-icon" id="youtobe" name="youtobe" placeholder="đường dẫn Youtobe..." required/>--}}
                                            {{--<span class="icon">--}}
                                                    {{--<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                        {{--<g clip-path="url(#clip0_558_42440)">--}}
                                                            {{--<path d="M19.6018 5.15459C19.4888 4.7291 19.2659 4.34077 18.9556 4.02847C18.6453 3.71617 18.2584 3.49084 17.8337 3.37504C16.27 2.95459 10.02 2.95459 10.02 2.95459C10.02 2.95459 3.77002 2.95459 2.20638 3.37504C1.78163 3.49084 1.39474 3.71617 1.08443 4.02847C0.774116 4.34077 0.551274 4.7291 0.438201 5.15459C0.0200196 6.72504 0.0200195 10 0.0200195 10C0.0200195 10 0.0200196 13.275 0.438201 14.8455C0.551274 15.271 0.774116 15.6593 1.08443 15.9716C1.39474 16.2839 1.78163 16.5092 2.20638 16.625C3.77002 17.0455 10.02 17.0455 10.02 17.0455C10.02 17.0455 16.27 17.0455 17.8337 16.625C18.2584 16.5092 18.6453 16.2839 18.9556 15.9716C19.2659 15.6593 19.4888 15.271 19.6018 14.8455C20.02 13.275 20.02 10 20.02 10C20.02 10 20.02 6.72504 19.6018 5.15459Z"--}}
                                                                  {{--fill="#FF0302"/>--}}
                                                            {{--<path d="M7.97437 12.9739V7.02612L13.2016 9.99999L7.97437 12.9739Z"--}}
                                                                  {{--fill="#FEFEFE"/>--}}
                                                        {{--</g>--}}
                                                        {{--<defs>--}}
                                                            {{--<clipPath id="clip0_558_42440">--}}
                                                                {{--<rect width="20" height="20" fill="white"/>--}}
                                                            {{--</clipPath>--}}
                                                        {{--</defs>--}}
                                                    {{--</svg>--}}
                                                    {{--</span>--}}
                                        {{--</div>--}}

                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--<div class="tab-pane" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">--}}
                            {{--<div class="pixel">--}}
                                {{--<form class="general-form pixel-form">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="form-group col-12">--}}
                                            {{--<label for="pixel_tiktok">Pixel Tiktok</label>--}}
                                            {{--<input type="text" class="form-control" id="pixel_tiktok" name="pixel_tiktok" placeholder="Nhập mã pixel của bạn..." required/>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group col-12">--}}
                                            {{--<label for="pixel_facebook">Pixel Facebook</label>--}}
                                            {{--<input type="text" class="form-control" id="pixel_facebook" name="pixel_facebook" placeholder="Nhập mã pixel của bạn..." required/>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            {{--<div class="col-4 text-end">--}}
                {{--<div class="front_view_img">--}}
                    {{--<img src="{{asset('web/images/iPhone_X_Mockup_Front_View.png')}}" alt=""/>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection