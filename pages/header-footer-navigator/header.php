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
    <!-- BEGIN HEADER -->
    <div class="navbar navbar-expand-lg navbar-light">
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
    </div>
    <!-- END HEADER  -->
</body>

</html>