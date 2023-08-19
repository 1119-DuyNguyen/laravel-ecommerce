@extends('frontend.layouts.master')

@section('title')
{{$settings->site_name}} || Cửa hàng
@endsection

@section('content')


    <!--============================
        SHOP PAGE START
    ==============================-->
    <div id="main-store" class="main-store --hide">
        <div class="story-container">
            <div
                class="story-contact"
                style="
                    background: url(./public/img/about-us/Coffee-Wallpaper-Background.jpg)
                        no-repeat right top;
                    background-size: cover;
                "
            >
                <div class="page-header">
                    <div class="page-container">
                        <h1>Chuyện nhà</h1>
                        <h1>
                            Địa chỉ: 273 An Dương Vương – Phường 3 –
                            Quận 5
                        </h1>
                        <div class="page-content">
                            <p style="margin-bottom: 12px">
                                <span
                                    style="
                                        font-size: 17pt;
                                        font-weight: 600;
                                    "
                                    ><span style="line-height: 107%"
                                        ><span
                                            style="
                                                font-family: Calibri,
                                                    sans-serif;
                                            "
                                            >Ngôi Nhà Cafe sẽ là nơi mọi
                                            người xích lại gần nhau, đề
                                            cao giá trị kết nối con
                                            người và sẻ chia thân tình
                                            bên những tách cà phê, ly
                                            trà đượm hương,truyền cảm
                                            hứng về lối sống hiện đại.
                                        </span></span
                                    ></span
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
        SHOP PAGE END
    ==============================-->
@endsection
