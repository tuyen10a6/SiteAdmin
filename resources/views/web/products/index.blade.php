@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Sản phẩm</h1>
        <ul class="nav nav-tabs filter-group-title" id="myTab" role="tablist">
            <li class="nav-item {{(Request::url() == route('products', ['code'=>$sites->code])) ? "active" : ""}}"
                role="presentation">
                <a class="nav-link ajax-link {{(Request::url() == route('products', ['code'=>$sites->code])) ? "active" : ""}}"
                   href="{{route('products', ['code'=>$sites->code])}}"
                   data-bs-toggle="tab" data-bs-target="#all-pane" type="button" role="tab" aria-controls="all-pane">
                    Tất cả
                </a>
            </li>
            @foreach($categories as $category)
                <li class="nav-item {{(Request::url() == route('products.category', ["slug" => $category->slug,'code'=>$sites->code])) ? "active" : ""}}"
                    role="presentation">
                    <a class="nav-link ajax-link {{(Request::url() == route('products.category', ["slug" => $category->slug,'code'=>$sites->code])) ? "active" : ''}}"
                       href="{{route('products.category', ["slug" => $category->slug,'code'=>$sites->code])}}"
                       data-bs-toggle="tab"
                       data-bs-target="#{{$category->slug}}-pane" type="button" role="tab"
                       aria-controls="{{$category->slug}}-pane">
                        {{$category->name}}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
    <div class="content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane {{(Request::url() == route('products', ['code'=>$sites->code])) ? "show active" : ""}}"
                 id="all-pane" role="tabpanel" aria-labelledby="all" tabindex="0">
                <div class="block-content">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>{{$products->count()}} sản phẩm</h3>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="row m-0 product-filter">
                            @foreach($products  as $key => $product)
                                <div class="col-edit">
                                    <div class="wrap-pic product-item">
                                        <img src="{{route('file.show', $product->default_img)}}" class="card-img-top"
                                             alt="..."/>
                                        <a href="" class="pic-more">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.36"/>
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
                                                <a href="{{route('products.show',['code'=>$sites->code, 'slug'=>$product->slug])}}"
                                                   class="nav-link">
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16428 2.39982L3.69095 8.19315C3.48428 8.41315 3.28428 8.84649 3.24428 9.14649L2.99762 11.3065C2.91095 12.0865 3.47095 12.6198 4.24428 12.4865L6.39095 12.1198C6.69095 12.0665 7.11095 11.8465 7.31762 11.6198L12.7909 5.82649C13.7376 4.82649 14.1643 3.68649 12.6909 2.29315C11.2243 0.913152 10.1109 1.39982 9.16428 2.39982Z"
                                                              stroke="#101828" stroke-width="1.5"
                                                              stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.25098 3.3667C8.53764 5.2067 10.031 6.61337 11.8843 6.80003"
                                                              stroke="#101828" stroke-width="1.5"
                                                              stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M2.32422 14.6665H14.3242" stroke="#101828"
                                                              stroke-width="1.5" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <p>Chỉnh sửa</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('products.delete',['code'=>$sites->code, 'category'=>$category->slug, 'slug'=>$product->slug])}}"
                                                   class="nav-link">
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
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
                                                        <path d="M7.21094 11H9.43094" stroke="#344054"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                        <path d="M6.65747 8.3335H9.9908" stroke="#344054"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                    <p>Xóa</p>
                                                </a>

                                            </li>
                                        </ul>
                                        <div class="product-item-text">
                                            <h6>{{$product->name}}</h6>
                                            <span class="price-name">Giá:</span>
                                            <span class="price-value">{{number_format($product->price)}}đ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12 mt-3">
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($categories as $category)
                <div class="tab-pane {{(Request::url() == route('products.category', ["slug" => $category->slug,'code'=>$sites->code])) ? "show active" : ""}}"
                     id="{{$category->slug}}-pane" role="tabpanel" aria-labelledby="{{$category->slug}}" tabindex="0">
                    <div class="block-content">
                        <div class="title">
                            <div class="row m-0 align-items-center">
                                <div class="col-6">
                                    <h3>{{$products->count()}} sản phẩm</h3>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="add-new">
                                        <a href="{{route('products.create',["slug" => $category->slug,'code'=>$sites->code])}}"
                                           class="btn1 btn text-center">
                                            <p><i class="fas fa-plus"></i> Thêm mới</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="row m-0 product-filter">
                                @foreach($products  as $key => $product)
                                    <div class="col-edit">
                                        <div class="wrap-pic product-item">
                                            <img src="{{route('file.show', $product->default_img)}}"
                                                 class="card-img-top"
                                                 alt="..."/>
                                            <a href="" class="pic-more">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.36"/>
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
                                                    <a href="{{route('products.show',['code'=>$sites->code,'category' => $category->slug , 'slug'=>$product->slug])}}"
                                                       class="nav-link">
                                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.16428 2.39982L3.69095 8.19315C3.48428 8.41315 3.28428 8.84649 3.24428 9.14649L2.99762 11.3065C2.91095 12.0865 3.47095 12.6198 4.24428 12.4865L6.39095 12.1198C6.69095 12.0665 7.11095 11.8465 7.31762 11.6198L12.7909 5.82649C13.7376 4.82649 14.1643 3.68649 12.6909 2.29315C11.2243 0.913152 10.1109 1.39982 9.16428 2.39982Z"
                                                                  stroke="#101828" stroke-width="1.5"
                                                                  stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M8.25098 3.3667C8.53764 5.2067 10.031 6.61337 11.8843 6.80003"
                                                                  stroke="#101828" stroke-width="1.5"
                                                                  stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M2.32422 14.6665H14.3242" stroke="#101828"
                                                                  stroke-width="1.5" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <p>Chỉnh sửa</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('products.delete',['code'=>$sites->code, 'category'=>$category->slug, 'slug'=>$product->slug])}}"
                                                       class="nav-link">
                                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
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
                                                            <path d="M7.21094 11H9.43094" stroke="#344054"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                            <path d="M6.65747 8.3335H9.9908" stroke="#344054"
                                                                  stroke-width="1.5" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                        </svg>
                                                        <p>Xóa</p>
                                                    </a>

                                                </li>
                                            </ul>
                                            <div class="product-item-text">
                                                <h6>{{$product->name}}</h6>
                                                <span class="price-name">Giá:</span>
                                                <span class="price-value">{{number_format($product->price)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12 mt-3">
                                    {{$products->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('web/js/products.js')}}"></script>
@endpush