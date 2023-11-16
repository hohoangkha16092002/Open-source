<?php
if (isset($_SESSION['loggedin_customer'])) {
    $sql = "SELECT * FROM khachhang WHERE MaKH = '" . $_SESSION['MaKH'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result);
    }


    if (isset($_POST['update'])) {
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $sex = $_POST['sex'];

        // Chuyển đổi giới tính thành kiểu bit
        //$sexBit = ($sex === "1") ? 1 : 0;

        $sql = "UPDATE khachhang SET HoTenKH='$ho_ten', Email='$email', SDT='$sdt', NgaySinh='$ngay_sinh' , GioiTinh='$sex' WHERE  MaKH = '" . $_SESSION['MaKH'] . "'";
        if ($conn->query($sql) === TRUE) {
            $msg = '<div class="css-1tj8dpi">
                    <div class="css-rac23i" style="text-align: center;">Cập nhật thành công</div>
                </div>';
            $sql = "SELECT * FROM khachhang WHERE MaKH = '" . $_SESSION['MaKH'] . "'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $info = mysqli_fetch_assoc($result);
            }
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

if (isset($_SESSION['loggedin_employee'])) {
    $sql = "SELECT * FROM nhanvien WHERE MaNV = '" . $_SESSION['MaNV'] . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result);
    }


    if (isset($_POST['update'])) {
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $sex = $_POST['sex'];

        // Chuyển đổi giới tính thành kiểu bit
        //$sexBit = ($sex === "1") ? 1 : 0;

        $sql = "UPDATE nhanvien SET HotenNV='$ho_ten', Email='$email', SDT='$sdt', NgaySinh='$ngay_sinh' , GioiTinh='$sex' WHERE  MaNV = '" . $_SESSION['MaNV'] . "'";
        if ($conn->query($sql) === TRUE) {
            $msg = '<div class="css-1tj8dpi">
                    <div class="css-rac23i" style="text-align: center;">Cập nhật thành công</div>
                </div>';
            $sql = "SELECT * FROM nhanvien WHERE MaNV = '" . $_SESSION['MaNV'] . "'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $info = mysqli_fetch_assoc($result);
            }
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

?>

<div style="background-color: #f8f8fc;">
    <div class="css-gjf6g1">
        <div class="css-z54kij">
            <div class="css-66d1qu">
                <div class="css-u0wwqg">
                    <div class="css-ov1ktg">
                        <div>
                            <div height="44" width="44" class="css-9bi3ip">
                                <picture>
                                    <source srcset="./img/icon-login.jpg" type="image/webp">
                                    <source srcset="./img/icon-login.jpg" type="image/png"><img
                                        class="lazyload css-hv3z8f" alt="" src="./img/icon-login.jpg" loading="lazy"
                                        decoding="async">
                                </picture>
                            </div>
                        </div>
                        <div class="css-tubh1u">
                            <h6 class="css-9x44fd">Tài khoản của</h6>
                            <h5 class="css-11aljab">
                                <b>
                                    <?php
                                    if (isset($_SESSION['loggedin_customer']))
                                        echo $info['HoTenKH'];
                                    elseif (isset($_SESSION['loggedin_employee']))
                                        echo $info['HoTenNV'];
                                    ?>
                                </b>
                            </h5>
                        </div>
                    </div>
                    <ul class="css-zzskb3">
                        <a class="css-11g9kr1" href="?page=personal-information">
                            <div class="css-1tj8dpi">
                                <svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                    height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                        fill="#82869E"></path>
                                </svg>
                                <div class="css-rac23i">Thông tin tài khoản</div>
                            </div>
                        </a>
                        <a class="css-11g9kr1" href="?page=oder-management">
                            <div class="css-1itrv06"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                    height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5328 3.5625C7.5328 3.14829 7.86859 2.8125 8.2828 2.8125H15.2308C15.645 2.8125 15.9808 3.14829 15.9808 3.5625V3.80501H19.201C19.6152 3.80501 19.951 4.14079 19.951 4.55501V20.4361C19.951 20.8503 19.6152 21.1861 19.201 21.1861H4.3125C3.89829 21.1861 3.5625 20.8503 3.5625 20.4361V4.55501C3.5625 4.14079 3.89829 3.80501 4.3125 3.80501H7.5328V3.5625ZM15.9808 7.53276V5.30501H18.451V19.6861H5.0625V5.30501H7.5328V7.53276C7.5328 7.94698 7.86859 8.28276 8.2828 8.28276H10.0198C10.434 8.28276 10.7698 7.94698 10.7698 7.53276C10.7698 7.30843 11.0628 6.87111 11.7568 6.87111C12.4508 6.87111 12.7438 7.30843 12.7438 7.53276C12.7438 7.94698 13.0796 8.28276 13.4938 8.28276H15.2308C15.645 8.28276 15.9808 7.94698 15.9808 7.53276ZM9.0328 4.3125V6.78276H9.41784C9.7871 5.89836 10.7889 5.37111 11.7568 5.37111C12.7247 5.37111 13.7265 5.89836 14.0957 6.78276H14.4808V4.3125H9.0328ZM15.4476 12.0333C15.7405 11.7404 15.7405 11.2655 15.4476 10.9726C15.1547 10.6797 14.6798 10.6797 14.3869 10.9726L11.0384 14.3211L9.80564 13.0883C9.51275 12.7954 9.03787 12.7954 8.74498 13.0883C8.45209 13.3812 8.45209 13.8561 8.74498 14.149L10.5081 15.9121C10.6487 16.0527 10.8395 16.1318 11.0384 16.1318C11.2373 16.1318 11.4281 16.0527 11.5688 15.9121L15.4476 12.0333Z"
                                        fill="#82869E"></path>
                                </svg>
                                <div class="css-rac23i">Quản lý đơn hàng</div>
                            </div>
                        </a>
                        <a class="css-11g9kr1" href="?page=address">
                            <div class="css-1itrv06"><svg fill="none" viewBox="0 0 24 24" size="18" class="css-9w5ue6"
                                    height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.6957 2.75C9.09299 2.75 6.35871 4.72035 6.35871 8.08696C6.35871 8.84669 6.67432 9.80604 7.22598 10.8727C7.76947 11.9236 8.50271 13.0046 9.24942 13.9876C9.99415 14.968 10.7407 15.8358 11.302 16.4592C11.4469 16.6202 11.5792 16.7646 11.6957 16.8901C11.8121 16.7646 11.9444 16.6202 12.0894 16.4592C12.6506 15.8358 13.3972 14.968 14.1419 13.9876C14.8886 13.0046 15.6219 11.9236 16.1654 10.8727C16.717 9.80604 17.0326 8.84669 17.0326 8.08696C17.0326 4.72035 14.2983 2.75 11.6957 2.75ZM11.6957 17.9783C11.1633 18.5065 11.1632 18.5064 11.163 18.5063L11.1627 18.5059L11.1615 18.5048L11.1576 18.5008L11.1432 18.4862L11.0896 18.4313C11.0432 18.3835 10.9758 18.3138 10.8905 18.2241C10.72 18.0447 10.4776 17.7854 10.1872 17.4628C9.60714 16.8185 8.83197 15.9178 8.05496 14.895C7.27993 13.8747 6.49143 12.7177 5.89362 11.5618C5.30398 10.4217 4.85871 9.20548 4.85871 8.08696C4.85871 3.74922 8.41486 1.25 11.6957 1.25C14.9765 1.25 18.5326 3.74922 18.5326 8.08696C18.5326 9.20548 18.0874 10.4217 17.4977 11.5618C16.8999 12.7177 16.1114 13.8747 15.3364 14.895C14.5594 15.9178 13.7842 16.8185 13.2041 17.4628C12.9137 17.7854 12.6713 18.0447 12.5008 18.2241C12.4155 18.3138 12.3482 18.3835 12.3017 18.4313L12.2481 18.4862L12.2338 18.5008L12.2298 18.5048L12.2287 18.5059L12.2283 18.5063C12.2282 18.5064 12.2281 18.5065 11.6957 17.9783ZM11.6957 17.9783L12.2281 18.5065C12.0873 18.6484 11.8956 18.7283 11.6957 18.7283C11.4957 18.7283 11.3041 18.6484 11.1633 18.5065L11.6957 17.9783ZM17.4472 15.2423C17.8177 15.057 18.2682 15.2072 18.4534 15.5777L20.3385 19.3479C20.9203 20.5114 20.0742 21.8805 18.7733 21.8805H4.61804C3.31712 21.8805 2.47101 20.5114 3.05279 19.3479L4.93788 15.5777C5.12313 15.2072 5.57363 15.057 5.94411 15.2423C6.3146 15.4275 6.46477 15.878 6.27952 16.2485L4.39443 20.0187C4.31132 20.1849 4.4322 20.3805 4.61804 20.3805H18.7733C18.9591 20.3805 19.08 20.1849 18.9969 20.0187L17.1118 16.2485C16.9266 15.878 17.0767 15.4275 17.4472 15.2423ZM10.7065 8.08679C10.7065 7.5405 11.1494 7.09766 11.6957 7.09766C12.2419 7.09766 12.6848 7.54051 12.6848 8.08679C12.6848 8.63307 12.2419 9.07592 11.6957 9.07592C11.1494 9.07592 10.7065 8.63307 10.7065 8.08679ZM11.6957 5.59766C10.321 5.59766 9.20654 6.71208 9.20654 8.08679C9.20654 9.4615 10.321 10.5759 11.6957 10.5759C13.0704 10.5759 14.1848 9.4615 14.1848 8.08679C14.1848 6.71208 13.0704 5.59766 11.6957 5.59766Z"
                                        fill="#82869E"></path>
                                </svg>
                                <div class="css-rac23i">Sổ địa chỉ</div>
                            </div>
                        </a><a class="css-11g9kr1">
                        <a class="css-11g9kr1" href="?page=change-password">
                            <div class="css-1itrv06"><svg fill="none" viewBox="0 0 24 24" size="18"
                                    class="noti css-9w5ue6" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.99398 13V9C5.99398 5.686 8.68298 3 12 3C12.7883 2.99961 13.569 3.15449 14.2975 3.4558C15.0259 3.75712 15.6879 4.19897 16.2456 4.75612C16.8033 5.31327 17.2458 5.97481 17.5479 6.70298C17.8499 7.43115 18.0056 8.21168 18.006 9V13C18.006 13.986 18.454 14.919 19.223 15.537L19.532 15.785C20.449 16.521 19.928 18 18.752 18H5.24798C4.07198 18 3.55098 16.521 4.46798 15.785L4.77698 15.537C5.15686 15.2322 5.46344 14.846 5.67408 14.4069C5.88472 13.9678 5.99404 13.487 5.99398 13V13Z"
                                        stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M10.5 21H13.5" stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <div class="css-rac23i">Đổi mật khẩu</div>
                            </div>
                        </a>
                        <li class="css-1jfhcvk"></li>
                    </ul>
                </div>
            </div>
            <div class="css-hveu7a">
                <div class="teko-row css-1qrgscw" style="margin-left: -8px; margin-right: -8px;">
                    <div class="teko-col teko-col-8 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                        <div class="teko-card css-1hlwznm">
                            <div class="teko-card-body css-0">
                                <div class="teko-row teko-row-space-between css-1qrgscw">
                                    <div type="title" class="css-1w9reh3">Thông tin tài khoản</div>
                                </div>
                                <form action="#" method="post">
                                    <div name="name" value="Kiều Nguyễn Thị Diễm" class="css-1umbfo7">
                                        <div class="form-input__label css-1270aei">Họ tên</div>
                                        <input name="ho_ten" class="form-input__input css-90j4a3" value="<?php
                                        if (isset($_SESSION['loggedin_customer']))
                                            echo $info['HoTenKH'];
                                        elseif (isset($_SESSION['loggedin_employee']))
                                            echo $info['HoTenNV'];
                                        ?>">
                                    </div>
                                    <div name="email" value="ntdkieu2207@gmail.com" class="css-1umbfo7">
                                        <div class="form-input__label css-1270aei">Email</div>
                                        <input name="email" class="form-input__input css-90j4a3" value="<?php
                                        if (isset($_SESSION['loggedin_customer']))
                                            echo $info['Email'];
                                        elseif (isset($_SESSION['loggedin_employee']))
                                            echo $info['Email'];
                                        ?>">
                                    </div>
                                    <div name="telephone" value="" class="css-1umbfo7">
                                        <div class="form-input__label css-1270aei">Số điện thoại</div>
                                        <input name="sdt" class="form-input__input css-90j4a3"
                                            value="<?php echo $info['SDT'] ?>">
                                    </div>
                                    <div name="dob" value="" type="date" class="css-1umbfo7">
                                        <div class="form-input__label css-1270aei">Ngày sinh</div>
                                        <input name="ngay_sinh" type="date" class="form-input__input css-90j4a3" value="<?php
                                        if (isset($_SESSION['loggedin_customer']))
                                            echo $info['NgaySinh'];
                                        elseif (isset($_SESSION['loggedin_employee']))
                                            echo $info['NgaySinh'];
                                        ?>">
                                    </div>
                                    <div name="sex" value="" class="css-1umbfo7">
                                        <div class="form-input__label css-1270aei">Giới tính</div>
                                        <label class="css-ekrzeo">
                                            <input name="sex" type="radio" value="1" <?php if ($info['GioiTinh'] === "1")
                                                echo "checked"; ?>>Nam
                                        </label>
                                        <label class="css-ekrzeo">
                                            <input name="sex" type="radio" value="0" <?php if ($info['GioiTinh'] === "0")
                                                echo "checked"; ?>>Nữ
                                        </label>
                                        <label class="css-ekrzeo">
                                            <input name="sex" type="radio" value="O" <?php if ($info['GioiTinh'] === "O")
                                                echo "checked"; ?>>Khác
                                        </label>
                                    </div>

                                    <div class="css-1ago99h">
                                        <button height="2.5rem" name="update" color="border" class="css-qpwo5p"
                                            type="submit" width="">
                                            <div type="body" name="update" class="button-text css-zuesqn"
                                                color="placeholder">Cập nhật
                                            </div>
                                            <span style="margin-left: 0px;">
                                                <div class="css-157jl91"></div>
                                            </span>
                                        </button>
                                    </div>
                                    <div>
                                        <?php
                                        if (isset($msg))
                                            echo $msg;
                                        ?>
                                    </div>
                                </form>
                                <div class="css-1x6y1s9"></div>
                            </div>
                        </div>
                    </div>
                    <div class="teko-col teko-col-4 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                        <div class="teko-card css-1hlwznm">
                            <div class="teko-card-body css-0">
                                <div class="teko-row teko-row-space-between css-1qrgscw">
                                    <div type="title" class="css-1w9reh3">Địa chỉ mặc định</div>
                                </div>
                                <div type="body" color="textSecondary" class="css-1npqwgp">Bạn chưa có địa chỉ nhận hàng
                                    mặc định. Vui lòng chọn Thêm địa chỉ nhận hàng.</div>
                                <div class="css-1veiyrs">
                                    <div width="100%" color="divider" class="css-yae08c"></div>
                                </div>
                                <a class="css-15wdjv3" color="link500" href="?page=consignee-information">
                                    <svg fill="none" viewBox="0 0 24 24" class="css-zzrru3" color="link500" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.75 4C12.75 3.58579 12.4142 3.25 12 3.25C11.5858 3.25 11.25 3.58579 11.25 4V11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H11.25V20C11.25 20.4142 11.5858 20.75 12 20.75C12.4142 20.75 12.75 20.4142 12.75 20V12.75H20C20.4142 12.75 20.75 12.4142 20.75 12C20.75 11.5858 20.4142 11.25 20 11.25H12.75V4Z"
                                            fill="#82869E"></path>
                                    </svg>
                                    <span>Thêm địa chỉ nhận hàng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>