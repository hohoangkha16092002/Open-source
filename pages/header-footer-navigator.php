<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tải các tệp CSS của Bootstrap từ CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tải các tệp JavaScript của Bootstrap từ CDN (đặt nó trước đó trước thẻ đóng </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FILE CSS -->
    <link rel="stylesheet" type="text/css" href="css/header-footer-navigator.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- BEGIN BANNER -->
    <div data-content-region-name="topBanner" data-track-content="true">
        <a target="_self" href="#" aria-label="Image">
            <div height="100%" class="css-banner">
                <picture>
                    <source
                        srcset="https://lh3.googleusercontent.com/_1IIdVmUpPTu90FMAIR66GKd5JxnBwUFTW526HgA1dRp3bo7pwuFJwuylI6dEDxOEiW3W72Eiuzs1LuRQ8NtBW3GSkxKSw=w1920-rw"
                        type="image/webp">
                    <source
                        srcset="https://lh3.googleusercontent.com/_1IIdVmUpPTu90FMAIR66GKd5JxnBwUFTW526HgA1dRp3bo7pwuFJwuylI6dEDxOEiW3W72Eiuzs1LuRQ8NtBW3GSkxKSw=w1920"
                        type="image/png">
                    <img class="lazyload css-o4eu2v img-fluid" alt=""
                        src="https://lh3.googleusercontent.com/_1IIdVmUpPTu90FMAIR66GKd5JxnBwUFTW526HgA1dRp3bo7pwuFJwuylI6dEDxOEiW3W72Eiuzs1LuRQ8NtBW3GSkxKSw=w1920-rw"
                        loading="lazy" decoding="async">
                </picture>
            </div>
        </a>
    </div>
    <!-- END BANNER -->
    <!-- BEGIN NAVIGATOR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a target="_self" class="css-no-underline clickable" href="">
                            <button class="css-button-container">
                                <i style="color: white" class="fa-solid fa-house"></i>
                                <span class="css-add-width-gap"></span>
                                <div type="body" style="color: white" class="">Trang chủ</div>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a target="_self" class="css-no-underline clickable" href="">
                            <button class="css-button-container">
                                <i style="color: white" class="fa-solid fa-book"></i>
                                <span class="css-add-width-gap"></span>
                                <div type="body" style="color: white">Bài tập</div>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a target="_self" class="css-no-underline clickable" href="">
                            <button class="css-button-container">
                                <i style="color: white" class="fa-sharp fa-solid fa-bag-shopping"></i>
                                <span class="css-add-width-gap"></span>
                                <div type="body" style="color: white">Tư vấn doanh nghiệp</div>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a target="_self" class="css-no-underline clickable" href="">
                            <button class="css-button-container">
                                <i style="color: white" class="fa-solid fa-user"></i>
                                <span class="css-add-width-gap"></span>
                                <div type="body" style="color: white">Thông tin cá nhân</div>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a target="_self" class="css-no-underline clickable" href="">
                            <button data-content-region-name="taskbar" data-track-content="true"
                                data-content-name="showroomListURL" class="css-button-container"><svg fill="#000000"
                                    version="1.1" id="Layer_1" viewBox="0 0 492.313 492.313" size="18" color="white"
                                    height="18" width="18" class="css-white-fill-stroke"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path
                                                d="M352.005,107.714V78.56c0-21.721-17.663-39.385-39.385-39.385H179.692c-21.716,0-39.385,17.663-39.385,39.385v29.154H0
                                    v345.423h492.313V107.714H352.005z M160,78.56c0-10.856,8.832-19.692,19.692-19.692H312.62c10.856,0,19.692,8.837,19.692,19.692
                                    v29.154H160V78.56z M472.62,433.445H19.692V207.368l63.721,83.413c7.413,9.692,19.111,15.471,31.298,15.471h100.755v5.827
                                    c0,16.923,13.764,30.683,30.688,30.683c16.918,0,30.688-13.76,30.688-30.683v-5.827h100.76c12.192,0,23.885-5.789,31.298-15.471
                                    l63.721-83.413V433.445z M235.159,312.079v-34.462h21.99v34.462c0,6.058-4.933,10.99-10.995,10.99
                                    S235.159,318.137,235.159,312.079z M472.62,174.915L393.245,278.82c-3.702,4.846-9.548,7.74-15.644,7.74h-100.76v-28.635h-61.375
                                    v28.635H114.712c-6.096,0-11.947-2.894-15.649-7.74l-79.37-103.899v-47.514h120.615h211.697H472.62V174.915z">
                                            </path>
                                        </g>
                                    </g>
                                </svg><span class="css-add-width-gap"></span>
                                <div type="body" style="color: white">Thông tin cá nhân</div>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATOR  -->
    <!-- BEGIN CATAGORY -->
    <div id="mainNavigationBar" class="css-mainNavigationBar">
        <div class="teko-row teko-row-center">
            <div class="teko-row teko-row-no-wrap teko-row-middle css-negative-margin-width"
                style="margin-left: -8px; margin-right: -8px; height: 112px; min-width: 0px; width: 75rem;">
                <!-- LIST -->
                <div class="teko-col" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                    <div data-content-region-name="headerBar" data-track-content="true" data-content-name="logoPhongVu"
                        data-content-target="homepage" class="css-center-horizontal-row">
                        <a target="_self" class="clickable" href="/">
                            <div height="35px" width="35px" class="css-icon-with-transition">
                                <img src="https://shopfront-cdn.tekoapis.com/static/phongvu/logo.svg" loading="lazy"
                                    decoding="async" alt="phongvu" style="width: 100%; height: 35px;">
                            </div>
                        </a>
                        <div class="css-width100">
                            <div class="css-width100" tabindex="0">
                                <button class="css-list-products">
                                    <i class="fa-solid fa-grip-lines" href="/categories"></i>
                                    <span class="css-add-width-gap"></span>
                                    <a href="/categories" class="css-no-underline">Danh mục sản phẩm</a>
                                </button>
                                <div class="css-hidden-list"
                                    style="position: absolute; inset: 0px auto auto 0px; transform: translate3d(65px, 37px, 0px);"
                                    data-popper-reference-hidden="false" data-popper-escaped="false"
                                    data-popper-placement="bottom-start">
                                    <div origin="center top" class="css-background-transparent">
                                        <div style="border-radius: 0.5rem; " width="204px">
                                            <div style="position: relative;">
                                                <div class="css-container-box">
                                                    <a target="_self" href="">
                                                        <div class="">
                                                            <div width="22px" height="22px">
                                                                <div class="css-content-container">
                                                                    <img src="https://lh3.googleusercontent.com/lFZZtBMUqkbl9qKKUe3DSmHqpb62UjWrOkxqcJ6lN3yM83Wg2Irp-ZlvkUwGO6TMcsscLELMZa_lN9jo8tKteWsCzmUii7po=rw"
                                                                        loading="lazy" decoding="async"
                                                                        style="width: 100%; height: 100%;">
                                                                </div>
                                                            </div>
                                                            <div type="caption" style="flex: 1 1 0%;">Laptop</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; transform: translate3d(90px, 0px, 0px);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEARCH -->
                <div class="teko-col"
                    style="padding-left: 8px; padding-right: 8px; padding-top: 1.75rem; min-width: 0px; flex: 1 1 auto;">
                    <div class="css-position-relative">
                        <div class="css-search-bar">
                            <div data-content-region-name="headerBar" data-track-content="true"
                                data-content-name="searchBox" class="css-search-display">
                                <input class="search-input css-search" placeholder="Nhập từ khoá cần tìm"
                                    role="searchbox" aria-label="Search" value="">
                            </div>
                            <div data-content-region-name="headerBar" data-track-content="true"
                                data-content-name="searchButton" class="css-search-button"><button
                                    class="search-icon css-search-icon " aria-label="Search">
                                    <i class="fa-solid fa-magnifying-glass clickable"></i>
                                </button>
                            </div>
                        </div>
                        <div class="css-popup-overlay">
                            <div class="css-1f38okd">
                                <div font-weight="500" color="#82869E" class="css-ox2ez2">Lịch sử tìm kiếm</div>
                                <div data-content-region-name="recentSearch" data-track-content="true"
                                    data-content-name="clearHistorySearch" data-content-target="searchProduct"
                                    class="css-haljq6">Xóa lịch sử</div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true"
                                data-content-name="laptop" data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:0}"
                                class="css-ww6ncj">
                                <span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">laptop</div>
                                </div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true"
                                data-content-name="iphone 15" data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:1}"
                                class="css-ww6ncj"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">iphone 15</div>
                                </div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true"
                                data-content-name="lap" data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:2}"
                                class="css-ww6ncj"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">lap</div>
                                </div>
                            </div>
                            <div data-content-region-name="recentSearch" data-track-content="true"
                                data-content-name="bàn" data-content-target="searchProductResult"
                                data-content-payload="{&quot;screenName&quot;:&quot;searchProduct&quot;,&quot;index&quot;:3}"
                                class="css-ww6ncj"><span size="20" class="css-c1lbeq"></span>
                                <div style="margin: 0px 0.6rem;">
                                    <div class="css-1488rru">bàn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="css-list-nav">
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline" href="">Acer Nitro Phoenix
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline"
                            href="/c/laptop-acer-nitro-5">Acer Nitro 5
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline"
                            href="/laptop-asus-vivobook-go-15-e1504fa-nj454w-amd-ryzen-5-7520u--s230500521">Asus
                            Vivobook
                            Go
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline"
                            href="/c/laptop-asus-rog-strix">Asus Rog
                            Strix</a>&nbsp;&nbsp;&nbsp;<a data-testid="TekoLink"
                            class="css-list-nav-item css-no-underline" href="/c/laptop-hp">Laptop
                            HP
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline" href="/c/laptop">Laptop
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline"
                            href="/c/man-hinh-may-tinh">Màn hình máy tính
                        </a>&nbsp;&nbsp;&nbsp;<a data-testid="TekoLink" class="css-list-nav-item css-no-underline"
                            href="/c/may-tinh-de-ban">PC
                        </a>&nbsp;&nbsp;&nbsp;
                        <a data-testid="TekoLink" class="css-list-nav-item css-no-underline"
                            href="/c/chuot-gaming">Chuột gaming</a>
                    </p>
                </div>

                <!-- PERSONAL INFORMATION -->
                <div class="teko-col" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                    <div>
                        <div>
                            <div class="button css-button" data-content-region-name="headerBar"
                                data-track-content="true" data-content-name="profileIcon">
                                <div class="">
                                    <div height="100%" width="100%" class="">
                                        <img src="https://lh3.googleusercontent.com/a/ACg8ocJ2eIWDECzXYZ7EgSIzeIFbzYhpqLERuHtUKa6tWTF9wA=s96-c-rw"
                                            loading="lazy" hover="" decoding="async" alt="" fetchpriority="low"
                                            aria-label="Current User Avatar"
                                            style="width: 100%; height: 100%; object-fit: inherit; position: absolute; top: 0px; left: 0px;">
                                    </div>
                                </div>
                                <div class="ml-12 text-left">
                                    <div type="body" color="textSecondary" class="css-1ajy8lg">Xin chào,</div>
                                    <div type="body" color="textSecondary" class="css-h9uu26">Tiến Phan Minh</div>
                                </div>
                            </div>
                        </div>
                        <span class="css-1sw3l7z css-hidden-popup" data-popper-reference-hidden="false"
                            data-popper-escaped="false" data-popper-placement="bottom"
                            style="position: absolute; inset: 0px auto auto 0px; z-index: 100; transform: translate3d(-56px, 49px, 0px);">
                            <div class="css-105lwfa">
                                <div class="css-1yu7zze">
                                    <div class="css-1c0dm56"><img
                                            src="https://lh3.googleusercontent.com/a/ACg8ocJ2eIWDECzXYZ7EgSIzeIFbzYhpqLERuHtUKa6tWTF9wA=s96-c"
                                            alt="Avatar">
                                    </div>
                                    <div class="css-11x4sqh">
                                        <h3 class="name">Tiến Phan Minh</h3>
                                        <h5 class="extra">tiennennakenki@gmail.com</h5>
                                    </div>
                                </div>
                                <a target="_self" class="css-information" href="/account">
                                    <div data-content-region-name="headerBar" data-track-content="true"
                                        data-content-name="viewAccountInfo" class="css-1705bh2">
                                        <div class="css-qgtaqt"><svg fill="none" viewBox="0 0 24 24" size="18"
                                                class="css-9w5ue6" height="18" width="18"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                                    fill="#82869E"></path>
                                            </svg></div>
                                        <div type="body" class="css-1k26lhb">Thông tin tài khoản</div>
                                    </div>
                                </a><a target="_self" class="css-cbrxda" href="/account/orders">
                                    <div data-content-region-name="headerBar" data-track-content="true"
                                        data-content-name="viewOrder" class="css-1705bh2">
                                        <div class="css-qgtaqt"><svg fill="none" viewBox="0 0 24 24" size="18"
                                                class="css-9w5ue6" height="18" width="18"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M7.5328 3.5625C7.5328 3.14829 7.86859 2.8125 8.2828 2.8125H15.2308C15.645 2.8125 15.9808 3.14829 15.9808 3.5625V3.80501H19.201C19.6152 3.80501 19.951 4.14079 19.951 4.55501V20.4361C19.951 20.8503 19.6152 21.1861 19.201 21.1861H4.3125C3.89829 21.1861 3.5625 20.8503 3.5625 20.4361V4.55501C3.5625 4.14079 3.89829 3.80501 4.3125 3.80501H7.5328V3.5625ZM15.9808 7.53276V5.30501H18.451V19.6861H5.0625V5.30501H7.5328V7.53276C7.5328 7.94698 7.86859 8.28276 8.2828 8.28276H10.0198C10.434 8.28276 10.7698 7.94698 10.7698 7.53276C10.7698 7.30843 11.0628 6.87111 11.7568 6.87111C12.4508 6.87111 12.7438 7.30843 12.7438 7.53276C12.7438 7.94698 13.0796 8.28276 13.4938 8.28276H15.2308C15.645 8.28276 15.9808 7.94698 15.9808 7.53276ZM9.0328 4.3125V6.78276H9.41784C9.7871 5.89836 10.7889 5.37111 11.7568 5.37111C12.7247 5.37111 13.7265 5.89836 14.0957 6.78276H14.4808V4.3125H9.0328ZM15.4476 12.0333C15.7405 11.7404 15.7405 11.2655 15.4476 10.9726C15.1547 10.6797 14.6798 10.6797 14.3869 10.9726L11.0384 14.3211L9.80564 13.0883C9.51275 12.7954 9.03787 12.7954 8.74498 13.0883C8.45209 13.3812 8.45209 13.8561 8.74498 14.149L10.5081 15.9121C10.6487 16.0527 10.8395 16.1318 11.0384 16.1318C11.2373 16.1318 11.4281 16.0527 11.5688 15.9121L15.4476 12.0333Z"
                                                    fill="#82869E"></path>
                                            </svg></div>
                                        <div type="body" class="css-1k26lhb">Quản lý đơn hàng</div>
                                    </div>
                                </a><a target="_self" class="css-cbrxda" href="/account/addresses">
                                    <div data-content-region-name="headerBar" data-track-content="true"
                                        data-content-name="viewAddressList" class="css-1705bh2">
                                        <div class="css-qgtaqt"><svg fill="none" viewBox="0 0 24 24" size="18"
                                                class="css-9w5ue6" height="18" width="18"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.6957 2.75C9.09299 2.75 6.35871 4.72035 6.35871 8.08696C6.35871 8.84669 6.67432 9.80604 7.22598 10.8727C7.76947 11.9236 8.50271 13.0046 9.24942 13.9876C9.99415 14.968 10.7407 15.8358 11.302 16.4592C11.4469 16.6202 11.5792 16.7646 11.6957 16.8901C11.8121 16.7646 11.9444 16.6202 12.0894 16.4592C12.6506 15.8358 13.3972 14.968 14.1419 13.9876C14.8886 13.0046 15.6219 11.9236 16.1654 10.8727C16.717 9.80604 17.0326 8.84669 17.0326 8.08696C17.0326 4.72035 14.2983 2.75 11.6957 2.75ZM11.6957 17.9783C11.1633 18.5065 11.1632 18.5064 11.163 18.5063L11.1627 18.5059L11.1615 18.5048L11.1576 18.5008L11.1432 18.4862L11.0896 18.4313C11.0432 18.3835 10.9758 18.3138 10.8905 18.2241C10.72 18.0447 10.4776 17.7854 10.1872 17.4628C9.60714 16.8185 8.83197 15.9178 8.05496 14.895C7.27993 13.8747 6.49143 12.7177 5.89362 11.5618C5.30398 10.4217 4.85871 9.20548 4.85871 8.08696C4.85871 3.74922 8.41486 1.25 11.6957 1.25C14.9765 1.25 18.5326 3.74922 18.5326 8.08696C18.5326 9.20548 18.0874 10.4217 17.4977 11.5618C16.8999 12.7177 16.1114 13.8747 15.3364 14.895C14.5594 15.9178 13.7842 16.8185 13.2041 17.4628C12.9137 17.7854 12.6713 18.0447 12.5008 18.2241C12.4155 18.3138 12.3482 18.3835 12.3017 18.4313L12.2481 18.4862L12.2338 18.5008L12.2298 18.5048L12.2287 18.5059L12.2283 18.5063C12.2282 18.5064 12.2281 18.5065 11.6957 17.9783ZM11.6957 17.9783L12.2281 18.5065C12.0873 18.6484 11.8956 18.7283 11.6957 18.7283C11.4957 18.7283 11.3041 18.6484 11.1633 18.5065L11.6957 17.9783ZM17.4472 15.2423C17.8177 15.057 18.2682 15.2072 18.4534 15.5777L20.3385 19.3479C20.9203 20.5114 20.0742 21.8805 18.7733 21.8805H4.61804C3.31712 21.8805 2.47101 20.5114 3.05279 19.3479L4.93788 15.5777C5.12313 15.2072 5.57363 15.057 5.94411 15.2423C6.3146 15.4275 6.46477 15.878 6.27952 16.2485L4.39443 20.0187C4.31132 20.1849 4.4322 20.3805 4.61804 20.3805H18.7733C18.9591 20.3805 19.08 20.1849 18.9969 20.0187L17.1118 16.2485C16.9266 15.878 17.0767 15.4275 17.4472 15.2423ZM10.7065 8.08679C10.7065 7.5405 11.1494 7.09766 11.6957 7.09766C12.2419 7.09766 12.6848 7.54051 12.6848 8.08679C12.6848 8.63307 12.2419 9.07592 11.6957 9.07592C11.1494 9.07592 10.7065 8.63307 10.7065 8.08679ZM11.6957 5.59766C10.321 5.59766 9.20654 6.71208 9.20654 8.08679C9.20654 9.4615 10.321 10.5759 11.6957 10.5759C13.0704 10.5759 14.1848 9.4615 14.1848 8.08679C14.1848 6.71208 13.0704 5.59766 11.6957 5.59766Z"
                                                    fill="#82869E"></path>
                                            </svg></div>
                                        <div type="body" class="css-1k26lhb">Sổ địa chỉ</div>
                                    </div>
                                </a><a target="_self" class="css-cbrxda" href="/notification">
                                    <div data-content-region-name="headerBar" data-track-content="true"
                                        data-content-name="viewNotification" class="css-1705bh2">
                                        <div class="css-qgtaqt"><svg fill="none" viewBox="0 0 24 24" size="18"
                                                class="noti css-9w5ue6" height="18" width="18"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.99398 13V9C5.99398 5.686 8.68298 3 12 3C12.7883 2.99961 13.569 3.15449 14.2975 3.4558C15.0259 3.75712 15.6879 4.19897 16.2456 4.75612C16.8033 5.31327 17.2458 5.97481 17.5479 6.70298C17.8499 7.43115 18.0056 8.21168 18.006 9V13C18.006 13.986 18.454 14.919 19.223 15.537L19.532 15.785C20.449 16.521 19.928 18 18.752 18H5.24798C4.07198 18 3.55098 16.521 4.46798 15.785L4.77698 15.537C5.15686 15.2322 5.46344 14.846 5.67408 14.4069C5.88472 13.9678 5.99404 13.487 5.99398 13V13Z"
                                                    stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M10.5 21H13.5" stroke="#82869E" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                        <div type="body" class="css-1k26lhb">Thông báo</div>
                                    </div>
                                </a>
                                <div data-content-region-name="headerBar" data-track-content="true"
                                    data-content-name="logOut" class="css-2not0i"><button height="2.5rem" color="white"
                                        class="css-hrqoue" type="button">
                                        <div type="body" class="button-text css-2h64mz" color="white">Đăng xuất</div>
                                        <span style="margin-left: 0px;">
                                            <div class="css-157jl91"></div>
                                        </span>
                                    </button></div>
                            </div>
                        </span>
                    </div>
                </div>

                <!-- NOTIFICATION -->
                <div class="teko-col" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                    <div class="css-notification" data-content-region-name="headerBar" data-track-content="true"
                        data-content-name="notificationItem" data-content-target="notification">
                        <div class="css-width100" tabindex="0">
                            <div class="button css-button" style="flex-direction: column; font-size: 28px;">
                                <i class="fa-regular fa-bell" style="font-size: 32px;"></i>
                            </div>
                        </div>
                        <div class="css-popup-notification"
                            style="position: absolute; inset: 0px 0px auto auto; transform: translate3d(-8px, 36px, 0px);"
                            data-popper-reference-hidden="false" data-popper-escaped="false"
                            data-popper-placement="bottom-end">
                            <div origin="center top" class="css-background-transparent">
                                <div class="css-gjtq45">
                                    <div data-content-region-name="MiniNotification" data-track-content="true"
                                        data-content-name="viewNotificationFromMiniNotification"
                                        data-content-target="Notification" class="css-mfvlj3" direction="row"><a
                                            href="/notification">Xem tất cả thông báo</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; transform: translate3d(350px, 0px, 0px);"></div>
                        </div>
                    </div>
                </div>

                <!-- CART -->
                <div class="teko-col" style="padding-left: 8px; padding-right: 8px; flex: 0 0 auto;">
                    <div class="css-cart" data-content-region-name="headerBar" data-track-content="true"
                        data-content-name="cartItem" data-content-target="shoppingCart">
                        <div class="css-width100" tabindex="0">
                            <a target="_self" class="css-cbrxda" href="/cart">
                                <div class="css-button clickable">
                                    <i class="fa-solid fa-cart-shopping clickable" style="font-size: 30px;"></i>
                                    <div class="ml-6 text-left">
                                        <div type="body" color="textSecondary" style="font-size: 12px">Giỏ hàng của
                                            bạn</div>
                                        <div type="body" color="textSecondary" style="font-size: 12px">(2) sản phẩm
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="shoppingCartProductNumber" style="display: none;">2</div>
                        </div>
                        <div class="css-hidden-popup"
                            style="position: absolute; inset: 0px 0px auto auto; transform: translate3d(0px, 40px, 0px);"
                            data-popper-reference-hidden="false" data-popper-escaped="false"
                            data-popper-placement="bottom-end">
                            <div origin="center top" class="css-1x7vo2d">
                                <div class="css-t09wop">
                                    <div class="css-11zgin8">
                                        <div class="css-1qm1lh">
                                            <div class="css-ov1ktg">
                                                <div>
                                                    <div height="80" width="80" class="css-17nqxzh">
                                                        <picture>
                                                            <source
                                                                srcset="https://lh3.googleusercontent.com/YSGzzyiivz6GBZi825qGOEyePXHoz4hDb_Vj3PnVe9qiSGxQZViXQPSiFs8JkL5VKogBs0z9bX-49tgqR1Tj2jaSZOpxEL8=rw"
                                                                type="image/webp">
                                                            <source
                                                                srcset="https://lh3.googleusercontent.com/YSGzzyiivz6GBZi825qGOEyePXHoz4hDb_Vj3PnVe9qiSGxQZViXQPSiFs8JkL5VKogBs0z9bX-49tgqR1Tj2jaSZOpxEL8"
                                                                type="image/png"><img class="lazyload css-jdz5ak"
                                                                alt="product"
                                                                src="https://lh3.googleusercontent.com/YSGzzyiivz6GBZi825qGOEyePXHoz4hDb_Vj3PnVe9qiSGxQZViXQPSiFs8JkL5VKogBs0z9bX-49tgqR1Tj2jaSZOpxEL8=rw"
                                                                loading="lazy" decoding="async">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="css-f0vs3e"><a target="_blank"
                                                        href="/may-tinh-xach-tay-laptop-acer-nitro-16-phoenix-an16-41-r5m4-nh-qkbsv-003-amd-ryzen-5-7535hs-den-s230402670.html"
                                                        aria-label="Image" class="css-587jha">
                                                        <div type="body" color="textPrimary" class="css-1h5tj4c">Máy
                                                            tính xách tay/
                                                            Laptop Acer Nitro 16 Phoenix AN16-41-R5M4 (NH.QKBSV.003)
                                                            (AMD Ryzen
                                                            5-7535HS) (Đen)</div>
                                                    </a>
                                                    <div type="caption" color="textSecondary" class="css-1f5a6jh">Số
                                                        lượng 1</div><span class="css-7ofbab">27.990.000<span
                                                            class="css-1ul6wk9">đ</span></span>
                                                </div>
                                            </div>
                                            <div class="css-ov1ktg">
                                                <div class="css-1xjc5z">
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">1x Ba lô Acer Gaming SUV</div>
                                                    </div>
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">1x Bàn phím cơ Acer PREDATOR Aethon 301
                                                            TKL USB
                                                            (Đen)(Quà tặng)</div>
                                                    </div>
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">1x 1x Mã ưu đãi mua chuột Logitech G903
                                                            Hero với giá 1.5
                                                            Triệu đồng</div>
                                                    </div>
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">1x Mã giảm thêm 5% tối đa 300.000đ cho
                                                            toàn bộ sản phẩm
                                                            Điện Máy - Điện Gia Dụng</div>
                                                    </div>
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">1x Mã giảm thêm 150.000 cho một số chuột
                                                            Logitech, MSI,
                                                            Newmen, Asus, Tai nghe Zidli</div>
                                                    </div>
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">1x Bộ nhớ/ Ram Laptop Kingston 8GB DDR5
                                                            4800MHz
                                                            (KVR48S40BS6-8) (Quà tặng)</div>
                                                    </div>
                                                    <div class="css-1fmlnyw">
                                                        <div class="css-1axx38a">
                                                            <div height="16" width="16" class="css-xe0n85"><img
                                                                    class="lazyload css-jdz5ak" alt=""
                                                                    src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png"
                                                                    loading="lazy" decoding="async"></div>
                                                        </div>
                                                        <div class="css-5j9p1n">Giảm 2.000.000₫ (áp dụng vào giá sản
                                                            phẩm)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="css-1qm1lh">
                                            <div class="css-ov1ktg">
                                                <div>
                                                    <div height="80" width="80" class="css-17nqxzh">
                                                        <picture>
                                                            <source
                                                                srcset="https://lh3.googleusercontent.com/GJbFs1spv9RB77Epyl4BaRQuAsg4xqamaZmVzMIQPDcn0q_gLUw2z4CQsjyiXb5FKqNdymIChpcc9MPTTVjeHwtxuDQbIB4=rw"
                                                                type="image/webp">
                                                            <source
                                                                srcset="https://lh3.googleusercontent.com/GJbFs1spv9RB77Epyl4BaRQuAsg4xqamaZmVzMIQPDcn0q_gLUw2z4CQsjyiXb5FKqNdymIChpcc9MPTTVjeHwtxuDQbIB4"
                                                                type="image/png"><img class="lazyload css-jdz5ak"
                                                                alt="product"
                                                                src="https://lh3.googleusercontent.com/GJbFs1spv9RB77Epyl4BaRQuAsg4xqamaZmVzMIQPDcn0q_gLUw2z4CQsjyiXb5FKqNdymIChpcc9MPTTVjeHwtxuDQbIB4=rw"
                                                                loading="lazy" decoding="async">
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="css-f0vs3e"><a target="_blank"
                                                        href="/bo-nho-ram-team-t-force-delta-black-rgb-8gb-1x8gb-ddr4-3200-mhz-tf3d48g3200hc16c01-s230904040.html"
                                                        aria-label="Image" class="css-587jha">
                                                        <div type="body" color="textPrimary" class="css-1h5tj4c">Bộ nhớ/
                                                            RAM Team
                                                            T-Force Delta Black RGB 8GB (1x8GB) DDR4 3200 Mhz
                                                            (TF3D48G3200HC16C01)</div>
                                                    </a>
                                                    <div type="caption" color="textSecondary" class="css-1f5a6jh">Số
                                                        lượng 1</div><span class="css-7ofbab">649.000<span
                                                            class="css-1ul6wk9">đ</span></span>
                                                </div>
                                            </div>
                                            <div class="css-ov1ktg"></div>
                                        </div>
                                    </div>
                                    <div class="css-1vf48kp">
                                        <div class="css-sax00u"><span>Tổng tiền (2) sản phẩm</span><span
                                                class="css-19une5m"><span class="css-htm2b9">28.639.000<span
                                                        class="css-1ul6wk9">đ</span></span></span></div>
                                    </div>
                                    <div data-content-region-name="miniCart" data-track-content="true"
                                        data-content-name="viewCartFromMiniCart" data-content-target="shoppingCart"
                                        href="/cart" class="css-0"><a class="css-1dyo6sn">Xem giỏ hàng</a></div>
                                </div>
                            </div>
                            <div style="position: absolute; left: 0px; transform: translate3d(311px, 0px, 0px);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CATAGORY -->
    <!-- BEGIN FOOTER -->
    <hr>
    <footer>
        <div class="Row">
            <div class="FooterTop">
                <div class="BoxCenter">
                    <div class="BoxFooter1">
                        <h5>Hỗ trợ Khách hàng</h5>
                        <a href="https://help.phongvu.vn/dich-vu-khach-hang/the-thanh-vien" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Thẻ ưu đãi
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/huong-dan-mua-hang-online" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Hướng dẫn mua online
                        </a>
                        <a href="https://help.phongvu.vn/dich-vu-khach-hang/doanh-nghiep-than-thiet" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Ưu đãi dành cho Doanh
                            nghiệp
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/tra-gop" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Chính sách trả góp
                        </a>
                        <a href="https://help.phongvu.vn/dich-vu-khach-hang/dich-vu-sua-chua-va-bao-tri" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Dịch vụ sửa chữa
                        </a>
                    </div>
                    <div class="BoxFooter2">
                        <h5>Chính sách mua hàng</h5>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/dieu-kien-giao-dich" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Điều kiện giao dịch chung
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/bao-hanh" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Chính sách bảo hành
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/doi-tra-va-hoan-tien" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Chính sách đổi trả
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/chinh-sach-thanh-toan"
                            class="CssColorBlack css-no-underline">Chính sách thanh toán
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/giao-hang-va-lap-dat-tai-nha"
                            target="_blank" rel="noreferrer noopener" class="CssColorBlack css-no-underline">Giao hàng
                            và Lắp đặt tại
                            nhà
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-ban-hang/dich-vu-lap-dat-va-nang-cap-tai-cua-hang"
                            target="_blank" rel="noreferrer noopener" class="CssColorBlack css-no-underline">Dịch vụ lắp
                            đặt và nâng cấp
                            PC/ Laptop tại cửa hàng &amp; TTBH
                        </a>
                    </div>
                    <div class="BoxFooter3">
                        <h5>Thông tin Phong Vũ</h5>
                        <a href="https://help.phongvu.vn/" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline">Giới thiệu Phong Vũ
                        </a>
                        <a href="https://phongvu.vn/p/he-thong-showroom-phong-vu" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Hệ thống cửa hàng
                        </a>
                        <a href="https://help.phongvu.vn/dich-vu-khach-hang/trung-tam-bao-hanh" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Trung tâm bảo hành
                        </a>
                        <a href="https://help.phongvu.vn/chinh-sach-chung/bao-mat-thong-tin" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">Chính sách bảo mật
                        </a>
                        <a href="https://phongvu.vn/cong-nghe" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline">Tin công nghệ
                        </a>
                        <a href="https://phongvu.vn/hoi-dap" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline">Hỏi đáp
                        </a>
                        <a href="https://tuyendung.phongvu.vn/" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline">Tuyển dụng
                        </a>
                    </div>
                    <div class="BoxFooter4">
                        <h5>Cộng đồng Phong Vũ</h5>
                        <div class="CssColorBlackDiv ">Gọi mua hàng (miễn phí)
                            <a class="css-no-underline" style="color:blue" href="tel:18006867" }="">18006867

                            </a>
                        </div>
                        <div class="CssColorBlackDiv">Gọi chăm sóc
                            <a class="css-no-underline" style="color:blue" href="tel:18006865" }="">18006865
                            </a>
                        </div>
                        <a href="https://www.facebook.com/phongvuvietnam/" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline"><span size="16" color="#485992"
                                class="css-zmasuu"></span>
                            <div class="CssColorBlackDiv" style="color:blue; display:inline-block; margin-right: 8px"><i
                                    class="fa-brands fa-facebook"></i>
                            </div>Facebook Phong Vũ
                        </a>
                        <a href="https://www.youtube.com/channel/UCOJ3sqWCc6koR9BScBZkBlA" target="_blank"
                            rel="noreferrer noopener" class="CssColorBlack css-no-underline">
                            <span size="16" color="#cf2200" class="css-btiuvm">
                            </span>
                            <div class="CssColorBlackDiv" style="color:red; display:inline-block; margin-right: 8px">
                                <i class="fa-brands fa-youtube"></i>
                            </div>Phong Vũ Media
                        </a>
                        <a href="https://www.facebook.com/groups/phongvuvn/" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline">
                            <div class="CssColorBlackDiv" style="color:green; display:inline-block; margin-right: 8px">
                                <i class="fa-solid fa-people-group"></i>
                            </div>Phong Vũ Hội
                        </a>
                        <a href="https://zalo.me/3951230446867820356" target="_blank" rel="noreferrer noopener"
                            class="CssColorBlack css-no-underline">
                            <div class="CssColorBlackDiv" style="color:blue; display:inline-block; margin-right: 8px">
                                <i class="fa-brands fa-android"></i>
                            </div>
                            OA Phong Vũ (zalo)
                        </a>
                    </div>
                    <div class="BoxFooter5">
                        <h5>Email liên hệ</h5>
                        <div class="CssColorBlackDiv">Hỗ trợ Khách hàng:<br>
                            <a class="css-no-underline" style="color:blue" href="mailto:cskh@phongvu.vn">cskh@phongvu.vn
                            </a>
                        </div>
                        <div class="CssColorBlackDiv">Liên hệ báo giá:<br>
                            <a class="css-no-underline" style="color:blue"
                                href="mailto:baogia@phongvu.vn">baogia@phongvu.vn
                            </a>
                        </div>
                        <div class="CssColorBlackDiv">Hợp tác phát triển:<br>
                            <a class="css-no-underline" style="color:blue"
                                href="mailto:hoptac@phongvu.vn">hoptac@phongvu.vn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FooterBottom">
                <div class="BoxCenter">
                    <div class="BoxFooterLeft">
                        <div class="BoxFooterLeft1">
                            <h5>Phương thức thanh toán</h5>
                        </div>
                        <div class="BoxFooterLeft2">
                            <div class="Payment clickable">
                                <i class="fa-solid fa-qrcode Icon"></i>
                                <a class="css-no-underline HoverBlue" style="font-size: 12px;" href="">QR Code</a>
                            </div>
                            <div class="Payment clickable">
                                <i class="fa-solid fa-money-bill-1 Icon"></i>
                                <a class="css-no-underline HoverBlue" style="font-size: 12px;" href="">Tiền mặt</a>
                            </div>
                            <div class="Payment clickable">
                                <i class="fa-regular fa-clock Icon"></i>
                                <a class="css-no-underline HoverBlue" style="font-size: 12px;" href="">Trả góp</a>
                            </div>
                            <div class="Payment clickable">
                                <i class="fa-brands fa-internet-explorer Icon" style="text-align: center"></i>
                                <a class="css-no-underline HoverBlue" style="font-size: 12px;" href="">Internet
                                    Banking</a>
                            </div>
                        </div>
                    </div>
                    <div class="BoxFooterRight">
                        <div class="BoxFooterRight1">
                            <h5>Danh sách các ngân hàng thanh toán online</h5>
                            <img src="https://shopfront-cdn.tekoapis.com/static/vnpay_banks.png" alt="" width="70%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Row FooterBottomParent" style="background-color: rgb(233, 237, 242);">
            <div class="FooterBottom2">
                <div class="FooterBottomLeff ">
                    <div class="FooterTop">Công ty cổ phần thương mại - dịch vụ Phong Vũ</div>
                    <div class="FooterBottom">© 1997 - 2020 Công Ty Cổ Phần Thương Mại - Dịch Vụ Phong Vũ<br>Giấy chứng
                        nhận đăng ký doanh nghiệp: 0304998358 do Sở KH-ĐT TP.HCM cấp lần đầu ngày 30 tháng 05 năm 2007
                    </div>
                </div>
                <div class="FooterBottomCenter">
                    <div>
                        <span class="Title">Địa chỉ trụ sở chính</span>:
                        <div class="Content">Tầng 5, Số
                            117-119-121 Nguyễn Du, Phường Bến Thành, Quận 1, Thành Phố Hồ Chí Minh
                        </div>
                    </div>
                    <div>
                        <span class="Title">Văn phòng điều hành miền Bắc</span>:
                        <div class="Content">Tầng 6, Số 1
                            Phố Thái Hà, Phường Trung Liệt, Quận Đống Đa, Hà Nội
                        </div>
                    </div>
                    <div>
                        <span class="Title">Văn phòng điều hành miền Nam</span>:
                        <div class="Content">677/2A Điện
                            Biên Phủ, Phường 25 , Quận Bình Thạnh , TP. Hồ Chí Minh
                        </div>
                    </div>
                </div>
                <div class="FooterBottomRight">
                    <a href="http://online.gov.vn/Home/WebDetails/4549" rel="noreferrer noopener" target="_blank"
                        class="A">
                        <img src="https://shopfront-cdn.tekoapis.com/common/da-dang-ky.png" alt="verified logo"
                            class="css-t5rvn4">
                    </a>
                    <div class="Div">
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=53b44883-ed2a-434d-902b-5adce10aafd5&amp;refurl=undefined"
                            title="DMCA.com Protection Status" class="dmca-badge">
                            <img src="https://images.dmca.com/Badges/dmca-badge-w100-2x1-02.png?ID=53b44883-ed2a-434d-902b-5adce10aafd5"
                                alt="DMCA.com Protection Status">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Test -->
</body>

</html>