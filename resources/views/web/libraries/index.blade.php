@extends('web.layout.layout')

@section('content')
    <div class="content-header header-shop">
        <h1>Thư viện ảnh</h1>
        <ul class="nav nav-tabs filter-group-title" id="myTab" role="tablist">
            <li class="nav-item {{request()->url() == route('libraries.category', ["slug" => 'banner'])?'active':''}}" role="presentation">
                <a class="nav-link {{request()->url() == route('libraries.category', ["slug" => 'banner'])?'active':''}}" data-bs-toggle="tab" data-bs-target="#banner-pane" type="button" role="tab" aria-controls="banner-pane">
                    Banner
                </a>
            </li>
            <li class="nav-item {{request()->url() == route('libraries.category', ["slug" => 'san-pham'])?'active':''}}" role="presentation">
                <a class="nav-link {{request()->url() == route('libraries.category', ["slug" => 'san-pham'])?'active':''}}"  data-bs-toggle="tab" data-bs-target="#product-pane" type="button" role="tab" aria-controls="product-pane">
                    Sản phẩm
                </a>
            </li>
            <li class="nav-item {{request()->url() == route('libraries.category', ["slug" => 'avatar'])?'active':''}}" role="presentation">
                <a class="nav-link {{request()->url() == route('libraries.category', ["slug" => 'avatar'])?'active':''}}" data-bs-toggle="tab" data-bs-target="#avatar-pane" type="button" role="tab" aria-controls="avatar-pane">
                    Avatar
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane {{request()->url() == route('libraries.category', ["slug" => 'banner'])?'active':''}}" id="banner-pane" role="tabpanel" aria-labelledby="banner" tabindex="0">
                <div class="block-content">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>45 sản phẩm</h3>
                            </div>
                            <div class="col-6 text-end">
                                <div class="add-new">
                                    <a href="#" class="btn text-center add-gallery">
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.50004 8.33333C8.42052 8.33333 9.16671 7.58714 9.16671 6.66667C9.16671 5.74619 8.42052 5 7.50004 5C6.57957 5 5.83337 5.74619 5.83337 6.66667C5.83337 7.58714 6.57957 8.33333 7.50004 8.33333Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.8333 1.6665H7.49996C3.33329 1.6665 1.66663 3.33317 1.66663 7.49984V12.4998C1.66663 16.6665 3.33329 18.3332 7.49996 18.3332H12.5C16.6666 18.3332 18.3333 16.6665 18.3333 12.4998V8.33317" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.125 4.1665H17.7083" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                <path d="M15.4166 6.45833V1.875" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                <path d="M2.22498 15.7918L6.33331 13.0335C6.99164 12.5918 7.94164 12.6418 8.53331 13.1501L8.80831 13.3918C9.45831 13.9501 10.5083 13.9501 11.1583 13.3918L14.625 10.4168C15.275 9.85846 16.325 9.85846 16.975 10.4168L18.3333 11.5835" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Tải lên
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="row m-0 product-filter photo-library">
                            <div class="col-6">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo-1.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo-2.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo-3.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane {{request()->url() == route('libraries.category', ["slug" => 'san-pham'])?'active':''}}" id="product-pane" role="tabpanel" aria-labelledby="product" tabindex="0">
                <div class="block-content">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>45 hình ảnh</h3>
                            </div>
                            <div class="col-6 text-end">
                                <div class="add-new">
                                    <a href="#" class="btn text-center add-gallery">
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.50004 8.33333C8.42052 8.33333 9.16671 7.58714 9.16671 6.66667C9.16671 5.74619 8.42052 5 7.50004 5C6.57957 5 5.83337 5.74619 5.83337 6.66667C5.83337 7.58714 6.57957 8.33333 7.50004 8.33333Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.8333 1.6665H7.49996C3.33329 1.6665 1.66663 3.33317 1.66663 7.49984V12.4998C1.66663 16.6665 3.33329 18.3332 7.49996 18.3332H12.5C16.6666 18.3332 18.3333 16.6665 18.3333 12.4998V8.33317" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.125 4.1665H17.7083" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                <path d="M15.4166 6.45833V1.875" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                <path d="M2.22498 15.7918L6.33331 13.0335C6.99164 12.5918 7.94164 12.6418 8.53331 13.1501L8.80831 13.3918C9.45831 13.9501 10.5083 13.9501 11.1583 13.3918L14.625 10.4168C15.275 9.85846 16.325 9.85846 16.975 10.4168L18.3333 11.5835" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Tải lên
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="row m-0 product-filter photo-library">
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__1.png')}}" class="card-img-top" alt="..." />
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__2.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__3.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__4.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__5.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane {{request()->url() == route('libraries.category', ["slug" => 'avatar'])?'active':''}}" id="avatar-pane" role="tabpanel" aria-labelledby="avatar" tabindex="0">
                <div class="block-content">
                    <div class="title">
                        <div class="row m-0 align-items-center">
                            <div class="col-6">
                                <h3>50 hình ảnh</h3>
                            </div>
                            <div class="col-6 text-end">
                                <div class="add-new">
                                    <a href="#" class="btn text-center add-gallery">
                                        <p>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.50004 8.33333C8.42052 8.33333 9.16671 7.58714 9.16671 6.66667C9.16671 5.74619 8.42052 5 7.50004 5C6.57957 5 5.83337 5.74619 5.83337 6.66667C5.83337 7.58714 6.57957 8.33333 7.50004 8.33333Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.8333 1.6665H7.49996C3.33329 1.6665 1.66663 3.33317 1.66663 7.49984V12.4998C1.66663 16.6665 3.33329 18.3332 7.49996 18.3332H12.5C16.6666 18.3332 18.3333 16.6665 18.3333 12.4998V8.33317" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.125 4.1665H17.7083" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                <path d="M15.4166 6.45833V1.875" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                <path d="M2.22498 15.7918L6.33331 13.0335C6.99164 12.5918 7.94164 12.6418 8.53331 13.1501L8.80831 13.3918C9.45831 13.9501 10.5083 13.9501 11.1583 13.3918L14.625 10.4168C15.275 9.85846 16.325 9.85846 16.975 10.4168L18.3333 11.5835" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Tải lên
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="row m-0 product-filter photo-library">
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__1.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__2.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__3.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__4.png')}}" class="card-img-top" alt="..." />
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="wrap-pic product-item">
                                    <img src="{{asset('web/images/photo__5.png')}}" class="card-img-top" alt="..."/>
                                    <a href="" class="pic-more delete-gallery">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="14" cy="14" r="14" fill="black" fill-opacity="0.5"/>
                                            <path d="M20.75 9.48535C18.2525 9.23785 15.74 9.11035 13.235 9.11035C11.75 9.11035 10.265 9.18535 8.78 9.33535L7.25 9.48535" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.375 8.7275L11.54 7.745C11.66 7.0325 11.75 6.5 13.0175 6.5L14.9825 6.5C16.25 6.5 16.3475 7.0625 16.46 7.7525L16.625 8.7275" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.1375 11.8555L18.65 19.408C18.5675 20.5855 18.5 21.5005 16.4075 21.5005H11.5925C9.50005 21.5005 9.43255 20.5855 9.35005 19.408L8.86255 11.8555" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.7476 17.375H15.2451" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.125 14.375H15.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection