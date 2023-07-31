<div class="sidenav">
    <div class="sidenav-menu">
        <div class="logo">
            <a href="#">
                <img src="{{asset('web/images/Logo.png')}}" alt=""/>
                <span>Mr.Quan</span>
            </a>
        </div>
        <ul class="nav nav-sidebar">
            <li class="nav-item lv1">
                <a href="{{route('profile' ,['id'=> \Illuminate\Support\Facades\Auth::user()->id])}}"
                   class="nav-link {{ request()->is('profile/*') ? 'active' : '' }}">
                    <svg class="nav-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                        <path
                                d="M2 12.8801V11.1201C2 10.0801 2.85 9.22006 3.9 9.22006C5.71 9.22006 6.45 7.94006 5.54 6.37006C5.02 5.47006 5.33 4.30006 6.24 3.78006L7.97 2.79006C8.76 2.32006 9.78 2.60006 10.25 3.39006L10.36 3.58006C11.26 5.15006 12.74 5.15006 13.65 3.58006L13.76 3.39006C14.23 2.60006 15.25 2.32006 16.04 2.79006L17.77 3.78006C18.68 4.30006 18.99 5.47006 18.47 6.37006C17.56 7.94006 18.3 9.22006 20.11 9.22006C21.15 9.22006 22.01 10.0701 22.01 11.1201V12.8801C22.01 13.9201 21.16 14.7801 20.11 14.7801C18.3 14.7801 17.56 16.0601 18.47 17.6301C18.99 18.5401 18.68 19.7001 17.77 20.2201L16.04 21.2101C15.25 21.6801 14.23 21.4001 13.76 20.6101L13.65 20.4201C12.75 18.8501 11.27 18.8501 10.36 20.4201L10.25 20.6101C9.78 21.4001 8.76 21.6801 7.97 21.2101L6.24 20.2201C5.33 19.7001 5.02 18.5301 5.54 17.6301C6.45 16.0601 5.71 14.7801 3.9 14.7801C2.85 14.7801 2 13.9201 2 12.8801Z"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                    </svg>
                    <p>Thông tin tài khoản</p>
                </a>
            </li>
            <li class="nav-item lv1">
                <a href="" class="nav-link " data-bs-toggle="collapse" data-bs-target="#shops-collapse"
                   aria-expanded="false">
                    <svg class="nav-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M3.01001 11.22V15.71C3.01001 20.2 4.81001 22 9.30001 22H14.69C19.18 22 20.98 20.2 20.98 15.71V11.22"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                        <path
                                d="M12 12C13.83 12 15.18 10.51 15 8.68L14.34 2H9.66999L8.99999 8.68C8.81999 10.51 10.17 12 12 12Z"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                        <path
                                d="M18.31 12C20.33 12 21.81 10.36 21.61 8.35L21.33 5.6C20.97 3 19.97 2 17.35 2H14.3L15 9.01C15.17 10.66 16.66 12 18.31 12Z"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                        <path
                                d="M5.63988 12C7.28988 12 8.77988 10.66 8.93988 9.01L9.15988 6.8L9.63988 2H6.58988C3.96988 2 2.96988 3 2.60988 5.6L2.33988 8.35C2.13988 10.36 3.61988 12 5.63988 12Z"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                        <path
                                d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                stroke="#667085"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                    </svg>
                    <p>
                        Cấu hình Shop
                        <span class="right">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </p>
                </a>
                <div class="collapse" id="shops-collapse">
                    <ul class="nav sub-menu lv2">
                        @if(!empty($sites))
                            <li class="nav-item {{request()->url() == route('shops.home.show', [$sites->code])  ? 'active' : ''}}">
                                <div style="margin-left: 10px">
                                    <a href="{{route('shops.home.show', [$sites->code])}}" class="nav-link ">
                                        <p>{{$sites->name}}</p>
                                    </a>
                                    <div style="margin-left: 20px">
                                        <div>
                                            <a href="{{route('categories', ['code'=>$sites->code])}}">Danh mục</a>
                                        </div>
                                        <div>
                                            <a href="{{route('products', [$sites->code])}}">Sản phẩm</a>
                                        </div>
                                        <div>
                                            <a href="{{route('shops.about', ['code'=>$sites->code])}}">Giới thiệu về tôi</a>
                                        </div>
                                        <div>
                                            <a href="{{route('products.featured_product', ['code'=>$sites->code])}}">Sản
                                                phẩm nổi bật</a>
                                        </div>
                                        <div>
                                            <a href="">Chính sách bán hàng</a>
                                        </div>
                                        <div>
                                            <a href="">Ứng dụng chat</a>
                                        </div>
                                        <div>
                                            <a href="">Giao diện web</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @if(empty($sites))
                            <li class="nav-item {{request()->url() == route('shops.create') ? 'active' : ''}}">
                                <a href="{{route('shops.create')}}" class="nav-link  ">
                                    <p>Tạo mới </p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer">
        <div class="user-panel">
            <div class="image">
                <img src="{{asset('web/images/Avatar.png')}}" alt=""/>
            </div>
            <div class="info">
                <a href="#" class="nav-link info-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                <a href="#" class="nav-link info-mail">{{\Illuminate\Support\Facades\Auth::user()->email}}</a>
            </div>
            <div class="arrow-right">
                <a href="">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M7.42505 16.5999L12.8584 11.1666C13.5 10.5249 13.5 9.4749 12.8584 8.83324L7.42505 3.3999"
                                stroke="#98A2B3"
                                stroke-width="1.5"
                                stroke-miterlimit="10"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        />
                    </svg>
                </a>
            </div>
            <ul class="nav nav-contact">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <h6>Liên hệ</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="{{asset('web/images/phone.png')}}" alt=""/>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->phone}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="{{asset('web/images/sms.png')}}" alt=""/>
                        <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <img src="{{asset('web/images/log-out.png')}}" alt=""/>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
