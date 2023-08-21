@extends('frontend.layouts.master')

@section('title')
{{$settings->site_name}} || Giỏ hàng
@endsection

@section('content')
    <!--============================
        ORDER PAGE START
    ==============================-->
    <div id="order-page">
        <div class="order-history">
            <a>Lịch sử mua hàng</a>
        </div>
        <div class="order-board-1">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>
                            <input
                                type="checkbox"
                                value="all"
                                class="checkbox"
                            />
                        </th>
                        <th style="width: 78px"></th>
                        <th>Sản phẩm</th>
                        <th>Kích cỡ</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="order-total">
            <span>Tổng giá:</span>
            <span
                style="
                    padding-left: 5px;
                    font-size: 18px;
                    font-weight: 600;
                "
                class="cart-total-price"
                >0đ</span
            >
            <span> </span>
        </div>
        <div class="btn-handle">
            <button class="btn-diff btn-deleted" data-count="0">
                Xóa (0)
            </button>
            <button class="btn-diff btn-purchased" data-count="0">
                Thanh toán (0)
            </button>
        </div>
        <div id="order-history" class="modal --hide">
            <div class="container">
                <div class="content --darkMode">
                    <div class="close">
                        <i class="icon-cross icon"></i>
                    </div>
                    <div class="title">
                        <span> Lịch sử </span>
                    </div>
                    <div class="table-container">
                        <table class="overview-history">
                            <tr></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
        ORDER PAGE END
    ==============================-->
@endsection
