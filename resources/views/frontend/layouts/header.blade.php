<div id="header">
    <!-- mobile list -->
    <div class="menu__mobile --darkMode">
        <div id="menu-btn" class="line-height-50 header__icon-menu-btn">
            <span class="icon-large icon-menu"></span>
        </div>
        <div class="header__menu-mobile">
            <h3 class="header__menu-mobile-line">@yield('title',"e-commerce")</h3>
            <!-- Khúc này là đợi có icon rồi thêm vô -->
            <span class="icon-large icon-home"></span>
        </div>
        <span
            id="darkMode-btn"
            class="icon-brightness-contrast btn-theme"
        ></span>
        <div class="menu__board --disappear">
            <div class="layout-dark"></div>

            <div class="text-hover board-body">
                <div id="close-btn" class="close-btn-wrap">
                    <span class="icon icon-cross"></span>
                </div>

                <ul class="text-hover board__list">
                    <!-- <li class="board__item">
                        <span
                            class="not-flow text-color header-btn"
                            style="width: 70px"
                            >Cà phê
                            <span class="size-normal icon-mug"></span>
                        </span>
                    </li>

                    <li class="board__item">
                        <span
                            class="not-flow text-color header-btn"
                            style="width: 42px"
                            >Trà<span
                                class="size-normal icon-leaf"
                            ></span
                        ></span>
                    </li> -->

                    <li class="hover board__item">
                        <span
                            class="not-flow text-color"
                            style="width: 93px"
                            >Thực đơn<span
                                class="size-normal icon-circle-down"
                            ></span
                        ></span>

                        <!-- Phần bên trong thực đơn -->
                        <div class="header__modal --disappear">
                            <div class="flex-assist">
                                <div class="layout-white"></div>

                                <div class="header__menu-modal">
                                    <ul
                                        class="text-hover header__inside-menu-modal"
                                    >
                                        <li
                                            class="header__inside-menu-item-1"
                                        >
                                            <a
                                                class="text-color menu-btn"
                                                href="#" data-location='{{ request()->path() }}'
                                                >Tất cả</a
                                            >
                                        </li>

                                        <li
                                            class="header__inside-menu-item-1"
                                        >
                                            <a
                                                class="text-color menu-btn"
                                                href="#" data-location='{{ request()->path() }}'
                                                >Cà phê</a
                                            >
                                        </li>

                                        <li
                                            class="text-color header__inside-menu-item-1"
                                        >
                                            <a
                                                class="text-color menu-btn"
                                                href="#" data-location='{{ request()->path() }}'
                                                >Trà</a
                                            >
                                        </li>

                                        <li
                                            class="header__inside-menu-item-1"
                                        >
                                            <a
                                                class="font-family text-color menu-btn"
                                                href="#" data-location='{{ request()->path() }}'
                                                >Hi-Tea Healthy</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="board__item">
                        <span
                            class="not-flow text-color h-about-us-btn"
                            style="width: 127px"
                            >Về chúng tôi<span
                                class="size-normal icon-info"
                            ></span
                        ></span>
                    </li>

                    <li class="board__item">
                        <a
                            href="#footer"
                            class="not-flow text-color"
                            style="width: 74px; text-decoration: none"
                            >Liên hệ<span
                                class="size-normal icon-phone"
                            ></span
                        ></a>
                    </li>

                    <!-- làm trước -->
                    <!-- <li class="board__item">
                        <span
                            class="not-flow text-color"
                            style="width: 127px"
                            >Lê Nguyễn Minh Huy<span
                                class="size-normal icon-info"
                            ></span
                        ></span>
                    </li> -->
                    <div class="form__log-in-out"></div>
                </ul>

                <div class="header-mb-acount">
                    <span>Lê Nguyễn Minh Huy</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header-icon" class="header__icon --darkMode">
    <!-- tao tạo ra header-acount là absolute của header-iocon vì mày đã set -->
    <!-- cứng header-icon là justify-content: flex-end nên mấy thẻ con nó ăn theo -->
    <div class="header-acount">
        <span class="">chào mừng user</span>
    </div>

    <div id="user-icon-logout" class="border-square --hide">
        <span class="icon-exit"></span>
    </div>

    <div id="User-icon" class="border-square user-icon">
        <span class="icon-user"></span>
    </div>

    <div class="border-square cart-icon">
        <span class="icon-cart"></span>
    </div>

    <div class="border-square search-icon">
        <span class="icon-search"></span>
    </div>
</div>