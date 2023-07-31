@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Tạo mã QR</h1>
        <ul class="nav nav-tabs filter-group-title" id="myTab" role="tablist">
            <li class="nav-item {{(Request::url() == route('qr-codes.category', ["slug" => 'ho-so'])) ? "active" : ""}}" role="presentation">
                <a  class="nav-link {{(Request::url() == route('qr-codes.category', ["slug" => 'ho-so'])) ? "active" : ""}}" id="qrProfile" data-bs-toggle="tab" data-bs-target="#qrProfile-pane" type="button" role="tab" aria-controls="qrProfile-pane" aria-selected="true" >
                    QR Profile
                </a>
            </li>
            <li class="nav-item {{(Request::url() == route('qr-codes.category', ["slug" => 'cua-hang'])) ? "active" : ""}}" role="presentation">
                <a  class="nav-link" id="qrShop" data-bs-toggle="tab" data-bs-target="#qrShop-pane" type="button" role="tab" aria-controls="qrShop-pane" aria-selected="false">
                    QR Shop
                </a>
            </li>
            <li class="nav-item {{(Request::url() == route('qr-codes.category', ["slug" => 'tu-chon'])) ? "active" : ""}}" role="presentation">
                <a class="nav-link" id="qrOption" data-bs-toggle="tab" data-bs-target="#qrOption-pane" type="button" role="tab" aria-controls="qrOption-pane" aria-selected="false">
                    QR tự chọn
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane {{request()->url() == route('qr-codes.category', ["slug" => 'ho-so'])?'active show':''}}" id="qrProfile-pane" role="tabpanel" aria-labelledby="qrProfile" tabindex="0">
                <div class="block-content QR_profile">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>Tạo mã QR Profile</h3>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <form action="" class="general-form create-QR">
                            <div class="row">
                                <div class="col-3">
                                    <div class="imageQR"></div>
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="name">Tiêu đề</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nhập tiêu đề cho mã QR này..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Nội dung</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="nội dung mô tả chi tiết..." rows="4" ></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end align-items-center" >
                                    <button class="btn-form">Tạo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block-content">
                    <div class="block-created-QR-list">
                        <div class="title">
                            <div class="row m-0 align-items-center">
                                <div class="col-12">
                                    <h3>Danh sách mã QR đã tạo</h3>
                                </div>
                            </div>
                        </div>
                        <div class="created_QR_list">
                            <div class="row">
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane {{request()->url() == route('qr-codes.category', ["slug" => 'cua-hang'])?'active show':''}}" id="qrShop-pane" role="tabpanel" aria-labelledby="qrShop" tabindex="0">
                <div class="block-content QR_profile">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>Tạo mã QR Shop</h3>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <form action="" class="general-form create-QR">
                            <div class="row">
                                <div class="col-3">
                                    <div class="imageQR"></div>
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="name">Tiêu đề</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nhập tiêu đề cho mã QR này..." required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Nội dung</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="nội dung mô tả chi tiết..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <button class="btn-form">Tạo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block-content">
                    <div class="block-created-QR-list">
                        <div class="title">
                            <div class="row m-0 align-items-center">
                                <div class="col-12">
                                    <h3>Danh sách mã QR đã tạo</h3>
                                </div>
                            </div>
                        </div>
                        <div class="created_QR_list">
                            <div class="row">
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane {{request()->url() == route('qr-codes.category', ["slug" => 'tu-chon'])?'active show':''}}" id="qrOption-pane" role="tabpanel" aria-labelledby="qrOption" tabindex="0">
                <div class="block-content QR_profile">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>Tạo mã QR tự chọn</h3>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <form action="" class="general-form create-QR">
                            <div class="row">
                                <div class="col-3">
                                    <div class="imageQR"></div>
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="name">Tiêu đề</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nhập tiêu đề cho mã QR này..." required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Nội dung</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="nội dung mô tả chi tiết..." rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <button class="btn-form">Tạo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block-content">
                    <div class="block-created-QR-list">
                        <div class="title">
                            <div class="row m-0 align-items-center">
                                <div class="col-12">
                                    <h3>Danh sách mã QR đã tạo</h3>
                                </div>
                            </div>
                        </div>
                        <div class="created_QR_list">
                            <div class="row">
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="row m-0">
                                        <div class="image_QR col-4">
                                            <img src="{{asset('web/images/image-QR.png')}}" class="card-img-top" alt=""/>
                                        </div>
                                        <div class="col-8">
                                            <div class="title_QR">
                                                <h3>Tiêu đề</h3>
                                                <a href="" class="delete-QR nav-link">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.6084 13.75H11.3834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.91675 10.417H12.0834" stroke="#98A2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content_of_QR">
                                                Nội dung mô tả chi tiết về mã QR này, là những thông
                                                tin mà bạn muốn đưa tới cho người đọc khi họ quét mã
                                                QR bằng điện thoại di động và hiển thị ngay trên
                                                thiết bị đó của họ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection