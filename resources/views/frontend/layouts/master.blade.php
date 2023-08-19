@php use Illuminate\Support\Facades\Request; @endphp
@if ($errors->any())
@foreach ($errors->all() as $error)
@php
    toast($error, "error")->autoClose('8000');
@endphp
@endforeach
@endif

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            @yield('title',"e-commerce")
        </title>
        <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/css/icomoon/style.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    </head>

    <body>

        <!--============================
            HEADER START
        ==============================-->
        @include('frontend.layouts.header')
        <!--============================
            HEADER END
        ==============================-->
        
        <div id="main" class="--darkMode">
            
            <!-- danh muc san pham -->
            <div
                id="product-container"
                class="product-container --darkMode --hide">
                <div class="show-product">
                    <div class="image-container-LP"></div>
                </div>
            </div>

            @yield('content')

            <div id="user-login" class="modal --hide">
                <div class="container">
                    <div class="content --darkMode">
                        <div class="close">
                            <i class="icon-cross icon"></i>
                        </div>
                        <div class="title">
                            <span> ĐĂNG NHẬP </span>
                        </div>
                        <form action="#" class="form" id="form-login">
                            <div class="form-group row">
                                <label for="usernameLogin"
                                    >Tên đăng nhập:</label
                                >
                                <input
                                    name="username"
                                    type="text"
                                    data-rules="required"
                                    id="usernameLogin"
                                />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group row">
                                <label for="passwordLogin">Mật khẩu:</label>
                                <input
                                    name="password"
                                    type="password"
                                    data-rules="required"
                                    id="passwordLogin"
                                />
                                <span class="form-message"></span>
                            </div>
                            <span class="error-login"></span>

                            <button type="submit" id="btnlogin">
                                Đăng nhập
                            </button>
                        </form>
                        <p class="row">Bạn chưa có tài khoản?</p>

                        <a href="#" class="row">Đăng ký</a>
                    </div>
                </div>
            </div>
            <div id="user-register" class="modal --hide">
                <div class="container">
                    <div class="content --darkMode">
                        <div class="close">
                            <i class="icon-cross icon"></i>
                        </div>
                        <div class="title">ĐĂNG KÝ</div>
                        <form action="#" class="form" id="form-register">
                            <div class="form-group row">
                                <label for="fullname" class="form-label"
                                    >Họ và tên</label
                                >
                                <input
                                    id="fullname"
                                    name="fullname"
                                    data-rules="required|fullname"
                                    type="text"
                                    placeholder=""
                                    class="form-control"
                                />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group row">
                                <label for="userNameRegister" class="form-label"
                                    >Tài khoản</label
                                >
                                <input
                                    id="userNameRegister"
                                    name="username"
                                    data-rules="required|username"
                                    type="text"
                                    placeholder=""
                                    class="form-control"
                                />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group row">
                                <label for="passRegister" class="form-label"
                                    >Mật khẩu</label
                                >
                                <input
                                    id="passRegister"
                                    name="password"
                                    data-rules="password"
                                    type="password"
                                    placeholder=""
                                    class="form-control"
                                />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="repeatPassRegister"
                                    class="form-label"
                                    >Nhập lại mật khẩu</label
                                >
                                <input
                                    id="repeatPassRegister"
                                    name="repeatPassRegister"
                                    data-rules="repeatPassword"
                                    type="password"
                                    placeholder=""
                                    class="form-control"
                                />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group row">
                                <label for="fullname" class="form-label"
                                    >Địa chỉ</label
                                >
                                <input
                                    id="address"
                                    name="address"
                                    data-rules="required"
                                    type="text"
                                    placeholder=""
                                    class="form-control"
                                />
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group row">
                                <label for="phoneRegister" class="form-label"
                                    >Số điện thoại</label
                                >
                                <input
                                    id="phoneRegister"
                                    name="phone"
                                    data-rules="required|phone"
                                    type="text"
                                    placeholder="0123456789"
                                    class="form-control"
                                />
                                <span class="form-message"></span>
                            </div>

                            <button type="submit" id="btnsignup">
                                Đăng ký
                            </button>
                        </form>

                        <a href="#">Đăng nhập</a>
                    </div>
                </div>
            </div>
            <!-- search san pham -->
            <div id="form-search" class="modal --hide">
                <div class="container">
                    <div class="content --darkMode">
                        <div class="close">
                            <i class="icon-cross icon"></i>
                        </div>
                        <div class="title">
                            <span>Tìm kiếm</span>
                        </div>
                        <div class="search-content">
                            <div class="search-input">
                                <div class="icon">
                                    <i class="icon-search"></i>
                                </div>
                                <input
                                    type="text"
                                    placeholder="Tìm theo tên sản phẩm"
                                />
                            </div>
                            <div class="advanced-input">
                                <select name="tag">
                                    <option value="">Tất cả</option>
                                    <option value="Cà phê">Cà phê</option>
                                    <option value="Trà">Trà</option>
                                    <option value="Hi-Tea">Hi-Tea</option>
                                </select>
                                <div class="price">
                                    <!-- <label name="range">Giá:</label> -->
                                    <input
                                        name="minPrice"
                                        type="number"
                                        placeholder="Giá từ"
                                        step="1000"
                                        min="0"
                                        max="500000"
                                    />
                                    <span> - </span>
                                    <input
                                        name="maxPrice"
                                        type="number"
                                        placeholder="Đến"
                                        step="1000"
                                        min="0"
                                        max="500000"
                                    />
                                </div>
                            </div>
                            <div class="search-response">
                                <div class="product-related">
                                    <ul class="option_selections">
                                        <li
                                            class="option_selections_item --hide"
                                        >
                                            <div class="image-pack">
                                                <img
                                                    class="product-image"
                                                    src="{{asset('frontend/images/ngoiNhaCafe/CPhSa.jpg')}}"
                                                    alt=""
                                                />
                                                <div class="buy-now">
                                                    <span class="text-buy">
                                                        Mua ngay!
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="overview">
                                                <p class="overview_title">
                                                    Cà Phê Sữa Đá
                                                </p>
                                                <p>29000 đ</p>
                                            </div>

                                            <span class="icon-plus icon"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chi tiet san pham -->
            <div id="detail-product" class="modal --hide">
                <div class="container">
                    <div class="content --darkMode"></div>
                </div>
            </div>

            <!-- toast -->
            <div id="toast"></div>
        </div>
        
        <!--============================
            FOOTER START
        ==============================-->
        @include('frontend.layouts.footer')
        <!--============================
            FOOTER END
        ==============================-->
    </body>
    <script type="module" src="{{asset('frontend/js/index.js')}}"></script>
</html>
