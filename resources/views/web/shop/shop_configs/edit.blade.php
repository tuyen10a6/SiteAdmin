@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Cấu hình shop</h1>
        <ul class="nav nav-tabs filter-group-title" id="myTab" role="tablist">
            @if(!empty($sites))
                <li class="nav-item {{ Request::url() == route('shops.home.show', [$sites->code]) ? "active" : ""}}"
                    role="presentation">
                    <a class="nav-link {{ Request::url() == route('shops.home.show', [$sites->code]) ? "active" : ""}}"
                       id="home" href="{{route('shops.home.show', [$sites->code])}}" data-bs-toggle="tab"
                       data-bs-target="#home-pane" type="button" role="tab" aria-controls="home-pane"
                       aria-selected="true">
                        Trang chủ
                    </a>
                </li>
            @endif
            @if(!empty($sites))
                <li class="nav-item "
                    role="presentation">
                    <a class="nav-link "
                       href="" id="detail" data-bs-toggle="tab"
                       data-bs-target="#detail-pane" type="button" role="tab" aria-controls="detail-pane"
                       aria-selected="false">
                        Trang chi tiết sản phẩm
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <div class="content">
        @include('web.layout.alert')

        <div class="tab-content" id="myTabContent">
            @if(!empty($sites))
                <div class="tab-pane {{ Request::url() == route('shops.home.show', [$sites->code]) ? "active show" : ""}}"
                     id="home-pane" role="tabpanel" aria-labelledby="home" tabindex="0">
                    <div class="row m-0">
                        <div class="col-8">
                            <div class="add_product_block ">
                                <div class="accordion accordion-flush" id="list_items">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Giới thiệu về tôi
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             data-bs-parent="#list_items">
                                            <div class="accordion-body">
                                                <div class="personal-information content_left about_me">
                                                    <div class="configuration">
                                                        <form action=""
                                                              method="post" class="information-form general-form">
                                                            @csrf
                                                            <div class="user-block text-center col-12">
                                                                <input accept="image/*" id="uploadProfilePicture"
                                                                       type="file" style="display: none;">
                                                                <label for="uploadProfilePicture">
                                                                    <img id="img_show"
                                                                         src="{{route("file.show", data_get($configs, "avatar", ""))}}"
                                                                         alt=""/>

                                                                    <input type="hidden" name="configs[avatar]" value="{{data_get($configs, "avatar", "")}}" id="thumb">

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
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Sản phẩm nổi bật
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                             data-bs-parent="#list_items">
                                            <div class="accordion-body">
                                                <div class="row product-filter content_left pb-4">

                                                    <div class="col-4">
                                                        <div class="wrap-pic product-item">
                                                            <img src="{{asset('web/images/Rectangle.png')}}"
                                                                 class="card-img-top" alt="..."/>
                                                            <a href="" class="pic-more">
                                                                <svg width="28" height="28" viewBox="0 0 28 28"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="14" cy="14" r="14" fill="black"
                                                                            fill-opacity="0.36"/>
                                                                    <path d="M15.6667 8.16667C15.6667 7.25 14.9167 6.5 14.0001 6.5C13.0834 6.5 12.3334 7.25 12.3334 8.16667C12.3334 9.08333 13.0834 9.83333 14.0001 9.83333C14.9167 9.83333 15.6667 9.08333 15.6667 8.16667Z"
                                                                          fill="white"/>
                                                                    <path d="M15.6667 19.8332C15.6667 18.9165 14.9167 18.1665 14.0001 18.1665C13.0834 18.1665 12.3334 18.9165 12.3334 19.8332C12.3334 20.7498 13.0834 21.4998 14.0001 21.4998C14.9167 21.4998 15.6667 20.7498 15.6667 19.8332Z"
                                                                          fill="white"/>
                                                                    <path d="M15.6667 14.0002C15.6667 13.0835 14.9167 12.3335 14.0001 12.3335C13.0834 12.3335 12.3334 13.0835 12.3334 14.0002C12.3334 14.9168 13.0834 15.6668 14.0001 15.6668C14.9167 15.6668 15.6667 14.9168 15.6667 14.0002Z"
                                                                          fill="white"/>
                                                                </svg>
                                                            </a>
                                                            <ul class="nav list-action">
                                                                <li class="nav-item">
                                                                    <a href="{{url('/products/edit/id')}}"
                                                                       class="nav-link">
                                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16428 2.39982L3.69095 8.19315C3.48428 8.41315 3.28428 8.84649 3.24428 9.14649L2.99762 11.3065C2.91095 12.0865 3.47095 12.6198 4.24428 12.4865L6.39095 12.1198C6.69095 12.0665 7.11095 11.8465 7.31762 11.6198L12.7909 5.82649C13.7376 4.82649 14.1643 3.68649 12.6909 2.29315C11.2243 0.913152 10.1109 1.39982 9.16428 2.39982Z"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M8.25098 3.3667C8.53764 5.2067 10.031 6.61337 11.8843 6.80003"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M2.32422 14.6665H14.3242"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <p>Chỉnh sửa</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-bs-toggle="modal"
                                                                       data-bs-target="#1">
                                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.3242 3.98665C12.1042 3.76665 9.87089 3.65332 7.64422 3.65332C6.32422 3.65332 5.00422 3.71999 3.68422 3.85332L2.32422 3.98665"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M5.99097 3.3135L6.13763 2.44016C6.2443 1.80683 6.3243 1.3335 7.45097 1.3335H9.19763C10.3243 1.3335 10.411 1.8335 10.511 2.44683L10.6576 3.3135"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M12.8909 6.09326L12.4576 12.8066C12.3842 13.8533 12.3242 14.6666 10.4642 14.6666H6.18424C4.32423 14.6666 4.26424 13.8533 4.1909 12.8066L3.75757 6.09326"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M7.21094 11H9.43094"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M6.65747 8.3335H9.9908"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <p>Xóa</p>
                                                                    </a>
                                                                    <div class="modal fade modal-delete" id="1"
                                                                         tabindex="-1" aria-labelledby="1-product"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="1-product">
                                                                                        <img src="{{asset('web/images/Featured_icon.png')}}"
                                                                                             alt=""/>
                                                                                    </h1>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <h3>Xóa sản phẩm?</h3>
                                                                                    <small>Các thông tin của sản phẩm sẽ
                                                                                        không
                                                                                        được lưu sau khi xóa. Bạn có
                                                                                        chắc muốn
                                                                                        xóa sản phẩm này?
                                                                                    </small>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-close-white"
                                                                                            data-bs-dismiss="modal">
                                                                                        Hủy bỏ
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn btn-danger">
                                                                                        Xóa
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="product-item-text">
                                                                <h6>Sản phẩm 1 - Tên sản phẩm dài...</h6>
                                                                <span class="price-name">Giá:</span>
                                                                <span class="price-value">120.000đ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="wrap-pic product-item">
                                                            <img src="{{asset('web/images/Rectangle2.png')}}"
                                                                 class="card-img-top" alt="..."/>
                                                            <a href="" class="pic-more">
                                                                <svg width="28" height="28" viewBox="0 0 28 28"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="14" cy="14" r="14" fill="black"
                                                                            fill-opacity="0.36"/>
                                                                    <path d="M15.6667 8.16667C15.6667 7.25 14.9167 6.5 14.0001 6.5C13.0834 6.5 12.3334 7.25 12.3334 8.16667C12.3334 9.08333 13.0834 9.83333 14.0001 9.83333C14.9167 9.83333 15.6667 9.08333 15.6667 8.16667Z"
                                                                          fill="white"/>
                                                                    <path d="M15.6667 19.8332C15.6667 18.9165 14.9167 18.1665 14.0001 18.1665C13.0834 18.1665 12.3334 18.9165 12.3334 19.8332C12.3334 20.7498 13.0834 21.4998 14.0001 21.4998C14.9167 21.4998 15.6667 20.7498 15.6667 19.8332Z"
                                                                          fill="white"/>
                                                                    <path d="M15.6667 14.0002C15.6667 13.0835 14.9167 12.3335 14.0001 12.3335C13.0834 12.3335 12.3334 13.0835 12.3334 14.0002C12.3334 14.9168 13.0834 15.6668 14.0001 15.6668C14.9167 15.6668 15.6667 14.9168 15.6667 14.0002Z"
                                                                          fill="white"/>
                                                                </svg>
                                                            </a>
                                                            <ul class="nav list-action">
                                                                <li class="nav-item">
                                                                    <a href="{{url('/products/edit/id')}}"
                                                                       class="nav-link">
                                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16428 2.39982L3.69095 8.19315C3.48428 8.41315 3.28428 8.84649 3.24428 9.14649L2.99762 11.3065C2.91095 12.0865 3.47095 12.6198 4.24428 12.4865L6.39095 12.1198C6.69095 12.0665 7.11095 11.8465 7.31762 11.6198L12.7909 5.82649C13.7376 4.82649 14.1643 3.68649 12.6909 2.29315C11.2243 0.913152 10.1109 1.39982 9.16428 2.39982Z"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M8.25098 3.3667C8.53764 5.2067 10.031 6.61337 11.8843 6.80003"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M2.32422 14.6665H14.3242"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <p>Chỉnh sửa</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-bs-toggle="modal"
                                                                       data-bs-target="#2">
                                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.3242 3.98665C12.1042 3.76665 9.87089 3.65332 7.64422 3.65332C6.32422 3.65332 5.00422 3.71999 3.68422 3.85332L2.32422 3.98665"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M5.99097 3.3135L6.13763 2.44016C6.2443 1.80683 6.3243 1.3335 7.45097 1.3335H9.19763C10.3243 1.3335 10.411 1.8335 10.511 2.44683L10.6576 3.3135"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M12.8909 6.09326L12.4576 12.8066C12.3842 13.8533 12.3242 14.6666 10.4642 14.6666H6.18424C4.32423 14.6666 4.26424 13.8533 4.1909 12.8066L3.75757 6.09326"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M7.21094 11H9.43094"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M6.65747 8.3335H9.9908"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <p>Xóa</p>
                                                                    </a>
                                                                    <div class="modal fade modal-delete" id="2"
                                                                         tabindex="-1" aria-labelledby="2-product"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="1-product">
                                                                                        <img src="{{asset('web/images/Featured_icon.png')}}"
                                                                                             alt=""/>
                                                                                    </h1>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <h3>Xóa sản phẩm?</h3>
                                                                                    <small>Các thông tin của sản phẩm sẽ
                                                                                        không
                                                                                        được lưu sau khi xóa. Bạn có
                                                                                        chắc muốn
                                                                                        xóa sản phẩm này?
                                                                                    </small>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-close-white"
                                                                                            data-bs-dismiss="modal">
                                                                                        Hủy bỏ
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn btn-danger">
                                                                                        Xóa
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="product-item-text">
                                                                <h6>Sản phẩm 1 - Tên sản phẩm dài...</h6>
                                                                <span class="price-name">Giá:</span>
                                                                <span class="price-value">120.000đ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="wrap-pic product-item">
                                                            <img src="{{asset('web/images/Rectangle3.png')}}"
                                                                 class="card-img-top" alt="..."/>
                                                            <a href="" class="pic-more">
                                                                <svg width="28" height="28" viewBox="0 0 28 28"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="14" cy="14" r="14" fill="black"
                                                                            fill-opacity="0.36"/>
                                                                    <path d="M15.6667 8.16667C15.6667 7.25 14.9167 6.5 14.0001 6.5C13.0834 6.5 12.3334 7.25 12.3334 8.16667C12.3334 9.08333 13.0834 9.83333 14.0001 9.83333C14.9167 9.83333 15.6667 9.08333 15.6667 8.16667Z"
                                                                          fill="white"/>
                                                                    <path d="M15.6667 19.8332C15.6667 18.9165 14.9167 18.1665 14.0001 18.1665C13.0834 18.1665 12.3334 18.9165 12.3334 19.8332C12.3334 20.7498 13.0834 21.4998 14.0001 21.4998C14.9167 21.4998 15.6667 20.7498 15.6667 19.8332Z"
                                                                          fill="white"/>
                                                                    <path d="M15.6667 14.0002C15.6667 13.0835 14.9167 12.3335 14.0001 12.3335C13.0834 12.3335 12.3334 13.0835 12.3334 14.0002C12.3334 14.9168 13.0834 15.6668 14.0001 15.6668C14.9167 15.6668 15.6667 14.9168 15.6667 14.0002Z"
                                                                          fill="white"/>
                                                                </svg>
                                                            </a>
                                                            <ul class="nav list-action">
                                                                <li class="nav-item">
                                                                    <a href="{{url('/products/edit/id')}}"
                                                                       class="nav-link">
                                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16428 2.39982L3.69095 8.19315C3.48428 8.41315 3.28428 8.84649 3.24428 9.14649L2.99762 11.3065C2.91095 12.0865 3.47095 12.6198 4.24428 12.4865L6.39095 12.1198C6.69095 12.0665 7.11095 11.8465 7.31762 11.6198L12.7909 5.82649C13.7376 4.82649 14.1643 3.68649 12.6909 2.29315C11.2243 0.913152 10.1109 1.39982 9.16428 2.39982Z"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M8.25098 3.3667C8.53764 5.2067 10.031 6.61337 11.8843 6.80003"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M2.32422 14.6665H14.3242"
                                                                                  stroke="#101828" stroke-width="1.5"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <p>Chỉnh sửa</p>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link" data-bs-toggle="modal"
                                                                       data-bs-target="#3">
                                                                        <svg width="17" height="16" viewBox="0 0 17 16"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.3242 3.98665C12.1042 3.76665 9.87089 3.65332 7.64422 3.65332C6.32422 3.65332 5.00422 3.71999 3.68422 3.85332L2.32422 3.98665"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M5.99097 3.3135L6.13763 2.44016C6.2443 1.80683 6.3243 1.3335 7.45097 1.3335H9.19763C10.3243 1.3335 10.411 1.8335 10.511 2.44683L10.6576 3.3135"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M12.8909 6.09326L12.4576 12.8066C12.3842 13.8533 12.3242 14.6666 10.4642 14.6666H6.18424C4.32423 14.6666 4.26424 13.8533 4.1909 12.8066L3.75757 6.09326"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M7.21094 11H9.43094"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                            <path d="M6.65747 8.3335H9.9908"
                                                                                  stroke="#344054" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"/>
                                                                        </svg>
                                                                        <p>Xóa</p>
                                                                    </a>
                                                                    <div class="modal fade modal-delete" id="3"
                                                                         tabindex="-1" aria-labelledby="3-product"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h1 class="modal-title fs-5"
                                                                                        id="3-product">
                                                                                        <img src="{{asset('web/images/Featured_icon.png')}}"
                                                                                             alt=""/>
                                                                                    </h1>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <h3>Xóa sản phẩm?</h3>
                                                                                    <small>Các thông tin của sản phẩm sẽ
                                                                                        không
                                                                                        được lưu sau khi xóa. Bạn có
                                                                                        chắc muốn
                                                                                        xóa sản phẩm này?
                                                                                    </small>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-close-white"
                                                                                            data-bs-dismiss="modal">
                                                                                        Hủy bỏ
                                                                                    </button>
                                                                                    <button type="button"
                                                                                            class="btn btn-danger">
                                                                                        Xóa
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="product-item-text">
                                                                <h6>Sản phẩm 1 - Tên sản phẩm dài...</h6>
                                                                <span class="price-name">Giá:</span>
                                                                <span class="price-value">120.000đ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="more_products">
                                                            <div class="add-circle">
                                                                <a href="#" class="nav-link" data-bs-toggle="modal"
                                                                   data-bs-target="#modal">
                                                                    <svg width="40" height="40" viewBox="0 0 40 40"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M20.0002 36.6668C29.1668 36.6668 36.6668 29.1668 36.6668 20.0002C36.6668 10.8335 29.1668 3.3335 20.0002 3.3335C10.8335 3.3335 3.3335 10.8335 3.3335 20.0002C3.3335 29.1668 10.8335 36.6668 20.0002 36.6668Z"
                                                                              stroke="#3293FA" stroke-width="1.5"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                        <path d="M13.3335 20H26.6668" stroke="#3293FA"
                                                                              stroke-width="1.5" stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                        <path d="M20 26.6668V13.3335" stroke="#3293FA"
                                                                              stroke-width="1.5" stroke-linecap="round"
                                                                              stroke-linejoin="round"/>
                                                                    </svg>
                                                                </a>
                                                                <p>Thêm sản phẩm <br/>(Tối đa 6)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal" data-bs-backdrop="static"
                                                         data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal"
                                                         aria-hidden="true">
                                                        <form action="" method="get">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title"
                                                                            id="staticBackdropLabel">
                                                                            Chọn sản phẩm thêm vào <br> "Sản phẩm nổi
                                                                            bật"
                                                                            <p>Bạn được thêm 2 sản phẩm nữa</p>
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="" class="general-form">
                                                                            <div class="row">
                                                                                <div class="form-group col-4">
                                                                                    <select class="form-select">
                                                                                        <option selected>Danh mục
                                                                                        </option>
                                                                                        <option value="1">One</option>
                                                                                        <option value="2">Two</option>
                                                                                        <option value="3">Three</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4">
                                                                                            <div class="wrap-pic">
                                                                                                <label>
                                                                                                    <img src="{{asset('web/images/photo9.png')}}"
                                                                                                         class="card-img-top"
                                                                                                         alt="...">
                                                                                                    <span class="pic-checked">
                                                                    <input type="checkbox" name="checkbox">
                                                                </span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="wrap-pic">
                                                                                                <label>
                                                                                                    <img src="{{asset('web/images/photo10.png')}}"
                                                                                                         class="card-img-top"
                                                                                                         alt="...">
                                                                                                    <span class="pic-checked">
                                                                    <input type="checkbox" name="checkbox">
                                                                </span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="wrap-pic">
                                                                                                <label>
                                                                                                    <img src="{{asset('web/images/photo11.png')}}"
                                                                                                         class="card-img-top"
                                                                                                         alt="...">
                                                                                                    <span class="pic-checked">
                                                                    <input type="checkbox" name="checkbox">
                                                                </span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="wrap-pic">
                                                                                                <label>
                                                                                                    <img src="{{asset('web/images/photo12.png')}}"
                                                                                                         class="card-img-top"
                                                                                                         alt="...">
                                                                                                    <span class="pic-checked">
                                                                    <input type="checkbox" name="checkbox">
                                                                </span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">
                                                                            Quay lại
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Xác nhận
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                Chính sách bán hàng
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                             data-bs-parent="#list_items">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is
                                                the third item's accordion body. Nothing more exciting happening here in
                                                terms of content, but just filling up the space to make it look, at
                                                least at first glance, a bit more representative of how this would look
                                                in a real-world application.
                                            </div>
                                        </div>
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
                </div>
            @endif
            @if(!empty($sites))
                <div class="tab-pane" id="detail-pane" role="tabpanel" aria-labelledby="detail" tabindex="0">
                    <div class="row m-0">
                        <div class="col-8">
                            <div class="product-details list-products-block add_product_block">
                                <div class="accordion accordion-flush" id="list_items">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Ứng dụng chat
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             data-bs-parent="#list_items">
                                            <div class="accordion-body">
                                                <div class="product-filter content_left pb-4 chat_app">
                                                    <!-- form chat app -->
                                                    <form action="{{route('shops.home.updateChatApp',['code' => $sites->code])}}"
                                                          method="post"
                                                          class="general-form url-video form_chat_app">
                                                        @csrf
                                                        <div class="row m-0">
                                                            <div class="form-group col-12">
                                                                <div class="row align-items-center">
                                                                    <h3 class="col-4">
                                                                        <img class="me-3"
                                                                             src="{{asset('web/images/image 70.png')}}"
                                                                             alt="">
                                                                        Zalo
                                                                    </h3>
                                                                    <div class="col-6">
                                                                        <input type="text" class="form-control" id="url"
                                                                               name="zalo"
                                                                               value="{{!isset($configs->zalo) ? '' : $configs->zalo }}">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="action-video justify-content-end d-flex align-items-center">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                       type="checkbox"
                                                                                       id="flexSwitchCheckChecked"
                                                                                       checked="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <div class="row align-items-center">
                                                                    <h3 class="col-4">
                                                                        <img class="me-3"
                                                                             src="{{asset('web/images/image 71.png')}}"
                                                                             alt="">
                                                                        Messenger
                                                                    </h3>
                                                                    <div class="col-6">
                                                                        <input type="text" class="form-control"
                                                                               id="messenger"
                                                                               name="messenger"
                                                                               value="{{!isset($configs->messenger) ? '' : $configs->messenger }}">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <div class="action-video justify-content-end d-flex align-items-center">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input"
                                                                                       type="checkbox"
                                                                                       id="flexSwitchCheckChecked"
                                                                                       checked="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <button class="btn">Lưu thông tin</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('web/js/shop.js')}}"></script>
@endpush