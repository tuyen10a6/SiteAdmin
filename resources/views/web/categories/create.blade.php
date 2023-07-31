@extends('web.layout.layout')

@section('content')
    <div class="content-header">
        <h1>Danh mục</h1>
    </div>
    <div class="content">
        <div class="block-content">
            <div class="back-home">
                    <a href="{{route('categories', ['code'=>$sites->code])}}" class="nav-link">
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
                        <h3>Thêm mới ngành hàng</h3>
                    </div>
                </div>
            </div>
            <div class="main-content">
                    <form action="{{route('categories.store', ['code'=>$sites->code])}}" method="post"
                          class="general-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="uploadProfilePicture">Đường dẫn ảnh</label>
                                <input type="file" id="uploadProfilePicture" class="form-control"/>
                                <div id="listImages">
                                    <img id="img_show" width="200"
                                         src=""
                                         alt=""/>
                                    <input type="hidden" name="file_id"
                                           id="thumb">
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="name">Danh mục </label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="nhập tên danh mục..." required/>
                            </div>
                            <div class="form-group col-6">
                                <label for="position">Vị trí của danh mục</label>
                                <input type="text" class="form-control" id="position" name="position"
                                       placeholder="Nhập vị trí của danh mục..." required/>
                            </div>
                            <div class="form-group col-12 form-check">
                                <input class="form-check-input" value="1" type="radio" name="status" id="status1"
                                       checked>
                                <label class="form-check-label" for="status1">
                                    active
                                </label>
                            </div>
                            <div class="form-group col-12 form-check">
                                <input class="form-check-input" value="0" type="radio" name="status" id="status2">
                                <label class="form-check-label" for="status2">
                                    inactive
                                </label>
                            </div>
                            <div class="form-group col-12 text-end">
                                <button class="btn-form cancel">Hủy bỏ</button>
                                <button class="ms-3 btn-form create">Tạo</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{asset('web/js/category.js')}}"></script>
@endpush