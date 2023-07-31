@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Sản phẩm nổi bật</h1>

    </div>
    <div class="content">
        <div class="row m-0">
            <div class="col-8">
                @include('web.layout.alert')
                <div class="row product-filter content_left pb-4">
                    @if(isset($topProducts))
                        @foreach($topProducts as $topProduct)
                            <div class="col-4">
                                <div class="wrap-pic product-item">
                                    <img src="{{route('file.show', $topProduct->product->default_img)}}"
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
                                            <a href="{{route('products.show', ['code' => $sites->code, 'slug' => $topProduct->product->slug])}}"
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
                                            <a href="{{route('shops.delete_hot_product', ['code'=>$sites->code, 'id'=> $topProduct->product->id])}}"
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
                                        <h6>{{$topProduct->product->name}}</h6>
                                        <span class="price-name">Giá:</span>
                                        <span class="price-value">{{number_format($topProduct->product->price)}}đ</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if($topProducts->count() < 6)
                    <div class="col-4">
                        <div class="more_products">
                            <div class="add-circle">
                                <a href="#" id="addTopProducts" class="nav-link" data-bs-toggle="modal"
                                   data-bs-target="#modal">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.0002 36.6668C29.1668 36.6668 36.6668 29.1668 36.6668 20.0002C36.6668 10.8335 29.1668 3.3335 20.0002 3.3335C10.8335 3.3335 3.3335 10.8335 3.3335 20.0002C3.3335 29.1668 10.8335 36.6668 20.0002 36.6668Z"
                                              stroke="#3293FA" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M13.3335 20H26.6668" stroke="#3293FA" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20 26.6668V13.3335" stroke="#3293FA" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <p>Thêm sản phẩm <br/>(Tối đa 6)</p>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Modal -->
                    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                         aria-labelledby="modal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('shops.choice_featured_products', ['code'=>$sites->code])}}"
                                      method="post" class="general-form">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="staticBackdropLabel">
                                            Chọn sản phẩm thêm vào <br> "Sản phẩm nổi bật"
                                            <p>Bạn được thêm 2 sản phẩm nữa</p>
                                        </h1>
                                        <button class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <select class="form-select" name="category_id">
                                                    <option value="0">Tất cả</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="row" id="list-produts-hot"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Quay lại
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            Xác nhận
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('web/js/hot_products.js')}}"></script>
@endpush
