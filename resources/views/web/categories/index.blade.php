@extends('web.layout.layout')

@section('content')
    <div class="content-header">
        <h1>Danh mục</h1>
    </div>
    <div class="content">
        <div class="block-content">
            <div class="title">
                <div class="row m-0 align-items-center">
                    <div class="col-6">
                        <h3>{{$categories->count()}} ngành hàng</h3>
                    </div>
                    <div class="col-6 text-end">
                        <div class="add-new">
                            <a href="{{route('categories.create',['code'=>$sites->code])}}"
                               class="btn1 btn text-center">
                                <p><i class="fas fa-plus"></i> Thêm mới</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="row m-0">
                    @foreach($categories as $category)
                        <div class="col-md-3">
                            <div class="wrap-pic">
                                <img
                                        src="{{route('file.show',$category->file_id)}}"
                                        class="card-img-top"
                                        alt="..."
                                />
                                <a href="{{route('categories.show', [$sites->code, 'categoryId' => $category->id])}}"
                                   class="ab-t-l"></a>

                                <span class="wrap-pic-name"> {{$category->name}}</span>
                                <a href="" class="pic-more">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 5C14 3.9 13.1 3 12 3C10.9 3 10 3.9 10 5C10 6.1 10.9 7 12 7C13.1 7 14 6.1 14 5Z"
                                              fill="white"/>
                                        <path d="M14 19C14 17.9 13.1 17 12 17C10.9 17 10 17.9 10 19C10 20.1 10.9 21 12 21C13.1 21 14 20.1 14 19Z"
                                              fill="white"/>
                                        <path d="M14 12C14 10.9 13.1 10 12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12Z"
                                              fill="white"/>
                                    </svg>
                                </a>
                                <ul class="nav list-action">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.37992 3.95312L2.33325 7.99979L6.37992 12.0465"
                                                      stroke="#101828" stroke-width="1.5" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.6668 8H2.44678" stroke="#101828" stroke-width="1.5"
                                                      stroke-miterlimit="10" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                            <p>Ưu tiên</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('shops/' . $sites->code . '/delete/' .$category->slug)}}"
                                           class="nav-link">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 3.98665C11.78 3.76665 9.54667 3.65332 7.32 3.65332C6 3.65332 4.68 3.71999 3.36 3.85332L2 3.98665"
                                                      stroke="#344054" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M5.66675 3.3135L5.81341 2.44016C5.92008 1.80683 6.00008 1.3335 7.12675 1.3335H8.87341C10.0001 1.3335 10.0867 1.8335 10.1867 2.44683L10.3334 3.3135"
                                                      stroke="#344054" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M12.5667 6.09326L12.1334 12.8066C12.06 13.8533 12 14.6666 10.14 14.6666H5.86002C4.00002 14.6666 3.94002 13.8533 3.86668 12.8066L3.43335 6.09326"
                                                      stroke="#344054" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M6.88672 11H9.10672" stroke="#344054" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.33325 8.3335H9.66659" stroke="#344054" stroke-width="1.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <p>Xóa</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 mt-3">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('web/js/category.js')}}"></script>
@endpush
