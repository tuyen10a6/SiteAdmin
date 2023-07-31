@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Sản phẩm</h1>
    </div>
    <div class="content">
        <div class="block-content">
            <div class="back-home">
                <a href="{{route('products.category', ["slug" => request('slug'),'code'=>request('code')])}}"
                   class="nav-link">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 26.5599L11.3066 17.8666C10.28 16.8399 10.28 15.1599 11.3066 14.1333L20 5.43994"
                              stroke="#101828" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <p>Trở về</p>
                </a>
            </div>

            <div class="title">
                <div class="row m-0 align-items-center">
                    <div class="col-6">
                        <h3>Thêm mới sản phẩm</h3>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <form method="post" enctype="multipart/form-data"
                      action="{{route('products.store',['code'=>$sites->code,'slug'=>request('slug')])}}"
                      class="general-form add-products">
                    @csrf

                    <ul class="nav nav-tabs filter-group" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <a class="nav-link active" id="mo-ta" data-bs-toggle="tab" data-bs-target="#mo-ta-pane"
                               type="button" role="tab" aria-controls="mo-ta-pane" aria-selected="true">
                                Mô tả
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tiktok" data-bs-toggle="tab" data-bs-target="#tiktok-pane"
                               type="button" role="tab" aria-controls="tiktok-pane" aria-selected="false"
                               tabindex="-1">
                                Video Tiktok
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="qr" data-bs-toggle="tab" data-bs-target="#qr-pane" type="button"
                               role="tab" aria-controls="qr-pane" aria-selected="false" tabindex="-1">
                                Mã QR
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane active show" id="mo-ta-pane" role="tabpanel" aria-labelledby="mo-ta"
                             tabindex="0">
                            {{--<form method="post" enctype="multipart/form-data"--}}
                            {{--action="{{route('products.store',['code'=>$sites->code,'slug'=>request('slug')])}}"--}}
                            {{--class="general-form add-products">--}}
                            {{--@csrf--}}
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="uploadProfilePicture">Đường dẫn ảnh</label>
                                    <input type="file" multiple id="uploadProfilePicture" class="form-control"/>
                                    <div id="listImages">
                                        <div class="itemImages">
                                            <img id="img_show" width="200"
                                                 src=""
                                                 alt=""/>
                                            <input type="hidden" name="file_id" value=""
                                                   id="thumb">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="name">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="nhập tên..." required="">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-5 form-group">
                                            <label for="price">Giá sản phẩm (VND)</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                   placeholder="nhập giá..." required="">
                                        </div>
                                        <div class="col-7 form-group">
                                            <label for="pixel_tiktok">Danh mục sản phẩm</label>
                                            <select class="form-control form-select" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{$category->slug==request('slug')?'selected':''}} >{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="description">Mô tả sản phẩm</label>
                                    <textarea class="form-control" name="description" id="description"
                                              placeholder="giới thiệu một chút về sản phẩm..." rows="5"></textarea>
                                </div>
                                {{--<div class="form-group col-12 text-end">--}}
                                    {{--<button class="btn-form cancel">Hủy bỏ</button>--}}
                                    {{--<button class="ms-3 btn-form create">Tạo sản phẩm</button>--}}
                                {{--</div>--}}
                            </div>
                            {{--</form>--}}
                        </div>
                        <div class="tab-pane general-form url-video" id="tiktok-pane" role="tabpanel" aria-labelledby="tiktok" tabindex="0">
                            {{--<form action="" class="general-form url-video">--}}
                            <div class="row m-0">
                                <div class="form-group col-12">
                                    <div class="row align-items-center">
                                        <h3 class="col-3">Video 1</h3>
                                        <div class="col-7">
                                            <input type="text" class="form-control" name="url[]"
                                                   placeholder="nhập đường dẫn...">
                                        </div>
                                        <div class="col-2">
                                            <div class="action-video justify-content-end d-flex align-items-center">
                                                <div class="form-check form-switch me-3">
                                                    <input class="form-check-input" type="checkbox"
                                                            checked="">
                                                </div>
                                                <a href="#" class="nav-link">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998"
                                                              stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97"
                                                              stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M18.8499 9.14014L18.1999 19.2101C18.0899 20.7801 17.9999 22.0001 15.2099 22.0001H8.7899C5.9999 22.0001 5.9099 20.7801 5.7999 19.2101L5.1499 9.14014"
                                                              stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M10.3301 16.5H13.6601" stroke="#667085"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M9.5 12.5H14.5" stroke="#667085" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="row align-items-center">
                                        <h3 class="col-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                      stroke="#101828" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M12 15.5V9.5" stroke="#101828" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9 11.5L12 8.5L15 11.5" stroke="#101828" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Video 2
                                        </h3>
                                        <div class="col-7">
                                            <input type="text" class="form-control" name="url[]"
                                                   placeholder="nhập đường dẫn...">
                                        </div>
                                        <div class="col-2">
                                            <div class="action-video justify-content-end d-flex align-items-center">
                                                <div class="form-check form-switch me-3">
                                                    <input class="form-check-input" type="checkbox"
                                                            checked="">
                                                </div>
                                                <a href="#" class="nav-link">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998"
                                                              stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97"
                                                              stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M18.8499 9.14014L18.1999 19.2101C18.0899 20.7801 17.9999 22.0001 15.2099 22.0001H8.7899C5.9999 22.0001 5.9099 20.7801 5.7999 19.2101L5.1499 9.14014"
                                                              stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M10.3301 16.5H13.6601" stroke="#667085"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M9.5 12.5H14.5" stroke="#667085" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="nav-link still add_video">
                                        <i class="fas fa-plus"></i>
                                        <p>Thêm video</p>
                                    </a>
                                </div>
                                {{--<div class="col-12 text-end">--}}
                                {{--<button class="btn-form cancel">Hủy bỏ</button>--}}
                                {{--<button class="ms-3 btn-form create">Tạo sản phẩm</button>--}}
                                {{--</div>--}}
                            </div>
                            {{--</form>--}}
                        </div>
                        <div class="tab-pane general-form create-QR" id="qr-pane" role="tabpanel" aria-labelledby="qr" tabindex="0">
                            {{--<form action="" class="general-form create-QR">--}}
                            <div class="row">
                                <div class="col-3">
                                    <div class="imageQR">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="nameQr">Tiêu đề</label>
                                        <input type="text" class="form-control" name="nameQr"
                                               placeholder="nhập tiêu đề cho mã QR này...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Nội dung</label>
                                        <textarea class="form-control" name="description" id="description"
                                                  placeholder="nội dung mô tả chi tiết..." rows="5"></textarea>
                                    </div>
                                </div>
                                {{--<div class="col-12 d-flex justify-content-end align-items-center">--}}
                                    {{--<button class="btn-form ms-4">Tạo mã QR</button>--}}
                                {{--</div>--}}
                            </div>
                            {{--</form>--}}
                        </div>
                    </div>
                    <div class="form-group col-12 text-end">
                        <button class="btn-form cancel">Hủy bỏ</button>
                        <button type="submit" class="ms-3 btn-form create">Tạo sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('web/js/products.js')}}"></script>
@endpush