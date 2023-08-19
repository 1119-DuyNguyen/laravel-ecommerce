@extends('frontend.layouts.master')

@section('title')
{{$settings->site_name}} || Về chúng tôi
@endsection

@section('content')


    <!--============================
        ABOUT PAGE START
    ==============================-->
    <div id="about-us">
        <div id="story-main">
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
                                                >&nbsp;Ngôi Nhà Cafe sẽ
                                                là&nbsp; nơi mọi người
                                                xích lại gần nhau, đề
                                                cao giá trị kết nối con
                                                người và sẻ chia thân
                                                tình bên những tách cà
                                                phê, ly trà đượm
                                                hương,&nbsp; truyền cảm
                                                hứng về lối sống hiện
                                                đại.</span
                                            ></span
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper">
            <div class="container">
                <div class="about-content">
                    <div class="about-who-we-are">
                        <h2>Đây là?</h2>
                        <p>
                            Một góc nhỏ bạn có thể tìm được đâu đó trên
                            thế giới này. Một không gian vừa đủ để mang
                            đến cho bạn sự nhẹ nhàng, yên bình... cùng
                            một tách cà phê...
                        </p>
                    </div>
                    <div class="about-us-text">
                        <h2>Về chúng tôi</h2>
                        <p>
                            Toàn bộ các thành viên đều tham gia thực
                            hiện xây dựng sản phẩm với thái độ tốt, cùng
                            nhau làm việc tích cực để hoàn thiện sản
                            phẩm, mong rằng sản phẩm sẽ được đón nhận.
                            Chúng tôi đã họp với nhau và kiểm thử và tìm
                            các lỗi, trong tương lai có thể có lỗi mới
                            phát sinh, chúng tôi sẽ phát hiện và sửa
                            chữa kịp thời.
                        </p>
                    </div>
                </div>
                <!-- finish about us -->

                <div class="our-team-content">
                    <div class="our-team-header">
                        <h2>Đội ngũ phát triển</h2>
                    </div>
                    <div class="our-team-images">
                        <div class="our-team-img-1">
                            <img
                                src="./public/img/about-us/team-1.jpg"
                                width="300"
                                alt="Team"
                            />
                            <h2>Võ Khương Duy</h2>
                            <p>Founder & CEO</p>
                        </div>
                        <div class="our-team-img-2">
                            <img
                                src="./public/img/about-us/team-2.jpg"
                                width="300"
                                alt="Team"
                            />
                            <h2>Nguyễn Thanh Duy</h2>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                    <div class="our-team-images">
                        <div class="our-team-img-3">
                            <img
                                src="./public/img/about-us/team-2.jpg"
                                width="300"
                                alt="Team"
                            />
                            <h2>Lê Nguyễn Minh Huy</h2>
                            <p>Co Founder</p>
                        </div>
                        <div class="our-team-img-4">
                            <img
                                src="./public/img/about-us/team-3.jpg"
                                width="300"
                                alt="Team"
                            />
                            <h2>Tiền Minh Vy</h2>
                            <p>Chief Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="story-mail">
            <h2>Nhận thông tin khuyến mãi mới nhất</h2>
            <p>
                Để lại email của bạn để nhận những thông tin khuyến mãi
                mới nhất từ chúng tôi
            </p>
            <input
                type="email"
                id="customer-mail"
                placeholder="Email"
            />
            <button type="button">&gt;</button>
        </div>
    </div>
    <!--============================
        ABOUT PAGE END
    ==============================-->
@endsection
