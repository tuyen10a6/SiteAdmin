@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Cấu hình shop</h1>
        <ul class="nav nav-tabs filter-group-title" id="myTab" role="tablist" >

            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#home-pane" type="button" role="tab" aria-controls="home-pane" aria-selected="true" >
                    Trang chủ
                </a>
            </li>
            <li class="nav-item {{request()->url()== route('shops.qr_codes')? 'active' : ''}}" role="presentation">
                <a class="nav-link" id="detail" data-bs-toggle="tab" data-bs-target="#detail-pane" type="button" role="tab" aria-controls="detail-pane" aria-selected="false" >
                    Trang chi tiết sản phẩm
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="row m-0">
            <div class="col-8">
                <div class="product-filter content_left see_QR_code">
                    <div class="back-home">
                        <a href="{{route('shops.detail')}}" class="nav-link">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 26.5599L11.3066 17.8666C10.28 16.8399 10.28 15.1599 11.3066 14.1333L20 5.43994" stroke="#101828" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p>Trở về</p>
                        </a>
                    </div>
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>Mã QR</h3>
                            </div>
                            <div class="col-6 text-end">
                                <div class="add-new">
                                    <a href="#" class="btn text-center">
                                        <p>Chỉnh sửa</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form video QR -->
                    <form action="" class="general-form create-QR">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="imageQR">
                                    <img src="{{asset('web/images/image 73.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label for="name">Tiêu đề</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="nhập tiêu đề cho mã QR này..." required />
                            </div>
                            <div class="form-group col-12">
                                <label for="description">Nội dung</label>
                                <textarea class="form-control" name="description" id="description" placeholder="nội dung mô tả chi tiết..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="front_view_img">
                    <img src="{{asset('web/images/iPhone_X_Mockup_Front_View.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    @endsection