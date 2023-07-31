@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Sản phẩm</h1>
        {{--<ul class="nav nav-tabs filter-group-title" id="myTab" role="tablist">--}}
        {{--@foreach($categories as $category)--}}
        {{--<li class="nav-item {{(Request::url() == route('products.show',['code'=>$sites->code,'category' => $category->slug , 'slugProducts'=>request('slugProducts')])) ? 'show active' : ''}}" role="presentation">--}}
        {{--<a class="nav-link ajax-link {{(Request::url() == route('products.show',['code'=>$sites->code,'category' => $category->slug , 'slugProducts'=>request('slugProducts')])) ? 'show active' : ''}}"--}}
        {{--href="{{route('products.category',['code'=>$sites->code,'slug' => $category->slug ])}}"--}}
        {{--data-bs-toggle="tab"--}}
        {{--data-bs-target="#{{$category->slug}}-pane"--}}
        {{--type="button"--}}
        {{--role="tab"--}}
        {{--aria-controls="{{$category->slug}}-pane">--}}
        {{--{{$category->name}}--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--@endforeach--}}

        {{--</ul>--}}
    </div>
    <div class="content">
        <div class="block-content">
            <div class="back-home">
                <a href="{{route('products', ['code'=>request('code')])}}" class="nav-link">
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
                        <h3>Chỉnh sửa sản phẩm</h3>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <form action="{{route('products.update', ['code' => $sites->code, 'slug' => $product->slug])}}"
                      method="post" class="general-form add-products">
                    @csrf
                    @include('web.layout.alert')
                    <ul class="nav nav-tabs filter-group" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <a class="nav-link active" id="mo-ta" data-bs-toggle="tab" data-bs-target="#mo-ta-pane"
                               type="button" role="tab" aria-controls="mo-ta-pane" aria-selected="true">
                                Mô tả
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tiktok" data-bs-toggle="tab" data-bs-target="#tiktok-pane"
                               type="button" role="tab" aria-controls="tiktok-pane" aria-selected="false" tabindex="-1">
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
                            {{--<form action="{{route('products.update', ['code' => $sites->code, 'slug' => $product->slug])}}" method="post" class="general-form add-products">--}}
                            {{--@csrf--}}
                            {{--@include('web.layout.alert')--}}
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="uploadProfilePicture">Đường dẫn ảnh</label>
                                    <input type="file" multiple id="uploadProfilePicture" class="form-control"/>
                                    <div id="listImages">
                                        @foreach($productImages as $val)
                                            <img width="200"
                                                 src="{{route('file.show',$val->file_id)}}"
                                                 alt=""/>
                                            <span class="deleteImg" id="{{$val->file_id}}">
                                                x
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="name">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{$product->name}}">
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-5 form-group">
                                            <label for="price">Giá sản phẩm (VND)</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                   value="{{$product->price}}">
                                        </div>
                                        <div class="col-7 form-group">
                                            <label for="pixel_tiktok">Danh mục mục sản phẩm</label>
                                            <select class="form-control form-select" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="description">Mô tả sản phẩm</label>
                                    <textarea class="form-control" name="description" id="description"
                                              rows="5">{{$product->description}}</textarea>
                                </div>
                            </div>
                            {{--</form>--}}
                        </div>
                        <div class="tab-pane general-form url-video" id="tiktok-pane" role="tabpanel" aria-labelledby="tiktok" tabindex="0">
                            {{--<form action="" class="">--}}
                            <div class="row m-0">
                                {{--<div class="form-group col-12">--}}
                                    {{--<div class="row align-items-center">--}}
                                        {{--<h3 class="col-3">Video 1</h3>--}}
                                        {{--<div class="col-7">--}}
                                            {{--<input type="text" class="form-control" name="url[]"--}}
                                                   {{--placeholder="nhập đường dẫn..." >--}}
                                        {{--</div>--}}
                                        {{--<div class="col-2">--}}
                                            {{--<div class="action-video justify-content-end d-flex align-items-center">--}}
                                                {{--<div class="form-check form-switch me-3">--}}
                                                    {{--<input class="form-check-input" type="checkbox"--}}
                                                           {{--checked="">--}}
                                                {{--</div>--}}
                                                {{--<a href="#" class="nav-link">--}}
                                                    {{--<svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                                                         {{--xmlns="http://www.w3.org/2000/svg">--}}
                                                        {{--<path d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998"--}}
                                                              {{--stroke="#667085" stroke-width="1.5" stroke-linecap="round"--}}
                                                              {{--stroke-linejoin="round"/>--}}
                                                        {{--<path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97"--}}
                                                              {{--stroke="#667085" stroke-width="1.5" stroke-linecap="round"--}}
                                                              {{--stroke-linejoin="round"/>--}}
                                                        {{--<path d="M18.8499 9.14014L18.1999 19.2101C18.0899 20.7801 17.9999 22.0001 15.2099 22.0001H8.7899C5.9999 22.0001 5.9099 20.7801 5.7999 19.2101L5.1499 9.14014"--}}
                                                              {{--stroke="#667085" stroke-width="1.5" stroke-linecap="round"--}}
                                                              {{--stroke-linejoin="round"/>--}}
                                                        {{--<path d="M10.3301 16.5H13.6601" stroke="#667085"--}}
                                                              {{--stroke-width="1.5" stroke-linecap="round"--}}
                                                              {{--stroke-linejoin="round"/>--}}
                                                        {{--<path d="M9.5 12.5H14.5" stroke="#667085" stroke-width="1.5"--}}
                                                              {{--stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                    {{--</svg>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                               @foreach($product->productVideos as $value)
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
                                                Video 1
                                            </h3>
                                            <div class="col-7">
                                                <input type="text" class="form-control"  name="url[]"
                                                       value="{{$value->video_link}}">
                                            </div>
                                            <div class="col-2">
                                                <div class="action-video justify-content-end d-flex align-items-center">
                                                    <div class="form-check form-switch me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="flexSwitchCheckChecked" checked="">
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
                                   @endforeach
                                {{--<div class="col-12 text-end">--}}
                                {{--<button class="ms-3 btn-form create">Cập nhật sản phẩm</button>--}}
                                {{--</div>--}}
                            </div>
                            {{--</form>--}}
                        </div>
                        <div class="tab-pane general-form create-QR" id="qr-pane" role="tabpanel" aria-labelledby="qr"
                             tabindex="0">
                            {{--<form action="" class="">--}}
                            <div class="row">
                                <div class="col-3">
                                    <div class="imageQR">
                                        <img src="{{asset('web/images/image 73.png')}}" class="card-img-top" alt="">
                                    </div>
                                    <span class="success">
                                        <img src="{{asset('web/images/Frame 7558.png')}}" class="" width="18px" alt="">
                                            Tạo mã thành công
                                    </span>
                                </div>
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="name">Tiêu đề</label>
                                        <input type="text" class="form-control" id="nameQr" name="nameQr"
                                               placeholder="nhập tiêu đề cho mã QR này...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Nội dung</label>
                                        <textarea class="form-control" name="description" id="description"
                                                  placeholder="nội dung mô tả chi tiết..." rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <a href="#" class="nav-link refresh_QR">
                                        <img src="{{asset('web/images/refresh.png')}}" alt="">
                                        <p>Thiết lập lại</p>
                                    </a>
                                    {{--<button class="btn-form ms-4">Tạo mã QR</button>--}}
                                </div>
                            </div>
                            {{--</form>--}}
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button class="ms-3 btn-form create">Cập nhật sản phẩm</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('web/js/products.js')}}"></script>
@endpush