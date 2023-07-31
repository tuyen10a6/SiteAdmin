@extends('web.layout.layout')

@section('content')
    <div class="content-header">
        <h1>Danh mục</h1>
    </div>
    <div class="content">
        <div class="block-content">
            <div class="back-home">
@include('web.layout.alert')
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
                        <h3>Chỉnh sửa ngành hàng</h3>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <form action="" method="post" class="general-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="uploadProfilePicture">Đường dẫn ảnh</label>
                            <input type="file" id="uploadProfilePicture" class="form-control"/>
                           <div id="listImages">

                               <img id="img_show" width="200"
                                    src="{{route('file.show',$category->file_id)}}"
                                    alt=""/>
                               <input type="hidden" name="file_id" value="{{$category->file_id}}"
                                      id="thumb">
                           </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="name">Danh mục </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}"required/>
                        </div>
                        <div class="form-group col-6">
                            <label for="position">Vị trí của danh mục</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{$category->position}}" required/>
                        </div>
                        {{--<div class="form-group col-12">--}}
                            {{--<label >Chọn ảnh</label>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="wrap-pic">--}}
                                        {{--<label>--}}
                                            {{--<img src="{{asset('web/images/photo9.png')}}" class="card-img-top" alt="..."/>--}}
                                            {{--<span class="pic-checked">--}}
                                                {{--<input type="checkbox" name="checkbox"/>--}}
                                            {{--</span>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="wrap-pic">--}}
                                        {{--<label>--}}
                                            {{--<img src="{{asset('web/images/photo10.png')}}" class="card-img-top" alt="..."/>--}}
                                            {{--<span class="pic-checked">--}}
                                                {{--<input type="checkbox" name="checkbox"/>--}}
                                            {{--</span>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="wrap-pic">--}}
                                        {{--<label>--}}
                                            {{--<img src="{{asset('web/images/photo11.png')}}" class="card-img-top" alt="..."/>--}}
                                            {{--<span class="pic-checked">--}}
                                                {{--<input type="checkbox" name="checkbox"/>--}}
                                            {{--</span>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="wrap-pic">--}}
                                        {{--<label>--}}
                                            {{--<img src="{{asset('web/images/photo12.png')}}" class="card-img-top" alt="..."/>--}}
                                            {{--<span class="pic-checked">--}}
                                                {{--<input type="checkbox" name="checkbox"/>--}}
                                            {{--</span>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group col-12 form-check">--}}
                                {{--<input class="form-check-input" value="1" type="radio" name="status" id="status1" {{$category->status == 1 ? 'checked': ''}}>--}}
                                {{--<label class="form-check-label" for="status1">--}}
                                    {{--active--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" value="0" type="radio" name="status" id="status2" {{$category->status == 0 ? 'checked': ''}}>--}}
                                {{--<label class="form-check-label" for="status2">--}}
                                    {{--inactive--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group col-12 text-end">
                            <button class="btn-form cancel">Hủy bỏ</button>
                            <button class="ms-3 btn-form create">Cập nhật</button>
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