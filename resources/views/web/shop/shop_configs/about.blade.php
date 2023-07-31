@extends('web.layout.layout')

@section('content')
    <div class="content-header">
        <h1>Giới thiệu về tôi</h1>
    </div>
    @if(!empty($sites))
        <div class="row mt-4">
            <div class="col-8">
                <div class="add_product_block ">
                    <div class="personal-information content_left about_me">
                        <div class="configuration">
                            <form action="{{route('shops.home.update', ['code'=>$sites->code])}}"
                                  method="post" class="information-form general-form">
                                @csrf
                                <div class="user-block text-center col-12">
                                    <input accept="image/*" id="uploadProfilePicture"
                                           type="file" style="display: none;">
                                    <label for="uploadProfilePicture">
                                        <img id="img_show"
                                             src="{{route("file.show", data_get($configs, "avatar", ""))}}"
                                             alt=""/>

                                        <input type="hidden" name="configs[avatar]"
                                               value="{{data_get($configs, "avatar", "")}}" id="thumb">

                                        <img class="upload-thumb"
                                             src="{{asset('web/images/camera.svg')}}"
                                             alt="">
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="name">Tên hiển thị</label>
                                        <input type="text" class="form-control" id="name"
                                               name="name" value="{{$site->name}}"/>
                                    </div>

                                    <div class="col-6 form-group">
                                        <label for="pixel_tiktok">Danh sách themes</label>
                                        <select class="form-control form-select"
                                                name="theme_id">
                                            @foreach($themes as $theme)
                                                <option value="{{$theme->id}}" {{$site->theme_id == $theme->id ? 'selected' : ''}}>{{$theme->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone"
                                               name="phone"
                                               value="{{$site->phone}}"/>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email"
                                               name="email"
                                               value="{{$site->email}}"/>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="code">Code</label>
                                        <input type="text" class="form-control" id="code"
                                               name="code"
                                               value="{{$site->code}}"/>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="description">Mô tả</label>
                                        <textarea class="form-control" name="description"
                                                  id="description"
                                        >{{$site->description}}</textarea>
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text"
                                               class="form-control input-group-icon"
                                               id="facebook" name="configs[facebook]"
                                               value="{{data_get($configs, "facebook", "")}}"/>
                                        <span class="icon">
                                                                        <img src="{{asset('web/images/facebook.png')}}"
                                                                             alt=""/>
                                                                    </span>
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text"
                                               class="form-control input-group-icon"
                                               id="title" name="configs[tiktok]"
                                               value="{{data_get($configs, "tiktok", "")}}"/>
                                        <span class="icon">
                                                                        <img src="{{asset('web/images/tiktok.png')}}"
                                                                             alt=""/>
                                                                    </span>
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text"
                                               class="form-control input-group-icon"
                                               id="youtobe" name="configs[youtube]"
                                               value="{{data_get($configs, "youtube", "")}}"/>
                                        <span class="icon">
                                                                        <img src="{{asset('web/images/youtobe.png')}}"
                                                                             alt=""/>
                                                                    </span>
                                    </div>
                                    <div class="form-group col-12 form-check">
                                        <input class="form-check-input" value="1"
                                               type="radio" name="status" id="status1"
                                                {{$site->status == 1 ? 'checked' : ''}}>
                                        <label class="form-check-label" for="status1">
                                            active
                                        </label>
                                    </div>
                                    <div class="form-group col-12 form-check">
                                        <input class="form-check-input" value="0"
                                               type="radio" name="status" id="status2"
                                                {{$site->status == 0 ? 'checked' : ''}}>
                                        <label class="form-check-label" for="status2">
                                            inactive
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn">Cập nhật thông tin</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="pixel">
                            <form class="general-form pixel-form" style="display: none">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="pixel_tiktok">Pixel Tiktok</label>
                                        <input type="text" class="form-control"
                                               id="pixel_tiktok" name="pixel_tiktok"
                                               placeholder="Nhập mã pixel của bạn..."
                                               required/>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="pixel_facebook">Pixel Facebook</label>
                                        <input type="text" class="form-control"
                                               id="pixel_facebook" name="pixel_facebook"
                                               placeholder="Nhập mã pixel của bạn..."
                                               required/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="front_view_img">
                    <img src="{{asset('web/images/iPhone_X_Mockup_Front_View.png')}}" alt=""/>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('scripts')
    <script src="{{asset('web/js/shop.js')}}"></script>
@endpush